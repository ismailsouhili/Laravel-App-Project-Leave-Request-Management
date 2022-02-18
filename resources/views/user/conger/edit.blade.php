@extends('layoutsUser.admin')

@section('content')
  <div class="card">
      <div class="card-header">
          <h4>Modifier Conges</h4>
      </div>
      <div class="card-body">
          <form action="{{ url('update-conger/'.$conge->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT');
              <div class="row">

                 <div class="col-md-12 mb-3">
                    <label for="">Type de Conges</label>
                    <select class="form-control custom-select custom-select-lg mb-3" aria-label="Disabled select example" name="type" >
                             <option value="{{$conge->type}}">{{$conge->type}}</option>
                              <option value="Congé legal annuel">Congé legal annuel (18 jours)</option>
                              <option value="Congé naissance">Congé naissance (3 jours)</option>
                              <option value="maladie">Congé maladie (Certificat nécessaire)</option>
                    </select>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="">Date Debut</label>
                    <input type="date" value="{{$conge->start}}" name="start" id="" class="form-control">
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="">Date Fin</label>
                    <input type="date" value="{{$conge->end}}" name="end" id="" class="form-control">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="">Certificat</label>
                    <input type="file" value="{{$conge->certificate}}" name="certificate" id="" class="form-control">
                  </div>


                  <div class="col-md-12">
                    <button type="submit"  class="btn btn-primary" name="" >Modifier</button>
                  </div>

              </div>
          </form>
      </div>
  </div>
    
@endsection