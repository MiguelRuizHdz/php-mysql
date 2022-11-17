<html>
    <!-- Autor: Miguel Angel Ruiz Hernández -->
    <head>
        <title>Alta de empleados</title>
    </head>
    <body>
        <h1>Alta de empleados</h1>
        
        <form name="form2" action="con1.php" method="post">
            <p>
                Nombre
                <input type="text" name="nombre">
            </p>
            <p>
                Apellido paterno
                <input type="text" name="apellidoP">
            </p>
            <p>
                Apellido materno
                <input type="text" name="apellidoM">
            </p>
            <p>
                Fecha de nacimiento
                <input type="date" name="fechaNac">
            </p>
            <p>
                Correo
                <input type="email" name="correo" required>
            </p>
            <p>
                Telefono
                <input type="tel" name="telefono" required>
            </p>
            <input type="submit" name="b2" value="Enviar">
        </form>

        <table>
            <tr>
                <td>
                    <form name="Formulario" action="form1.php">
                        <input type="submit" name="b1" value="Regresar">
                    </form>
                </td>
                <td>
                    <form name="Formulario3" action="form3.php">
                        <input type="submit" name="b3" value="Avanzar">
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>