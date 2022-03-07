@extends('layoutsUser.admin')

@section('content')
  <div class="card">
      <div class="card-header">
          <h4>Modifier Demande</h4>
      </div>
      <div class="card-body">
          <form action="{{ url('update-conger/'.$conge->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT');
              <div class="row">

                @if(Auth::user()->holidays>18)
                
                <div class="col-md-12 mb-3">
                  <label for="">Type de Conges</label>
                  <select class="form-control custom-select custom-select-lg mb-3" aria-label="Disabled select example" name="type" >
                            <option selected > {{$conge->type}}</option>
                            <option value="Congé sans solde">Congé sans solde</option>
                  </select>
                </div>
              
              @else
              
                <div class="col-md-12 mb-3">
                  <label for="">Type de Conges</label>
                  <select class="form-control custom-select custom-select-lg mb-3" aria-label="Disabled select example" name="type" >
                           <option selected> {{$conge->type}} </option>
                            <option value="Congé legal annuel">Congé legal annuel (18 jours)</option>
                            <option value="Congé naissance">Congé naissance (3 jours)</option>
                            <option value="maladie">Congé maladie (Certificat nécessaire)</option>
                  </select>
                </div>
              
              @endif

                  <div class="col-md-6 mb-3">
                    <label for="">Date Debut</label>
                    <input type="date" value="{{$conge->start}}" name="start" id="date1" min="<?php echo date("Y-m-d");?>" class="form-control">
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="">Date Fin</label>
                    <input type="date" value="{{$conge->end}}" name="end" id="date2" min="<?php echo date("Y-m-d");?>" class="form-control">
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

  <script>
    const picker = document.getElementById('date1');
    picker.addEventListener('input', function(e)
    {
      var day = new Date(this.value).getUTCDay();
      if([6,0].includes(day))
          {
          e.preventDefault();
          this.value = '';
          alert('Week-end déjà férié !!!');
          }
    });

    const pickerdate = document.getElementById('date2');
    pickerdate.addEventListener('input', function(e)
    {
      var day = new Date(this.value).getUTCDay();
      if([6,0].includes(day))
          {
          e.preventDefault();
          this.value = '';
          alert('Week-end déjà férié !!!');
          }
    });
    
    
  </script>
    
@endsection