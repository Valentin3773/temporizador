let fechaHoraActual = new Date(document.body.getAttribute('data-tiempoactual')).getTime();

let fechaHoraObjetivo = new Date(document.body.getAttribute('data-tiempoobjetivo')).getTime();

let x = setInterval(() => {

    let diferencia = fechaHoraObjetivo - fechaHoraActual;

    if(diferencia <= 0) {

        document.body.innerHTML = '';
        return;
    }

    fechaHoraActual += 1000;

    let dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
    let horas = Math.floor((diferencia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));
    let segundos = Math.floor((diferencia % (1000 * 60)) / 1000);

    document.getElementById("temporizador").innerHTML = dias + "d " + horas + "h " + minutos + "m " + segundos + "s ";

    if (diferencia < 0) {

        clearInterval(x);
        document.getElementById("temporizador").innerHTML = "¡El evento ha comenzado!";
    }

}, 1000);