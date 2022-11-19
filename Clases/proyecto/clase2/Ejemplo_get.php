<html>
    <!-- Autor: Miguel Angel Ruiz Hernández -->
    <head>
        <title>Ejemplo Get</title>
    </head>
    <body>
    
        <?php
            if ($_GET) {
                echo "El formulario se ejecutó con éxito<br><br>";
                echo "<pre>";
                print_r($_GET);
                echo "</pre>";
            }
        ?>

        <form method="get" action="">
            <p>
                Dime cuál es tu nombre:
                <input type="text" name="nombre">
            </p>
            <p>
                Dime como se llama tu ciudad:
                <input type="text" name="ciudad">
            </p>
            <p>
                ¿En que año naciste?
                <select name="anioNacimiento" id="">
                    <option value="null">Selecciona tu año</option>
                    <?php
                        $anios = date("Y");
                        while($anios >= 1920)
                        {
                            ?>
                            <option value="<?= $anios; ?>"><?= $anios; ?></option>
                            <?php
                            $anios--;
                        }
                    ?>
                </select>
            </p>
            <p><input type="submit" value="Validar"></p>
        </form>

    </body>

</html>