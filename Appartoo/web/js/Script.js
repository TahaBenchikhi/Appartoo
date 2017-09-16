$(function () {
$('.glyphicon-plus').click(function (event) {
    event.preventDefault();
    var id = $(this).parent().parent().parent().find('.id_element1').val();
    $.post('/addfriend',{data : id },function (retour) {
        alert('Ami Ajouté :D');
        location.reload();
    }) .fail(function(fail) {
        //$('body').html(fail.responseText);
        alert("Ooups Something Went Wrong :X")
    })
});
    $('.glyphicon-trash').click(function (event) {
        var id = $(this).parent().parent().parent().find('.id_element').val();
        $.post('/removefriend',{data : id },function (retour) {
            alert('Ami Supprimé :)');
            location.reload();
        }) .fail(function(fail) {
            alert("Ooups Something Went Wrong :X")
        })
    });
});

