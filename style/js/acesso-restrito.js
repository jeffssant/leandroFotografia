function areaRestrita() {
    var dados = {
        usuario: $('#restrctForm div.form-group input[name="login"]').val(),
        senha: $('#restrctForm div.form-group input[name="password"]').val()
    };

    var flag = false;
    $.each(dados, function (dado) {
        if (dado.length == 0) {
            flag = true;
            return false;
        }
    });

    if (flag == true) return false;

    $('#alertUser').css('display', 'none');
    $.ajax({
        url: WPObject.ajaxurl,
        method: 'POST',
        data: {
            action: 'restrito',
            dados: dados,
            id: $('#restrctForm input[name="id"]').val()
        }
    }).done(function(data) {
        var json = JSON.parse(data);
        if (json.msg == 'usuario autorizado') {
            window.location.assign('/pagina-restrita/');
        } else {
            $('#alertUser').css('display', 'block');
        }
    });
}