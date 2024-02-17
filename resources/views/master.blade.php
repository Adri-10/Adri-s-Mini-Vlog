<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/') }}css/bootstrap.css">
</head>
<body>
{{--    <h1>This is heading</h1>--}}
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a href="" class="navbar-brand">Adri's Company</a>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product Category</a>
                <ul class="dropdown-menu">
                    @foreach($categories as $category)
                        <li><a href="{{route('category',['id'=>$category['id']])}}" class="dropdown-item">{{$category['name']}}</a> </li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact Us</a></li>
        </ul>
    </div>

</nav>

@yield('body')



<footer class="py-md-5 bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body h-100">
                    <h4 class="text-center">About Us</h4>
                    <hr/>
                    <p>This is Adri's Blog where you can all type of latest news, entertainment, fashion blog and others.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-body h-100">
                    <h4 class="text-center">All Product category</h4>
                    <hr/>
                    <ul class="navbar-nav">
                        <li><a href="" class="nav-link">Health & beauty</a></li>
                        <li><a href="" class="nav-link">Men's Fashion</a></li>
                        <li><a href="" class="nav-link">Women's Fashion</a></li>
                        <li><a href="" class="nav-link">Electronic Devices</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-body h-100">
                    <h4 class="text-center">Contact with us</h4>
                    <hr/>
                    <address>
                        <b> Office Location: </b> House # -445, Road # -112, Block C, Mirpur DOSH, Dhaka. </br>
                        <b> Phone Number: </b> 01764111111 </br>
                        <b> Email Address: </b> info@example.com, contact@example.com </br>
                    </address>
                    <p class="text-center" style="color: #a52834">Subscribe</p>
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" required placeholder="Email Address"/>
                            <input type="submit" class="btn btn-outline-success" value="Subscribe Now"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <hr class="text-dark"/>
                <p class="text-dark text-center mt-3 mb-0">copyright@2023, ADRI BITM LARAVEL</p>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>


</body>
</html>

