/* Rellena este fichero */
$(document).ready(function () {
    $("#btn-ocultar").click(function () {
        $(".pares, #encabezado").hide()
    })
    $("#btn-mostrar").click(function () {
        $(".pares, #encabezado").show()
    })
});