<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="/account" id="create_customer" accept-charset="UTF-8" data-login-with-shop-sign-up="true"><input type="hidden" name="form_type" value="create_customer"><input type="hidden" name="utf8" value="✓">

      
    


<div class="form-group">
  <label for="first_name">
    <span>
      Nome
    </span>
  </label>
  <input type="text" value="" name="customer[first_name]" id="first_name">
</div>

<div class="form-group">
  <label for="last_name">
    <span>
      Sobrenome
    </span>
  </label>      
  <input type="text" value="" name="customer[last_name]" id="last_name">
</div>

<div class="form-group">
  <label for="email">
    <span>
      E-mail
    </span>
    <em>*</em>
  </label>      
  <input type="email" value="" name="customer[email]" id="email">
</div>

<div class="form-group">
  <label for="password">
    <span>
      Senha
    </span>
    <em>*</em>
  </label>      
  <input type="password" value="" name="customer[password]" id="create_password">
</div>

<div class="action-btn">
  <input class="btn btn-one" type="submit" value="Criar">
</div>
</form>
</body>
<link href="assets/css/style.css" rel="stylesheet">
</html>