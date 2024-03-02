
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Maqola tahrirlash</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('maqola.update',1)}}" method="post" id="edit_form">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id" id="edit_id">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="edit_name">Nomi:</label>
                            <input type="text" name="name" class="form-control" id="edit_name">
                        </div>
                        <div class="form-group">
                            <label for="edit_nashriyot">Nashriyot:</label>
                            <input type="text" name="nashriyot" class="form-control" id="edit_nashriyot">
                        </div>
                        <div class="form-group">
                            <label for="edit_sana">Sana:</label>
                            <input type="text" name="sana" class="form-control" id="edit_sana">
                        </div>
                    </div>
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
