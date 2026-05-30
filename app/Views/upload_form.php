<!DOCTYPE html>
<html>
<head>
    <title>Upload Image</title>
</head>
<body>

<h2>Image Upload</h2>

<?php if (isset($errors)): ?>
    <?php foreach ($errors as $error): ?>
        <p><?= esc($error) ?></p>
    <?php endforeach ?>
<?php endif ?>

<form action="<?= base_url('upload') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <input type="file" name="userfile">
    <button type="submit">Upload</button>
</form>

</body>
</html>