<?php



interface IDaoUser
{

    public function getAllUserDetails():array;

    public function getUserByID(int $uid):?User;


    public function adduser(User $u):?User;

    public function deleteuser(User $u):void;


    public function UpdateUser(User $u):Void;

}