<div class="card-header d-flex justify-content-between">
    <div>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-create">
            <i class="fa fa-plus"></i> Qo'shish
        </button>
    </div>
    <div class="modal fade" id="modal-create">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Maqola yaratish</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('maqola.store')}}" id="form">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ \Illuminate\Support\Facades\Auth::id() }}">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nomi:</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="nashriyot">Nashriyot:</label>
                                <input type="text" name="nashriyot" class="form-control" id="nashriyot" required>
                            </div>
                            <div class="form-group">
                                <label for="sana">Sana:</label>
                                <input type="date" name="sana" class="form-control" id="sana" required>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Bekor qilish</button>
                            <button type="submit" class="btn btn-primary">Saqlash</button>
                        </div>
                    </form>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
