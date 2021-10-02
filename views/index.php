<?php $title="Home page!"; ?>
<?php include __DIR__ . "/partials/header.php" ?>
Home Page! Hi my name is <?=$name;?>
<form action="/" method="GET">
    <input type="text" placeholder="Name" name="name">
    <input type="number" placeholder="Age" name="age">
    <input type="submit" value="Get request">
</form>
<form action="/?name=Kaspar&color=green" method="POST">
    <input type="text" placeholder="Name" name="name">
    <input type="number" placeholder="Age" name="age">
    <input type="submit" value="POST request">
</form>
<form action="/upload" method="POST" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" value="upload">
</form>
<img src="/287.jfif">
<?php include __DIR__ . "/partials/footer.php" ?>