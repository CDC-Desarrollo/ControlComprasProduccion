document.getElementById("registrar").addEventListener("click", function( event ) {
    // presentar la cuenta de clicks realizados sobre el elemento con id "prueba"
    let p1 = document.getElementById("pass").value;
    let p2 = document.getElementById("pass2").value;

    if(p1 != p2)
    {
        alert("No son iguales");
    }
    else
    {
        alert("cdk");
    }
    
  }, false);

function cotizacion() {
    let peso = document.getElementById('txtPeso').value;
    let total = 45;

    if (peso <= 20) {
        if (document.getElementById('checkSeguro').checked) {
            let valorSeguro = agregarSeguro();

            let totalFinal = total + valorSeguro;

            document.getElementById("total").innerHTML = "El costo aproximado de su envío será de $" + totalFinal + " USD. (Incluyendo seguro)";
            document.getElementById('txtPeso').focus();
            document.getElementById("mostrarTotal").style.display = "block";
            //alert('checkbox1 esta seleccionado');
        }
        else {
            document.getElementById("total").innerHTML = "El costo aproximado de su envío será de $" + total + " USD. (No incluye seguro)";
            document.getElementById('txtPeso').focus();
            document.getElementById("mostrarTotal").style.display = "block";
            let valorSeguro = agregarSeguro();
            //alert('checkbox1 no esta seleccionado');
        }
    }
    else 
    {
        if (document.getElementById('checkSeguro').checked) {
            let valorSeguro = agregarSeguro();
            let exceso = peso - 20;
            let costoPorLibra = 2.25;
            let costoPorExceso = exceso * costoPorLibra;
            total = costoPorExceso + total;

            let totalFinal = total + valorSeguro;
            document.getElementById("total").innerHTML = "El costo aproximado de su envío será de $" + totalFinal + " USD. (Incluye seguro)";
            document.getElementById('txtPeso').focus();
            document.getElementById("mostrarTotal").style.display = "block";
        }
        else
        {
            let exceso = peso - 20;
            let costoPorLibra = 2.25;
            let costoPorExceso = exceso * costoPorLibra;
            total = costoPorExceso + total;

            document.getElementById("total").innerHTML = "El costo aproximado de su envío será de $" + total + " USD. (No incluye seguro)";
            document.getElementById('txtPeso').focus();
            document.getElementById("mostrarTotal").style.display = "block";
        }
        //Estos son algunos productos que la ley no nos permite enviar. Sin embargo, te invitamos a contactarnos ya que en algunos casos es posible hacer el envío.
    }
}

function agregarSeguro() {
    let valor = document.getElementById("txtPrecio").value;
    let porcentajeSeguro = 5;
    let totalSeguro = (valor * porcentajeSeguro) / 100;
    return (totalSeguro);
}

const checkbox = document.getElementById('checkSeguro');

checkbox.addEventListener('change', (event) => {
    if (event.currentTarget.checked) {
        document.getElementById("txtPrecio").placeholder = "Ingresa el valor de tu producto";
        document.getElementById("lblDlls").style.display = "block";
        document.getElementById("txtPrecio").readOnly = false;
    } else {
        document.getElementById("txtPrecio").placeholder = "¿Desea incluir seguro?";
        document.getElementById("lblDlls").style.display = "none";
        document.getElementById("txtPrecio").value = "";
        document.getElementById("txtPrecio").readOnly = true;
    }
})