<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
   
    
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col s12">
              <hr>
              <h1>CRUD IN LARAVEL 10</h1>
              <a href="/ajouter" class="btn btn-primary">Ajouter un étudiant</a>
              <hr>    
                @if (session('status')) 
                    <div class="alert alert-succes">
                        {{ session('status') }}
                    </div>
                @endif 
              <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Noms</th>
                        <th>Prénoms</th>
                        <th>Classe</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                  @php
                  $ide = 1;
                  @endphp  
                    @foreach( $etudiants as $etudiant)
                        <tr>
                            <td>{{ $ide }}</td>
                            <td>{{ $etudiant->Noms}}</td>
                            <td>{{ $etudiant->Prenoms }}</td>
                            <td>{{ $etudiant->Classe }}</td>
                            <td>
                                <a href="/update-etudiant/{{$etudiant->id}}" class="btn btn-info">Update</a>
                                <a href="/delete-etudiant/{{$etudiant->id}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                      @php    
                      $ide += 1;  
                      @endphp
                    @endforeach
                </tbody>
              </table>
              {{ $etudiants->links() }}
            </div>
           
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>