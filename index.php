<?php

spl_autoload_register(function ($class) {
    @include "./classes/" . $class . '.php';
});
spl_autoload_register(function ($class) {
    @include "./controller/" . $class . '.php';
});

spl_autoload_register(function ($class) {
    @include "./model/interfaces/" . $class . '.php';
});
spl_autoload_register(function ($class) {
    @include "./model/dao/" . $class . '.php';
});
spl_autoload_register(function ($class) {
    @include "./model/factory/" . $class . '.php';
});

$daouser = FactoryDao::getImpl('user');
$controller = new Controller($daouser);
	


if (isset($_GET['action']) && $_GET['action']=="afficher")
		{
			$controller->afficher();
		}
		else if(isset($_GET['action']) && $_GET['action']=="add")
		{
			$controller->add();
		}else if(isset($_GET['action']) && $_GET['action']=="supp"){

				$controller->supp();

		}else if(isset($_GET['action']) && $_GET['action']=="editer"){

				$controller->Editer();

		}
?>