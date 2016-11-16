$(document).ready(function(){
    $("button").click(function(){
        var a = $("#in1").val();
        var b = $("#in2").val();
        var c = a + b;
        $("#output").val(c);
    });
});