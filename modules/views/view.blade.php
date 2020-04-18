
<div class="card">

    <div class="card-body">
        <form id="form"  method="patch" action="{{url('{{name}}')}}{{$row->id}}">

            <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control"  name="name" value="{{@$row->name}}"
                           placeholder="Số sim" required>
                </div>
            </div>


            <button type="submit" class="btn btn-lg btn-primary">Thêm mới</button>
            <button type="reset" class="btn btn-lg btn-default">Làm lại</button>

        </form>

    </div>
</div>
