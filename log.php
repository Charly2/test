<?
session_start();
?>



<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="public/stylesheets/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.25.0/dist/sweetalert2.min.css">
  </head>
  <body>



<script src="public/javascripts/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.25.0/dist/sweetalert2.all.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    swal({
        title: 'Seleciona el operador',
        input: 'select',
        inputOptions: {
            '2 - 1000': 'Operador 1 Rango: 1 - 1000',
            '1001 - 2000': 'Operador 2 Rango: 1001 - 2000',
            '2001 - 3000': 'Operador 3 Rango: 2001 - 3000',
            '3001 - 4000': 'Operador 4 Rango: 3001 - 4000',
            '4001 - 5000': 'Operador 5 Rango: 4001 - 5000'
        },
        inputPlaceholder: 'Seleccina el rango',
        showCancelButton: true,
        inputValidator: function (value) {
            return new Promise(function (resolve, reject) {
                if (value !== '') {
                    resolve();
                } else {
                    reject('Debes seleccionar alguno');
                }
            });
        }
    }).then(function (result) {
        console.log(result);
        $.ajax({
            type: "POST",
            url: "admin.php",
            data: result,
            success: function(e){
                console.log(e);
                swal({
                    type: 'success',
                    html: 'Selecionaste el rango: ' + result.value
                }).then((result) => {
                    window.location.href = "index.php"
                });
            }
        });

    });
</script>

  </body>
</html>