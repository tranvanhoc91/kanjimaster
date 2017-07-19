@extends('admin.layout.index');
<title>ユーザー一覧</title>

<style type="text/css">
.btn-action, .btn-add{
    text-align:right;
}
.form-bottom-navigation{
    text-align: center;

}
.category-tbl th{
    color: #fff;
    
}
</style>

@section('content')

<!--body header-->
<div class="content-header row">
	<div class="content-header-left col-md-12 col-xs-12 mb-1">
	<h2 class="content-header-title">ユーザー一覧</h2>
	<hr>
	</div>
</div><!--//body header-->
<!-- content-body -->
<div class="content-body">


<!-- Table head options with primary background start -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-body collapse in">
            <form class="user-tbl-form" method="post" >    
                <div class="btn-add">
                    <a class="btn btn-info " href="{{asset('admin/user/add/')}}">
                        <span class="icon-plus3">新しく作成</span>
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table user-tbl">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ユーザー名</th>
                                <th>メール</th>
                                <th>Activied</th>
                                <th>Blocked</th>
                                <th>Permission</th>
                                <th>作用</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>trieugiathang</td>
                                <td>traithaibinh@gmail.com</td>
                                <td>Activied</td>
                                <td>Activied</td>
                                <td>Admin</td>
                                <td><a class="btn btn-primary " href="{{asset('admin/user/edit/3')}}">
                                        <span class="icon-pencil2"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>trieugiathang</td>
                                <td>traithaibinh@gmail.com</td>
                                <td>Activied</td>
                                <td>Activied</td>
                                <td>Admin</td>
                                <td><a class="btn btn-primary " href="{{asset('admin/user/edit/3')}}">
                                        <span class="icon-pencil2"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>trieugiathang</td>
                                <td>traithaibinh@gmail.com</td>
                                <td>Activied</td>
                                <td>Activied</td>
                                <td>Admin</td>
                                <td><a class="btn btn-primary " href="{{asset('admin/user/edit/3')}}">
                                        <span class="icon-pencil2"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>trieugiathang</td>
                                <td>traithaibinh@gmail.com</td>
                                <td>Activied</td>
                                <td>Activied</td>
                                <td>Admin</td>
                                <td><a class="btn btn-primary " href="{{asset('admin/user/edit/3')}}">
                                        <span class="icon-pencil2"></span></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <div class="form-bottom-navigation">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">« Prev</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">Next »</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table head options with primary background end -->

</div><!-- //content-body -->
@endsection