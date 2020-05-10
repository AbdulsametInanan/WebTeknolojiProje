
<html lang="tr">
    <head>
        <title></title>
    </head>
    <body>
         <table width="500" height="300">
             <tr>
                 <td width="200"><b>Adınız:</td>
                 <td><?php echo($_POST["username"]);?></td>
             </tr>
             <tr>
                 <td width="200"><b>Soyadınız:</td>
                 <td><?php echo($_POST["usersurname"]);?></td>
             </tr>
             <tr>
                 <td><b>E-mailiniz:</td>
                 <td><?php echo($_POST["email"]);?></td>
             </tr>
             <tr>
                 <td><b>Cinsiyetiniz:</td>
                 <td><?php echo($_POST["optradio"]);?></td>
             </tr>
             <td><b>Yaşadığınız şehir:</td>
                 <td><?php echo($_POST["sellist1"]);?></td>
             </tr>
             <tr>
                 <td><b>Sitem nasıl dostum?</td>
                 <td><?php echo($_POST["option1"]);?></td>
             </tr>
             <td><b>Yorumunuz:</td>
                 <td><?php echo($_POST["yorum"]);?></td>
             </tr>

</table>      
    </body>
</html>