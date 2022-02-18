@extends('layouts.admin')

@section('content')
  <div class="card">
    <div class="card-header">
      <h4>Les Conges </h4>
    </div>
      <div class="card-body">
        <table class="table table-borderd table-striped" id="mytab">
          <thead>
            <tr>
              <th>ID</th>
              <th>Employe</th>
              <th>Date-Debut </th>
              <th>Date-Fin</th>
              <th>Type</th>
              <th>Certificate</th>
              <th>Satatus</th>
              <th>Action</th>
            </tr>
        </thead>

        <tbody>
          @foreach ($holdiay as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->start}}</td>
                <td>{{$item->end}}</td>
                <td>{{$item->type}}</td>
                <td><a href="{{url('download/'.$item->certificate)}}" class="btn btn-outline-secondary">Telecharger</a></td>
                <td> 
                  <?php 
                  if($item->status=="Accepté")
                  { echo '<span style="color: green" id="statuscol" >'.$item->status.'</span>';}
                  elseif ($item->status=="Refusé")
                  {echo '<span style="color: red;" id="statuscol"  >'.$item->status.'</span>';}
                  else
                  {echo '<span style="color: darkgoldenrod" id="statuscol" >'.$item->status.'</span>';}
                  ?>
                 </td>
            
                <td>

                  <?php 
                  $acc = url('accepter/'. $item->id);
                  $ref = url('refuser/'. $item->id);
                  if($item->status=="Accepté")
                  {echo '<script>
                                     var btnnn = document.getElementById("btn1");
                                     var btnoo = document.getElementById("btn2");
                                     btnnn.remove();
                                     btnoo.remove(); 
                        </script>'
                        ;}
                  elseif ($item->status=="Refusé")
                  {echo '<script>
                                     var btnnn = document.getElementById("btn1");
                                     var btnoo = document.getElementById("btn2");
                                     btnnn.remove();
                                     btnoo.remove(); 
                        </script>';}
                  else
                  {echo ' <a class="btn btn-success "  href="'.$acc.'"> Accepter</a> ',
                        '<a class="btn btn-danger " href="'.$ref.'">Refuser</a>' ;}
                  ?>
                 
                
                </td>

              </tr>
          @endforeach
          
        </tbody>
       
        </table>
        <a href="{{url('download-rapp') }}" class="btn btn-primary " >Télécharger Rapport</a>
      </div>
  </div>
  
         

@endsection