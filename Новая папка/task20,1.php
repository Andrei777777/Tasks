<?php

if (isset($_POST['submit'])) {
    
    if (!empty($_POST['check_list'])) {

        $checkedCount = count($_POST['check_list']);
        $name = $_POST['username'];
        echo "{$name}  's favourite colors are  {$checkedCount}  option(s): <br/>";

        foreach ($_POST['check_list'] as $selected) {
            echo "<p> {$selected} </p>";
        }
    } else {
        echo "<b>Please Select Atleast One Option.</b>";
    }
}

