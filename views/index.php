<?php $title="Home Page!"; ?>
<?php include __DIR__ . "/partials/header.php" ?>

<p style="color:gold;">Tere minu nimi on <?= $name; ?></p>
<form action="/" method="GET">
<input type="text" placeholder="name" name="name">
<input type="number" placeholder="Age" name="age">
<input type="submit" value="Get request">
</form>

<form action="/" method="POST">
<input type="text" placeholder="name" name="name">
<input type="number" placeholder="Age" name="age">
<input type="submit" value="Post request">


</form>

<?php include __DIR__ . "/partials/footer.php" ?>
