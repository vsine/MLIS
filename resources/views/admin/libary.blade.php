<!-- BEGIN WRAPPER  -->
<link href="/css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS -->
<link href="/css/table-responsive.css" rel="stylesheet"><!-- TABLE RESPONSIVE CSS -->
<script src="/js/myalert.js"></script>
<!--加入购物车modal-->
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
                            <div class="title">
                                数量
                            </div>
                            <div class="desk" id="modal_quantity">
                                HTML, CSS, JavaScript.
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
                                供应商
                            </div>
                            <div class="desk" id="modal_supplier">
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
                        <button id="modal_join" class="btn btn-success" type="button">加入选材库</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--model end-->


<!--编辑-->
@if(array_key_exists('editlibary',$marks))
    @if($marks['editlibary'])
        <!--编辑modal-->
        <div class="modal fade" id="myModal1"  >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button id="modal1_title_close" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">编辑</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                            <form class="form-horizontal tasi-form" method="get">
                                <div class="form-group has-feedback">
                                    <label class="col-sm-2 col-sm-2 control-label">编号</label>
                                    <div class="col-sm-4">
                                        <input id="modal1_number" type="text" class="form-control" placeholder="">
                                    </div>
                                    <label class="col-sm-2 col-sm-2 control-label">名称</label>
                                    <div class="col-sm-4">
                                        <input id="modal1_name" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="col-sm-2 col-sm-2 control-label">类别</label>
                                    <div class="col-sm-4">
                                        <input id="modal1_category" type="text" class="form-control" placeholder="">
                                    </div>
                                    <label class="col-sm-2 col-sm-2 control-label">型号</label>
                                    <div class="col-sm-4">
                                        <input id="modal1_model" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="col-sm-2 col-sm-2 control-label">品牌</label>
                                    <div class="col-sm-4">
                                        <input id="modal1_brand" type="text" class="form-control" placeholder="">
                                    </div>
                                    <label class="col-sm-2 col-sm-2 control-label">供应商</label>
                                    <div class="col-sm-4">
                                        <input id="modal1_supplier" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="col-sm-2 col-sm-2 control-label">数量</label>
                                    <div class="col-sm-4">
                                        <input id="modal1_quantity" type="text" class="form-control" placeholder="">
                                    </div>
                                    <label class="col-sm-2 col-sm-2 control-label">单位</label>
                                    <div class="col-sm-4">
                                        <input id="modal1_unit" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group has-feedback">
                                    <label class="col-sm-2 col-sm-2 control-label">货位</label>
                                    <div class="col-sm-10">
                                        <select id="modal1_ip" class="form-control">
                                            @foreach(DB::table('place_b')->join('place_a','place_a.id','=','place_b.aid')
                                                ->orderBy('place_a.place','asc')->orderBy('place_b.place','asc')
                                                ->select('place_a.place as place_a','place_b.place as place_b','place_b.id as id')
                                                ->get() as $key=>$value)
                                                @if($key==0)
                                                    <option value="0">未选择</option>
                                                @endif
                                                @if($value->id!='0')
                                                    <option value="{{$value->id}}">
                                                        {{$value->place_a}}的{{$value->place_b}}货位</option>
                                                @endif
                                            @endforeach


                                        </select>
                                    </div>
                                </div>

                                <div class="form-group has-feedback">

                                    <label class="col-sm-2 col-sm-2 control-label">备注</label>
                                    <div class="col-sm-10">
                                        <input id="modal1_marks" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>

                            </form>


                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-sm-4">




                            </div>
                            <div class="col-sm-8">
                                <button id="modal1_close" data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                                <button id="modal1_remove" class="btn btn-danger" type="button">删除</button>
                                <button id="modal1_update" class="btn btn-warning" type="button">修改</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--model end-->
    @endif
@endif

