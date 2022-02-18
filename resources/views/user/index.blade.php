@extends('layoutsUser.admin')

@section('content')
  <div class="card">
      <div class="card-body">

        <!-------------------------------------------------->
        <div id="layoutSidenav_content"> </div>
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Plateforme des Demandes</h1>

                     <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"> 
                            <?php  setlocale(LC_TIME, 'fra_fra');  echo strftime('%A %d %B %Y, %H:%M');  ?>
                        </li>
                     </ol>
                                 <div class="row">
                                    <div class="col-xl-12 col-md-4">
                                        <div class="card bg-success text-white mb-4">
                                            <div class="card-body text-center">

                                       <p style='display: inline; font-size: 30px; color: white; font-weight: bold;'>Vous avez réussi à accéder à votre compte</p>


                                           </div>
                                       </div>
                                    </div>
                                 </div>
                        
                        <!-------------------------------------->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        Profile
                                    </div>
                                    <div class="card-panel"><br>
                                        <img src="assets/img/user.png" style="border: 1px solid #ccc; margin: 10px; width: 160px">
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

      </div>
  </div>
    
@endsection