<div class="overflow-auto" style="height: 87vh;">
<table id="example" class="table  table-bordered  ">
    <thead class="sticky-top bg-dark text-white">
    <tr>

        <th>#</th>
        <th>Firma</th>
        <th>Haydovchi</th>
        <th>Tel</th>
        <th>Avtomobil</th>
        <th>Shartnoma Muddati</th>
        <th>Litsenziya Muddati</th>
        <th>To'lovSummasi</th>
        <th>To'langanSumma</th>
        <th>Holati</th>
        <th>Sozlash</th>


    </tr>
    </thead>
    <tbody>
    @if($drivers->count() > 0)
        @foreach($drivers as $driver)
            <tr id="tr" class="bg-success
              @if($driver->status == 2 || $driver->debt == 2)
                bg-warning
                @endif
            @if($driver->status ==1 || $driver->debt == 1)
                bg-danger text-white
             @endif
             @endif
                ">
                <td class="nr">{{$driver->id}}</td>
                <td>{{$driver->company}}</td>
                <td><a href="#" style="color: inherit !important; text-decoration: none !important;">{{$driver->driver}}</a> </td>
                <td>{{$driver->tel_d}}</td>
                <td>{{$driver->car}} <br> {{$driver->car_number}}</td>
                <td>{{$driver->c_start}} dan<br> {{$driver->c_end}} gacha</td>
                <td>{{$driver->l_start}} dan<br> {{$driver->l_end}} gacha</td>
                <td class="puli">{{number_format($driver->total_cost,0,',',' ')}}</td>
                <td class="puli">{{number_format($driver->paid_cost,0,',',' ')}}</td>
                <td id="status" class="text-center">
                    @if($driver->status == 2 )
                        L yaqn!
                        <br>
                    @elseif($driver->status == 1 )
                        L tugagan!!!
                        <br>
                    @endif

                    @if($driver->debt == 2)
                        T yaqn!
                    @elseif($driver->debt == 1)
                        Qarzdor!!!
                    @endif



                </td>
                <td class="bg-white">
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="{{route('driver.show',$driver  ->id)}}"><i class="fas fa-sitemap fa-2x"></i></a>
                    </div>
                </td>
            </tr>

        @endforeach
    @endif
    </tbody>

</table>
</div>


