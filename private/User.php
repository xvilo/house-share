<?php

Class User
{
    private $id;
    private $mobile_phone;
    private $first_name;
    private $last_name;
    private $permissions;

    public function getByMobilePhone($number)
    {
        $userData = Database::getUserDataByMobilePhone($number);
        die(var_dump($userData));
    }
}