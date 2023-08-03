<html>
<head>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
	<div class="row">
<div class="col-sm-6">
						<h2>Manage <b>User</b></h2>
					</div>
					</div>
<table class="table table-striped">
	<tr><th scope="col">Email</td><th scope="col">Age</th><th scope="col">delete</th><th scope="col">Update</th></tr>
	<?php 

		foreach ($users as $username => $user)
		{
			echo '<tr><td scope="row"><a href="index.php?action=afficher&uid='.$user->getUID().'">'.$user->getEMAILID().'</a></td><td>'.$user->getAGE().'</td>
<td scope="row"><a href="index.php?action=supp&uid='.$user->getUID().'">Supprimer</a></td>

<td scope="row"><a href="index.php?action=editer&uid='.$user->getUID().'">Editer</a></td>
			</tr>';
		}

	?>
</table>
<a href="index.php?action=add" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Ajouter </a>
</body>
</html>