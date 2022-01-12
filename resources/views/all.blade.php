@extends('app')
@section('main_content')
    <table id="example" class="table  table-bordered">
        <thead class="sticky-top bg-dark text-white">
        <tr>

            <th>#</th>
            <th>Haydovchi</th>
            <th>Tel</th>
            <th>AvtoEgasi</th>
            <th>Tel</th>
            <th>Avtomobil</th>
            <th>Litsenziya Muddati</th>
            <th>To'lovSummasi</th>
            <th>To'langanSumma</th>
            <th>Holati</th>
            <th>Sozlash</th>


        </tr>
        </thead>
        <tbody>
        @foreach($drivers as $driver)
            <tr id="tr" class="
            @if($driver->status == 3 || $driver->status == 2)
                bg-warning
            @elseif($driver->status < 0 || $driver->status == 1)
                bg-danger text-white
            @endif
                ">
                <td class="nr">{{$driver->id}}</td>
                <td>{{$driver->driver}}</td>
                <td>{{$driver->tel_d}}</td>
                <td>{{$driver->owner}}</td>
                <td>{{$driver->tel_o}}</td>
                <td>{{$driver->car}} <br> {{$driver->car_number}}</td>
                <td>{{$driver->l_start}} dan<br> {{$driver->l_end}} gacha</td>
                <td class="puli">{{$driver->total_cost}}</td>
                <td class="puli">{{$driver->paid_cost}}</td>
                <td id="status" class="text-center">
                    @if($driver->status == 3 )
                     T yaqn!
                    @elseif($driver->status == 2)
                    L yaqn!
                    @elseif($driver->status == 1)
                    L tugagan!!!
                    @elseif($driver->status < 0 )
                    Qarzdor!!!
                    @endif



                </td>
                <td class="bg-white">
                    <div class="d-flex justify-content-around ">
                        <a href="#paymentModal" class="use-address" data-toggle="modal"><i
                                class="fas fa-dollar-sign text-success" data-toggle="tooltip" title="To'lovQilish"></i></a>
                        <a href="#editModal" class=" use-edit" data-toggle="modal"><i class="fas fa-pen text-warning"
                                                                                      data-toggle="tooltip"
                                                                                      title="Tahrirlash"></i></a>
                        <a href="#deleteModal" class=" use-delete" data-toggle="modal"><i
                                class="fas fa-trash text-danger" data-toggle="tooltip" title="O'chirish"></i></a>
                    </div>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>
    {{--    modals--}}

@endsection
{{--pagination--}}
@section('pagination')
    <ul class="pagination justify-content-end mt-2 mr-3">
        {{$drivers->links()}}
    </ul>

@endsection
@section('jscode')
    @include('modals');
    <script src=" {{asset('admin/js/main.js')}}"></script>
    <script>
        var app = @json($drivers);
        var eltrows = document.querySelectorAll('#tr');



        //pay
        $(".use-address").click(function () {
            var $row = $(this).closest("tr");    // Find the row
            var $text = $row.find(".nr").text(); // Find the text
            var dd = app.data.filter(function (driver) {
                return driver.id == $text;
            });
            elPayForm.action = '{{url('/')}}/put/' + dd[0].id;
            elPayDriv.value = dd[0].driver;
            elPayTelD.value = dd[0].tel_d;
            elPayTotal.value = dd[0].total_cost;
            elPayCost.value = dd[0].paid_cost;
            elPayLend.value = dd[0].l_end;

        });
        //delete
        $(".use-delete").click(function () {

            var $row = $(this).closest("tr");    // Find the row
            var $text = $row.find(".nr").text(); // Find the text
            var dd = app.data.filter(function (driver) {
                return driver.id == $text;
            });
            elDelForm.action = '{{url('/')}}/driver/' + dd[0].id;
            elDelDrive.textContent = dd[0].driver;


        });
        //    edit
        $(".use-edit").click(function () {

            var $row = $(this).closest("tr");    // Find the row
            var $text = $row.find(".nr").text(); // Find the text
            var dd = app.data.filter(function (driver) {
                return driver.id == $text;
            });
            elEditForm.action = '{{url('/')}}/driver/' + dd[0].id;
            elEditDrive.value = dd[0].driver;
            elEditTelD.value = dd[0].tel_d;
            elEditOwner.value = dd[0].owner;
            elEditTelO.value = dd[0].tel_o;
            elEditCar.value = dd[0].car;
            elEditCarNumber.value = dd[0].car_number;
            elEditLstart.value = dd[0].l_start;
            elEditLend.value = dd[0].l_end;
            elEditTcost.value = dd[0].total_cost;
            elEditPcost.value = dd[0].paid_cost;


        });


    </script>


@endsection



