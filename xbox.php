<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catalogo</title>
    <link rel="stylesheet" href="css/estilos.css">
    <style type="text/css">
    .zoom{
        transition: width 2s, height 2s, transform 2s;
        -moz-transition: width 2s, height 2s, -moz-transform 2s;
        -webkit-transition: width 2s, height 2s, -webkit-transform 2s;
        -o-transition: width 2s, height 2s,-o-transform 2s;
    }
    .zoom:hover{
        transform : scale(1.3);
        -moz-transform : scale(1.3);  
        -webkit-transform : scale(1.3); 
        -o-transform : scale(1.3);        
    }
    .general{
    margin: auto;
    margin-top:50px;
    width: 1300px;
    background-color:rgba(30,152,60,0.5);
    }
</style>
</head>
</head>
<body>
    <div class="general"> 
        <div class="toggle" style='text-align:center;'>
            <span><h1><font color="#ADFF2F"> JUEGOS DE XBOX </font></h1></span>
        </div>
        <table border="0" align="center">
            <tr>
                <td height="50"></td>  
            </tr>
        </table>
        <div class="toggle" style='text-align:center;'>
            <span><h2><font color="#ADFF2F"> JUEGOS EXCLUSIVOS </font></h2></span>
        </div>
        <table border="0" align="center">
            <tr>
                <td height="10"></td>  
            </tr>
            <tr>
                <td width="100"></td>
                <td><a href="#"><img class="zoom" src="img/xbox1.jpg" /></a></td>
                <td width="20"></td>
                <td><a href="#"><img class="zoom" src="img/xbox2.jpg" /></a></td>
                <td width="20"></td>
                <td><a href="#"><img class="zoom" src="img/xbox3.jpg" /></a></td>
                <td width="20"></td>
                <td><a href="#"><img class="zoom" src="img/xbox4.jpg" /></a></td>
                <td width="20"></td>
                <td><a href="#"><img class="zoom" src="img/xbox5.jpg" /></a></td>
            </tr>
            <tr>
                <td height="10"></td>  
            </tr>
        </table>
        <div class="toggle" style='text-align:center;'>
            <span><h2><font color="#ADFF2F"> JUEGOS MULTICONSOLA </font></h2></span>
        </div>
        <table border="0" align="center">
            <tr>
                <td height="10"></td>  
            </tr>
            <tr>
                <td width="100"></td>
                <td><a href="#"><img class="zoom" src="img/xbox6.jpg" /></a></td>
                <td width="20"></td>
                <td><a href="#"><img class="zoom" src="img/xbox7.jpg" /></a></td>
                <td width="20"></td>
                <td><a href="#"><img class="zoom" src="img/xbox8.jpg" /></a></td>
                <td width="20"></td>
                <td><a href="#"><img class="zoom" src="img/xbox9.jpg" /></a></td>
                <td width="20"></td>
                <td><a href="#"><img class="zoom" src="img/xbox10.jpg" /></a></td>
            </tr>
            <tr>
                <td height="10"></td>  
            </tr>
            <tr>
                <td><a href="catalogo.php"><img src="img/volver.png" /></a></td>
            </tr>
            <tr>
                <td height="50"></td>  
            </tr>
        </table>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>    
    <script src="js/main.js"></script>
</body>
</html>