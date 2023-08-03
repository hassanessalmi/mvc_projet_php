<?php

class MyConnexion
{

    private static ?PDO $connection=NULL;
    private const  database="user";
    private const  password="";
    private const  username="root";
    private const  port="";
    private const  host="";

    /**
     * @return string
     */

    public function __construct()
    {

        $dsn = "mysql:host=".self::host.";dbname=".self::database.";port=".self::port.";charset=utf8";
        self::$connection = new PDO($dsn,self::username,self::password);

    }

    /**
     * @return PDO|null
     */
    public static function getConnection(): ?PDO
    {
        if (self::$connection==NULL) {
            new MyConnexion();
        }
        return self::$connection;
    }

    /**
     * @param PDO|null $connection
     */

    public static function close():void{
        self::$connection=null;

    }








}