<!-- BEGIN WRAPPER  -->
<link href="/css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS -->
<link href="/css/table-responsive.css" rel="stylesheet"><!-- TABLE RESPONSIVE CSS -->
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
                        <label> <input type="text" class="form-control" aria-controls="example"></label>
                     <button type="button" class="btn btn-primary">
                    搜索
                  </button>
                        <a href="javascript:;" class="fa fa-chevron-down">
                    </a>
                  </span>
                </header>
                <div class="panel-body">
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>
                                    #编号
                                </th>
                                <th>
                                    名称
                                </th>
                                <th class="numeric">
                                    类别
                                </th>
                                <th class="numeric">
                                    品牌
                                </th>
                                <th class="numeric hidden-phone">
                                    型号
                                </th>
                                <th class="numeric hidden-phone">
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
                                     <td>{{$value->number}}</td>
                                     <td>{{$value->name}}</td>
                                     <td>{{$value->category}}</td>
                                     <td>{{$value->brand}}</td>
                                     <td>{{$value->model}}</td>
                                     <td>{{$value->quantity.$value->unit}}</td>
                                     <td>
                                            {{\Illuminate\Support\Facades\DB::table('place_a')
                                    ->where('id','=',\Illuminate\Support\Facades\DB::table('place_b')
                                    ->where('id','=',$value->ip)->first()->aid)->first()->place

                                            }}
                                     </td>
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
                                    href="{{$libary_data->previousPageUrl()}}"
                                    @endif
                                >← 上一页</a>
                            </li>
                            @php
                            $prev=2;
                            $next=2;
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
                                            <a href="{{$libary_data
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
                                                <a href="{{$libary_data
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
                                    href="{{$libary_data->nextPageUrl()}}"
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

    </script>
@endsection
