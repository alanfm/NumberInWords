<!--
Página desenvolvida para uso da classe Numeros em php
que pega algarismos e os escreve por extenso em portugues

@author Alan Freire - alan_freire@msn.com
@version 2.0
@copyright MIT © 2016
-->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Número por extenso!</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron" style="margin-top: 1rem">
                <h1>Escreve um número por extenso</h1>
                <p>Digite um número no campo abaixo e clique em tranformar para escrever o número por extenso.</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4" style="margin-top: 6rem">
                    <form id="form" method="post" action="./extensao.php">
                        <div class="form-group">
                            <input type="number" class="form-control input-lg" name="valor" id="valor" placeholder="Digite um número">
                        </div>
                    </form>                
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="margin-top: 4rem">
                    <h2 class="text-center text-muted" id="texto">Aqui ser exibido o número por extenso!</h2>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>
            $("#valor").keyup(function(event) {

                var $form = $("#form"),
                term = $form.find("input[name='valor']").val(),
                action = $form.attr("action");

                $.ajax({
                    url: action,
                    type: 'POST',
                    data: {valor: term},
                    dataType: 'html'
                })
                .done(function(data) {
                    $("#texto").empty().append(data);
                })
                .fail(function() {
                    $("#texto").empty().append('Não foi possível fazer a conversão!');
                });
            });
        </script>
    </body>
</html>