<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/fontawesom/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/styles.css')}}">
</head>
<body>
<div class="container-fluid ">
    <div class="row align-items-center my-2">
        <div class="col-4">
            <div class="row">
                <div class="col-6  ">
                    <a class=" nav-link text-white  bg-success text-center " href="{{route('driver.index')}}"><i
                            class="fas fa-list ff "></i> <span class="hid"> Umumiy ro'yhat</span>
                    </a>

                </div>
                <div class="col-6">
                    <a class="nav-link text-white text-center " style="background-color: rgba(0, 217, 255, 0.801);"
                       data-toggle="modal" href="#createModal"> <i class="fas fa-user ff "></i><span class="hid"> Yangi Mijoz Qo'shish</span></a>

                </div>

            </div>
        </div>
        <div class=" col-4">
            <div class="row time active_tab" id="tab_m">
                <div class="col-6 ">
                    <a class="nav-link text-white text-center bg-danger " href="{{route('red.driver')}}"><i
                            class="fas fa-users gg "></i><span class=""> Qarzdorlar </span></a>
                </div>
                <div class="col-6">
                    <a class="nav-link text-white text-center bg-warning " href="{{route('warn.driver')}}"><i
                            class="fas fa-users  gg"></i><span class=""> To'lov yaqn</span></a>

                </div>
            </div>
            <div class="row time" id="tab_t">
                <div class="col-6 ">
                    <a class="nav-link text-white text-center bg-danger " href="{{route('redd.driver')}}"><i
                            class="fas fa-users gg "></i><span class=""> L Tugagan</span></a>
                </div>
                <div class="col-6">
                    <a class="nav-link text-white text-center bg-warning " href="{{route('warnd.driver')}}"><i
                            class="fas fa-users  gg"></i><span class=""> L  yaqn</span></a>

                </div>
            </div>
        </div>
        <div class="col-2 col-xl-1">
            <div class="sells">
                <a href="#" id="btn_m" class="py-2 sellector active_btn "><i class="fas fa-dollar-sign fa-lg"></i></a>
                <a href="#" id="btn_t" class="py-2 sellector active "><i class="fas fa-calendar-alt fa-lg"></i></a>
            </div>

        </div>
        <div class="col-2 col-xl-3">
            <div class="row ">
                <div class="col-9 d-flex align-items-center">

                    <input class="form-control mr-sm-2" id="search" onkeyup="searchDrivers()" type="search"
                           placeholder="Search" aria-label="Search">

                </div>
                <div class="col-2 ">
                    <div class="dropdown ml-auto">
                        <button class="btn btn-secondary " type="button" data-toggle="dropdown">
                            <i class="fas fa-chevron-circle-down fa-lg mt-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right"  style="z-index: 1030">
                            <a class="dropdown-item" href="{{route('driver.trash')}}"><i class="fas fa-trash mx-2"></i> Karzinka</a>
                            <button class="dropdown-item " onclick="ExportToExcel()" ><i class="fas fa-file-excel mx-2"></i> Excel</button>
                            <div class="dropdown-item">
                                <form action="{{route('logout')}}" method="post">
                                    {{csrf_field()}}
                                    <button class="btn btn-outline-danger d-block ml-2"><i class="fas fa-sign-out-alt  "></i>
                                        <span class="hid">CHiqish</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div id="table">

    @section('main_content')
    @show
    </div>
</div>
<!-- create Modal -->
<div id="createModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" action="{{route('driver.store')}}" method="POST">
                {{csrf_field()}}
                <div class="modal-header ">

                      <div class="row" style="width: 100%">
                          <div class="col-7">
                              <h4 class="modal-title">Yangi Haydovchi Qo'shish</h4>
                          </div>
                          <div class="col-3">
                              <input type="date" name="created_at" class="form-control" value="{{date("Y-m-d")}}" required>

                          </div>
                          <div class="col-2">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          </div>

                      </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label>Haydovchi.F.I.SH</label>
                                <input type="text" name="driver" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Haydovchi.Tel</label>
                                <input type="tel" name="tel_d" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label>INN</label>
                                <input type="text" name="inn" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label>INPS</label>
                                <input type="text" name="inps" class="form-control" required>
                            </div>

                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>AvtoEgasi.F.I.SH</label>
                                <input type="text" name="owner" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>AvtoEgasi.Tel</label>
                                <input type="tel" name="tel_o" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label>INN</label>
                                <input type="text" name="inn_o" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label>INPS</label>
                                <input type="text" name="inps_o" class="form-control" required>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>AvtoRusumi</label>
                                <select type="text" name="car" class="form-control">
                                    <option value="Matiz">Matiz</option>
                                    <option value="Cobalt">Cobalt</option>
                                    <option value="Nexia">Nexia</option>
                                    <option value="Damas">Damas</option>
                                    <option value="Jentra">Jentra</option>
                                    <option value="Spark">Spark</option>
                                    <option value="Malibu">Malibu</option>
                                    <option value="Captiva">Captiva</option>
                                </select>
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
                                <label>Litsenziya Berilgan Sana</label>
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
                                <label>Shartnoma tuzilgan Sana</label>
                                <input type="date" name="c_start" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Shartnoma Tugash Sanasi</label>
                                <input type="date" name="c_end" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Oylik To'lo'v</label>
                                <input type="number" min="0" name="total_cost" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>To'landi</label>
                                <input type="number" min="0" name="paid_cost" class="form-control" required>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Filial Nomi</label>
                                <input type="text" name="company" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Litsenziya uchun To'lov</label>
                                <input type="number" min="0" name="l_cost" class="form-control" required>
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
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src=" {{asset('admin/js/jquery-3.4.1.slim.min.js')}}"></script>
<script src=" {{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
<script>

{{--Exel convert--}}

function ExportToExcel(){
    var htmltable= document.getElementById('example');
    if(htmltable!=null)
{
    var html = htmltable.outerHTML;
    window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
}

}


    let eltable = $('table');
    function searchDrivers() {
        console.log('ok');
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
<script src=" {{asset('admin/js/main.js')}}"></script>
</body>
</html>
