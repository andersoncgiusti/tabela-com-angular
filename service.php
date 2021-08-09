<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Angular JS | Services</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Anderson Giusti">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script src="js/app.js"></script>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbars/">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/all.js"></script>
  <link rel="icon" href="images/favicon.png">
<head> 
<body>
<main>  
  <div class="container" ng-app="myApp" ng-controller="customersCtrl"> 
  <?php
      $nome =   $_GET["login"];
    echo "<h1>Olá, $nome, seja bem-vindo!</h1>";
  ?>
    <table class="table table-hover" ng-repeat="x in myData">
      <thead>
        <tr>
          <th style="width: 5%;">ID</th>
          <th style="width: 30%;">Nome</th>
          <th style="width: 25%;">E-mail</th>
          <th style="width: 20%;">Cidade</th>
          <th style="width: 20%;">Empresa</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{x.id}}</td>
          <td>{{x.name}}</td>
          <td>{{x.email}}</td>
          <td>{{x.address.city}}</td>
          <td>{{x.company.name}}</td>
        </tr>        
      </tbody>
    </table>
    <a href="index.php" class="btn btn-warning btn-lg active mb-5" role="button" aria-pressed="true">Voltar a home!</a>
  </div><!--container-->
</main>
</body>
</html>