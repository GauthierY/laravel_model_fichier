<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Ajouter uune recette</title>
</head>
<body>
   
  <div class="container">
    <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h2 class="pb-md-4">Recettes !</h2>
    </div>
    <div class="row">
      @foreach($receipes as $item)
      <div class="card mr-4" style="width: 15rem;">
        <img class="card-img-top p-3" src="{{$item->image}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$item->name}}</h5>
          <p >{{$item->description}}</p>
          <p >{{$item->category}}</p>
        </div>
      </div>
      @endforeach
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>