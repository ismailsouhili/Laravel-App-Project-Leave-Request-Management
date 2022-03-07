@extends('layouts.admin')

@section('content')
  <div class="card">
      <div class="card-header">

            <main>
                <div class="container-fluid px-4">
                    <h1 style="text-align:center ">Jours fériés Marocain</h1>
                
                    <div class="container-fluid px-4">

                    <br>
                    <div class="card mb-4">
                        
                        <div class="card-body" style="zoom: 95%">

                                <div id="table" class="table table-bordered table-striped">
                                    <div class="row mt-3 mx-md-2">
                                        <div class="col-3 text-blue text-left font-weight-bold">
                                            &nbsp;
                                        </div>
                                        <div class="col-3 h3 text-blue font-weight-bold text-center col1">
                                            <b class="">2021</b>
                                        </div>
                                        <div class="col-3 h3 text-blue font-weight-bold text-center col2">
                                            <b>2022</b>
                                        </div>
                                        <div class="col-3 h3 text-blue font-weight-bold text-center col3">
                                            <b>2023</b>
                                        </div>
                                    </div>
                                    <div class="row mx-md-2 border-bottom">
                                        <div class="col-3 text-left ">
                                            <b>Jour de l'an</b>
                                        </div>
                                        <div class="col-3 text-center col1 ">
                                            vendredi
                                            <br>
                                            1 janvier
                                        </div>
                                        <div class="col-3 text-center col2 ">
                                            samedi
                                            <br>
                                            1 janvier
                                        </div>
                                        <div class="col-3 text-center col3 ">
                                            dimanche
                                            <br>
                                            1 janvier
                                        </div>
                                    </div>
                                    <div class="row mx-md-2 border-bottom">
                                        <div class="col-3 text-left ">
                                            <b>Manifeste de l'indépendance</b>
                                        </div>
                                        <div class="col-3 text-center col1 ">
                                            lundi
                                            <br>
                                            11 janvier
                                        </div>
                                        <div class="col-3 text-center col2 ">
                                            mardi
                                            <br>
                                            11 janvier
                                        </div>
                                        <div class="col-3 text-center col3 ">
                                            -
                                            <br>
                                            -
                                        </div>
                                    </div>
                                    <div class="row mx-md-2 border-bottom">
                                        <div class="col-3 text-left ">
                                            <b>Fête du Travail</b>
                                        </div>
                                        <div class="col-3 text-center col1 ">
                                            samedi
                                            <br>
                                            1 mai
                                        </div>
                                        <div class="col-3 text-center col2 ">
                                            dimanche
                                            <br>
                                            1 mai
                                        </div>
                                        <div class="col-3 text-center col3 ">
                                            lundi
                                            <br>
                                            1 mai
                                        </div>
                                    </div>
                                    <div class="row mx-md-2 border-bottom">
                                        <div class="col-3 text-left ">
                                            <b>Aïd el-Fitr</b>
                                        </div>
                                        <div class="col-3 text-center col1 ">
                                            Du mercredi 12 mai au jeudi 13 mai
                                            <br>
                                        </div>
                                        <div class="col-3 text-center col2 ">
                                            Du lundi 2 mai au mardi 3 mai
                                            <br>
                                        </div>
                                        <div class="col-3 text-center col3 ">
                                            Du vendredi 21 avril au samedi 22 avril
                                            <br>
                                        </div>
                                    </div>
                                    <div class="row mx-md-2 border-bottom">
                                        <div class="col-3 text-left  next-date ">
                                            <b>Aid El Kebir</b>
                                        </div>
                                        <div class="col-3 text-center col1  next-date ">
                                            mardi
                                            <br>
                                            20 juillet
                                        </div>
                                        <div class="col-3 text-center col2  next-date ">
                                            dimanche
                                            <br>
                                            10 juillet
                                        </div>
                                        <div class="col-3 text-center col3  next-date ">
                                            jeudi
                                            <br>
                                            29 juin
                                        </div>
                                    </div>
                                    <div class="row mx-md-2 border-bottom">
                                        <div class="col-3 text-left ">
                                            <b>Fête du Trône</b>
                                        </div>
                                        <div class="col-3 text-center col1 ">
                                            vendredi
                                            <br>
                                            30 juillet
                                        </div>
                                        <div class="col-3 text-center col2 ">
                                            samedi
                                            <br>
                                            30 juillet
                                        </div>
                                        <div class="col-3 text-center col3 ">
                                            dimanche
                                            <br>
                                            30 juillet
                                        </div>
                                    </div>
                                    <div class="row mx-md-2 border-bottom">
                                        <div class="col-3 text-left ">
                                            <b>Nouvel an musulman</b>
                                        </div>
                                        <div class="col-3 text-center col1 ">
                                            Du lundi 9 août au mardi 10 août
                                            <br>
                                        </div>
                                        <div class="col-3 text-center col2 ">
                                            Du vendredi 29 juillet au samedi 30 juillet
                                            <br>
                                        </div>
                                        <div class="col-3 text-center col3 ">
                                            Du mardi 18 juillet au mercredi 19 juillet
                                            <br>
                                        </div>
                                    </div>
                                    <div class="row mx-md-2 border-bottom">
                                        <div class="col-3 text-left ">
                                            <b>Allégeance Oued Eddahab</b>
                                        </div>
                                        <div class="col-3 text-center col1 ">
                                            samedi
                                            <br>
                                            14 août
                                        </div>
                                        <div class="col-3 text-center col2 ">
                                            dimanche
                                            <br>
                                            14 août
                                        </div>
                                        <div class="col-3 text-center col3 ">
                                            -
                                            <br>
                                            -
                                        </div>
                                    </div>
                                    <div class="row mx-md-2 border-bottom">
                                        <div class="col-3 text-left ">
                                            <b>La révolution du roi et du peuple</b>
                                        </div>
                                        <div class="col-3 text-center col1 ">
                                            vendredi
                                            <br>
                                            20 août
                                        </div>
                                        <div class="col-3 text-center col2 ">
                                            samedi
                                            <br>
                                            20 août
                                        </div>
                                        <div class="col-3 text-center col3 ">
                                            -
                                            <br>
                                            -
                                        </div>
                                    </div>
                                    <div class="row mx-md-2 border-bottom">
                                        <div class="col-3 text-left ">
                                            <b>Fête de la jeunesse au Maroc</b>
                                        </div>
                                        <div class="col-3 text-center col1 ">
                                            samedi
                                            <br>
                                            21 août
                                        </div>
                                        <div class="col-3 text-center col2 ">
                                            dimanche
                                            <br>
                                            21 août
                                        </div>
                                        <div class="col-3 text-center col3 ">
                                            -
                                            <br>
                                            -
                                        </div>
                                    </div>
                                    <div class="row mx-md-2 border-bottom">
                                        <div class="col-3 text-left ">
                                            <b>Al mawlid</b>
                                        </div>
                                        <div class="col-3 text-center col1 ">
                                            Du lundi 18 octobre au mardi 19 octobre
                                            <br>
                                        </div>
                                        <div class="col-3 text-center col2 ">
                                            vendredi
                                            <br>
                                            7 octobre
                                        </div>
                                        <div class="col-3 text-center col3 ">
                                            Du mardi 26 septembre au mercredi 27 septembre
                                            <br>
                                        </div>
                                    </div>
                                    <div class="row mx-md-2 border-bottom">
                                        <div class="col-3 text-left ">
                                            <b>La marche verte au Maroc</b>
                                        </div>
                                        <div class="col-3 text-center col1 ">
                                            samedi
                                            <br>
                                            6 novembre
                                        </div>
                                        <div class="col-3 text-center col2 ">
                                            dimanche
                                            <br>
                                            6 novembre
                                        </div>
                                        <div class="col-3 text-center col3 ">
                                            -
                                            <br>
                                            -
                                        </div>
                                    </div>
                                    <div class="row mx-md-2 border-bottom">
                                        <div class="col-3 text-left ">
                                            <b>Fête de l'indépendance au Maroc</b>
                                        </div>
                                        <div class="col-3 text-center col1 ">
                                            jeudi
                                            <br>
                                            18 novembre
                                        </div>
                                        <div class="col-3 text-center col2 ">
                                            vendredi
                                            <br>
                                            18 novembre
                                        </div>
                                        <div class="col-3 text-center col3 ">
                                            -
                                            <br>
                                            -
                                        </div>
                                    </div>
                                </div>
                         

                        </div>
                    </div>
                    </div>
                    </div>
            </main>
            
        </div>
    </div>
   
 @endsection