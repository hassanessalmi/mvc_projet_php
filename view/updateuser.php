<html>
<head></head>

<body>

<form accept-charset="UTF-8" action="index.php?action=editer&conf=1&uid=<?php echo $user->getUID(); ?>" autocomplete="off" method="POST" target="_blank"><input name="username" type="text" value=<?php echo $user->getUSERNAME(); ?> /><label for="username">username</label><br /> <input name="email" type="text" value=<?php echo $user->getEMAILID(); ?> /> <label for="name">email</label><br /> <input name="country" type="text" value=<?php echo $user->getCOUNTRY(); ?> /> <label for="name">country</label><br /> <input name="age" type="text" value=<?php echo $user->getAGE(); ?> /> <label for="name">age</label>
<button type="submit" value="Submit">Submit</button>
</form>

</body>

</html>