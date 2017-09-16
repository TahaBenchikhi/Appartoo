$(function () {
$('.reset').click(function () {
    location.reload();
});
    $('.changer').click(function () {
        var data = {};
        data.nom = $("#nom").val();
        data.prenom = $("#prenom").val();
        data.age = $("#age").val();
        data.race = $("#race").val();
        data.famille = $("#famille").val();
        data.nourriture = $("#nourriture").val();
        $.post('/changerprofil',{data : data },function (retour) {
            alert('Modification terminé avec succes');
            location.reload();
        }) .fail(function(fail) {
            $('body').html(fail.responseText);
            alert("Ooups Something Went Wrong :X")
        })
    });
});