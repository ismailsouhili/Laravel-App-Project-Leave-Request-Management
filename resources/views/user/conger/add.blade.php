@extends('layoutsUser.admin')

@section('content')
  <div class="card">
      <div class="card-header">
          <h4>Faire Demande</h4>
      </div>
      <div class="card-body">
          <form  action="{{ url('insert-conger')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="row">

               

                <div class="col-md-12 mb-3">
                  <label for="">Type de Conges</label>
                  <select class="form-control custom-select custom-select-lg mb-3" aria-label="Disabled select example" name="type" >
                           <option selected> Choisissez un Type ici</option>
                            <option value="Congé legal annuel">Congé legal annuel (18 jours)</option>
                            <option value="Congé naissance">Congé naissance (3 jours)</option>
                            <option value="maladie">Congé maladie (Certificat nécessaire)</option>
                  </select>
                </div>

                  <div class="col-md-6 mb-3">
                      <label for="">Date Debut</label>
                      <input type="date" name="start" id="" class="form-control">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="">Date Fin</label>
                    <input type="date" name="end" id="" class="form-control">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="">Certificat</label>
                    <input type="File" name="certificate" id="" class="form-control">
                  </div>

               
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" name="" >Envoyer Demande</button>
                  </div>

              </div>
          </form>
      </div>
  </div>
    
@endsection