@extends('layout')

@section('content')
    <div class="ahihi">
        <div class="container">
            <div class="row data-in">
                <div class="col-lg-6 box-data">
                    <div>
                        <ul>
                            @foreach ($data1 as $item)
                                <li>
                                    <div class="left">{{ $item->title }}</div>
                                    <div class="right">
                                        <div>
                                            <a class="btn btn-primary" data-toggle="modal" data-target="#modal-edit" data-id={{ $item->id }} href="#">Chỉnh sửa</a>
                                            <a class="btn btn-primary" href="#">Xóa</a>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 box-data box-data-2">
                        <ul>
                            @foreach ($data2 as $item)
                                <li>
                                    <div class="left">{{ $item->title }}</div>
                                    <div class="right">
                                        <div>
                                            <a class="btn btn-primary" data-toggle="modal" data-target="#modal-edit" data-id={{ $item->id }} href="#">Chỉnh sửa</a>
                                            <a class="btn btn-primary" href="#">Xóa</a>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                            @endforeach
                        </ul>
                </div>
            </div>
            <div class="row button-manager">
                <div class="col-lg-4"><button class="btn btn-primary" data-toggle="modal" data-target="#modal-add">Thêm Luật</button></div>
                <div class="col-lg-4"><button class="btn btn-primary" data-toggle="modal" data-target="#modal-add-hypothesis">Thêm triệu chứng</button></div>
                <div class="col-lg-4"><button class="btn btn-primary" data-toggle="modal" data-target="#modal-process">Chuẩn đoán</button></div>
            </div>
            <div class="row data-process">
                
            </div>

        </div>
    </div>
    <div class="modal" id="modal-add">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm luật</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <label for="">Triệu chứng</label>
                    <select class="form-control col-md-11 select-add" multiple>
                        @php $stt=0; @endphp
                        @foreach ($data1 as $item)
                            <option value="{{ $item->id }}">{{ "A".++$stt.": "}}{{ $item->title}}</option>
                        @endforeach
                        @php $stt=0; @endphp
                        <option disabled>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bệnh trung gian</option>
                        @foreach ($data2 as $item)
                            <option value="{{ $item->id }}">{{ "B".++$stt.": "}}{{ $item->title}}</option>
                        @endforeach
                    </select>
                    <input type="text" name="tile" class="title-add form-control col-md-11">
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn save-add btn-info">Thêm</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">đóng</button>
            </div>

            </div>
        </div>
    </div>

    <div class="modal" id="modal-process">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Process</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <select class="form-control col-md-11 select-process" multiple>
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                    <input type="text" name="" class="title-process form-control col-md-11">
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn save-process btn-info">Xử lý</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">đóng</button>
            </div>

            </div>
        </div>
    </div>

    <div class="modal" id="modal-edit">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Edit</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Modal body..
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn save-process btn-info">Xử lý</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
    </div>

    <div class="modal" id="modal-edit-hypothesis">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Edit</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Modal body..
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn save-process btn-info">Xử lý</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
    </div>
    
    <div class="modal" id="modal-add-hypothesis">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm triệu chứng</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <label for="tile">Tên Triệu chứng: </label>
                    <input type="text" name="tile" class="title-add form-control col-md-11">
            </div>


            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn save-add-one btn-info">Xử lý</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
    </div>

@endsection


@section('more.script')
    <script type="text/javascript">
        // jQuery(document).ready(function($) {
        //     $('.selectpicker').selectpicker();              
        // });
        $('.save-add-one').click(function (e) { 
            e.preventDefault();
            $.ajax({
                type: "post",
                url: "{{ route('addone') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    title: $('#modal-add-hypothesis .title-add').val(),
                },
                success: function (response) {
                    
                }
            });
        });

        $('#modal-add .save-add').click(function (e) { 
            e.preventDefault();
            console.log($('#modal-add .select-add').val())
            $.ajax({
                type: "post",
                url: "{{ route('addtwo') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    arr: $('#modal-add .select-add').val(),
                    title: $('#modal-add .title-add').val(),
                },
                success: function (response) {
                    
                }
            });
        });

        
        
    </script>
@endsection