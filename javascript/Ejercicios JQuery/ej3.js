/* Rellena este fichero */
$(document).ready(function () {
    $("#btn-aumentar").click(function () {
        $(".pares, #encabezado").each(function () {
            let tamano_actual = parseFloat($(this).css("font-size"))
            $(this).css("font-size", (tamano_actual + 4) + "px")
        })
    })
});

$(document).ready(function () {
    $("#btn-disminuir").click(function () {
        $(".pares, #encabezado").each(function () {
            let tamano_actual = parseFloat($(this).css("font-size"))
            $(this).css("font-size", (tamano_actual - 4) + "px")
        })
    })
});
