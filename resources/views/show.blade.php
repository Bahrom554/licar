@extends('app')
@section('main_content')
    @include('modals')
    <div class=" emp-profile position-relative mx-2">
        <a href="{{route('driver.index')}}" class="closer"><i class="far fa-times-circle fa-3x"></i></a>
        <div class="row mainn">
            <div class="col-lg-2  mt-2">
                <div class="profile-img">
                    <img src="{{asset('svg/download.png')}}" alt=""/>

                </div>
            </div>
            <div class="col-lg-3  mt-2 ">
                <div class="profile-head">
                    <h5 style="text-transform: uppercase">
                        {{$driver->driver}}
                    </h5>
                    <h6>
                        {{$driver->tel_d}}
                    </h6>
                    <p class="proile-rating">INN: <span>{{$driver->inn}}</span></p>
                    <p class="proile-rating">INPS: <span>{{$driver->inps}}</span></p>
                    <p class="proile-rating">Holati:<span class=" p-1
                           @if($driver->status == 2 || $driver->debt == 2)
                            bg-warning
                          @elseif($driver->status ==1 || $driver->debt == 1)
                            bg-danger text-white
                          @else
                            bg-success
                          @endif
                          ">
                        @if($driver->status == 2 )
                            L yaqn!
                       @elseif($driver->status == 1 )
                            L tugagan!!!
                        @endif
                        @if($driver->debt == 2)
                            T yaqn!
                        @elseif($driver->debt == 1)
                            Qarzdor!!!
                        @endif
                        </span>
                    </p>
                    <h5>{{$driver->company}}</h5>
                </div>
            </div>
            <div class=" col-lg-5 ">
                <ul class="nav nav-tabs mb-3 flex-nowrap " id="myTab" role="tablist">
                    <li class="nav-item flex-shrink-1">
                        <a class="nav-link active " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Qisqacha</a>
                    </li>
                    <li class="nav-item flex-shrink-1">
                        <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Vaqtlar</a>
                    </li>
                    <li class="nav-item flex-shrink-1">
                        <a class="nav-link " id="pay-tab" data-toggle="tab" href="#pay" role="tab" aria-controls="profile" aria-selected="false">To'lovlar</a>
                    </li>
                </ul>
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-6 ">
                                <label>Avtomobil Rusumi</label>
                            </div>
                            <div class="col-6">
                                <p>{{$driver->car}}</p>
                            </div>
                            <div class="col-6 ">
                                <label>Avtomobil Davlat Raqami</label>
                            </div>
                            <div class="col-6">
                                <p>{{$driver->car_number}}</p>
                            </div>
                            <div class="col-6 ">
                                <label>Avtomobil Egasi</label>
                            </div>
                            <div class="col-6">
                                <p>{{$driver->owner}}</p>
                            </div>
                            <div class="col-6 ">
                                <label>Telfon nomeri</label>
                            </div>
                            <div class="col-6">
                                <p>{{$driver->tel_o}}</p>
                            </div>


                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-6 ">
                                <label>Litsenziya berilgan Sana</label>
                            </div>
                            <div class="col-6">
                                <p>{{$driver->l_start}}</p>
                            </div>
                            <div class="col-6 ">
                                <label>Litsenziya tugash sanasi</label>
                            </div>
                            <div class="col-6">
                                <p>{{$driver->l_end}}</p>
                            </div>
                            <div class="col-6 ">
                                <label>Shartnoma Tuzilgan Sana</label>
                            </div>
                            <div class="col-6">
                                <p>{{$driver->c_start}}</p>
                            </div>
                            <div class="col-6 ">
                                <label>Shartnoma  tugash sanasi</label>
                            </div>
                            <div class="col-6">
                                <p>{{$driver->c_end}}</p>
                            </div>
                        </div>



                    </div>
                    <div class="tab-pane fade" id="pay" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-6 ">
                                <label>Litsenziya uchun to'lov </label>
                            </div>
                            <div class="col-6">
                                <p>{{number_format($driver->l_cost,0,',',' ')}} so'm</p>
                            </div>
                            <div class="col-6 ">
                                <label>Oylik To'lov</label>
                            </div>
                            <div class="col-6">
                                <p>
                                     {{number_format($driver->total_cost,0,',',' ')}} so'm</p>
                            </div>
                            <div class="col-6 ">
                                <label>To'landi</label>
                            </div>
                            <div class="col-6">
                                <p>{{number_format($driver->paid_cost,0,',',' ')}} so'm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 d-flex flex-column justify-content-around">

                <a href="#paymentModal" class="btn btn-success d-block py-3  my-1"  data-toggle="modal">To'lov Qilish</a>
                <a href="#editModal" class=" btn btn-warning  d-block py-3 my-1" data-toggle="modal">Tahrirlash</a>
                <a href="#deleteModal" class="btn btn-danger d-block py-3 my-1" data-toggle="modal">O'chirish</a>


            </div>
        </div>
        <hr>
        <h2 class="text-center mt-md-5">To'lovlar Tarixi</h2>
        <div class="row ">
            <div class="col-2 col-md-1 table--col ">
                <table class="table--history ml-auto my-5">
                    <tr class="heading--tr">
                        <th class="heading--table bg-success "> Sana</th>
                    </tr>
                    <tr class="heading--tr">
                        <th class="heading--table bg-success ">To'lov</th>
                    </tr>
                </table>
            </div>
            <div class="col-10 col-md-11 table--col">
                <div class="overflow-auto">
                    <table class="table--history my-5" >
                        <tr>
                        @foreach($payments as $payment)
                            <td style="white-space: nowrap"> {{$payment->created_at->format('Y-m-d')}}</td>
                            @endforeach

                        </tr>
                        <tr>

                            @foreach($payments as $payment)
                                <td> {{number_format($payment->payment,0,',',' ')}} sum</td>
                            @endforeach

                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection
