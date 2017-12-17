@verbatim
        <!DOCTYPE html>
<html lang="en" ng-app="Phono">
<head>
    <meta lang="de">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PhonoRight | Musikbusiness</title>
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/materialize.css">
    <link rel="stylesheet" href="../css/style.css">

    <script src="/js/jquery-3.2.1.js"></script>
    <script src="/js/materialize.js"></script>
    <script src="/js/angular.js"></script>
    <script src="/js/angular-route.js"></script>
    <script src="/js/script.js"></script>
</head>
<body>
<nav class="header">
    <div class="nav-wrapper row">
        <img class="responsive-img" src="../img/200x80.png">
        <ul class="right hide-on-med-and-down" style="padding-top: 8px;">
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Sign Up</a></li>
        </ul>
    </div>

    <div>
        <!--<i class="fa fa-search white-text" aria-hidden="true"></i>-->
        <input class="search s12 m12" type="search">
    </div>
</nav>
<br>
<br>
<br>

<div ng-view></div>

</body>
</html>

@endverbatim