<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');

include("conexion.php"); // Cargar conexión PDO

if (!isset($pdo)) {
    echo json_encode(["success" => false, "error" => "Error: No se pudo conectar a la base de datos"]);
    exit;
}

// Obtener datos del formulario
$type_CC = $_POST['type_id'] ?? null;
$cc = $_POST['identif'] ?? null;
$f_name = $_POST['f_name'] ?? null;
$s_name = $_POST['s_name'] ?? null;
$f_lastname = $_POST['f_lastname'] ?? null;
$s_lastname = $_POST['s_lastname'] ?? null;
$email = $_POST['email'] ?? null;
$phone = $_POST['phone'] ?? null;
$country = $_POST['country'] ?? null;
$city = $_POST['city'] ?? null;
$company = $_POST['company'] ?? null;
$position = $_POST['position'] ?? null;
$civil = $_POST['civil'] ?? null;
$birthdate = $_POST['birthdate'] ?? null;

if (!$cc || !$f_name || !$f_lastname) {
    echo json_encode(["success" => false, "error" => "CC, primer nombre y primer apellido son obligatorios"]);
    exit;
}

try {
    // 1️⃣ VALIDAR SI EL EMPLEADO YA EXISTE
    $stmt = $pdo->prepare("SELECT id FROM t_employee WHERE CC = :CC");
    $stmt->execute([':CC' => $cc]);
    $existingEmployee = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($existingEmployee) {
        echo json_encode(["success" => false, "error" => "Ya existe un usuario con este número de identificación"]);
        exit;
    }

    // 2️⃣ INSERTAR EN `t_employee`
    $sql = "INSERT INTO t_employee (type_CC, CC, first_Name, second_Name, first_LastName, second_LastName, birthdate, civil, email, phone, country, city, company, position)
            VALUES (:type_CC, :CC, :first_Name, :second_Name, :first_LastName, :second_LastName, :birthdate, :civil, :email, :phone, :country, :city, :company, :position)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':type_CC'        => $type_CC,
        ':CC'             => $cc,
        ':first_Name'     => $f_name,
        ':second_Name'    => $s_name,
        ':first_LastName' => $f_lastname,
        ':second_LastName'=> $s_lastname,
        ':birthdate'       => $birthdate,
        ':civil'       => $civil,
        ':email'          => $email,
        ':phone'          => $phone,
        ':country'        => $country,
        ':city'           => $city,
        ':company'        => $company,
        ':position'       => $position
    ]);

    // Obtener el ID insertado
    $employee_id = $pdo->lastInsertId();

    if (!empty($_FILES)) {
        foreach ($_FILES as $key => $file) {
            if ($file['error'] === UPLOAD_ERR_OK) {
                $fileData = file_get_contents($file['tmp_name']);
                $fileType = $file['type'];
                $fileName = $file['name'];

                // Insertar en la base de datos
                $sql = "INSERT INTO t_files (id_t_employee, name_file, type_file, files) 
                        VALUES (:id_t_employee, :name_file, :type_file, :files)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':id_t_employee' => $employee_id,
                    ':name_file' => $fileName,
                    ':type_file' => $fileType,
                    ':files' => $fileData
                ]);
            }
        }
    }

    // 3️⃣ GENERAR `user` PARA `t_login`
    $userOptions = [
        strtolower($f_name . '.' . $f_lastname),
        (!empty($s_name) ? strtolower($f_name . '.' . substr($s_name, 0, 1)) : null),
        (!empty($s_lastname) ? strtolower($f_lastname . '.' . substr($s_lastname, 0, 1)) : null)
    ];
    
    $username = null;
    foreach ($userOptions as $option) {
        if ($option) {
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM t_login WHERE user = :user");
            $stmt->execute([':user' => $option]);
            if ($stmt->fetchColumn() == 0) {
                $username = $option;
                break;
            }
        }
    }
    
    // Si todos los intentos fallan, agregar un sufijo incremental
    if (!$username) {
        $baseUsername = strtolower($f_name . '.' . $f_lastname);
        $counter = 1;
        do {
            $newUsername = $baseUsername . $counter;
            $stmt->execute([':user' => $newUsername]);
            $exists = $stmt->fetchColumn();
            if ($exists == 0) {
                $username = $newUsername;
                break;
            }
            $counter++;
        } while (true);
    }

    // 4️⃣ GENERAR CONTRASEÑA
    $password = 'z' . $cc . 'Z@!$';
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT); // Hash para mayor seguridad

    // 5️⃣ INSERTAR EN `t_login`
    $sql = "INSERT INTO t_login (id_t_employee, user, password) VALUES (:id_t_employee, :user, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id_t_employee' => $employee_id,
        ':user'          => $username,
        ':password'      => $hashedPassword
    ]);

    echo json_encode(["success" => true, "message" => "Registro exitoso", "user" => $username]);
} catch (PDOException $e) {
    echo json_encode(["success" => false, "error" => $e->getMessage()]);
}
?>
