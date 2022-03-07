@extends('layouts.admin')

@section('content')
  <div class="card">
      <div class="card-header">
          <h4>Modifier Employe</h4>
      </div>
      <div class="card-body">
          <form action="{{ url('update-user/'.$users->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT');
              <div class="row">

                  <div class="col-md-6 mb-3">
                      <label for="">Nom</label>
                      <input type="text" value="{{$users->name}}" name="name" id="" class="form-control">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="">Prenom</label>
                    <input type="text" value="{{$users->fname}}" name="fname" id="" class="form-control">
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="">Email</label>
                    <input type="text" value="{{$users->email}}" name="email" id="" class="form-control">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="">Password</label>
                    <input type="text" value="{{$users->password}}" name="password" id="" class="form-control">
                  </div>

                 {{--
                  <div class="col-md-6 mb-3">
                    <label for="">Conges</label>
                    <input type="text" value="{{$users->holidays}}" name="holidays" id="" class="form-control">
                  </div>
                  --}}

                  <div class="col-md-12 mb-3">
                    <label for="">Debut Travail</label>
                    <input type="text" value="{{$users->start_work}}" name="start_work" id="" class="form-control">
                  </div> 

                  <div class="col-md-12 mb-3">
                    <label for="">Salaire</label>
                    <input type="text" value="{{$users->salary}}" name="salary" id="" class="form-control">
                  </div> 


                  <div class="col-md-12">
                    <button type="submit"  class="btn btn-primary" name="" >Modifier</button>
                  </div>

              </div>
          </form>
      </div>
  </div>
    
@endsection