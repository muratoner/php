<?php
    $ids = $_GET["id"];
    print_r($_GET);
?>

<form>
    <input type="checkbox" name="id[]" value="1" />Kayıt 1
    <input type="checkbox" name="id[]" value="2" />Kayıt 2
    <input type="checkbox" name="id[]" value="3" />Kayıt 3
    <input type="checkbox" name="id[]" value="4" />Kayıt 4

    <input type="submit" value="Submit" />
</form>