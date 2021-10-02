<?php $title = "Home Page!"; ?>
<?php include __DIR__ . "/partials/header.php" ?>

<p style="color:gold;">Tere minu nimi on <?= $name; ?></p>
<form action="/" method="GET">
    <input type="text" placeholder="name" name="name">
    <input type="number" placeholder="Age" name="age">
    <input type="submit" value="Get request">
</form>

<form action="/?name=Rain" method="POST">
    <input type="text" placeholder="name" name="name">
    <input type="number" placeholder="Age" name="age">
    <input type="submit" value="Post request">
</form>

<form action="/upload" method="POST" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" value="upload">
</form>

<?php include __DIR__ . "/partials/footer.php" ?>