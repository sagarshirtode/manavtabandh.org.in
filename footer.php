<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manavtabandh</title>
    <style>
        .footer{
            width: 100%;
            height: 50px;
           /* Created with https://www.css-gradient.com */
background: #AAE0EF;
background: -webkit-linear-gradient(top left, #AAE0EF, #5793DB);
background: -moz-linear-gradient(top left, #AAE0EF, #5793DB);
background: linear-gradient(to bottom right, #AAE0EF, #5793DB);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: row;
        }

.footer .logo{
    margin-left: 10px;
}
.footer .copyright{
    margin-right: 10px;
}
.footer .tab a{
    text-decoration: none;
    color: white;
    margin-right: 15px;
    border: 1px solid black;
    padding: 5px;
    border-radius: 5px;
}
.footer .tab a:hover{
    padding: 8px;
    border-radius: 3px;
    background-color: #8EC5FC;
    background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);

}
.logo img{
    height: 48px;
    width: 80px;
}
    </style>
</head>
<body>
<div class="footer">
    <div class="logo">
        <img src="./assets/images/logo.png" alt="">
    </div>
    <div class="tab">
        <a href="./index.php">Home</a>
        <a href="./gallary.php">Gallary</a>
        <a href="./contact.php">Contact</a>
    </div>
    <div class="copyright">
    <p>© 2022 manavtabandh.org.in</p>
    </div>
</div>
</body>
</html>
