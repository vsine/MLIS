<!-- BEGIN WRAPPER  -->
<link href="/css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS -->
<link href="/css/table-responsive.css" rel="stylesheet"><!-- TABLE RESPONSIVE CSS -->
<script src="/js/myalert.js"></script>

<div class="modal fade" id="myModal"  >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button id="modal_title_close" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">操作</h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <ul class="p-info">
                        <li class="myli">
                            <div class="title">
                                #编号
                            </div>
                            <div class="mydesk" id="modal_number">
                                null
                            </div>
                        </li>
                        <li class="myli">
                            <div class="title">
                                名称
                            </div>
                            <div class="desk" id="modal_name">
                                Olive Inc.
                            </div>
                        </li>
                        <li class="myli">
                            <div class="title">
                                型号
                            </div>
                            <div class="desk" id="modal_model">
                                null
                            </div>
                        </li>
                        <li class="myli">
                            <div class="title">
                                类别
                            </div>
                            <div class="desk" id="modal_category">
                                null
                            </div>
                        </li>
                        <li class="myli">
                            <div class="title" >
                                仓库
                            </div>
                            <div class="desk" id="modal_libary">
                                HTML, CSS, JavaScript.
                            </div>
                        </li>
                        <li class="myli">
                            <div class="title">
                                备注
                            </div>
                            <div class="mydesk1" id="modal_marks">
                                null
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-4">

                        <div id="spinner4">
                            <div class="input-group w-150" >
                                <div class="spinner-buttons input-group-btn">
                                    <button id="modal_plus" type="button" class="btn spinner-up btn-success">
                                        <i class="fa fa-plus">
                                        </i>
                                    </button>
                                </div>
                                <input id="modal_in" type="text" class="spinner-input form-control" maxlength="3" value="1">
                                <span id="modal_unit" class="input-group-addon">个</span>
                                <div class="spinner-buttons input-group-btn">
                                    <button id="modal_minus" type="button" class="btn spinner-down btn-danger">
                                        <i class="fa fa-minus">
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-sm-8">
                        <button id="modal_close" data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                        <button id="modal_remove" class="btn btn-danger" type="button">删除</button>
                        <button id="modal_update" class="btn btn-warning" type="button">修改</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal1"  >
    <div class="modal-dialog modal-lg">
        <div class="modal-content" >
            <div class="modal-header">
                <button id="modal_title_close" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">申请</h4>
            </div>
            <div class="modal-body">

            <div class="row" >
                <h2 class ="text-center">电子信息学院实验实训耗材领用单</h2>
            </div>

                <div class="row">
                    <div class="col-sm-1 col-xs-1"></div>
                    <div class="col-sm-10 col-xs-10" >
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td>申请日期:</td>
                                <td id="request_time">提交自动生成</td>
                                <td>单号:</td>
                                <td>提交自动生成</td>
                            </tr>

                            <tr>
                                <td>申请人:</td>
                                <td>{{DB::table('users')->where('username',Session::get('username'))->value('name')}}({{DB::table('users')->where('username',Session::get('username'))->value('number')}})</td>
                                <td>联系方式:</td>
                                <td><input id="request_phone" type="text" style="width: 95%" id="request_phone" placeholder="请输入"></td>
                            </tr>
                            <tr>
                                <td>专业:</td>
                                <td id="request_prf">未选择</td>
                                <td>班级</td>
                                <td><select id="request_class" style="width: 95%">
                                        <option value="0" data-location="未选择">未选择</option>

                                        @foreach(DB::table('class')->get() as $key=>$value)
                                            <option value="{{$value->id}}" data-location="{{$value->prf}}">{{$value->name}}</option>
                                        @endforeach


                                    </select></td>
                            </tr>
                            <tr>
                                <td>使用时间</td>
                                <td><input id="request_use_time"  style="width: 95%" size="20" type="text" id="modal_time" value=""></td>
                                <td>使用场地</td>
                                <td ><input id="request_use_place" type="text" style="width: 95%"  id="exampleInputEmail1" placeholder="请输入"></td>
                            </tr>
                            <tr>
                                <td>实训人数</td>
                                <td><input id="request_use_people" type="number" style="width: 95%"  id="exampleInputEmail1" placeholder="请输入"></td>
                                <td>备注</td>
                                <td><input id="request_use_marks" type="text" style="width: 95%"  id="exampleInputEmail1" placeholder=""></td>
                            </tr>
                            </tbody>
                        </table>
                        <br/>

                        <table id="request_table" class="table table-bordered">
                            <thead>
                            <tr>
                                <th data-override="serial">序号</th>
                                <th>类别</th>
                                <th>名称</th>
                                <th>规格型号</th>
                                <th>数量</th>
                                <th>单位</th>
                                <th>仓库</th>
                                <th>品牌</th>
                                <th>备注</th>
                                <th style="display: none">编号</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>

                    </div>

                    <div class="col-sm-1 col-xs-1"></div>
                </div>

            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-8">
                        <button id="modal1_close" data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                        <button id="modal1_submit" class="btn btn-warning" type="button">提交</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<section class="wrapper">
    <!-- BEGIN ROW  -->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading tab-bg-dark-navy-blue ">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#home">出库</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#about">入库</a>
                        </li>
                    </ul>
                </header>
                <div class="panel-body">
                    <div class="tab-content">

                        <div id="home" class="tab-pane active">
                            <table class="table table-bordered table-striped table-condensed table-hover" id="main-table">
                                <thead>
                                <tr>
                                    <th>
                                        编号
                                    </th>
                                    <th>
                                        名称
                                    </th>
                                    <th class="numeric">
                                        型号
                                    </th>
                                    <th class="numeric">
                                        分类
                                    </th>
                                    <th class="numeric hidden-phone">
                                        仓库
                                    </th>
                                    <th class="numeric hidden-phone">
                                        选材数量
                                    </th>
                                    <th class="numeric hidden-phone">
                                        操作
                                    </th>
                                    <th class="numeric hidden-phone">
                                        选择
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                @php
                                    $cart_sql= DB::table('cart_master')->where('user',Session::get('username'))
                                    ->leftJoin('depot','depot.number','=','cart_master.number')
                                    ->leftJoin('place_b','depot.ip','=','place_b.id')
                                    ->leftJoin('place_a','place_b.aid','=','place_a.id')
                                    ->orderBy('create_time')
                                    ->select('cart_master.number as cart_number','name','category','model'
                                    ,'place_a.place as a_place','cart_master.quantity as cart_quantity'
                                    ,'depot.marks as mark','unit','brand')
                                    ->get();
                                @endphp
                                @foreach($cart_sql as $key=>$value)

                                    @if($value->name!='')
                                        <tr>
                                            <td id="table_number"><kbd style="background-color: #4cae4c">{{$value->cart_number}}</kbd></td>
                                            <td id="table_name">
                                                {{$value->name}}
                                            </td>
                                            <td id="table_model" class="numeric">
                                                {{$value->model}}
                                            </td>
                                            <td id="table_category" class="numeric">
                                                {{$value->category}}
                                            </td>
                                            <td id="table_place" class="numeric hidden-phone">
                                                @if($value->a_place!='')
                                                    {{$value->a_place}}
                                                @else
                                                    已失效
                                                @endif

                                            </td>
                                            <td id="table_quantity" class="numeric hidden-phone">
                                                {{$value->cart_quantity}}{{$value->unit}}
                                            </td>
                                            <td class="numeric hidden-phone">
                                                <button type="button" class="btn btn-xs btn-warning">
                                                    <i class="fa fa-pencil">
                                                    </i>
                                                </button>
                                            </td>
                                            <td class="numeric hidden-phone">
                                                @if($value->a_place!='')
                                                    <input name="sample-checkbox-01" id="checkbox-01" value="1" type="checkbox" checked="">
                                                @else
                                                    已失效
                                                @endif
                                            </td>
                                            <td style="display: none" id="table_ip_bool"></td>
                                            <td style="display: none" id="table_marks">{{$value->mark}}</td>
                                            <td style="display: none" id="table_unit">{{$value->unit}}</td>
                                            <td style="display: none" id="table_brand">{{$value->brand}}</td>
                                            <td style="display: none" id="table_numquantity">{{$value->cart_quantity}}</td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td id="table_number">
                                                <kbd style="background-color: #deb547">{{$value->cart_number}}</kbd>
                                            </td>
                                            <td>
                                                编号已失效
                                            </td>
                                            <td class="numeric">
                                                NULL
                                            </td>
                                            <td class="numeric">
                                                NULL
                                            </td>
                                            <td class="numeric hidden-phone">
                                                NULL
                                            </td>
                                            <td class="numeric hidden-phone">
                                                NULL
                                            </td>
                                            <td class="numeric hidden-phone">
                                                <button type="button" class="btn btn-xs btn-warning">
                                                    <i class="fa fa-pencil">
                                                    </i>
                                                </button>
                                            </td>
                                            <td class="numeric hidden-phone">
                                                NULL
                                            </td>

                                        </tr>
                                    @endif

                                @endforeach


                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-sm-9">
                                    <button id="home_save" type="button" class="btn  btn-info" disabled="disabled">
                                        存为模板
                                    </button>
                                    &nbsp;
                                    <button id="home_save" type="button" class="btn  btn-info" disabled="disabled">
                                        导入模板
                                    </button>
                                </div>
                                <div class="col-sm-3">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="submit_checkbox"> 全选
                                    </label>
                                    &nbsp;
                                    <button id="home_delete" type="button" class="btn  btn-danger">
                                        删除
                                    </button>
                                    &nbsp;
                                    <button id="home_sumbit" type="button" class="btn btn-success">
                                        提交
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="about" class="tab-pane ">About</div>


                    </div>
                </div>
            </section>


        </div>
    </div>

    <!-- END ROW  -->

