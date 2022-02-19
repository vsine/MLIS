<!-- BEGIN WRAPPER  -->
<link href="/css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS -->
<link href="/css/table-responsive.css" rel="stylesheet"><!-- TABLE RESPONSIVE CSS -->
<script src="/js/myalert.js"></script>




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
                            <table class="table table-bordered table-striped table-condensed table-hover">
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
                                                {{$value->cart_number}}
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
                                                <button type="button" class="btn btn-xs btn-info">
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
                                                {{$value->cart_number}}
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
                        </div>
                        <div class="row">
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2">
                                <label class="checkbox-inline">
                                    <input type="checkbox" > 全选
                                </label>
                                &nbsp;
                                <button type="button" class="btn btn-round btn-primary">
                                    提交
                                </button>
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
           // alert('hh');
        });
        </script>
    @endsection
</section>
