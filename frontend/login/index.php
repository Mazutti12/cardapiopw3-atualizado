<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link type="text/css" href="style/styleindex.css" rel="stylesheet"/>
    <title>Cardápio RU</title>
  </head>
  <?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit();
}
?>
  <body>
  <div class = "fundo">
  <div class="w3-container">
  <img src="img/logo.png" alt="Logo IFRS" width="500" height="200">
  <br>
        <h1>Seleção de cardápio</h1>
    <div class="form-floating mb-3" class="f">
      <input type="text" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">Pesquisar pratos</label>
      </div>
 
      <form name="form" action="" method="get">
    <div class="input-group">
    <input type = "date" class = "calend"></input>
      <select id="refeicao" name = "refeicao" class="form-select" aria-label="refeicao">
        <option selected>-Refeição-</option>
        <option value="cafe">Café</option>
        <option value="almoco">Almoço</option>
        <option value="janta">Janta</option>
        
      </select>
      <div class="buttons">
        <input type="submit" class="btn btn-dark" value = "Buscar"></button>
        <button type="button" class="btn btn-danger">Limpar filtros</button>
      </div>
    </div>
</form>
    <div class="tb">
    <table class="table">
        <thead>
            <tr>
                <th>Prato</th>
                <th>Calorias</th>
              
                <th></th>
            </tr>
            <tr>
                <td>Salada de alface</td>
                <td>5cal./100g </td>
                
                <td><button type="button" class="btn btn-warning">Mostrar ingredientes</button></td>
            </tr>
            <tr>
                <td>Sopa de legumes</td>
                <td>20cal./100g</td>
                
                <td><button type="button" class="btn btn-warning">Mostrar ingredientes</button></td>
            </tr>
            <tr>
                <td>bife ao molho</td>
                <td>50cal./100g</td>
                
                <td><button type="button" class="btn btn-warning">Mostrar ingredientes</button></td>
            </tr>
            
        </thead>
        <tbody></tbody>
    </table>
    <button type="button" class="btn btn-link" onclick= "window.location.href = 'http://localhost/cardapiopw3/frontend/login/login-vitinho/login.php'">Sou nutricionista deste cardápio</button>
    <!-- Tem que saber que esta logado -->
    <button hidden type="button" class="btn btn-link" onclick= "window.location.href = 'http://localhost/cardapiopw3/frontend/login/login-vitinho/nutricionista.php'">Sou nutricionista deste cardápio</button>
    <br><br>
    
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
  </body>
</html>