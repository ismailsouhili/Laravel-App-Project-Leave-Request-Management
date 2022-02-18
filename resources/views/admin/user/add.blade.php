@extends('layouts.admin')

@section('content')
  <div class="card">
      <div class="card-header">
          <h4>Saisir les données de Employe </h4>
          
      </div>
      <div class="card-body">
          <form action="{{ url('insert-user')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="row">
                

                  <div class="col-md-6 mb-3">
                      <label for="">Nome</label>
                      <input type="text" name="name" id="" class="form-control">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="">Prenom</label>
                    <input type="text" name="fname" id="" class="form-control">
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="">Password</label>
                    <input type="text" name="password" id="" class="form-control ">
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="">Conges</label>
                    <input type="text" name="holidays" id="" class="form-control">
                  </div> 

                  <div class="col-md-12 mb-3">
                    <label for="">Debut-Travail</label>
                    <input type="text" name="start_work" id="" class="form-control">
                  </div> 

                  <div class="col-md-12 mb-3">
                    <label for="">Salaire</label>
                    <input type="text" name="salary" id="" class="form-control">
                  </div> 

                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" name="" >Ajouter</button>
                  </div>

              </div>
          </form>
      </div>
  </div>
    
@endsection