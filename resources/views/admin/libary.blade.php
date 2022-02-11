<!-- BEGIN WRAPPER  -->
<link href="/css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS -->
<link href="/css/table-responsive.css" rel="stylesheet"><!-- TABLE RESPONSIVE CSS -->

<!--modal-->
<div class="modal fade" id="myModal"  >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
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
                        <button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                        <button id="modal_join" class="btn btn-success" type="button">加入选材库</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--model end-->


<section class="wrapper">
    <!-- BEGIN ROW  -->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                  <span class="label label-primary">
                   仓库
                  </span>
                    <span class="tools pull-right">
                        <a class="fa">搜索:</a>
                        <label> <input id="search_input" type="text" class="form-control" aria-controls="example" value="{{$search_input}}"></label>
                        <button id="search" type="button" class="btn btn-primary">搜索</button>
                        <a href="javascript:;" class="fa fa-chevron-down">
                    </a>
                  </span>
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
                                            {{\Illuminate\Support\Facades\DB::table('place_a')
                                    ->where('id','=',\Illuminate\Support\Facades\DB::table('place_b')
                                    ->where('id','=',$value->ip)->first()->aid)->first()->place

                                            }}
                                     </td>
                                     <td id="td_supplier">{{$value->supplier}}</td>
                                     <td><button id="pencil" class="btn btn-success btn-xs">
                                             <i class="fa fa-shopping-cart">
                                             </i>
                                         </button></td>
                                     <td style="display: none" id="td_unit">{{$value->unit}}</td>
                                     <td style="display: none" id="td_marks">{{$value->marks}}</td>
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
                $('#myModal').modal('toggle');
                });

            $('#modal_join').click(function () {

                commonUtil.message('66');
                {{--$.post('/task/cart',{--}}
                {{--    '_token' : '{{ csrf_token() }}',--}}
                {{--    'oper':   '1',--}}
                {{--    'password':   '2'--}}
                {{--},function (data) {--}}
                {{--    alert(data);--}}
                {{--}).error(function (xhr,status,info){--}}
                {{--    //只有失败才执行--}}
                {{--    alert('error');--}}
                {{--});;--}}

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



            });
    </script>
@endsection
