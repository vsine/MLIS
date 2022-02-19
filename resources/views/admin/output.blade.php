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
                                    $cart_sql= DB::table('cart_master')

                                @endphp
                                @foreach($cart_array['list'] as $key=>$value)
                                    @php
                                        $depot=DB::table('depot')->where('number',$key);
                                    @endphp
                                    @if($depot->exists())
                                        <tr>
                                            <td>
                                                {{$key}}
                                            </td>
                                            <td>
                                                {{$depot->value('name')}}
                                            </td>
                                            <td class="numeric">
                                                {{$depot->value('model')}}
                                            </td>
                                            <td class="numeric">
                                                {{$depot->value('category')}}
                                            </td>
                                            <td class="numeric hidden-phone">

                                                @if(DB::table('place_b')->where('id',$depot->value('ip'))->exists())
                                                    @if(DB::table('place_a')->where('id',DB::table('place_b')->where('id',$depot->value('ip'))->value('aid'))->exists())
                                                        {{DB::table('place_a')->where('id',DB::table('place_b')->where('id',$depot->value('ip'))->value('aid'))->value('place')}}
                                                    @else
                                                        仓库已失效
                                                    @endif
                                                @else
                                                    货位已失效
                                                @endif
                                            </td>
                                            <td class="numeric hidden-phone">
                                                {{$value}}{{$depot->value('unit')}}
                                            </td>
                                            <td class="numeric hidden-phone">
                                                $1.39
                                            </td>
                                            <td class="numeric hidden-phone">
                                                <input type="checkbox" value="">
                                            </td>

                                            <td style="display: none" id="table_ip_bool"></td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td>
                                                {{$key}}
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
