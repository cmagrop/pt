<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Proyecto Tionvel</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <style type="text/css">
  	
    body{


    	background: black;
    	color:white;
    }

    h1
    {

    	color: rgba(0,0,255,1);
    	text-shadow: -8px -14px 0px rgba(0,0,255,0.4);
    }

  </style>
</head>
  <body>

  <div class="container">

  <div class="row">
    <div class="col-sm-12 text-center">
	
	   <h1>Proyecto Tionvel</h1>

    </div>	


  <div class="clearfix"></div>
      <div class="panel panel-default">
        <div class="panel-body">
        <form action="procesar.php" class="form-inline" id="form-fields">

      	<div class="input-group control-group after-add-more">
			
			
			   <input type="number" name="enter" class="form-control" placeholder="Ingrese entero a sumar" required>
            <input type="date" name="fecha" class="form-control" placeholder="Ingrese fecha" required>
					  <div class="input-group-btn"> 
						<button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Agregar</button>
					  </div>
			  </div>
        <button type="submit" class="btn btn-default" onclick="ckeck_Date()">Enviar</button>
        </form>
		

        <!-- En ésta sección se realiza una copia adicional del campo para agregar N formularios-->
        <div class="copy-fields hide" id="hide-fields">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="number" name="enter" class="form-control" placeholder="Ingrese entero">
            <input type="date" name="fecha" class="form-control" placeholder="Ingrese fecha">
            <div class="input-group-btn"> 
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remover</button>
            </div>
          </div>
        </div>
	     </div>
      </div>
  </div>
  </div>

<script type="text/javascript">

    $(document).ready(function() {

	

  //Obtiene los contenidos de la clase con el div copy-fields y lo agrega
      $(".add-more").click(function(){ 
          var html = $(".copy-fields").html();
          $(".after-add-more").after(html);
          
      });
//Remueve los campos solicitados
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    
    

    });

      
      var formulario = document.getElementById('form-fields');
      var entero = form-fields.enter;
      var fecha  = form-fields.fecha;

  

    function validar(e){

      // Evitamos que se envie el formulario
      e.preventDefault();
    }

    formulario.addEventListener('submit', validar);

</script>

</body>
</html>