<html>
    <head>
        <title>Formularios</title>
    </head>
    <body>
        <h1>Practica 5</h1>
        <!-- Autor: Miguel Angel Ruiz Hernández -->
        <table>
            <tr>
                <td>
                    <h3>Metodo GET</h3>
                    <br>
                    <form action="practica5_1.php" method="get" >
                        Nombre
                        <input type="text" name="nombre">
                        Edad
                        <input type="text" name="edad">
                        <input type="submit" value="Guardar">
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Metodo POST</h3>
                    <br>
                    <form action="practica5_2.php" method="post">
                        Nombre
                        <input type="text" name="nombre">
                        Edad
                        <input type="text" name="edad">
                        <input type="submit" value="Guardar">
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>