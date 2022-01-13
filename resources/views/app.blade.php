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


    <div class="row align-items-center my-2" >
        <div class="col-4">
            <div class="row">
                <div class="col-6">
                    <a class=" nav-link text-white  bg-success text-center " href="{{route('driver.index')}}"><i class="fas fa-list "></i> <span class="hid">Umumiy ro'yhat</span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="nav-link text-white text-center "style="background-color: rgba(0, 217, 255, 0.801);" data-toggle="modal" href="#createModal"> <i class="fas fa-user "></i><span class="hid">Yangi Mijoz Qo'shish</span></a>

                </div>

            </div>
        </div>
        <div class="col-4">
            <div class="row time active_tab" id="tab_m" >
                <div class="col-6">
                    <a class="nav-link text-white text-center bg-danger " href="{{route('red.driver')}}"><i class="fas fa-users "></i><span class="hid">Qarzdorlar ro'yhati</span></a>
                </div>
                <div class="col-6">
                    <a class="nav-link text-white text-center bg-warning " href="{{route('warn.driver')}}"><i class="fas fa-users "></i><span class="hid">To'lov yaqn</span></a>

                </div>
            </div>
            <div class="row time" id="tab_t" >
                <div class="col-6">
                    <a class="nav-link text-white text-center bg-danger " href="{{route('redd.driver')}}"><i class="fas fa-users "></i><span class="hid">L Muddati Tugagan</span></a>
                </div>
                <div class="col-6">
                    <a class="nav-link text-white text-center bg-warning " href="{{route('warnd.driver')}}"><i class="fas fa-users "></i><span class="hid">L Muddati yaqn</span></a>

                </div>
            </div>
        </div>
        <div class="col-1">
            <div class="sells">
                <a href="#" id="btn_m" class="py-2 sellector active_btn "><i class="fas fa-dollar-sign fa-lg"></i></a>
                <a href="#" id="btn_t" class="py-2 sellector active "><i class="fas fa-calendar-alt fa-lg"></i></a>
            </div>

        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-7 col-xl-8 d-flex align-items-center">

                    <input class="form-control mr-sm-2" id="search" onkeyup="searchDrivers()" type="search"
                           placeholder="Search" aria-label="Search">

                </div>
                <div class="col-5 col-xl-4">
                    <form action="{{route('logout')}}" method="post">
                        {{csrf_field()}}
                    <button class="btn btn-outline-danger d-block"> <i class="fas fa-sign-out-alt  "></i>
                        <span class="hid">CHiqish</span>
                    </button>
                    </form>

                </div>
            </div>
        </div>
    </div>










































    <div class="overflow-auto" style="height: 87vh;" id="table">
        @section('main_content')
        @show

    </div>
    @section('pagination')
    @show
</div>

<!-- create Modal -->


<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src=" {{asset('admin/js/jquery-3.4.1.slim.min.js')}}"></script>
<script src=" {{asset('admin/js/bootstrap.bundle.min.js')}}"></script>

<script>
    let eltable = $('table');
    function searchDrivers() {
        let search = $('#search').val()
        if(!search.trim()){
            $("#table").html(eltable);
            return;
        }
        if (search.length > 1 ) {

            axios.get('{{url('/')}}' + '/search', {
                params: {
                    search: search
                }
            }).then(function (response) {
                console.log(response);
                $("#table").html(response.data.view)
            })
                .catch(function (error) {
                    console.log(error);
                })
        }

    }
</script>
@section('jscode')
@show


</body>
</html>
