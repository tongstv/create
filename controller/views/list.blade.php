@extends("app")
@section("title")
    {{Name}}
@stop
@section("content")


    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">

                    <div class="d-inline">

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url()}}"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>{{Name}}</h3>
                </div>
                <div class="card-body">



                    <div class="dt-responsive">

                        <div class="row">
                            <div class="col-md-12">
                                <a  href="{{url('admin/{{name}}')}}/create" title="Thêm {{name}}" class="btn btn-outline-success btn-rounded modalopen mr-2">Thêm sim</a>

                                <a  href="{{url('admin/{{name}}')}}/export" title="Xuất ra excel" class="btn btn-outline-secondary btn-rounded mr-2" target="_blank" ">Xuất ra excel</a>

                                <a  href="{{url('admin/{{name}}')}}/dellall" title="Xóa hết" class="btn btn-outline-danger btn-rounded" target="_blank" ">Xóa hết</a>

                                <!--
                                <button type="button" class="btn btn-outline-secondary btn-rounded">Secondary</button>
                                <button type="button" class="btn btn-outline-success btn-rounded">Success</button>
                                <button type="button" class="btn btn-outline-danger btn-rounded">Danger</button>
                                <button type="button" class="btn btn-outline-warning btn-rounded">Warning</button>
                                <button type="button" class="btn btn-outline-info btn-rounded">Info</button>
                                <button type="button" class="btn btn-outline-light btn-rounded">Light</button>
                                <button type="button" class="btn btn-outline-dark btn-rounded">Dark</button>
                                <button type="button" class="btn btn-outline-link btn-rounded">Link</button>

                                -->

                            </div>

                        </div>

                    </div>
                    <?php
                    $columns = ['id', 'name'];
                    ?>


                    <table id="lang-dt" class="table table-hover mb-0" class="display"
                           style="width:100%">
                        <thead>
                        <tr>
                            <th class="nosort" width="10">
                                <label class="custom-control custom-checkbox m-0">
                                    <input type="checkbox" class="custom-control-input" id="selectall" name="" value="option2">
                                    <span class="custom-control-label">&nbsp;</span>
                                </label>
                            </th>
                            @foreach($columns AS $col)
                                <th>{{$col}}</th>
                            @endforeach
                            <th class="text-center">Action</th>

                        </tr>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>
                </div>


            </div>
        </div>
    </div>






    <div class="modal fade edit-layout-modal" id="modalright" tabindex="-1" role="dialog"
         aria-labelledby="editLayoutItemLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLayoutItemLabel">Cập nhật Mgsim</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">






                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>

                </div>
            </div>
        </div>
    </div>


@stop
@push("script")
    <link rel="stylesheet" href="{{url()}}/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <script src="{{url()}}/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{url()}}/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{url()}}/plugins/screenfull/dist/screenfull.js"></script>
    <script src="{{url()}}/plugins/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{url()}}/plugins/summernote/dist/summernote-bs4.min.js"></script>
    <script src="{{url()}}/js/theme.min.js"></script>

    <script>

        var base_ctl = '{{url()}}/admin/{{name}}';
    </script>

    <script src="{{url()}}/js/edit.js"></script>
    <script>


        $(document).ready(function () {


            $('#lang-dt').DataTable({

                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Vietnamese.json"
                },
                "processing": true,
                "serverSide": true,
                type: 'GET',
                "ajax": base_ctl + "/getData",
                dom: 'Bfrtip',
                buttons: [
                    'colvis',
                    'excel',
                    'print',

                ],
                columns: [

                    {data: 'id', name: 'id', class: 'text-center', orderable: false,  render: function ( data, type, row ) {
                            return `    <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input select_all_child" id="" name="check[]" value="`+data+`">
                                                    <span class="custom-control-label">&nbsp;</span>
                                                </label>`;
                        }},
                    {data: 'name', name: 'name', searchable: true}

                ],
                "columnDefs": [
                    {
                        targets: 0,
                        checkboxes: {
                            selectRow: true
                        },
                        "targets": [2],
                        "data": "id", "render": function (id, type, full, meta) {
                            return '<div class="list-actions text-center">\n' +
                                '                                                    <a title="Chi tiết" href="{{url('admin/{{name}}')}}/'+id+'/view" class="modalopen"><i class="ik mr-15 ik-eye f-16 text-green"></i></a>\n' +
        '                                                    <a title="Sửa dữ liệu" href="{{url('admin/{{name}}')}}/'+id+'/edit"  class="modalopen"><i class="ik f-16 mr-15 ik-edit text-green"></i></a>\n' +
        '                                                    <a href="#" data-id="' + id + '"  class="list-delete"><i class="ik ik-trash-2 f-16 text-red"></i></a>\n' +
        '                                                </div>';
        }
        }
        ]


        });


        });

    </script>


@endpush
