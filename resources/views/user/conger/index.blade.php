@extends('layoutsUser.admin')

@section('content')
  <div class="card">
    <div class="card-header">
      <h4>Les Conges</h4>
    </div>
      <div class="card-body">
        <table class="table table-borderd table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Date Debut</th>
              <th>Date Fin </th>
              <th>Type de Conges</th>
              <th>Certificat</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
        </thead>

        <tbody>
          @foreach ($conge as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->start}}</td>
                <td>{{$item->end}}</td>
                <td>{{$item->type}}</td>
                <td><a href="{{url('download/'.$item->certificate)}}" class="btn btn-dark ">Telecharger</a></td>
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
                  $edit = url('edit-conger/'.$item->id);
                  $del = url('delete-conger/'. $item->id);
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
                  {echo ' <a class="btn btn-primary "  href="'.$edit.'" > Modifier</a> ',
                        '<a class="btn btn-danger " href="'.$del.'" >Supprimer</a>' ;}
                  ?>

                
                </td>
              </tr>
          @endforeach
          
        </tbody>
       
        </table>
      </div>
  </div>
    
   <script>
    var spans = document.getElementById('statuscol');
    var btn1= document.getElementById('btn1');
    var btn2= document.getElementById('btn2');
    

    switch (spans.textContent) 
    {
      case "Accepté":
      spans.style.color = 'green';
      btn1.style.visibility = "hidden";
      btn2.style.visibility = "hidden";
        break;

      case "Refusé":
      spans.style.color = 'red';
      btn1.style.visibility = "hidden";
      btn2.style.visibility = "hidden";
        break;
   }

   
    </script>

 

@endsection