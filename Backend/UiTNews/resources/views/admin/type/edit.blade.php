<form action="{{ route('types.update',$type->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="row">
        <div class="col-md-12">
            <div class="form-group form-group-default">
                <label style=" font-weight: bold;">TYPE NAME</label>
                <input required name="TYPE_NAME" type="text" class="form-control" value="{{ $type->TYPE_NAME }}" required/> <br>
            </div>
        </div>
    </div>
    <div class="modal-footer no-bd">
        <button type="submit" id="addRowButton" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>     
    </div>
</form>

