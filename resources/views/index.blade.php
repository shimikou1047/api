<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Blade Template</title>
</head>
<body>
    <form action="/form" method='post'>
    	@csrf
        <input type="text" name="name" value="">
        <input type="text" name="password" value="">
        <input type="submit" name="submit">
    </form>
</body>
</html>

