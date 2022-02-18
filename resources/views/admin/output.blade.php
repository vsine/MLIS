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
                            <table class="table table-bordered table-striped table-condensed">
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
                                        申请数量
                                    </th>
                                    <th class="numeric hidden-phone">
                                        选择
                                    </th>
                                    <th class="numeric hidden-phone">
                                        操作
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                @php
                                    $cart_array= json_decode(DB::table('users')->where('username',Session::get('username'))->value('cart'),true) ;

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
                                                $1.38
                                            </td>
                                            <td class="numeric">
                                                -0.01
                                            </td>
                                            <td class="numeric hidden-phone">
                                                -0.36%
                                            </td>
                                            <td class="numeric hidden-phone">
                                                $1.39
                                            </td>
                                            <td class="numeric hidden-phone">
                                                $1.39
                                            </td>
                                            <td class="numeric hidden-phone">
                                                $1.38
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
