<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js%22%3E"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js%22%3E"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js%22%3E"></script>
    <title>Document</title>
</head>
<body>
    <table class="table table-dark m-2">
        <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name_product</th>
              <th scope="col">Descreption</th>
              <th scope="col">prix</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($produits as $produit)
            <tr class="table-active">
                <th>{{$produit->id}}</th>
                <td>{{$produit->name_product}}</td>
                <td>{{$produit->descreption}}</td>
                <td>{{$produit->prix}}</td>
                <td><a href="/edit/{{ $produit->id }}" class="btn btn-primary">Edit</a>
                    <a href="/delete/{{ $produit->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
          </tbody>
    </table>
    
</body>
</html>