</section>



@section('script')

    <script type="text/javascript">
        $(document).ready(function () {
            commonUtil.place_obj=$('.wrapper');

            var flag=$('#main-table').find("input:checkbox").first().is(":checked");
            var modify;

            $('#modal_time').datetimepicker({
                    container: "#myModal1",
                    altField: "#alternate",
                    format: 'yyyy-mm-dd hh:ii',
                    language:'zh-CN'
                });

            function disabled_modal(bol){
                $("#modal_update").attr('disabled',bol);
                $("#modal_remove").attr('disabled',bol);
                $("#modal_in").attr('disabled',bol);
                $('#modal_plus').attr('disabled',bol);
                $('#modal_minus').attr('disabled',bol);
                $('#modal_close').attr('disabled',bol);
                $('#modal_title_close').attr('disabled',bol);
                $("#modal_update").text('提交中');
            }
            function disabled_home(bol) {
                $('#home_delete').attr('disabled',bol);
                $('#home_sumbit').attr('disabled',bol);
                $('#main-table').find("input:checkbox").attr('disabled',bol);
                $('#main-table').find(".btn-warning").attr('disabled',bol);
                $('#submit_checkbox').attr('disabled',bol);
            }
            $('#main-table').find("input:checkbox").each(function () {
                if (flag!=$(this).is(':checked')){
                    flag=false;
                    $('#submit_checkbox').attr('checked',flag);
                    return true;
                }
                $('#submit_checkbox').attr('checked',flag);
            });

            $('#submit_checkbox').change(function () {
                $('#main-table').find("input:checkbox").attr('checked',$('#submit_checkbox').is(':checked'));
                console.log($('#submit_checkbox').is(':checked'));
            });

            $('#main-table').find("input:checkbox").change(function () {
                flag=$('#main-table').find("input:checkbox").first().is(":checked");
                $('#main-table').find("input:checkbox").each(function () {
                    if (flag!=$(this).is(':checked')){
                        flag=false;
                        $('#submit_checkbox').attr('checked',flag);
                        return true;
                    }
                });
                $('#submit_checkbox').attr('checked',flag);

            });

            $('#modal_plus').click(function () {
                var r=/^\d+$/;
                var modal_in=$('#modal_in').val();
                //console.log(r.test(modal_in));
                if(r.test(modal_in)){
                    $('#modal_in').val(Number(modal_in) +1);
                }else {
                    alert('数量格式错误');
                }
            });

            $('#modal_minus').click(function () {
                var r=/^\d+$/;
                var modal_in=$('#modal_in').val();
                //console.log(r.test(modal_in));
                if(r.test(modal_in)){
                    if(Number(modal_in)>1)
                        $('#modal_in').val(Number(modal_in) -1);
                }else {
                    alert('数量格式错误');
                }
            });

            $('#main-table').find(".btn-warning").click(function () {
                $('#modal_number').text($(this).parents('tr').children('#table_number').text());
                $('#modal_name').text($(this).parents('tr').children('#table_name').text());
                $('#modal_model').text($(this).parents('tr').children('#table_model').text());
                $('#modal_in').val(parseInt($(this).parents('tr').children('#table_quantity').text()));
                $('#modal_libary').text($(this).parents('tr').children('#table_place').text());
                $('#modal_category').text($(this).parents('tr').children('#table_category').text());
                $('#modal_marks').text($(this).parents('tr').children('#table_marks').text());
                $('#modal_unit').text($(this).parents('tr').children('#table_unit').text());
                console.log($(this).parents('tr').children('#table_quantity').text());
                modify=$(this).parents('tr');
                $('#modal_update').text('修改');
                $('#myModal').modal('toggle');
            });

            $('#modal_update').click(function () {
                disabled_modal(true);
                $.post('/task/cart',{
                    '_token' : '{{ csrf_token() }}',
                    'oper': '2',
                    'number': $('#modal_number').text(),
                    'quantity': $('#modal_in').val()
                },function (data) {
                    disabled_modal(false);
                    $('#myModal').modal('toggle');
                    if(data=='200'){
                        commonUtil.message('请求成功.');
                        modify.children('#table_quantity').text($('#modal_in').val()+$('#modal_unit').text());
                    }else {
                        commonUtil.message('非法操作:'+data,'danger');
                    }
                }).error(function (xhr,status,info){
                    disabled_modal(false);
                    $('#myModal').modal('toggle');
                    //只有失败才执行
                    commonUtil.message('请求失败','danger');
                });
            });

            $('#modal_remove').click(function () {
                disabled_modal(true);
                $.post('/task/cart',{
                    '_token' : '{{ csrf_token() }}',
                    'oper': '3',
                    'number': $('#modal_number').text(),
                },function (data) {
                    disabled_modal(false);
                    $('#myModal').modal('toggle');
                    if(data=='200'){
                        commonUtil.message('请求成功.');
                        modify.remove();
                    }else {
                        commonUtil.message('非法操作:'+data,'danger');
                    }
                }).error(function (xhr,status,info){
                    disabled_modal(false);
                    $('#myModal').modal('toggle');
                    //只有失败才执行
                    commonUtil.message('请求失败','danger');
                });
            });

            $('#home_delete').click(function () {
                disabled_home(true);
                $(this).text('删除中');
                var len=$('#main-table').find("input:checkbox:checked").length;
                console.log(len);

                $('#main-table').find("input:checkbox:checked").each(function (i,dom) {
                    var num= $(this).parents('tr').children('#table_number').text();
                    modify=$(this).parents('tr');
                    console.log(num);
                    $.ajaxSettings.async = false;
                    $.post('/task/cart',{
                        '_token' : '{{ csrf_token() }}',
                        'oper': '3',
                        'number': num,
                    },function (data) {
                        if(data=='200'){
                            modify.remove();
                        }else {
                        }
                    }).error(function (xhr,status,info){
                    });
                    $.ajaxSettings.async = true;
                });
                disabled_home(false);
                $(this).text('删除');

            });

            $('#home_sumbit').click(function () {
                var i=1;
                $('#request_phone').val({{DB::table('users')->where('username',
                    Session::get('username'))->value('phone')}});
                $('#request_table').children('tbody').children('tr').remove();
                $('#main-table').find("input:checkbox:checked").each(function () {
                    $('#request_table').children('tbody').append('<tr>'+'<td>'+i+ '</td>'+
                        '<td>'+$(this).parents('tr').children('#table_category').text()+ '</td>'+
                        '<td>'+$(this).parents('tr').children('#table_name').text()+'</td>'+
                        '<td>'+$(this).parents('tr').children('#table_model').text()+'</td>'+
                        '<td>'+$(this).parents('tr').children('#table_numquantity').text()+'</td>'+
                        '<td>'+$(this).parents('tr').children('#table_unit').text()+'</td>'+
                        '<td>'+$(this).parents('tr').children('#table_place').text()+'</td>'+
                        '<td>'+$(this).parents('tr').children('#table_brand').text()+'</td>'+
                        '<td>'+$(this).parents('tr').children('#table_marks').text()+'</td>'+
                        '<td id="request_number" style="display: none">'+$(this).parents('tr').children('#table_number').text()+'</td>'+
                        '</tr>');
                    i++;
                });
                $('#request_class').val('0');
                $("#myModal1").modal('toggle');

            });

            $('#modal1_submit').click(function () {
                var arr= [];

                $('#request_table').children('tbody').find('tr').children('#request_number').each(function () {
                   arr.push($(this).text().replace(/[\r\n]/g,"").replace(/[ ]/g,""));
                });

                var json={
                    '_token' : '{{ csrf_token() }}',
                    'oper': '1',
                    'list':arr,
                    'phone':$('#request_phone').val(),
                    'class':$('#request_class').val(),
                    'place':$('#request_phone').val(),
                    'marks':$('#request_use_marks').val(),
                    'time':$('#request_use_time').val(),
                    'people':$('#request_use_people').val(),

                };
                console.log(json);

                $.ajaxSettings.async = false;
                $.post('/task/order',json,function (data) {
                    if(data=='200'){

                    }else {
                        alert(data);
                    }
                }).error(function (xhr,status,info){
                });
                $.ajaxSettings.async = true;


            });

            $('#request_class').change(function () {

                $('#request_prf').text($(this).find("option:selected").data('location'));

            });

        });


    </script>
@endsection
