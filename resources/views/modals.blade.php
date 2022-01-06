<div id="createModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" action="{{route('driver.store')}}" method="POST">
                {{csrf_field()}}
                <div class="modal-header">
                    <h4 class="modal-title">Yangi Haydovchi Qo'shish</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Haydovchi.F.I.SH</label>
                                <input type="text" name="driver" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Haydovchi.Tel</label>
                                <input type="tel" name="tel_d" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>AvtoEgasi.F.I.SH</label>
                                <input type="text" name="owner" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>AvtoEgasi.Tel</label>
                                <input type="tel" name="tel_o" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>AvtoRusumi</label>
                                <input type="text" name="car" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>DavlatRaqami</label>
                                <input type="text" name="car_number" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Litsenziya Chiqish Sanasi</label>
                                <input type="date" name="l_start" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Litsenziya Tugash Sanasi</label>
                                <input type="date" name="l_end" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Umumiy To'lo'v Summasi</label>
                                <input type="number" min="0" name="total_cost" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>To'lo'v</label>
                                <input type="number" min="0" name="paid_cost" class="form-control" required>
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
<div id="paymentModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="payform" role="form"  method="POST">
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
                                <input  type="text" id="paydriver" class="form-control" value="" disabled >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Haydovchi.Tel</label>
                                <input type="tel" class="form-control" id="paytel_d" value="" disabled >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Umumiy To'lo'v Summasi</label>
                                <input type="text" class="form-control" id="pay_total" value="" disabled >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> To'langan Summa</label>
                                <input type="text" class="form-control" id="pay_cost" value="" disabled >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Litsenziya Tugash Sanasi</label>
                                <input type="date" class="form-control" id="pay_l_end" value="" disabled >
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
<div id="deleteModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="delform"  method="post" >
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <div class="modal-header">
                    <h2 class="modal-title" id="deldrive"></h2>
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
<div id="editModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" id="editform"   method="POST">
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
                                <input type="text" class="form-control" name="driver" id="editdrive" required >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Haydovchi.Tel</label>
                                <input type="tel" class="form-control" name="tel_d" id="edittel_d" required >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>AvtoEgasi.F.I.SH</label>
                                <input type="text" class="form-control" name="owner" id="editowner" required >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>AvtoEgasi.Tel</label>
                                <input type="tel" class="form-control" name="tel_o" id="edittel_o" required >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>AvtoRusumi</label>
                                <input type="text" class="form-control" name="car" id="editcar" required >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>DavlatRaqami</label>
                                <input type="text" class="form-control" name="car_number"  id="editcar_number" required >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Litsenziya Chiqish Sanasi</label>
                                <input type="date" class="form-control" name="l_start"  id="editl_start" required >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Litsenziya Tugash Sanasi</label>
                                <input type="date" class="form-control" name="l_end" id="editl_end" required >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Umumiy To'lo'v Summasi</label>
                                <input type="number" min="0" class="form-control"  name="total_cost" id="edittotal_cost" required >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Umumiy To'langan Summa</label>
                                <input type="number" min="0" class="form-control" name="paid_cost"  id="editpaid_cost" required >
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
