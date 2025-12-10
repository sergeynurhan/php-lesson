<?php

class Connection
{
    public string $servername;
    public string $username;
    public ?string $password;
    public ?string $db;

    public object $connection;

    public function __construct(
        string $servername,
        string $username,
        ?string $password = null,
        ?string $db = null
    ) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->db = $db;
    }

    /**
     * @return self
     */
    public function connect(): self
    {
        $connection = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->db
        );

        if ($connection->connect_error) {
            die("Connection error " . $connection->connect_error);
        }

        $this->connection = $connection;
        return $this;
    }

    /**
     * @param string $dbName
     * @return self
     */
    public function createDatabase(): self
    {
        if (! $this->db) {
            $query = "CREATE DATABASE IF NOT EXISTS {$this->db}";
            if (! $this->connection->query($query)) {
                die('error');
            }
    
            $this->connection->query($query);
        }

        return $this;
    }

    /**
     * @param string $name
     * @param array $columns
     * @return self
     */
    public function createTable(string $name, array $columns): self
    {
        $query = array();
        foreach ($columns as $key => $value) {
            $query[] = $key . ' ' . $value;
        }

        $result = implode(",", $query);
        $query = "CREATE TABLE IF NOT EXISTS {$name}" . "(" . $result . ");";
        $this->connection->query($query);

        return $this;
    }

    /**
     * @param string $table
     * @param array $values
     * @return self
     */
    public function insert(string $table, array $values): self
    {
        $columns = array();
        $insertValues = array();

        foreach ($values as $key => $value) {
            $columns[] = $key;
            $insertValues[] = '"' . $value . '"';
        }

        $keyResult = implode(",", $columns);
        $valueResult = implode(",", $insertValues);

        $query = "INSERT INTO {$table}" . "(" . $keyResult . ")" . "VALUES" . "(" . $valueResult . ");";
        $this->connection->query($query);

        return $this;
    }

    public function dropTable(string $table)
    {
        $query = "DROP TABLE {$table}";
        $this->connection->query($query);

        return $this;
    }
}