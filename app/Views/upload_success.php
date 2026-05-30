<!DOCTYPE html>
<html>
<head>
    <title>Upload Success</title>
</head>
<body>

<h2>Upload Successful</h2>

<p>File Name: <?= esc($filename) ?></p>

<img src="<?= base_url('uploads/' . $filename) ?>" width="300">

</body>
</html>