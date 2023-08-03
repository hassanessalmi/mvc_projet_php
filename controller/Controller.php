<?php
include_once("implDao/implDao.php");

class Controller {
	private IDaoUser $implDao;
	
	public function __construct(IDaoUser $daouser)
    {
        $this->implDao=$daouser;


    }

    /**
     * @return IDaoUser
     */
    public function getimplDao(): IDaoUser
    {
        return $this->implDao;
    }

    /**
     * @param IDaoUser $implDao
     */
    public function setimplDao(IDaoUser $implDao): void
    {
        $this->implDao = $implDao;
    }
	
	public function afficher()
	{
		if (!isset($_GET['uid']))
		{
			// no special book is requested, we'll show a list of all available books
			$users = $this->implDao->getAllUserDetails();
			include 'view/userlist.php';
		}
		else
		{
			// show the requested book
			$user = $this->implDao->getUserByID($_GET['uid']);
			include 'view/viewuser.php';
		}
	}


	public function add()
	{
		if (isset($_POST['username']))
		{
            $u=new User(0,$_POST['username'],$_POST['email'],$_POST['age'],$_POST['country']);
			$this->implDao->adduser($u);
			echo 'bravo ';
			// no special book is requested, we'll show a list of all available books
			// $this->implDao->addUser($_POST['username'].....);
			
		}
		else
		{
			// show the requested book
			
			include 'view/formadduser.php';
		}
	}

	public function supp()
	{
		if (isset($_GET['uid']))
		{
            $u=new User($_GET['uid']);
			$this->implDao->deleteuser($u);

			header('Location: index.php?action=afficher');
		}
		else
		{
			// show the requested book
			
			header('Location: index.php?action=afficher'); 
		}

}
		public function Editer()
	{
		if (isset($_GET['uid']) && !isset($_GET['conf'])  )
		{
			$user = $this->implDao->getUserByID($_GET['uid']);
			include 'view/updateuser.php';
			// no special book is requested, we'll show a list of all available books
			// $this->implDao->addUser($_POST['username'].....);
			
		}
		else if (isset($_GET['uid']) && isset($_GET['conf'])  )
		{
            $u = new User($_GET['uid'],$_POST['username'],$_POST['email'],$_POST['age'],$_POST['country']);
           var_dump($u);
			$user = $this->implDao->UpdateUser($u);
			header('Location: index.php?action=afficher');
		}
	}
	




}

?>