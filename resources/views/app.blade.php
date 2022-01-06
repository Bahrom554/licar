<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/fontawesom/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/styles.css')}}">
</head>
<body style="height: 100vh;">


<div class="container-fluid">
    <nav class="navbar navbar-expand-xl navbar-light bg-light" style="height:7vh; width: 100%;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav justify-content-around flex-grow-1">

                <li class="nav-item bg-success">

                    <a class="nav-link text-white " href="{{route('driver.index')}}"><i class="fas fa-list "></i> Umumiy ro'yhat</a>
                </li>
                <li class="nav-item bg-danger">

                    <a class="nav-link text-white " href="{{route('red.driver')}}"><i class="fas fa-users "></i>Qarzdorlar ro'yhati</a>
                </li>
                <li class="nav-item bg-warning" >

                    <a class="nav-link text-white " href="{{route('warn.driver')}}"><i class="fas fa-users "></i>To'lov yaqnlashganlar</a>
                </li>
                <li class="nav-item" style="background-color: rgba(0, 217, 255, 0.801);">

                    <a id="createButton" class="nav-link text-white " data-toggle="modal" href="#createModal"> <i class="fas fa-user "></i>Yangi Mijoz Qo'shish</a>
                </li>
            </ul>
            <form class="form-inline my-3 my-lg-0 ">
                <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <form action="{{route('logout')}}" method="post">
                {{csrf_field()}}
            <button class="btn btn-outline-danger ml-4"> <i class="fas fa-sign-out-alt px-2 "></i>
                CHiqish</button>
            </form>

        </div>
    </nav>


    <div class="overflow-auto" style="height: 87vh;">
        @section('main_content')
        @show

    </div>
    @section('pagination')
    @show
</div>

<!-- create Modal -->






<script src=" {{asset('admin/js/jquery-3.4.1.slim.min.js')}}"></script>
<script src=" {{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
@section('jscode')
@show


</body>
</html>
