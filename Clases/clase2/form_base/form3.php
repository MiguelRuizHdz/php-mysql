<html>
    <!-- Autor: Miguel Angel Ruiz Hernández -->
    <head>
        <title>Alta de Empresa</title>
        <style>
            p {
                font-weight: bold;
            }
        </style>
    </head>
    <body align="center">
        <h1>Alta de Empresa</h1>
        
        <h2>Formulario</h2>
        
        <form name="form2" action="con1.php" method="post">
            <p>
                Nombre de la Empresa
                <br>
                <input type="text" name="nombre">
            </p>
            <p>
                Giro
                <select name="giro">
                    <option value="Transporte">Transporte</option>
                    <option value="Turismo">Turismo</option>
                    <option value="Servicio Público">Servicio Público</option>
                    <option value="Educación">Educación</option>
                    <option value="Salud">Salud</option>
                    <option value="Comunicación">Comunicación</option>
                </select>
            </p>
            <p>
                País
                <br>
                <input type="text" name="pais">
            </p>
            <p>
                Sueldo
                <br>
                <input type="text" name="sueldo">
            </p>
            <p>
                Tipo de Pago
                <select name="pago">
                    <option value="Diario">Diario</option>
                    <option value="Semanal">Semanal</option>
                    <option value="Catorcenal">Catorcenal</option>
                    <option value="Quincenal">Quincenal</option>
                    <option value="Mensual">Mensual</option>
                </select>
            </p>
            <p>
                Correo
                <br>
                <input type="email" name="correo" required>
            </p>
            <input type="submit" name="b3" value="Enviar">
        </form>

        <table align="center">
            <tr>
                <td>
                    <form name="Formulario2" action="form2.php">
                        <input type="submit" name="b2" value="Regresar">
                    </form>
                </td>
                <td>
                    <form name="Formulario4" action="form4.php">
                        <input type="submit" name="b4" value="Avanzar">
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>