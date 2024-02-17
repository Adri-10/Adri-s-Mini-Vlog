@extends('master')

@section('title')
    Home Page
@endsection

@section ('body')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <h1 class="text-center" style="color: #bb2d3b">Welcome to Adri's Page</h1>
                <h2 class="text-center" style="color: #06357a">Featured Products</h2>
            @foreach($products as $product)
                    <div class="col-md-3 py-4">
                        <div class="card h-100">
                            <img src="{{asset('/')}}img/{{$product['image']}}" alt="" class="card-img-top"/>
                            <div class="card-body">
                                <h4>{{substr($product['title'],0,50).'....'}}</h4>
                                <a href="{{route('detail', ['id'=> $product['id']])}}" class="btn btn-outline-success">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection



