<!doctype html>
<html class="fixed">

<head>

	<title>HALAMAN ERROR</title>

</head>

<body>


	<?php
	echo '<pre>';
	echo 'Pesan error: <br>';
	print_r($data->getMessage());

	echo '<br><br>========= Penjelasan ========= <br><br>';
	$no = 0;
	foreach ($data->getTrace() as $penjelasan) {
		$file_error = $penjelasan['file'];
		if (strpos($file_error, "aplikasi\control") !== false || strpos($file_error, "aplikasi\model") !== false || strpos($file_error, "aplikasi\views") !== false) {
			$no++;
			echo $no . ': ' . $penjelasan['file'] . ' di line: ' . $penjelasan['line'] . '<br>';
		}
	}
	echo '</pre>';
	?>


</body>

</html>