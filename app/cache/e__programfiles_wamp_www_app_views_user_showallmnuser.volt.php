<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php foreach ($users as $user) { ?>
    id:<?php echo $user->id; ?> , name :<?php echo $user->username; ?> , email :<?php echo $user->password; ?>  <br/>
<?php } ?>
</body>
</html>