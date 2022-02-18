@extends('layouts.admin')

@section('content')
  <div class="card">
      <div class="card-body">

        <!-------------------------------------------------->
          <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Administration</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"><?php
                    setlocale(LC_TIME, 'fra_fra');

                                     echo strftime('%A %d %B %Y, %H:%M'); // jeudi 11 octobre 2012, 16:03

                                     ?></li>
                    </ol>
                    <div class="row">
                         <div class="col-xl-4 col-md-4">
                            <div class="card bg-primary text-center text-white mb-4">
                                <p style='display: inline; font-size: 30px; color: white; font-weight: bold;'></p>
                                 <?php

                                    try {

                                       $bdd = new PDO('mysql:host=localhost;dbname=gestionconges;charset=utf8', 'root',''); 

                                       $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

                                   } catch (Exception $e) 
                                   {
                                    $e->getMessage();
                                   }

                                    $size = $bdd->prepare("SELECT COUNT(id) AS `total` FROM users");
                                    $size->execute();
                                    $nb_user = intval((implode($size->fetch())/10));

                                    echo "<p style='display: inline; font-size: 30px; color: white; font-weight: bold;'>$nb_user</p>";
                                    ?>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h1 class="small text-white stretched-link" style="text-align: center; font-size:120%">NOMBRE TOTAL DES EMPLOYÉES</h1>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-4">
                            <div class="card bg-info text-center text-white mb-4">
                                <p style='display: inline; font-size: 30px; color: white; font-weight: bold;'></p>
                                 <?php

                                    try {

                                       $bdd = new PDO('mysql:host=localhost;dbname=gestionconges;charset=utf8', 'root',''); 

                                       $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

                                   } catch (Exception $e) 
                                   {
                                    $e->getMessage();
                                   }

                                    $size = $bdd->prepare("SELECT COUNT(id) AS `total` FROM holidays WHERE status = 'Accepté'");
                                    $size->execute();
                                    $nb_user = intval((implode($size->fetch())/10));

                                    echo "<p style='display: inline; font-size: 30px; color: white; font-weight: bold;'>$nb_user</p>";
                                    ?>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h1 class="small text-white stretched-link" style="text-align: center; font-size:120%">NOMBRE TOTAL DES EMPLOYÉES EN CONGÉ</h1>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-4">
                            <div class="card bg-success text-center text-white mb-4">
                                <p style='display: inline; font-size: 30px; color: white; font-weight: bold; '></p>
                                 <?php

                                    try {

                                       $bdd = new PDO('mysql:host=localhost;dbname=gestionconges;charset=utf8', 'root',''); 

                                       $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

                                   } catch (Exception $e) 
                                   {
                                    $e->getMessage();
                                   }

                                    $size = $bdd->prepare("SELECT COUNT(id) AS `total` FROM holidays ");
                                    $size->execute();
                                    $nb_user = intval((implode($size->fetch())/10));

                                    echo "<p style='display: inline; font-size: 30px; color: white; font-weight: bold; '>$nb_user</p>";
                                    ?>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h1 class="small text-white stretched-link" style="text-align: center; font-size:120%">Nombre Demandes de Congés</h1>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                   

                </div>
            </main>
        </div>

        <!-------------------------------------------------->

         <!-------------------------------------->

         <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4">
                    <div class="card-header">
                        Profile
                    </div>
                    <div class="card-panel"><br>
                        <img src="assets/img/adm.jpg" style="border: 1px solid #ccc; margin: 10px; width: 160px">
                        <div style="position: absolute;left: 360px;top: 20px;"><br><br>
                            <table class="table table-hover ">
                                <tr>
                                    <th>ID</th>
                                    <td>&emsp;:&nbsp;&emsp;&emsp; {{Auth::user()->id}}</td>
                                </tr>
                                <tr>
                                    <th>Nom</th>
                                    <td>&emsp;:&nbsp;&emsp;&emsp; {{Auth::user()->name}}</td>
                                </tr>
                                <tr>
                                    <th>Prenom</th>
                                    <td>&emsp;:&nbsp;&emsp;&emsp; {{Auth::user()->fname}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>&emsp;:&nbsp;&emsp;&emsp; {{Auth::user()->email}}</td>
                                </tr>
                            </table>

                    </div>
                </div> 
            </div>
        </div>

        <!-------------------------------------->


      </div>
  </div>
    
@endsection