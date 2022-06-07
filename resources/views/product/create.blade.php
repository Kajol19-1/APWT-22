@extends('layouts.main')
@section('content')

<form action="" method="post">
    {{@csrf_field()}}
    Product Name : <input type="text" value="{{old('name')}}" name="name"> </br>
    @error('name')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Product Id : <input type="text" name="pid" value="{{old('pid')}}"> </br>
    @error('pid')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Price : <input type="text" value="{{old('price')}}" name="price"> </br>
    @error('price')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
   
    <input type="submit" value="Create">
</form>
@endsection