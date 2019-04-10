<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <div id="formularz">

                <h1>Obliczanie równania kwadratowego.</h1>
                <h2>Proszę podać liczby:</h2>
            
                <form action="oblicz.php" method="POST">

                    A: <label><input type="number" min="1" step="1" name="a" required></label>
                    B: <label><input type="number" step="1" name="b" required></label>
                    C: <label><input type="number" step="1" name="c" required></label>
        
                    <input type="submit" name="submit" value="Oblicz!">
                    
                </form>
            
        </div>

    </body>
</html>