<?php

namespace App;

class Db
{
    protected $dbh;
    public function __construct()
    {
        $config = (include __DIR__ . '/../config.php')['db'];
        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'];
        $this->dbh = new \PDO($dsn, $config['user'], $config['password']);
    }

    public function query($query, $class)
    {
        $sth = $this->dbh->prepare($query);
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function execute($query)
    {
        $sth = $this->dbh->prepare($query);
        if ($sth->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function checkID($query)
    {
        $sth = $this->dbh->prepare($query);
        $sth->execute();
        return $sth->fetchColumn();
    }
}