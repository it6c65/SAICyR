$("#edit").click(function(){
    $("#delete").hide();
    $("#edit").hide();
    $("#condicion_actual").hide();
    $("#categoria_actual").hide();
    $("#back").removeClass("uk-hidden");
    $("#save").removeClass("uk-hidden");
    $("#condicion").removeClass("uk-hidden");
    $("#categoria").removeClass("uk-hidden");
    $("#nombre_actual").hide();
    $("#nombre").attr({
        "type" : "text",
        "value" : $("#nombre_actual").text()
    });
    $("#codigo_actual").hide();
    $("#codigo").attr({
        "type" : "text",
        "value" : $("#codigo_actual").text()
    });
});

$("#back").click(function(){
    $("#back").addClass("uk-hidden");
    $("#save").addClass("uk-hidden");
    $("#condicion").addClass("uk-hidden");
    $("#categoria").addClass("uk-hidden");
    $("#condicion_actual").show();
    $("#categoria_actual").show();
    $("#nombre_actual").show();
    $("#nombre").attr("type", "hidden");
    $("#codigo_actual").show();
    $("#codigo").attr("type", "hidden");
    $("#delete").show();
    $("#edit").show();
});
