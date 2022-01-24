
@extends('app')
@section('main_content')

<div class="overflow-auto" style="height: 87vh;">
<table id="example" class="table  table-bordered">
        <thead class="sticky-top bg-dark text-white">
        <tr>
            <th>#</th>
            <th>Filial</th>
            <th>Haydovchi</th>
            <th>Tel</th>
            <th class="d-none">INN</th>
            <th class="d-none">INPS</th>
            <th class="d-none">Avtomabil Egasi</th>
            <th class="d-none">Avtomabil Egasi Tel</th>
            <th class="d-none">INN</th>
            <th class="d-none">INPS</th>
            <th>Avtomobil</th>
            <th>Shartnoma Muddati</th>
            <th>Litsenziya Muddati</th>
            <th>To'lovSummasi</th>
            <th>Balans</th>
            <th>Holati</th>
            <th>Sozlash</th>
        </tr>
        </thead>
        <tbody>
        @foreach($drivers as $driver)
            <tr id="tr" class=" bg-success
              @if( $driver-> l_end < (\Carbon\Carbon::now()->addDays(5)) ||  $driver->expire_date < (\Carbon\Carbon::now()->addDays(5)))
                bg-warning
                @endif
             @if($driver-> l_end < (\Carbon\Carbon::now()) || $driver->expire_date  <  (\Carbon\Carbon::now()))
                bg-danger text-white
             @endif
                ">
                <td class="nr">{{$driver->id}}</td>
                <td>{{$driver->company}}</td>
                <td>{{$driver->driver}}</td>
                <td>{{$driver->tel_d}}</td>
                <td class="d-none">{{$driver->inn}}</td>
                <td class="d-none">{{$driver->inps}}</td>
                <td class="d-none">{{$driver->owner}}</td>
                <td class="d-none">{{$driver->tel_o}}</td>
                <td class="d-none">{{$driver->inn_o}}</td>
                <td class="d-none">{{$driver->inps_o}}</td>
                <td>{{$driver->car}} <br> {{$driver->car_number}}</td>
                <td>{{$driver->c_start}} dan<br> {{$driver->c_end}} gacha</td>
                <td>{{$driver->l_start}} dan<br> {{$driver->l_end}} gacha</td>
                <td class="puli">{{number_format($driver->total_cost,0,',',' ')}}</td>
                <td class="puli">{{number_format($driver->paid_cost,0,',',' ')}}</td>
                <td id="status" class="text-center">
                    @if($driver-> l_end > (\Carbon\Carbon::now()) && $driver-> l_end < (\Carbon\Carbon::now()->addDays(5)) )
                     L yaqn!
                        <br>
                    @elseif($driver-> l_end < (\Carbon\Carbon::now()) )
                        L tugagan!!!
                        <br>
                    @endif

                        @if($driver-> expire_date > (\Carbon\Carbon::now()) && $driver-> expire_date < (\Carbon\Carbon::now()->addDays(5)) )
                    T yaqn!
                        @elseif($driver->expire_date < (\Carbon\Carbon::now()) )
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
        </tbody>
    </table>


</div>
    <ul class="pagination justify-content-end mt-2 mr-3">
        {{$drivers->links()}}
    </ul>
@endsection
{{--pagination--}}





