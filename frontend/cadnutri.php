<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link type="text/css" href="style/styleindex.css" rel="stylesheet" />
  <title>Cardápio RU</title>
</head>

<body>
  <header class="container-fluid p-3 bg-white text-white">
    <div class="header">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap" />
          </svg>
        </a>


        <div class="row">
        
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 ">
              <li><a href="cadnutri.php" class=" col-sm nav-link px-2 text-white "><img src="img/logo.png" alt="Logo IFRS" width="200" height="70"></a></li>
              <li class = "logins"><a href="login/nutricionista.php" class="btn btn-white text-dark ">Sou nutricionista</a></li>
              <li><a href="login.php" class="col-sm nav-link px-2 text-dark ">Login adm</a></li>
            </ul>

        </div>

      </div>


  </header>

  <div class="container bg-white col-sm-5 pt-5">
    <h1>Seleção de cardápio</h1>
    <div class="form-floating mb-3" class="f">
      
      <input type="text" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">Pesquisar pratos</label>
    </div>

    <form name="form" action="" method="get">

      <div class="input-group">
        <input type="date" class="calend"></input>
        <select id="refeicao" name="refeicao" class="form-select" aria-label="refeicao">
          <option disabled selected>-Refeição-</option>
          <option value="cafe">Café</option>
          <option value="almoco">Almoço</option>
          <option value="janta">Janta</option>

        </select>
        <div class="buttons">
          <button type="submit" class="btn btn-success text-white" value="Buscar">Buscar</button>
          <button type="button" class="btn btn-danger text-white">Limpar filtros</button>

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
    </div>
    <div class="buttons-2">

      <button type="button" onclick="window.location.href = './cadastro.php'" class="btn btn-success">Cadastrar refeição</button>
      <button type="button" onclick="window.location.href = './cadastroingre.php'" class="btn btn-success">Cadastrar ingredientes</button>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="scripts.js"></script>

</body>

</html>