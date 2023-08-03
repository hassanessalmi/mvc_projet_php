<?php

class user{
 public $UID ;
    public $USERNAME ;
    public $EMAILID ;
    public $AGE ;
    public $COUNTRY ;
    public function __construct()
    {

        $nbr = func_num_args();
        $args = func_get_args();

        switch ($nbr) {
            case 5:
                $this->UID = $args[0];
                $this->USERNAME = $args[1];
                $this->EMAILID = $args[2];
                $this->AGE = $args[3];
                $this->COUNTRY = $args[4];
                break;
            case 4:
                $this->UID = $args[0];
                $this->USERNAME = $args[1];
                $this->EMAILID = $args[2];
                $this->AGE = $args[3];

                break;
            case 3:
                ;
                $this->UID = $args[0];
                $this->USERNAME = $args[1];
                $this->EMAILID = $args[2];

                break;
            case 2:
                $this->UID = $args[0];
                $this->USERNAME = $args[1];

                break;
            case 1:
                $this->UID = $args[0];

                break;
        }
    }

    /**
     * @return mixed
     */
    public function getUID()
    {
        return $this->UID;
    }

    /**
     * @param mixed $UID
     */
    public function setUID($UID): void
    {
        $this->UID = $UID;
    }

    /**
     * @return mixed
     */
    public function getUSERNAME()
    {
        return $this->USERNAME;
    }

    /**
     * @param mixed $USERNAME
     */
    public function setUSERNAME($USERNAME): void
    {
        $this->USERNAME = $USERNAME;
    }

    /**
     * @return mixed
     */
        public function getEMAILID()
        {
            return $this->EMAILID;
        }

    /**
     * @param mixed $EMAILID
     */
    public function setEMAILID($EMAILID): void
    {
        $this->EMAILID = $EMAILID;
    }

    /**
     * @return mixed
     */
    public function getAGE()
    {
        return $this->AGE;
    }

    /**
     * @param mixed $AGE
     */
    public function setAGE($AGE): void
    {
        $this->AGE = $AGE;
    }

    /**
     * @return mixed
     */
    public function getCOUNTRY()
    {
        return $this->COUNTRY;
    }

    /**
     * @param mixed $COUNTRY
     */
    public function setCOUNTRY($COUNTRY): void
    {
        $this->COUNTRY = $COUNTRY;
    }//get the username

 
}

?>