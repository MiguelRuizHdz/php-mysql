<html>
    <!-- Autor: Miguel Angel Ruiz Hernández -->
    <head>
        <title>Alta de Departamento</title>
        <style>
            p {
                font-weight: bold;
            }
        </style>
    </head>
    <body align="center">
        <h1>Departamentos</h1>

        <h2>Formulario</h2>
        
        <form name="form2" action="con1.php" method="post">
            <p>
                Nombre del Departamento
                <br>
                <input type="text" name="nombre">
            </p>
            <p>
                Titular
                <br>
                <input type="text" name="titula">
            </p>
            <p>
                Edificio
                <br>
                <input type="text" name="edificio">
            </p>
            <p>
                Piso
                <br>
                <input type="text" name="piso">
            </p>
            <p>
                Correo
                <br>
                <input type="email" name="correo" required>
            </p>
            <p>
                Telefono
                <br>
                <input type="tel" name="telefono" required>
            </p>
            <input type="submit" name="b3" value="Enviar">
        </form>

        <table align="center">
            <tr>
                <td>
                    <form name="Formulario3" action="form3.php">
                        <input type="submit" name="b3" value="Regresar">
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>