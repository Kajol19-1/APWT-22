<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div>
        <a class="btn bth-primary" href="home">Home</a>
        <a class="btn bth-primary" href="{{route('product.list')}}">Product List</a>
        <a class="btn bth-primary" href="{{route('create')}}">Create Product</a>
       

        </div>
        @yield('content')

        
    </body>
</html>