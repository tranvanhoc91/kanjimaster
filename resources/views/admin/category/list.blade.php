@extends('admin.layout.index');
<title>Menu list</title>

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
	<h2 class="content-header-title">カテゴリーリスト</h2>
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
                <div class="btn-add">
                    <button class="btn btn-info btn-xs" data-title="add" data-toggle="modal" data-target="#addNewCategoryForm">
                    <span class="icon-plus3">新しく作成</span></button>
                </div>

                <div class="table-responsive">
                    <table class="table category-tbl">
                        <thead class="bg-success">
                            <tr>
                                <th>タイトル</th>
                                <th></th>
                                <th class="btn-action">選択肢</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>第一章</td>
                                <td></td>
                                <td class="btn-action">
                                    <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#editCategoryForm">
                                    <span class="icon-pencil2"></span></button>

                                    <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#deleteCategoryForm">
                                    <span class="icon-trash"></span></button>
                                </td>
                            </tr>
                            <tr>
                                <td>第一章</td>
                                <td></td>
                                <td class="btn-action">
                                    <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#editCategoryForm">
                                    <span class="icon-pencil2"></span></button>

                                    <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#deleteCategoryForm">
                                    <span class="icon-trash"></span></button>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|---地球</td>
                                <td></td>
                                <td class="btn-action">
                                    <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#editCategoryForm">
                                    <span class="icon-pencil2"></span></button>

                                    <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#deleteCategoryForm">
                                    <span class="icon-trash"></span></button>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|---地球</td>
                                <td></td>
                                <td class="btn-action">
                                    <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#editCategoryForm">
                                    <span class="icon-pencil2"></span></button>

                                    <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#deleteCategoryForm">
                                    <span class="icon-trash"></span></button>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-------地球</td>
                                <td></td>
                                <td class="btn-action">
                                    <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#editCategoryForm">
                                    <span class="icon-pencil2"></span></button>

                                    <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#deleteCategoryForm">
                                    <span class="icon-trash"></span></button>
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table head options with primary background end -->

<!-- Modal form add new category -->
<div class="modal fade text-xs-left" id="addNewCategoryForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <label class="modal-title text-text-bold-600" id="myModalLabel33">新しいカテゴリーを作成</label>
            </div>
            <form action="#">
                <div class="modal-body">
                <label>タイトル: </label>
                <div class="form-group">
                    <input type="text" placeholder="タイトルを入力下さい" class="form-control">
                </div>

                <label>ルーツ: </label>
                <div class="form-group">
                    <select id="issueinput6" name="status" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Status" data-original-title="" title="">
                        <option value="not started">----------------------</option>
                        <option value="not started">第１  章：宇宙</option>
                        <option value="started">第２章：食べ物</option>
                        <option value="fixed">第３章：乗り物</option>
                    </select>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-warning mr-1" data-dismiss="modal" value="close">
                        <i class="icon-cross2"></i> Cancel
                    </button>
                    <button type="submit" class="btn btn-info" value="Login">
                        <i class="icon-check2"></i> 同意
                    </button>
                </div>
            </form>
        </div>
    </div>
</div><!-- //Modal form add new category -->

<!-- Modal form edit category -->
<div class="modal fade text-xs-left" id="editCategoryForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <label class="modal-title text-text-bold-600" id="myModalLabel33">カテゴリーを編集</label>
            </div>
            <form action="#">
                <div class="modal-body">
                <label>タイトル: </label>
                <div class="form-group">
                    <input type="text" placeholder="タイトルを入力下さい" value="The Sun" class="form-control">
                </div>

                <label>ルーツ: </label>
                <div class="form-group">
                    <select id="issueinput6" name="status" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Status" data-original-title="" title="">
                        <option value="not started">第２章：食べ物</option>
                        <option value="not started">第１  章：宇宙</option>
                        <option value="started">第２章：食べ物</option>
                        <option value="fixed">第３章：乗り物</option>
                    </select>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-warning mr-1" data-dismiss="modal" value="close">
                        <i class="icon-cross2"></i> Cancel
                    </button>
                    <button type="submit" class="btn btn-info" value="Login">
                        <i class="icon-check2"></i> 同意
                    </button>
                </div>
            </form>
        </div>
    </div>
</div><!-- //Modal form add new category -->


<!-- Modal form delete category -->
<div class="modal fade text-xs-left" id="deleteCategoryForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <label class="modal-title text-text-bold-600" id="myModalLabel33">Inline Login Form</label>
            </div>
            <form action="#">
                <div class="modal-body">
                <label>Email: </label>
                <div class="form-group">
                    <input type="text" placeholder="Email Address" class="form-control">
                </div>

                <label>Password: </label>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                </div>
                </div>
                <div class="modal-footer">
                <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                <input type="submit" class="btn btn-outline-primary btn-lg" value="Login">
                </div>
            </form>
        </div>
    </div>
</div><!-- //Modal form add new category -->

</div><!-- //content-body -->
@endsection