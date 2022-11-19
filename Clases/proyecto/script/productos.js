// Autor: Miguel Angel Ruiz Hernández
var Contador = 0;
var Total = 0;

function Agregar(precio, chek){
    if (chek == true) {
        Contador = parseInt(Contador) + 1;
        Total = parseFloat(Total) + parseFloat(precio);
    } else {
        Contador = parseInt(Contador) - 1;
        Total = parseFloat(Total) - parseFloat(precio);
    }
}

function Comprar() {

    var Descuento = 0;

    if (Contador <= 2) {
        alert("Si su compra es mayor a 3 articulos obtiene el 5 %, de descuento!!! APROVECHE...");
    }
    else {
        Descuento = (parseFloat(Total) * .05).toFixed(2);
    }

    if (confirm("Desea aprobechar Promoción?") && Contador <= 2) {
        return false;
    }
    else {
        //Abrir Ticket
        var iva = 0;
        var tneto = 0;
        var total1=0;
       
        iva = (parseFloat(Total - Descuento) * .16).toFixed(2);
        total1=parseFloat(Total-iva).toFixed(2)
       
        tneto = parseFloat(Total- Descuento).toFixed(2);
        document.all.articulos.value = Contador;
        document.all.total.value = Total;
        document.all.descuento.value = Descuento;
        document.all.iva.value = iva;
        document.all.neto.value = tneto;

        window.open("impresion.php?articulos="+Contador.toString() +"&total= " + total1.toString()+"&descuento="+Descuento.toString()+"&iva="+iva.toString()+"&neto="+tneto.toString() , "Ticket", "width=400, height=400");
    }
}