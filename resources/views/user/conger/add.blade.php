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

                @if($user>18)
                  <div class="col-md-12 mb-3">
                    <label for="">Type de Conges</label> 
                    <select class="form-control custom-select custom-select-lg mb-3" aria-label="Disabled select example" name="type" >
                              <option selected> Choisissez un Type ici</option>
                              <option value="Congé sans solde">Congé sans solde</option>
                    </select>
                  </div>
                
                @else
           
                  <div class="col-md-12 mb-3">
                    <label for="">Type de Conges</label>
                    <select class="form-control custom-select custom-select-lg mb-3" aria-label="Disabled select example" name="type" >
                             <option selected> Choisissez un Type ici</option>
                              <option value="Congé legal annuel">Congé legal annuel </option>
                              <option value="Congé naissance">Congé naissance </option>
                              <option value="maladie">Congé maladie (Certificat nécessaire)</option>
                    </select>
                  </div> 
                
                @endif

                
               
                  <div class="col-md-6 mb-3" id="datetimepicker1">
                      <label for="">Date Debut</label>
                      <input type="date" name="start" id="date1" class="form-control" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="">Date Fin</label>
                    <input type="date" name="end" id="date2" class="form-control" min="<?php echo date("Y-m-d");?>">
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

