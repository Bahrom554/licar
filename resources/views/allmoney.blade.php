@extends('app')
@section('main_content')

    <div class="overflow-auto" style="height: 87vh;">
    <form role="form" action="{{route('payment.store')}}" method="POST">
                {{csrf_field()}}
         <div class="row">
            <div class="col-5">
                <div class="input-group mb-3">
                    <select class="custom-select" id="inputGroupSelect01" name="company">
                       @foreach($companies as $compan)
                       
                        <option value="{{$compan->company}}" 
                        {{$compan->company == $company ? 'selected' : ''}}
                       >{{$compan->company}}</option>
                      @endforeach
                    </select>
                </div>
          </div>
            <div class="col-2">
                <input type="date" name="date" value="{{$date}}" class="form-control">
            </div>
            <div class="col-4">
                <input type="text" name="money" class="form-control" value="{{number_format($count,0,',',' ')}} sum" disabled>
            </div>
            <div class="col-1">
                <button type="submit" class="btn btn-success">Success</button>
            </div>
        </div>
    </form>
    </div>

@endsection
