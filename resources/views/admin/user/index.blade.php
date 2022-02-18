@extends('layouts.admin')

@section('content')
  <div class="card">
    <div class="card-header">
      <a href="{{ url('add-user') }}" class="btn btn-success ">Ajouter Employe</a>
    </div>
      <div class="card-body">
        <table class="table table-borderd table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nom</th>
              <th>Prenom </th>
              <th>Email</th>
              <th>Congés</th>
              <th>Debut-travail</th>
              <th>Salaire</th>
              <th>Action</th>
            </tr>
        </thead>

        <tbody>
          @foreach ($users as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->fname}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->holidays}}</td>
                <td>{{$item->start_work}}</td>
                <td>{{$item->salary}} €</td>
              
                <td>
                  <a class="btn btn-primary" href="{{url('edit-user/'.$item->id)}}">Modifier</a>
                  <a class="btn btn-danger" href="{{url('delete-user/'. $item->id)}}">Supprimer</a>
                </td>
              </tr>
          @endforeach
          
        </tbody>
       
        </table>
      </div>
  </div>
    
@endsection