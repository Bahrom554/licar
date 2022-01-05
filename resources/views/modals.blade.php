@extends('app')
@section('main_content')
<div>
    {{--<!-- edit Modal -->--}}
    {{--<div id="editModal" class="modal fade">--}}
    {{--    <div class="modal-dialog">--}}
    {{--        <div class="modal-content">--}}
    {{--            <form>--}}
    {{--                <div class="modal-header">--}}
    {{--                    <h4 class="modal-title">Ma'lumotlarni Tahrirlash</h4>--}}
    {{--                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
    {{--                </div>--}}
    {{--                <div class="modal-body">--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col-6">--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label>Haydovchi.F.I.SH</label>--}}
    {{--                                <input type="text" class="form-control" required>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-6">--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label>Haydovchi.Tel</label>--}}
    {{--                                <input type="tel" class="form-control" required>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-6">--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label>AvtoEgasi.F.I.SH</label>--}}
    {{--                                <input type="text" class="form-control" required>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-6">--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label>AvtoEgasi.Tel</label>--}}
    {{--                                <input type="tel" class="form-control" required>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-6">--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label>AvtoRusumi</label>--}}
    {{--                                <input type="text" class="form-control" required>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-6">--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label>DavlatRaqami</label>--}}
    {{--                                <input type="text" class="form-control" required>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-6">--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label>Litsenziya Chiqish Sanasi</label>--}}
    {{--                                <input type="date" class="form-control" required>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-6">--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label>Litsenziya Tugash Sanasi</label>--}}
    {{--                                <input type="date" class="form-control" required>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-6">--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label>Umumiy To'lo'v Summasi</label>--}}
    {{--                                <input type="text" class="form-control" required>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-6">--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label>Umumiy To'langan Summa</label>--}}
    {{--                                <input type="text" class="form-control" required>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}


    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="modal-footer">--}}
    {{--                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">--}}
    {{--                    <input type="submit" class="btn btn-info" value="Save">--}}
    {{--                </div>--}}
    {{--            </form>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
    {{--<!-- payment modal -->--}}
    {{--<div id="paymentModal" class="modal fade">--}}
    {{--    <div class="modal-dialog">--}}
    {{--        <div class="modal-content">--}}
    {{--            <form id="payform" role="form" action="{{route('driver.update',$driver->id)}}" method="POST">--}}
    {{--                {{csrf_field()}}--}}
    {{--                {{method_field('PUT')}}--}}

    {{--                <div class="modal-header">--}}
    {{--                    <h4 class="modal-title">To'lo'v qilish</h4>--}}
    {{--                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
    {{--                </div>--}}
    {{--                <div class="modal-body">--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col-6">--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label>Haydovchi.F.I.SH</label>--}}
    {{--                                <input type="text" id="paydriver" class="form-control" disabled >--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-6">--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label>Haydovchi.Tel</label>--}}
    {{--                                <input type="tel" class="form-control" disabled>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-6">--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label>Umumiy To'lo'v Summasi</label>--}}
    {{--                                <input type="text" class="form-control" disabled >--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-6">--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label> To'langan Summa</label>--}}
    {{--                                <input type="text" class="form-control" disabled>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-6">--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label>Litsenziya Tugash Sanasi</label>--}}
    {{--                                <input type="date" class="form-control" disabled >--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-6">--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label>Yangi To'lo'v Qilish</label>--}}
    {{--                                <input type="text" class="form-control" name="newpay" placeholder="To'lo'v Summasini kiriting" required>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}


    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="modal-footer">--}}
    {{--                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">--}}
    {{--                    <input type="submit" class="btn btn-info" value="Save">--}}
    {{--                </div>--}}
    {{--            </form>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}

    {{--<!-- delete Modal -->--}}
    {{--<div id="deleteModal" class="modal fade">--}}
    {{--    <div class="modal-dialog">--}}
    {{--        <div class="modal-content">--}}
    {{--            <form>--}}
    {{--                <div class="modal-header">--}}
    {{--                    <h4 class="modal-title">Haydovchi O'chirish</h4>--}}
    {{--                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
    {{--                </div>--}}
    {{--                <div class="modal-body">--}}
    {{--                    <p>Chindanxam ushbu m'alumotlarni o'chirmoqchimisz?</p>--}}
    {{--                    <p class="text-warning"><small>O'chirilgan ma'lumot qayta tiklanmaydi!</small></p>--}}
    {{--                </div>--}}
    {{--                <div class="modal-footer">--}}
    {{--                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">--}}
    {{--                    <input type="submit" class="btn btn-danger" value="Delete">--}}
    {{--                </div>--}}
    {{--            </form>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
</div>
{{--<div id="editModal-{{$driver->id}}" class="modal fade show">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-content">--}}
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

                <div >
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
{{--                    <input type="submit" class="btn btn-info" value="Save">--}}
                </div>
                <button type="submit">submit</button>
            </form>
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
