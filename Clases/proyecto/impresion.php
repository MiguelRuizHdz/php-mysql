<!DOCTYPE html>
<html >
<head>
    <title></title>
</head>
<body >
<script language="javascript">
    document.writeln('Ticket Car Motors \n');
    document.writeln("</br></br>");
    document.writeln('Articulos: ' + getParameterByName( "articulos" ));

    document.writeln("</br>");
    document.writeln('Sub-Total: ' + getParameterByName( "total" ));

    document.writeln("</br>");
    document.writeln('Descuento: ' + getParameterByName( "descuento" ));

    document.writeln("</br>");
    document.writeln('IVA: ' + getParameterByName( "iva" ));

    document.writeln("</br>");
    document.writeln('Total Neto: ' + getParameterByName( "neto" ));

    document.writeln("</br>");
    document.writeln("</br>");
    var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"); 
    var diasSemana = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"); 
    var f = new Date(); 
    document.write(diasSemana[f.getDay()] + " " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
    
    function startTime() {
        today = new Date();
        h = today.getHours();
        m = today.getMinutes();
        s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('reloj').innerHTML = h + ":" + m + ":" + s;
        t = setTimeout('startTime()', 500);
    }
    function getParameterByName( name )
    {   
        name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
        var regexS = "[\\?&]"+name+"=([^&#]*)"; 
        var regex = new RegExp( regexS );
        var results = regex.exec( window.location.href );
        if( results == null ) 
            return "";   
        else    
            return decodeURIComponent(results[1].replace(/\+/g, " "));
    }
</script>
   <form>
       <div id="reloj" ></div>
       <input type="button" value="Imprimir" onclick="window.print()" />
       
   </form>
</bod>
</html>