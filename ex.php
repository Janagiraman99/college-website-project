<?php
$un = $_POST['un'];
$pw = $_POST['pw'];

if ($un == "Raja" && $pw == "1234")
   { echo "<h4><Font color=green>YES Login Successful</font></h4>";
   }
else
{
    echo  "<h4><font color=red>There is some mistake</font></h4>";
}

?>