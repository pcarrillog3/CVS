<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Sistema Control</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="menu.php">Menu</a></li>
        <li><a href="catalogo.php">CATALOGO</a></li>
        <li><a href="ventas.php">Ventas</a></li>
        <li><a href="corte.php">Corte</a></li>
        <li><a href="reportes.php">Reportes</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
        <li><a href="index.php"><span class="glyphicon glyphicon-shopping-cart"></span> Exit</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
          <div class="panel-heading"><h3>CATALOGO</h3></div>
        <div class="panel-body" >
            <form action="catalogo.php">
            <button type="submit" class="btn btn-lg btn-success">Entrar</button>
        </form>
        </div>    
        <div class="panel-footer">Agrega nuevos elementos al catálogo o modifica sus propiedades</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
          <div class="panel-heading"><h3>PARTIDAS</h3></div>
        <div class="panel-body"><button class="btn btn-lg btn-danger">Entrar</button></div>
        <div class="panel-footer">Agrega nuevas compras, seleccionando de diferentes proveedores</div>
      </div>
    </div>
     <div class="col-sm-4"> 
      <div class="panel panel-success">
          <div class="panel-heading"><h3>PROVEEDORES</h3></div>
          <div class="panel-body"><form action="proveedores.php"><button class="btn btn-lg btn-info">Entrar</button></form></div>
        <div class="panel-footer">Agrega, edita o elimina proveedores. <br>Son indispensables para tus partidas.</div>
      </div>
    </div>  </div>
</div><br>

<div class="container">    
  <div class="row">
     <div class="col-sm-4">
      <div class="panel panel-primary">
          <div class="panel-heading"><h3>CLIENTES</h3></div>
        <div class="panel-body" > <form action="clientes.php">
            <button type="submit" class="btn btn-lg btn-success">Entrar</button>
        </form></div>
        <div class="panel-footer">Agrega nuevos clientes y visualiza sus compras.<br> Podrás también realizar ventas directas</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
          <div class="panel-heading"><h3>ALMACENES</h3></div>
          <div class="panel-body"><form action="almacenes.php"><button class="btn btn-lg btn-danger">Entrar</button></form></div>
        <div class="panel-footer">Inventarios principales,secundarios o provisonales. Modificar de estos o trasladar entre tu inventario principal.</div>
      </div>
    </div>
     <div class="col-sm-4"> 
      <div class="panel panel-success">
          <div class="panel-heading"><h3>CONFIGURACION </h3></div>
        <div class="panel-body"><button class="btn btn-lg btn-info">Entrar</button></div>
        <div class="panel-footer">(Solo admin)Modifica tu contraseña de usuario o crea nuevos usuarios.</div>
      </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>
