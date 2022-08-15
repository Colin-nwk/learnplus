<?php

class Database
{
    private function connect()
    {
        $str = DBDRIVER . ":hostname=" . DBHOST . ";dbname=" . DBNAME;
        return new PDO($str, DBUSER, DBPASS);
    }

    public function query(string $query, array $data = [], string $type = 'object')
    {
        $con = $this->connect();
        // var_dump($con);

        $stmt = $con->prepare($query);

        $result_type = PDO::FETCH_OBJ;
        if ($type != 'object') {
            $result_type = PDO::FETCH_ASSOC;
        }

        if ($stmt) {
            $check = $stmt->execute($data);

            if ($check) {
                $result = $stmt->fetchAll($result_type);
            }

            if (is_array($result) && count($result) > 0) {
                return $result;
            }
        }

        return false;
    }

    /***
     * 14
     */
    public function create_tables()
    {
        // users table
        $query = "
                    CREATE TABLE IF NOT EXISTS `users` (
                    `id` int(11) NOT NULL AUTO_INCREMENT,
                    `email` varchar(100) NOT NULL,
                    `firstname` varchar(30) NOT NULL,
                    `lastname` varchar(30) NOT NULL,
                    `role` varchar(20) NOT NULL,
                    `password` varchar(255) NOT NULL,
                    `date` datetime DEFAULT NULL,
                    PRIMARY KEY (`id`),
                    KEY `email` (`email`),
                    KEY `date` (`date`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
        ";

        $this->query($query);
    }
}