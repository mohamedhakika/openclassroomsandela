<?php
    $first_name = "Juma";
    $last_name = "Hakika";

    function fullname($first, $last)
    {
        return $first. " ".$last;
    }

    function getEmail($first, $last)
    {
        $email = $first.".".$last."@openclassrooms.com";
        return strtolower($email);
    }

?>