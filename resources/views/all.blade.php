@extends('app')
@section('main_content')

    <div class="overflow-auto" style="height: 87vh;" id="table">
        <table id="example" class="table  table-bordered">
        <thead class="sticky-top bg-dark text-white">
        <tr>
            <th>#</th>
            <th>Filial</th>
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
        @foreach($drivers as $driver)
            <tr id="tr" class="
              @if($driver->status == 3 || $driver->status == 2)
                bg-warning
             @elseif($driver->status < 0 || $driver->status == 1)
                bg-danger text-white
                @else
                bg-success
             @endif
                ">
                <td class="nr">{{$driver->id}}</td>
                <td>{{$driver->company}}</td>
                <td>{{$driver->driver}}</td>
                <td>{{$driver->tel_d}}</td>
                <td>{{$driver->car}} <br> {{$driver->car_number}}</td>
                <td>{{$driver->c_start}} dan<br> {{$driver->c_end}} gacha</td>
                <td>{{$driver->l_start}} dan<br> {{$driver->l_end}} gacha</td>
                <td class="puli">{{number_format($driver->total_cost,0,',',' ')}}</td>
                <td class="puli">{{number_format($driver->paid_cost,0,',',' ')}}</td>
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

@section('jscode')

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




@endsection



