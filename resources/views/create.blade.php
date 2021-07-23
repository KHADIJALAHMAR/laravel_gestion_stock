<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create produit</title>
</head>

<body>
    @if (Session::has('success'))
    <span>{{ Session::get('success') }}</span>
@endif
    <form action="{{ route('store') }}" method="post">
        {{-- {{ route('blog.store') }} --}}
        @csrf

        <input type="text" name="name_product" id="name_product" value="{{ old('name_product') }}" placeholder="name_product">
        @error('name_product')
            {{ $message }}
        @enderror

        <br />

        <input type="text" name="descreption"  value="{{ old('descreption') }}" id="descreption" placeholder="descreption">
        @error('descreption')
            {{ $message }}
        @enderror
        <input type="text" name="prix"  value="{{ old('prix') }}" id="prix" placeholder="prix">
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