<?php
//create the user class to retrieve value from database.
include_once("model/user.php");

class implUserDao implements IDaoUser {
public function getAllUserDetails():array{


 
try {
    $dbConnection = MyConnexion::getConnection();
$dbConnection->exec("set names utf8");
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully.<br>"; 

$stmt = $dbConnection->prepare('SELECT * FROM `users` ');
$stmt->execute();

$Count = $stmt->rowCount(); 
echo " Total Records Count : $Count .<br>" ;

if ($Count  > 0){
$stmt->setFetchMode(PDO::FETCH_CLASS, "user");
return $obj = $stmt->fetchAll(); 

}

}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
}

public function getUserByID($uid): ?User{
$users = $this->getAllUserDetails();
    try {
        $dbConnection = MyConnexion::getConnection();
        $dbConnection->exec("set names utf8");
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully.<br>";

        $stmt = $dbConnection->prepare('SELECT * FROM `users` where uid=:uid  ');
        $stmt->bindValue('uid', $uid);
        $stmt->execute();

        $Count = $stmt->rowCount();


        if ($Count  > 0){
            $stmt->setFetchMode(PDO::FETCH_CLASS, "user");
            return $obj = $stmt->fetch();

        }


    }
    catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    return null;
}




	public function adduser(User $u): ?User{


try { 
$dbConnection  = MyConnexion::getConnection();
$dbConnection->exec("set names utf8");
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully.<br>"; 

$stmt = $dbConnection->prepare('INSERT INTO users (UID,USERNAME, EMAILID, COUNTRY, AGE) VALUES (:uid,:username,:email,:country,:age) ');





$stmt->execute(array(
                                    ':uid' => 'NULL',
                                    ':username' => $u->getUSERNAME(),
                                    ':email' => $u->getEMAILID(),
                                    ':country' => $u->getCOUNTRY(),
                                    ':age' => $u->getAGE()));
$id=$dbConnection->lastInsertId();
    $u->setUID($id);
    return $u;

echo "Utilisateur est ajouté ";
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
        return null;
	}

	public function deleteuser(User $u):void{


try { 
$dbConnection  = MyConnexion::getConnection();
$dbConnection->exec("set names utf8");
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully.<br>"; 

$stmt = $dbConnection->prepare('delete from users where UID=:uid');





$stmt->execute(array(':uid' =>$u->getUID()));


echo "Utilisateur est modifié ";
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

	}


public function UpdateUser(User $u):void{


try {
    $dbConnection  = MyConnexion::getConnection();
$dbConnection->exec("set names utf8");
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully.<br>"; 

$stmt = $dbConnection->prepare('UPDATE users SET USERNAME=:username, EMAILID=:email,COUNTRY=:country,AGE=:age WHERE UID=:uid');




    $stmt->execute(array(
        ':uid' => $u->getUID(),
        ':username' => $u->getUSERNAME(),
        ':email' => $u->getEMAILID(),
        ':country' => $u->getCOUNTRY(),
        ':age' => $u->getAGE()));

echo "Utilisateur est modifié ";
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

	}
}

?>