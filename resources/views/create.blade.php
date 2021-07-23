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
    <title>Create produit</title>
</head>

<body>
    @if (Session::has('success'))
    <span>{{ Session::get('success') }}</span>
@endif
    <form action="{{ route('store') }}" method="post">
        {{-- {{ route('blog.store') }} --}}
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" name="name_product" id="name_product" value="{{ old('name_product') }}" placeholder="name_product">
            <div class="text-danger">
                @error('name_product')
                {{ $message }}
            @enderror
            </div>
           
          </div>
        <br />
        <div class="mb-3">
            <input type="text" name="descreption"   class="form-control" value="{{ old('descreption') }}" id="descreption" placeholder="descreption">
            <div class="text-danger">
                @error('descreption')
                {{ $message }}
                @enderror
            </div>   
        </div>
        <div class="mb-3">
         <input type="text" name="prix" class="form-control" value="{{ old('prix') }}" id="prix" placeholder="prix">
        <div class="text-danger">
            @error('prix')
            {{ $message }}
            @enderror
        </div>     
        
       
      
    

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
