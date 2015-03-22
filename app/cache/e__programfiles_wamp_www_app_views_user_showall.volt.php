<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php foreach ($users as $user) { ?>
    id:<?php echo $user->id; ?> , name :<?php echo $user->name; ?> , email :<?php echo $user->email; ?>  <br/>
<?php } ?>
</body>
</html>