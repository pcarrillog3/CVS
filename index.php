<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="librerias/ajax.googleapis.com_ajax_libs_jquery_3.5.1_jquery.min.js" type="text/javascript"></script>
        <link href="librerias/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_css_bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="librerias/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_js_bootstrap.min.js" type="text/javascript"></script>
        <script src="librerias/unpkg.com_sweetalert_dist_sweetalert.min.js" type="text/javascript"></script>
        <link href="librerias/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Iniciar Sesion Sistema CVS Duque</h1>
            <div class="account-wall">
                <img class="profile-img" src="sources/logoduque.jpg"
                    alt="CVSDuque">
                <form class="form-signin" action="login.php" method="post">
                <input type="text" class="form-control" name="user" placeholder="Usuario" required autofocus>
                <input type="password" class="form-control" name="pass" placeholder="Contraseña" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Iniciar</button>
               
                </form>
            
    </div>
</div>
                   
    </div>
</div> 
        
    </body>
</html>
