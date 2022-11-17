<html>
    <head>
        <title>CV Form</title>
    </head>
    <body>
        <h1>Tarea 1</h1>
        <!-- Autor: Miguel Angel Ruiz Hernández -->
        <h3>Metodo POST - Crear CV</h3>
        <form action="tarea1_1.php" method="post" >
            <table>
                <tr>
                    <td>
                        <h4>Datos Personales</h4>
                        Nombre
                        <input type="text" name="Nombre">
                        <br>
                        Apellido Paterno
                        <input type="text" name="ApellidoPaterno">
                        <br>
                        Apellido Materno
                        <input type="text" name="ApellidoMaterno">
                        <br>
                        Edad
                        <input type="text" name="Edad">
                        <br>
                        Correo
                        <input type="text" name="Correo">
                        <br>
                        Telefono
                        <input type="text" name="Telefono">
                        <br>
                        Profesion
                        <input type="text" name="Profesion">
                        <br>
                        Ubicacion
                        <input type="text" name="Ubicacion">
                        <br>
                        Sitio Web
                        <input type="text" name="SitioWeb">
                        <br>
                        <h4>Formacion</h4>
                        <p>Escribe tu formación profesional más reciente</p>
                        <textarea name="Formacion" cols="40" rows="5"></textarea>
                        <h4>Experiencia</h4>
                        <p>Escribe tu experiencia laboral más reciente a más antigua</p>
                        <textarea name="ExperienciaLaboral" cols="40" rows="5"></textarea>
                        <h4>Idiomas</h4>
                        <input type="text" name="Idiomas">
                        <h4>Sobre ti</h4>
                        <p>Escribe un resumen de tus cualidades y hobbies</p>
                        <textarea name="AboutYou" cols="40" rows="5"></textarea>

                        <input type="submit" value="Guardar">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>