<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Número por extenso!</title>
    <link type="text/css" rel="stylesheet" href="//assets.localhost/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="//assets.localhost/css/bootstrap-theme.min.css" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1>NÚMERO POR EXETENSO</h1>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-12 col-lg-offset-4">
          <form class="form-control-static" style="margin-top: 60px" id="form" method="post" action="./extensao.php">
            <input type="number" class="input-lg" name="valor">
            <input type="submit" class="btn-lg btn-primary" value="Transformar">
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12" style="margin-top: 60px">
          <h3 class="text-center text-muted" id="texto">Aqui vai sair o número por extenso!</h3>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="//assets.localhost/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//assets.localhost/js/bootstrap.min.js"></script>
    <script>
      // Attach a submit handler to the form
      $( "#form" ).submit(function( event ) {
        // Stop form from submitting normally
        event.preventDefault();

        // Get some values from elements on the page:
        var $form = $(this),
          term = $form.find("input[name='valor']").val(),
          action = $form.attr("action");
          
        // Send the data using post
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