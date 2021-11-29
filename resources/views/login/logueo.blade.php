<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css/css/estilo.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
 
</head>
<body>
  <img class="wave" src="img/wave.png">
  <div class="container">
    <div class="img">
      <img src="img/bg.svg">
    </div>
    <div class="login-content">
       <form action="{{url('login')}}" method="post">
            @csrf
        <img src="img/avatar.svg">
        <h2 class="title">Bienvenido</h2>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Usuario</h5>
                    <input type="text" class="input" name="usuario" required="">
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Password</h5>
                    <input type="password" class="input" name="password" required="">
                 </div>
                 
              </div>

              <div class="input-div pass">
                 <div class="i"> 
                    <i class="fas fa-star half"></i>
                 </div>
                 <div class="div">
                    <h5>Departamento</h5>
                    <input type="text" class="input" name="departamento" required="">
                 </div>
                 
              </div>
             <a href="registro">Registrar</a>
              <input type="submit" class="btn" value="Ingresar">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/js/main.js"></script>
</body>
</html>

<!-- <input type="hidden" name="route" value="{{url('/')}}"> -->
