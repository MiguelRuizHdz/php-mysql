<html>
    <!-- Autor: Miguel Angel Ruiz Hernández -->

    <head>
        <title>
            Contacto
        </title>
    </head>

    <body>
        <form action="cont2.php" method="post">
            <p>
                Nombre
                <input type="text" name="nombre">
            </p>
            <p>
                Apellido
                <input type="text" name="apellido">
            </p>
            <p>
                Fecha de envio
                <input type="date" name="fecha">
            </p>
            <p>
                Telefono
                <input type="tel" name="telefono" required>
            </p>
            <p>
                Correo
                <input type="email" name="correo" required>
            </p>
            <p>
                Mensaje
                <textarea name="mensaje" cols="40" rows="2"></textarea>
            </p>
            <p>
                Adjuntar archivos
                <input type="file" name="archivo">
            </p>
            <p>
                numero(min -10, max 10)
                <input type="number" name="number" min="-10" max="10">
            </p>
            <p>
                Rango
                <input type="range" name="range">
            </p>
            <p>
                Color
                <input type="color" name="color">
            </p>
            <p>
                Tiempo
                <input type="time" name="tiempo">
            </p>
            <p>
                Mes
                <input type="month" name="mes">
            </p>
            <p>
                Semana
                <input type="week" name="semana">
            </p>
            <br>
            <input type="radio" name="a" value="11">Once
            <input type="radio" name="a" value="12">Doce
            <input type="radio" name="a" value="13">Trece
            
            <br>
            <input type="checkbox" name="a" value="11">Once
            <input type="checkbox" name="a" value="12">Doce
            <input type="checkbox" name="a" value="13">Trece
            
            <br>
            <input type="submit" value="Enviar mensaje">
            <input type="submit" value="Borrar Datos">
            
        </form>
    </body>
</html>