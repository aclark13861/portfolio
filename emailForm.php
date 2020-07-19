<?php

if($_POST["message"]) {

mail("aclark13861@gmail.com", "Here is the subject line",

$_POST["Message"]. "From:");

}

?>


<form method="post" action="emailForm.php">
    <textarea name="message"></textarea>
    <input type="submit">
</form>