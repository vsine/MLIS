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
                                    货位
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
                            <tr>
                                <td>
                                    AAC
                                </td>
                                <td>
                                    AUSTRALIAN AGRICULTURAL COMPANY LIMITED.
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
                                <td class="numeric">
                                    9,395
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </section>

                    <div class="dataTables_paginate paging_bootstrap pagination">
                        <ul><li class="prev disabled">
                                <a href="#">← 上一页</a>
                            </li>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li class="next">
                                <a href="#">下一页 → </a>
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
