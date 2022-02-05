{{--create MOdal--}}

{{--payment Modal--}}
<div id="paymentModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="payform" role="form" action="{{route('paid.driver',$driver->id)}}"  method="POST">
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
                                <input  type="text" id="paydriver" class="form-control" value="{{$driver->driver}}" disabled >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Haydovchi.Tel</label>
                                <input type="tel" class="form-control" id="paytel_d" value="{{$driver->tel_d}}" disabled >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Oylik Summasi</label>
                                <input type="text" class="form-control" id="pay_total" value="{{$driver->total_cost}}" disabled >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> To'langan Summa</label>
                                <input type="text" class="form-control" id="pay_cost" value="{{$driver->paid_cost}}" disabled >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Sana</label>
                                <input type="date" name="created_at" class="form-control" value="{{date("Y-m-d")}}" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Yangi To'lo'v Qilish</label>
                                <input type="number" min="0" class="form-control" name="newpay" placeholder="To'lo'v Summasini kiriting" required>
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
{{--delete Modal--}}
<div id="deleteModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="delform"  method="post" action="{{route('driver.destroy',$driver->id)}}" method="post" >
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <div class="modal-header">
                    <h2 class="modal-title" id="deldrive">{{$driver->driver}}</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Chindanxam ushbu m'alumotlarni o'chirmoqchimisz?</p>

                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>
{{--edit Modal--}}
<div id="editModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" id="editform" action="{{route('driver.update',$driver->id)}}"   method="POST">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="modal-header">
                    <h4 class="modal-title">Ma'lumotlarni Tahrirlash</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label>Haydovchi.F.I.SH</label>
                                <input type="text" class="form-control" name="driver" id="editdrive" value="{{$driver->driver}}"  required >
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Haydovchi.Tel</label>
                                <input type="tel" class="form-control" name="tel_d" id="edittel_d" value="{{$driver->tel_d}}" required >
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label>INN</label>
                                <input id="inn" type="text"  name="inn" class="form-control" value="{{$driver->inn}}" required >
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label>INPS</label>
                                <input id="inps" type="text"  name="inps" class="form-control" value="{{$driver->inps}}" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>AvtoEgasi.F.I.SH</label>
                                <input type="text" class="form-control" name="owner" id="editowner" value="{{$driver->owner}}" required >
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>AvtoEgasi.Tel</label>
                                <input type="tel" class="form-control" name="tel_o" id="edittel_o" value="{{$driver->tel_o}}"  required >
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label>INN</label>
                                <input id="inn" type="text"  name="inn_o" class="form-control" value="{{$driver->inn_o}}" required >
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label>INPS</label>
                                <input id="inps" type="text"  name="inps_o" class="form-control" value="{{$driver->inps_o}}" required >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>AvtoRusumi</label>
                                <select type="text" name="car" class="form-control"  id="editcar">
                                    <option value="Matiz" {{$driver->car == "Matiz" ? 'selected' : ''}}>Matiz</option>
                                    <option value="Cobalt" {{$driver->car == "Cobalt" ? 'selected' : ''}}>Cobalt</option>
                                    <option value="Nexia" {{$driver->car == "Nexia" ? 'selected' : ''}}>Nexia</option>
                                    <option value="Damas" {{$driver->car == "Damas" ? 'selected' : ''}}>Damas</option>
                                    <option value="Jentra" {{$driver->car == "Jentra" ? 'selected' : ''}}>Jentra</option>
                                    <option value="Spark" {{$driver->car == "Spark" ? 'selected' : ''}}>Spark</option>
                                    <option value="Malibu" {{$driver->car == "Malibu" ? 'selected' : ''}}>Malibu</option>
                                    <option value="Captiva" {{$driver->car == "Captiva" ? 'selected' : ''}}>Captiva</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>DavlatRaqami</label>
                                <input type="text" class="form-control" name="car_number"  id="editcar_number"  value="{{$driver->car_number}}"  required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Litsenziya Berilgan sana</label>
                                <input type="date" class="form-control" name="l_start"  id="editl_start" value="{{$driver->l_start}}"  required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Litsenziya Tugash Sanasi</label>
                                <input type="date" class="form-control" name="l_end" id="editl_end"  value="{{$driver->l_end}}" required >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Shartnoma tuzilgan sana</label>
                                <input type="date" class="form-control" name="c_start"  id="editl_start" value="{{$driver->c_start}}"  required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Shartnoma tugash sanasi</label>
                                <input type="date" class="form-control" name="c_end" id="editl_end"  value="{{$driver->c_end}}"  required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Oylik To'lo'v</label>
                                <input id="edittotal_cost" type="number" min="0" name="total_cost" class="form-control" value="{{$driver->total_cost}}" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>To'landi</label>
                                <input id="editpaid_cost" type="number" min="0" name="paid_cost" class="form-control" value="{{$driver->paid_cost}}" disabled>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Filial Nomi</label>
                                <input id="company"  type="text"  name="company" class="form-control" value="{{$driver->company}}" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Litsenziya uchun To'lov</label>
                                <input id="l_cost" type="number" min="0" name="l_cost" class="form-control" value="{{$driver->l_cost}}" required>
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

