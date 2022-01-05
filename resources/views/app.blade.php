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
<div id="createModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" action="{{route('driver.store')}}" method="POST">
                {{csrf_field()}}
                <div class="modal-header">
                    <h4 class="modal-title">Yangi Haydovchi Qo'shish</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Haydovchi.F.I.SH</label>
                                <input type="text" name="driver" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Haydovchi.Tel</label>
                                <input type="tel" name="tel_d" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>AvtoEgasi.F.I.SH</label>
                                <input type="text" name="owner" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>AvtoEgasi.Tel</label>
                                <input type="tel" name="tel_o" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>AvtoRusumi</label>
                                <input type="text" name="car" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>DavlatRaqami</label>
                                <input type="text" name="car_number" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Litsenziya Chiqish Sanasi</label>
                                <input type="date" name="l_start" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Litsenziya Tugash Sanasi</label>
                                <input type="date" name="l_end" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Umumiy To'lo'v Summasi</label>
                                <input type="number" name="total_cost" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>To'lo'v</label>
                                <input type="number" name="paid_cost" class="form-control" required>
                            </div>

                        </div>


                    </div>
                </div>

                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>





<script src=" {{asset('admin/js/jquery-3.4.1.slim.min.js')}}"></script>
<script src=" {{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
<script src=" {{asset('admin/js/main.js')}}"></script>
<script>
    var eltrows = document.querySelectorAll('#tr');

    eltrows.forEach(function (eltrow){
        var eltd = eltrow.querySelector('#status').textContent;
        if(parseInt(eltd,10)<0){
            eltrow.classList.add('bg-danger');
        }
        else if(parseInt(eltd,10)<5){
            eltrow.classList.add('bg-warning');
        }

    })
</script>


</body>
</html>
