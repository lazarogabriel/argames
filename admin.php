<?php
  include("servicios.php");

  $personas = $db->traerTodos();

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="/css/bootstrap.css">
     <title>Administrador</title>
   </head>

   <style media="screen">
   body{
      font-family: arial, sans-serif;
    }
    .table{
      box-shadow: 0 0 40px -10px #060606;
      border-radius: 10px;
    }

    .search{
      border: 1;
      font-size: 1em;
      font-family: "soleil", "roboto", sans-serif;
      border-radius: 10px;
    }
    .table-dark th, .table-dark td, .table-dark thead th {
      border-top: none;
    }
    input[type="text"]{
      border: 1px solid grey;
    }
    input[type="text"]:focus{
        outline:none;
        border-radius: 10px;
        box-shadow: 0 0 0 1.8pt grey;
        transition: 0.5s;
      }
    @media only screen and (max-width: 768px) {
      .search{
        margin-bottom: 10px;
      }
    }

   </style>


   <body>

     <div class="container">

       <div class="d-flex justify-content-between bd-highlight mb-3">
           <div class="p-2 bd-highlight">
             <a class="btn btn-secondary" href="index.php" role="button">Volver</a>
           </div>
           <div class="p-2 bd-highlight">
             <a class="btn btn-secondary" href="destroy_session.php" role="button">Salir</a>
           </div>
      </div>

       <div class="row pt-5">
         <div class="col">
             <form method="post" class="justify-content-center pb-4 form-inline">
               <div class="form-group">
                 <input type="text" name="buscar" class="search pl-2 py-2 pr-5 mr-3 ml-2" placeholder="Buscar una persona"/>
                 <select class="form-control" name="filter">
                   <option value="">Filtrar por</option>
                   <option value="id">id</option>
                   <option value="name">nombre</option>
                   <option value="usernmae">username</option>
                   <option value="email">email</option>
                   <option value="genre">genero</option>
                   <option value="age">edad</option>
                 </select>
               </div>
             </form>

               <table class="table table-striped table-dark table-responsive-sm">
                <thead >
                  <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th >Edad</th>
                    <th>Genero</th>
                  </tr>
                </thead>
                <tbody>
                 <?php foreach ($personas as $i => $persona): ?>
                      <tr>
                        <td><?=$persona["id"] ?></td>
                        <td><?=$persona["name"] ?></td>
                        <td><?=$persona["username"] ?></td>
                        <td class="email-col"><?=$persona["email"] ?></td>
                        <td><?=$persona["password"] ?></td>
                        <td class="age-col"><?=$persona["age"] ?></td>
                        <td class="gender-col"><?=$persona["genero"] ?></td>
                      </tr>
                 <?php endforeach; ?>
                </tbody>
              </table>
          </div>
      </div>
    </div>


      <script src="js/jquery-2.1.1.js"></script>
      <script src="js/main.js"></script>
      <script src="js/rank.js"></script>
   </body>
 </html>
