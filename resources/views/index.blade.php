@extends('layout')

@section('content')
    <div class="ahihi">
        <div class="container">
            <div class="row data-in">
                <div class="col-lg-6"><h2>Triệu chứng</h2></div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5"><h2>Luật</h2></div>
                <div class="col-lg-6 box-data">
                    <div>
                        <ul>
                            @foreach ($data1 as $item)
                                <li>
                                    <div class="left xxx-{{ $item->id }}" >{{ $item->title }}</div>
                                    <div class="right">
                                        <div>
                                            <a class="btn btn-primary edit1" data-toggle="modal" data-target="#modal-edit-hypothesis" data-id={{ $item->id }} href="#">Chỉnh sửa</a>
                                            <a class="btn btn-primary delete1" data-id={{ $item->id }} href="#">Xóa</a>
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
                                    <div class="left yyy-{{ $item->id }}">{{ $item->title }}</div>
                                    <div class="right">
                                        <div>
                                            <a class="btn btn-primary edit2" data-toggle="modal" data-target="#modal-edit" data-id={{ $item->id }} href="#">Chỉnh sửa</a>
                                            <a class="btn btn-primary delete2" data-id={{ $item->id }} href="#">Xóa</a>
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
                <div class="col-lg-4"><button class="btn btn-primary btn-alert" style="display: none" data-toggle="modal" data-target="#modal-alert">x</button></div>
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
                    <label style="margin-left: 10px" for="">Triệu chứng</label>
                    <select class="form-control col-md-11 select-add" multiple>
                        @php $stt=0; @endphp
                        @foreach ($data1 as $item)
                            <option  value="{{ $item->id }}">{{ "A".++$stt.": "}}{{ $item->title}}</option>
                        @endforeach
                        @php $stt=0; @endphp
                        <option disabled>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bệnh trung gian</option>
                        @foreach ($data2 as $item)
                            <option value="{{ $item->id }}">{{ "B".++$stt.": "}}{{ $item->title}}</option>
                        @endforeach
                    </select>
                    <label style="margin-left: 10px" for="">Tiêu đề</label>
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
                <h4 class="modal-title">Xử lý</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <label style="margin-left: 10px" for="">Chọn triệu chứng</label>
                    <select class="form-control col-md-11 select-process" multiple>
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






    <div class="modal" id="modal-edit-hypothesis">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Chỉnh sửa triệu chứng</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <label for="tile">Tên Triệu chứng: </label>
                <input type="text" name="tile" class="title-edit form-control col-md-11" data-id="">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn save-edit1 btn-info" data-id="">Lưu lại</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
    </div>






    <div class="modal" id="modal-edit">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Chỉnh sửa luật</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <label style="margin-left: 10px" for="">Triệu chứng</label>
                <select class="form-control col-md-11 select-edit" multiple>
                    @php $stt=0; @endphp
                    @foreach ($data1 as $item)
                        <option selected class="data-check data-check-{{ $item->id }}" value="{{ $item->id }}">{{ "A".++$stt.": "}}{{ $item->title}}</option>
                    @endforeach
                    @php $stt=0; @endphp
                    <option disabled>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bệnh trung gian</option>
                    @foreach ($data2 as $item)
                        <option selected class="data-check data-check-{{ $item->id }}" value="{{ $item->id }}">{{ "B".++$stt.": "}}{{ $item->title}}</option>
                    @endforeach
                </select>
                <label style="margin-left: 10px" for="">Tiêu đề</label>
                <input type="text" name="tile" class="title-edit form-control col-md-11" data-id="">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn save-edit2 btn-info">Xử lý</button>
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



    <div class="modal" id="modal-alert">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Kết quả</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div>
                    <i class="message"></i>
                    <div class="left" ><span>Triệu chứng</span>
                        <ul>
                            <li>Ghẻ</li>
                        </ul>
                    </div>
                    <div class="right" ><span>Kết luận</span>
                        <ul>
                            <li>Ghẻ</li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
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
                    alert("Thành Công");
                    $('#modal-add .close').click();
                    $('#modal-add-hypothesis .close').click();
                    window.location = window.location;
                }
            });
        });

        //=========================================================================================

        $('#modal-add .save-add').click(function (e) { 
            e.preventDefault();
            $.ajax({
                type: "post",
                url: "{{ route('addtwo') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    arr: $('#modal-add .select-add').val(),
                    title: $('#modal-add .title-add').val(),
                },
                success: function (response) {
                    alert("Thành Công");
                    $('#modal-add .close').click();
                    $('#modal-add-hypothesis .close').click();
                    window.location = window.location;
                }
            });
        });

        //=========================================================================================
        
        $('.edit1').click(function (e) { 
            e.preventDefault();
            var _data = $(this).attr('data-id');
            $.ajax({
                type: "get",
                url: "{{ route('getone') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: _data,
                },
                success: function (response) {
                    let _data = response.data[0];
                    $("#modal-edit-hypothesis .title-edit").val(_data.title);
                    $("#modal-edit-hypothesis .title-edit").attr("data-id", _data.id);
                    $("#modal-edit-hypothesis .save-edit1").attr("data-id", _data.id);
                }
            });
        });

        //=========================================================================================

        $('#modal-edit-hypothesis .save-edit1').click(function (e) { 
            e.preventDefault();
            var _data = $(this).attr('data-id');
            $.ajax({
                type: "post",
                url: "{{ route('posteditone') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: _data,
                    title: $('#modal-edit-hypothesis .title-edit').val()
                },
                success: function (response) {
                    let _data = response.data;
                    $('.xxx-'+_data.id).text(_data.title);
                    alert("Thành công");
                    $('#modal-edit-hypothesis .close').click();
                }
            });
        });

        
        $('#modal-edit .save-edit2').click(function (e) { 
            e.preventDefault();
            var _data = $(this).attr('data-id');
            $.ajax({
                type: "post",
                url: "{{ route('postedittwo') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: _data,
                    arr: $('#modal-edit .select-edit').val(),
                    title: $('#modal-edit .title-edit').val()
                },
                success: function (response) {
                    let _data = response.data;
                    $('.yyy-'+_data.id).text(_data.title);
                    alert(response.message);
                    $('#modal-edit .close').click();
                }
            });
        });



        //=========================================================================================
        
        $('.edit2').click(function (e) { 
            e.preventDefault();
            var _data = $(this).attr('data-id');
            $('.data-check').attr("selected", null);
            $.ajax({
                type: "get",
                url: "{{ route('gettwo') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: _data,
                },
                success: function (response) {
                    let _data = response.data;
                    let _hypothesis = _data.hypothesis;
                    $.each(_hypothesis, function( index, value ) {
                        $('.data-check-'+value).attr("selected", "selected");
                    });
                    $("#modal-edit .title-edit").val(_data.title);
                    $("#modal-edit .title-edit").attr("data-id", _data.id);
                    $("#modal-edit .save-edit2").attr("data-id", _data.id);
                }
            });
        });

        //=========================================================================================

        //=========================================================================================

        $('#modal-process .save-process').click(function (e) { 
            e.preventDefault();
            $.ajax({
                type: "get",
                url: "{{ route('process') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    arr: $('#modal-process .select-process').val(),
                },
                success: function (response) {
                    $(".btn-alert").click();
                    let _data = response.data;
                    let string1 = "";
                    let string2 = "";
                    let stt = 0;
                    
                    $.each(_data[0], function( index, value ) {
                        string2 += "<li>"+ (++stt)+": " +value.title +"</li>";
                    });

                    stt = 0;
                    $.each(_data[1], function( index, value ) {
                        string1 += "<li>"+ (++stt)+": " + value.title +"</li>";
                    });
                    
                    $('#modal-process .close').click();
                    $("#modal-alert .message").text(response.message)
                    $("#modal-alert .left  ul").html(string1);
                    $("#modal-alert .right ul").html(string2);
                }
            });
        });


        $('.delete1').click(function (e) { 
            e.preventDefault();
            var _id = $(this).attr('data-id');
            $.ajax({
                type: "post",
                url: "{{ route('remove') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: _id,
                },
                success: function (response) {
                    let _data = response.data;
                    alert(response.message);
                    if(response.code != 100){
                        return 0;
                        window.location = window.location; 
                    }

                }
            });
        });

        $('.delete2').click(function (e) { 
            e.preventDefault();
            var _id = $(this).attr('data-id');
            $.ajax({
                type: "post",
                url: "{{ route('remove') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: _id,
                },
                success: function (response) {
                    let _data = response.data;
                    alert(response.message);
                    if(response.code != 100){
                        return 0;
                        window.location = window.location; 
                    }
                    

                }
            });
        });


        var _data = $(this).attr('data-id');
        

        
    </script>
@endsection


{{-- selected{{ $stt%2==0 ? '="selected"' : null }} --}}