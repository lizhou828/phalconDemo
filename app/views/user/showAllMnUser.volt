<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
{% for user in users %}
    id:{{user.id}} , name :{{user.username}} , email :{{user.password}}  <br/>
{% endfor %}
</body>
</html>