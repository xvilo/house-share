<?php

class App
{
    public function __construct($config)
    {
        // Open DB Connection
        Database::init(
            $config['database']['host'],
            $config['database']['database'],
            $config['database']['user'],
            $config['database']['password']
        );
    }

    public function run()
    {
        die(var_dump( auth::validateToken('+31123456789', '123098') ));
    }
}
