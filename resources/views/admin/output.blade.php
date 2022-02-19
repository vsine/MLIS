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
                        <button id="modal_join" class="btn btn-danger" type="button">删除</button>
                        <button id="modal_join" class="btn btn-warning" type="button">修改</button>
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
                            <a data-toggle="tab" href="#home">材料车</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#about">物品单&nbsp;<span class="badge bg-important">2</span></a>

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
                                    ->select('cart_master.number as cart_number','name','category','model','place_a.place as a_place','cart_master.quantity as cart_quantity')
                                    ->get();
                                @endphp
                                @foreach($cart_sql as $key=>$value)

                                    @if($value->name!='')
                                        <tr>
                                            <td>
                                                <kbd>{{$value->cart_number}}</kbd>
                                            </td>
                                            <td>
                                                {{$value->name}}
                                            </td>
                                            <td class="numeric">
                                                {{$value->model}}
                                            </td>
                                            <td class="numeric">
                                                {{$value->category}}
                                            </td>
                                            <td class="numeric hidden-phone">
                                                @if($value->a_place!='')
                                                    {{$value->a_place}}
                                                @else
                                                    已失效
                                                @endif

                                            </td>
                                            <td class="numeric hidden-phone">
                                                {{$value->cart_quantity}}
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
                                        </tr>
                                    @else
                                        <tr>
                                            <td>
                                                <kbd>{{$value->cart_number}}</kbd>
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
                                                NULL
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
                                <div class="col-sm-10"></div>
                                <div class="col-sm-2">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="submit_checkbox"> 全选
                                    </label>
                                    &nbsp;
                                    <button type="button" class="btn btn-round btn-primary">
                                        提交
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="about" class="tab-pane">About</div>
                    </div>
                </div>
            </section>


        </div>
    </div>

    <!-- END ROW  -->
    @section('script')
        <script type="text/javascript">
        $(document).ready(function () {
            var flag=$('#main-table').find("input:checkbox").first().is(":checked");
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

            $('#main-table').find("button").click(function () {
                $('#myModal').modal('toggle');
            });
        });


        </script>
    @endsection
</section>
