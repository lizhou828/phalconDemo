<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
{% for user in users %}
    id:{{user.id}} , name :{{user.name}} , email :{{user.email}}  <br/>
{% endfor %}
</body>
</html>