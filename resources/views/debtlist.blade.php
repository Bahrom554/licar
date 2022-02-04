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
                <th>Qarzi <a href="{{route('driver.create')}}" class="text-white"><i class="ml-2 fas fa-sync"></i></a></th>
                <th>Holati</th>
                <th>Sozlash</th>
            </tr>
            </thead>
            <tbody>
            @foreach($drivers as $driver)
                <tr id="tr" class="
                @if($driver->expire_date < (\Carbon\Carbon::now()) )
                    bg-danger text-white
                @else
                    bg-warning
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
                    <td>{{$driver->car}}  {{$driver->car_number}}</td>
                    <td>{{$driver->c_start}} dan {{$driver->c_end}} gacha</td>
                    <td>{{$driver->l_start}} dan {{$driver->l_end}} gacha</td>
                    <td class="puli">{{number_format($driver->total_cost,0,',',' ')}}</td>
                    <td class="puli">{{number_format($driver->paid_cost,0,',',' ')}}</td>
                    <td> {{number_format($driver->debt,0,',',' ')}}</td>
                    <td id="status" class="text-center">
                        @if($driver->expire_date < (\Carbon\Carbon::now()) )
                            Qarzdor!!!
                        @else
                            T yaqin!
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