<!--添加-->
@if(array_key_exists('editlibary',$marks))
    @if($marks['editlibary'])
        <!--编辑modal-->
        <div class="modal fade" id="myModal2"  >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button id="modal2_title_close" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">添加</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                            <form class="form-horizontal tasi-form" method="get">
                                <div class="form-group has-feedback">
                                    <label class="col-sm-2 col-sm-2 control-label">编号</label>
                                    <div class="col-sm-4">
                                        <input id="modal2_number" type="text" class="form-control" placeholder="">
                                    </div>
                                    <label class="col-sm-2 col-sm-2 control-label">名称</label>
                                    <div class="col-sm-4">
                                        <input id="modal2_name" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="col-sm-2 col-sm-2 control-label">类别</label>
                                    <div class="col-sm-4">
                                        <input id="modal2_category" type="text" class="form-control" placeholder="">
                                    </div>
                                    <label class="col-sm-2 col-sm-2 control-label">型号</label>
                                    <div class="col-sm-4">
                                        <input id="modal2_model" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="col-sm-2 col-sm-2 control-label">品牌</label>
                                    <div class="col-sm-4">
                                        <input id="modal2_brand" type="text" class="form-control" placeholder="">
                                    </div>
                                    <label class="col-sm-2 col-sm-2 control-label">供应商</label>
                                    <div class="col-sm-4">
                                        <input id="modal2_supplier" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="col-sm-2 col-sm-2 control-label">数量</label>
                                    <div class="col-sm-4">
                                        <input id="modal2_quantity" type="text" class="form-control" placeholder="">
                                    </div>
                                    <label class="col-sm-2 col-sm-2 control-label">单位</label>
                                    <div class="col-sm-4">
                                        <input id="modal2_unit" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group has-feedback">
                                    <label class="col-sm-2 col-sm-2 control-label">货位</label>
                                    <div class="col-sm-10">
                                        <select id="modal2_ip" class="form-control">

                                            @foreach(DB::table('place_b')->join('place_a','place_a.id','=','place_b.aid')
                                                ->orderBy('place_a.place','asc')->orderBy('place_b.place','asc')
                                                ->select('place_a.place as place_a','place_b.place as place_b','place_b.id as id')
                                                ->get() as $key=>$value)
                                                @if($key==0)
                                                    <option selected="selected" value="0">未选择</option>
                                                @endif
                                                @if($value->id!='0')
                                                        <option value="{{$value->id}}">
                                                            {{$value->place_a}}的{{$value->place_b}}货位</option>
                                                @endif

                                            @endforeach


                                        </select>
                                    </div>
                                </div>

                                <div class="form-group has-feedback">

                                    <label class="col-sm-2 col-sm-2 control-label">备注</label>
                                    <div class="col-sm-10">
                                        <input id="modal2_marks" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>

                            </form>


                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-sm-4">




                            </div>
                            <div class="col-sm-8">
                                <button id="modal2_close" data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                                <button id="modal2_add" class="btn btn-danger" type="button">添加</button>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--model end-->
    @endif
@endif


