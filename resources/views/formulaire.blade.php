<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Ajouter une recette</title>
</head>
<body>
   
  <div class="container">
    <div class="row justify-content-center pt-md-5">
        <div class="col-md-6">
          <h2 class="pb-md-4">Ajouter une recette</h2>
            <div class="card box-shadow">
                  <div class="card-body">
                     <form method="POST" action="" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group mb-3">
                        <label>Nom</label>
                        <input type="text" name="name" class="form-control" />
                      </div>
                      <div class="form-group mb-3">
                        <label>description</label>
                        <input type="text" name="description" class="form-control" />
                      </div>
                      <div class="form-group mb-3">
                        <label>category</label>
                        <input type="text" name="category" class="form-control" />
                      </div>
                      <div class="form-group mb-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" />
                      </div>
                      <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a href="/">Retour</a>
                      </div>
                    </form>
 
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>