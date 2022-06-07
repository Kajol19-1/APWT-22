@extends('layouts.main')
@section('content')
   
    <table border="1">
        <tr>
            <th>Product Name</th>
            <th>Product Id</th>
            <th>Price</th>
        </tr>
        @foreach($products as $s)
            <tr>
                <td><a href="{{route('details',['pid'=>$s->pid])}}">{{$s->name}}</a></td>
                <td>{{$s->pid}}</td>
                <td>{{$s->price}}</td>
            </tr>
        @endforeach
    </table>
@endsection