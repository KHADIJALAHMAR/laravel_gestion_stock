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
    <title>produit</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>edit produit</title>
    </head>
    
    <body>
        @if (Session::has('success'))
        <span>{{ Session::get('success') }}</span>
    @endif
        <form action="{{ route('update') }}" method="post">
            @if (Session::has('success'))
            <span>{{ Session::get('success') }}</span>
        @endif
            @csrf
    
            <input type="text" name="title" id="name_product" value="{{$produits->name_product }}" placeholder="name_product">
            @error('name_product')
                {{ $message }}
            @enderror
    
            <br />
    
            <input type="text" name="body" value="{{$produits->descreption}}" id="body" placeholder="descreption">
            @error('descreption')
                {{ $message }}
            @enderror
            <input type="text" name="body" value="{{$produits->prix}}" id="body" placeholder="prix">
            @error('prix')
                {{ $message }}
            @enderror
    
            <input type="submit" value="save">
    
        </form>
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
    </body>
    
    </html>
    
</body>
</html>