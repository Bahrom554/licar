<table id="example" class="table  table-bordered  ">
    <thead class="sticky-top bg-dark text-white">
    <tr>

        <th>#</th>
        <th>Haydovchi</th>
        <th>Tel</th>
        <th>AvtoEgasi123</th>
        <th>Tel</th>
        <th>Avtomobil</th>
        <th>Litsenziya Muddati</th>
        <th>To'lovSummasi</th>
        <th>To'langanSumma</th>
        <th>To'langan Kun</th>
        <th>Sozlash</th>


    </tr>
    </thead>
    <tbody>
    @if($drivers->count() > 0)
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
                <td>
                    @if($driver->status == 3 )
                        To'lov Muddati yaqn!
                    @elseif($driver->status == 2)
                        Litsenziya Muddati yaqn!
                    @elseif($driver->status == 1)
                        Litsenziya Muddati <br> tugagan!!!
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
    @endif
    </tbody>

</table>