<section class="wrapper">
    <!-- BEGIN ROW  -->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="row">
                        <div class="col-sm-4">
                            <span class="label label-primary">仓库</span>
                            &nbsp;&nbsp;
                            @if(array_key_exists('editlibary',$marks))
                                @if($marks['editlibary'])
                                    <button id="panel_add" type="button" class="btn btn-sm  btn-danger">
                                        <i class="fa fa-plus">
                                        </i>
                                        添加物料
                                    </button>
                                @endif
                            @endif
                        </div>
                        <div class="col-sm-8">
                            <span class="tools pull-right">
                                <a class="fa">搜索:</a>
                                <label> <input id="search_input" type="text" class="form-control" aria-controls="example" value="{{$search_input}}"></label>
                                <button id="search" type="button" class="btn btn-primary">搜索</button>
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                            </span>
                        </div>
                    </div>
                </header>
                <div class="panel-body">
                    <section id="unseen">
                        <table id="libary_table" class="table table-bordered table-striped table-condensed table-hover">
                            <thead>
                            <tr>
                                <th class="">
                                    #编号
                                </th>
                                <th class="numeric hidden-phone">
                                    类别
                                </th>
                                <th class="numeric">
                                    名称
                                </th>
                                <th class="numeric hidden-phone">
                                    品牌
                                </th>
                                <th class="numeric">
                                    型号
                                </th>
                                <th class="numeric">
                                    数量
                                </th>
                                <th class="numeric hidden-phone">
                                    仓库
                                </th>
                                <th class="numeric hidden-phone">
                                    供应商
                                </th>
                                <th class="numeric">
                                    操作
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($libary_data as $key=>$value)
                                 <tr>
                                     <td id="td_number">{{$value->number}}</td>
                                     <td id="td_category">{{$value->category}}</td>
                                     <td id="td_name">{{$value->name}}</td>
                                     <td id="td_brand">{{$value->brand}}</td>
                                     <td id="td_model">{{$value->model}}</td>
                                     <td id="td_quantity">{{$value->quantity.$value->unit}}</td>
                                     <td id="td_libary">

                                             {{DB::table('place_a')
                                                ->where('id','=',DB::table('place_b')
                                                ->where('id','=',$value->ip)->first()->aid)->first()->place

                                                }}


                                     </td>
                                     <td id="td_supplier">{{$value->supplier}}</td>
                                     <td>
                                         <button id="pencil" class="btn btn-success btn-xs">
                                             <i class="fa fa-shopping-cart">
                                             </i>
                                         </button>
                                         @if(array_key_exists('editlibary',$marks))
                                             @if($marks['editlibary'])
                                                 <button id="list_edit" type="button" class="btn btn-xs  btn-danger">
                                                     <i class="fa fa-pencil-square">
                                                     </i>
                                                 </button>
                                             @endif
                                         @endif

                                     </td>
                                     <td style="display: none" id="td_unit">{{$value->unit}}</td>
                                     <td style="display: none" id="td_marks">{{$value->marks}}</td>
                                     <td style="display: none" id="td_ip">{{$value->ip}}</td>
                                     <td style="display: none" id="td_quantity1">{{$value->quantity}}</td>
                                 </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </section>

                    <div class="dataTables_paginate paging_bootstrap pagination">
{{--                        {{$libary_data->links()}}--}}
                        <ul><li class="prev @if($libary_data->onFirstPage())
                                disabled
                                @endif
                                ">
                                <a @if(!($libary_data->onFirstPage()))
                                    href="{{$libary_data->withQueryString()->previousPageUrl()}}"
                                    @endif
                                >← 上一页</a>
                            </li>
                            @php
                            $prev=2;
                            $next=2;
                            if ($libary_data->lastPage()<5){
                                $prev=$libary_data->currentPage()-1;
                                $next=$libary_data->lastPage()-$libary_data->currentPage();
                            }
                            else
                            if (($libary_data->currentPage()-2)<1){
                                $next=$next+(1-($libary_data->currentPage()-2));
                                $prev=$prev-(1-($libary_data->currentPage()-2));
                            }else
                            if (($libary_data->lastPage()-$libary_data->currentPage())<2){
                                $prev+=2-($libary_data->lastPage()-$libary_data->currentPage());
                                $next-=2-($libary_data->lastPage()-$libary_data->currentPage());
                            }
                            @endphp
                            @for($i=0;$i<2;$i++)
                                @for($j=0;($j<$prev)&&($i==0);$j++)
                                        <li class="">
                                            <a href="{{$libary_data->withQueryString()
                                            ->url(($libary_data->currentPage()-($prev-$j)))}}">
                                                {{($libary_data->currentPage()-($prev-$j))}}</a>
                                        </li>
                                @endfor
                                @if($i==0)
                                        <li class="active">
                                            <a href="#">{{($libary_data->currentPage())}}</a>
                                        </li>
                                    @endif
                                @for($j=0;($j<$next)&&($i==1);$j++)

                                            <li class="">
                                                <a href="{{$libary_data->withQueryString()
                                            ->url(($libary_data->currentPage()+(1+$j)))}}">{{($libary_data->currentPage()+(1+$j))}}</a>
                                            </li>
                                    @endfor
                            @endfor

                            <li class="next
                            @if($libary_data->onLastPage())
                                disabled
                                @endif
                            ">
                                <a
                                    @if(!($libary_data->onLastPage()))
                                    href="{{$libary_data->withQueryString()->nextPageUrl()}}"
                                    @endif>下一页 → </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </section>
        </div>
    </div>
    <!-- END ROW  -->
