<?php 
	function loadEnv($file = __DIR__ . '/.env') {
	    if (!file_exists($file)) {
	        throw new Exception(".env file not found");
	    }

	    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	    foreach ($lines as $line) {
	        if (strpos(trim($line), '#') === 0) continue; // Ignorar comentarios
	        list($key, $value) = explode('=', $line, 2);
	        putenv(trim($key) . '=' . trim($value));
	    }
}
?>