<!DOCTYPE html>
<html>
<head>
    <title>Security Form</title>
</head>
<body>

<h1>Security Form</h1>

<form action="/submit" method="post">

    <?= csrf_field() ?>

    <label>Enter Your Name:</label>
    <input type="text" name="name">

    <button type="submit">Submit</button>

</form>

</body>
</html>