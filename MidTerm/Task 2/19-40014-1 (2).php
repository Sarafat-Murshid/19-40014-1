<html>
    <head>
    <title>NAMTA</title>
    </head>
    <body>
        <form action="namta.php" method="post">
            <table border="2" align="center">
                <tr>
                    <td>namta_number</td>
                    <td><input type="text" name="namta_number"></td>
                    
                </tr>
                <tr>
                    <td>end_number</td>
                    <td><input type="text" name="end_number"></td>
                    
                </tr>
                <tr>

        <td colspan="2" align="center"><input type="submit" name="btn" value="click"></td>
    </tr>
    <tr>

        <td colspan="2">

             <?php
            if(isset($_POST['btn']))
                {
                 $n = $_POST['namta_number'];

                 for($i = 1; $i <= $_POST['end_number']; $i++){
                    echo "$n * $i = " . ($i * $n) . "<br />";
                 }
                 }
            ?>
        </td>
    </tr>
                
                
            </table>
        </form>
    </body>
</html>