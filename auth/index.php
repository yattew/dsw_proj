<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/index.css">
    <title>Login | MiniKiosk</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
</head>

<body>
    <div id="container">
        <h2>MiniKiosk</h2>
        <div id="form-wrapper">
            <h3>LOGIN</h3>
            <!-- Temporarily changed method to GET to avoid reload prompts in browser -->
            <form action="#" method="GET">
                <input type="number" placeholder="Enrolment Number" name="enrol" id="enrol">
                <input type="password" placeholder="Password" name="pass" id="pass">
                <div><input type="submit" value="Login"></div>
            </form>
        </div>
    </div>
</body>

</html>