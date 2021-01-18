<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Blade Template</title>
</head>
<body>
    Hello World
    <script type="text/javascript">
        function resolveAfter2Seconds() {
            return new Promise(resolve => {
                setTimeout(() => {
                    resolve('resolved');
                }, 2000);
            });
        }
        async function asyncCall() {
            console.log('------');
            var result = await resolveAfter2Seconds();
            console.log(result);
        }
        asyncCall();
    </script>
</body>
</html>

