<?php



class FactoryDao{


public  static ?array $instances=[];

   private  function __construct(string $DAOname)
   {


    }

    public static function getImpl(string $name)
    {
        $name=ucfirst($name);
        $name = 'impl' . $name . 'DAO';
        if(!array_key_exists($name,self::$instances)){
            self::$instances[$name]= new $name();
        }
        return self::$instances[$name];
    }

    /**
     * @return IPersonneDAO
     */






}










