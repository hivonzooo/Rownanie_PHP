<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <div id="formularz">

                <h1>Wynik to: </h1>

        <?php
            if(isset($_POST["a"])){$A = $_POST['a'];}
            if(isset($_POST["a"])){$B = $_POST['b'];}
            if(isset($_POST["b"])){$C = $_POST['c'];}
            
            $D = $B*$B-4*$A*$C;

                if ($D > 0) {
                    $x1 = (-$B-sqrt($D))/2*$A;
                    $x2 = (-$B-sqrt($D))/2*$A;
                    
                    print ("x1=$x1, x2=$x2");
                    print ("<br>Równanie ma dwa pierwiastki");
                }

                else {
                    if ($D == 0) {
                    $x1 = -$B/(2*$A);
                    
                    print ("x1=$x1");
                    print ("<br>Równanie ma jeden pierwiastek");
                    }

                    else {
                        print ("<br>Równanie nie ma pierwiastków");
                    }
                }
        ?>
        <a href="index.php"><br>Powrót do strony głównej</a>
        </div>
    </body>
</html>