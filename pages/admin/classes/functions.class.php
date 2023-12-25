<?php

class Functions extends Db
{
    public function control_input($data)
    {
        // $data = strip_tags($data);
        $data = htmlspecialchars($data);
        // $data = htmlentities($data);
        $data = stripslashes($data); #sql injection

        return $data;
    }
}
