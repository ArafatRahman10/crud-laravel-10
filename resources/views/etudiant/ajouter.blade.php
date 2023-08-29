<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
   
    
    <div class="container">
        <div class="row align-items-start">
            <div class="col s12">
              <hr>
              <h1>AJOUTER UN ETUDIANT- LARAVEL 10</h1>
              <hr>   
              
                @if (session('status')) 
                    <div class="alert alert-succes">
                        {{ session('status') }}
                    </div>
                @endif

                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                </ul>
              
                <form action="/ajouter/traitement" method="POST" class="form-group">
                    @csrf

                    <div class="form-group">
                        <label for="Noms">Noms</label>
                        <input type="text" class="form-control" id="Noms" name="Noms">
                    
                    </div>
                    <div class="form-group">
                        <label for="Prenoms">Prenoms</label>
                        <input type="text" class="form-control" id="Prenoms" name="Prenoms">
                    
                    </div>
                    <div class="form-group">
                        <label for="Classe">Classe</label>
                        <input type="text" class="form-control" id="Classe" name="Classe">
                    
                    </div>
                    
                    <br>
                    <button type="submit" class="btn btn-primary">AJOUTER UN ETUDIANT</button>
                    
                    <br> <br>
                    <a href="/etudiant" class="btn btn-danger">Revenir à la liste des étudiants</a>
                </form>
            </div>
           
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>