<?php

class Database
{
    /**
     * @var PDO The database connection.
     */
    static private $db;

    /**
     * @param $host
     * @param $databaseName
     * @param $user
     * @param $password
     */
    static public function init($host, $databaseName, $user, $password)
    {
        try {
            self::$db = new PDO("mysql:host={$host};dbname={$databaseName};charset=utf8mb4", $user, $password);
        } catch(PDOException $e) {
            error_log($e->getMessage());
            die("A database error was encountered -> " . $e->getMessage() );
        }
    }

    /**
     * Generates query from array
     * @param $params
     * @return string
     */
    static private function getQueryFromParams($params)
    {
        $count = 0;
        $query = '';

        foreach ($params as $key => $value) {
            if($count > 0){
                $query .= " AND";
            }
            $query .= sprintf(' `%s` = :%s', $key, $key);
        }

        return $query;
    }

    /**
     * @param $id int The token ID
     * @param $data array key => value pairs
     */
    static public function updateLoginToken($id, $params, $limit = '', $fetchStyle = PDO::FETCH_ASSOC)
    {
        $queryParams = self::getQueryFromParams($params);
        $query = "UPDATE user_login_tokens SET {$queryParams} WHERE `user_id`=:id";

        $stmt = self::$db->prepare($query);

        foreach ($params as $key => $value) {
            $stmt->bindValue(':'.$key, $value);
        }

        $stmt->bindValue(":id", $id);

        die(var_dump($stmt->execute())) ;
    }

    static public function getUserDataByMobilePhone(){
        
    }
}
