<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link type="text/css" href="style/stylenu.css" rel="stylesheet"/>
    <title>Cardápio RU</title>
  </head>
  <?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
  <body>
      <div class = "fundo">
  <div class="w3-container">
  <img src="img/logo.png" alt="Logo IFRS" width="500" height="200">
    <form>
        <br>
        <h2>Registro de nutricionista</h2>
    <div class="form-group">
    <label for="exampleInputEmail1">Us  uário</label>
    <input type="text" class="form-control" id="nome" placeholder="Usuário">
    <br>
    <!-- <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="senha" placeholder="Senha">
    <br> -->
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="senha" placeholder="Senha">
    <br>
    <button type="submit" class="btn btn-primary">Acessar cardápio</button>
  <button type="button" class="btn btn-link" onclick= "window.location.href = 'http://localhost/cardapiopw3/frontend/login/login-vitinho/index.php'">Voltar</button>
  <br><br>
  </div>
</form> 
</div>
</div>
<?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
  </body>
</html>