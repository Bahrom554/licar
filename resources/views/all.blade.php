@extends('app')
@section('main_content')
    <table id="example" class="table  table-bordered  ">
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
            <th>To'langan Kun</th>
            <th>Sozlash</th>



        </tr>
        </thead>
        <tbody>
        @foreach($drivers as $driver)
        <tr id="tr">
            <td class="nr">{{$driver->id}}</td>
            <td>{{$driver->driver}}</td>
            <td>{{$driver->tel_d}}</td>
            <td>{{$driver->owner}}</td>
            <td>{{$driver->tel_o}}</td>
            <td>{{$driver->car}} <br> {{$driver->car_number}}</td>
            <td>{{$driver->l_start}} dan<br> {{$driver->l_end}} gacha</td>
            <td>{{$driver->total_cost}}</td>
             <td>{{$driver->paid_cost}}</td>
            <td id="status">{{$driver->status}}</td>
            <td class="bg-white">
               <div class="d-flex justify-content-around ">
                   <a href="#paymentModal-{{$driver->id}}"  class="use-address" data-toggle="modal"><i class="fas fa-dollar-sign text-success" data-toggle="tooltip" title="To'lovQilish"></i></a>
                  <a href="#editModal-{{$driver->id}}" class="edit" data-toggle="modal"><i class="fas fa-pen text-warning" data-toggle="tooltip" title="Tahrirlash"></i></a>
                   <a href="#deleteModal-{{$driver->id}}" class="delete" data-toggle="modal"><i class="fas fa-trash text-danger" data-toggle="tooltip" title="O'chirish"></i></a>
               </div>
            </td>
        </tr>
{{--        payment--}}
        <div id="paymentModal-{{$driver->id}}" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="payform" role="form" action="{{route('paid.driver',$driver->id)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('PUT')}}

                        <div class="modal-header">
                            <h4 class="modal-title">To'lo'v qilish</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Haydovchi.F.I.SH</label>
                                        <input type="text" id="paydriver" class="form-control" disabled value="{{$driver->driver}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Haydovchi.Tel</label>
                                        <input type="tel" class="form-control" disabled value="{{$driver->tel_d}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Umumiy To'lo'v Summasi</label>
                                        <input type="text" class="form-control" disabled value="{{$driver->total_cost}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label> To'langan Summa</label>
                                        <input type="text" class="form-control" disabled value="{{$driver->paid_cost}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Litsenziya Tugash Sanasi</label>
                                        <input type="date" class="form-control" disabled value="{{$driver->l_end}}" >
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Yangi To'lo'v Qilish</label>
                                        <input type="number" class="form-control" name="newpay" placeholder="To'lo'v Summasini kiriting" required>
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
{{--            edit--}}
        <div id="editModal-{{$driver->id}}" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form role="form" action="{{route('driver.update',$driver->id)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="modal-header">
                            <h4 class="modal-title">Ma'lumotlarni Tahrirlash</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Haydovchi.F.I.SH</label>
                                        <input type="text" class="form-control" name="driver" required value="{{$driver->driver}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Haydovchi.Tel</label>
                                        <input type="tel" class="form-control" name="tel_d" required value="{{$driver->tel_d}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>AvtoEgasi.F.I.SH</label>
                                        <input type="text" class="form-control" name="owner" required value="{{$driver->owner}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>AvtoEgasi.Tel</label>
                                        <input type="tel" class="form-control" name="tel_o" required value="{{$driver->tel_o}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>AvtoRusumi</label>
                                        <input type="text" class="form-control" name="car" required value="{{$driver->car}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>DavlatRaqami</label>
                                        <input type="text" class="form-control" name="car_number" required value="{{$driver->car_number}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Litsenziya Chiqish Sanasi</label>
                                        <input type="date" class="form-control" name="l_start" required value="{{$driver->l_start}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Litsenziya Tugash Sanasi</label>
                                        <input type="date" class="form-control" name="l_end" required value="{{$driver->l_end}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Umumiy To'lo'v Summasi</label>
                                        <input type="text" class="form-control"  name="total_cost" required value="{{$driver->total_cost}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Umumiy To'langan Summa</label>
                                        <input type="text" class="form-control" name="paid_cost" required value="{{$driver->paid_cost}}">
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

{{--delete--}}
        <div id="deleteModal-{{$driver->id}}" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{route('driver.destroy',$driver->id)}}" method="post" >
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <div class="modal-header">
                            <h2 class="modal-title">{{$driver->driver}}</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Chindanxam ushbu m'alumotlarni o'chirmoqchimisz?</p>
                            <p class="text-danger"><small>O'chirilgan ma'lumot qayta tiklanmaydi!</small></p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach




        </tbody>
    </table>
@endsection
{{--pagination--}}
@section('pagination')
    <ul class="pagination justify-content-end mt-2 mr-3">
        {{$drivers->links()}}
    </ul>
@endsection