</section>
<!-- END WRAPPER  -->
@section('script')
    <script type="text/javascript">
        //alert('0');
        $(document).ready(function () {
            commonUtil.place_obj=$('.wrapper');

            function disabled_modal(bol){
                $("#modal_join").attr('disabled',bol);
                $("#modal_in").attr('disabled',bol);
                $('#modal_plus').attr('disabled',bol);
                $('#modal_minus').attr('disabled',bol);
                $('#modal_close').attr('disabled',bol);
                $('#modal_title_close').attr('disabled',bol);
                $("#modal_join").text('提交中');
            }

            function disabled_modal1(bol) {
                $("#modal1_update").attr('disabled',bol);
                $("#modal1_remove").attr('disabled',bol);
                $("#modal1_name").attr('disabled',bol);
                $("#modal1_number").attr('disabled',bol);
                $("#modal1_category").attr('disabled',bol);
                $("#modal1_brand").attr('disabled',bol);
                $("#modal1_quantity").attr('disabled',bol);
                $("#modal1_unit").attr('disabled',bol);
                $("#modal1_ip").attr('disabled',bol);
                $("#modal1_supplier").attr('disabled',bol);
                $("#modal1_model").attr('disabled',bol);
                $("#modal1_marks").attr('disabled',bol);
                $("#modal1_close").attr('disabled',bol);
                $('#modal1_title_close').attr('disabled',bol);
            }

            $("#search").click(function () {
                //console.log('&search='+$('#search_input').val())
                window.location.href=window.location.pathname+'?search='+$('#search_input').val();
            });

            $('#libary_table').find('.btn-success').click(function () {
                //alert();
                $('#modal_number').text($(this).parents('tr').children('#td_number').text());
                $('#modal_category').text($(this).parents('tr').children('#td_category').text());
                $('#modal_name').text($(this).parents('tr').children('#td_name').text());
                $('#modal_model').text($(this).parents('tr').children('#td_model').text());
                $('#modal_quantity').text($(this).parents('tr').children('#td_quantity').text());
                $('#modal_libary').text($(this).parents('tr').children('#td_libary').text());
                $('#modal_supplier').text($(this).parents('tr').children('#td_supplier').text());

                $('#modal_marks').text($(this).parents('tr').children('#td_marks').text());
                $('#modal_unit').text($(this).parents('tr').children('#td_unit').text());
                //$('#modal_in').val('0');
                $("#modal_join").text('添加到选材车');
                $('#myModal').modal('toggle');
                });

            $('#modal_join').click(function () {
                //禁用控件
                disabled_modal(true);
                $.post('/task/cart',{
                    '_token' : '{{ csrf_token() }}',
                    'oper': '1',
                    'number': $('#modal_number').text(),
                    'quantity': $('#modal_in').val()
                },function (data) {
                    disabled_modal(false);
                    $('#myModal').modal('toggle');
                    if(data=='200'){
                        commonUtil.message('添加成功.');
                    }else {
                        commonUtil.message('非法操作:'+data,'danger');
                    }
                }).error(function (xhr,status,info){
                    disabled_modal(false);
                    $('#myModal').modal('toggle');
                    //只有失败才执行
                    commonUtil.message('请求失败','danger');
                });;

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

            @if(array_key_exists('editlibary',$marks))
            @if($marks['editlibary'])
            $('#libary_table').find('.btn-danger').click(function () {
                $('#modal1_number').val($(this).parents('tr').children('#td_number').text());
                $('#modal1_name').val($(this).parents('tr').children('#td_name').text());
                $('#modal1_category').val($(this).parents('tr').children('#td_category').text());
                $('#modal1_model').val($(this).parents('tr').children('#td_model').text());
                $('#modal1_brand').val($(this).parents('tr').children('#td_brand').text());
                $('#modal1_unit').val($(this).parents('tr').children('#td_unit').text());
                $('#modal1_quantity').val($(this).parents('tr').children('#td_quantity1').text());
                $('#modal1_supplier').val($(this).parents('tr').children('#td_supplier').text());
                $('#modal1_marks').val($(this).parents('tr').children('#td_marks').text());
                $('#modal1_ip').val($(this).parents('tr').children('#td_ip').text())
                $('#myModal1').modal('toggle');
            });

            $('#modal1_update').click(function () {
                disabled_modal1(true);
                $.post('/task/libary',{
                    '_token' : '{{ csrf_token() }}',
                    'oper': '1',
                    'name': $('#modal1_name').val(),
                    'number': $('#modal1_number').val(),
                    'ip':$('#modal1_ip').val(),
                    'marks':$('#modal1_marks').val(),
                    'category':$('#modal1_category').val(),
                    'quantity':$('#modal1_quantity').val(),
                    'brand':$('#modal1_brand').val(),
                    'unit':$('#modal1_unit').val(),
                    'model':$('#modal1_model').val(),
                    'supplier':$('#modal1_supplier').val(),

                },function (data) {
                    //disabled_modal1(false);
                    //$('#myModal1').modal('toggle');
                    if(data=='200'){
                        //alert('修改成功');
                    }else {
                        //alert('非法操作:'+data);
                    }
                    location.reload();
                }).error(function (xhr,status,info){
                    //只有失败才执行
                    //alert('请求失败');
                    location.reload();
                });;

            });

            $('#panel_add').click(function () {
                $('#myModal2').modal('toggle');
            });
            @endif
            @endif

            });
    </script>
@endsection
