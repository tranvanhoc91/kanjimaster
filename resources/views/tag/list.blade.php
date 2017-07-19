@extends('index');
<title>マイタグ</title>
<link rel="stylesheet" type="text/css" href="{{ URL::to('template/app-assets/vendors/css/ui/prism.min.css') }}">


@section('content')

<!--body header-->


<!-- content-body -->
<div class="content-body">
<!-- Table head options with primary background start -->
<!-- Text color start -->
<section id="textColor">
<h2 class="content-header-title">漢字のタグ</h2>
	<hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-1">
                <div class="card-body collapse in">
                    <div class="p-1">
                        <div class="text-muted float-xs-right info">
                            <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#editTag">
                                <span class="icon-pencil2"></span></button>
                            <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#deleteTag">
                                <span class="icon-trash"></span>
                            </button>
                        </div>
                        <a href="tag/20/"><strong>耳から覚える・語彙・N1・１－４９</strong>    </a>
                        <midium> &nbsp;&nbsp;&nbsp;  120用語   </midium>
                    </div>
                </div>    
            </div>
            <div class="card mb-1">
                <div class="card-body collapse in">
                    <div class="p-1">
                        <div class="text-muted float-xs-right info">
                            <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#editTag">
                                <span class="icon-pencil2"></span></button>
                            <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#deleteTag">
                                <span class="icon-trash"></span>
                            </button>
                        </div>
                        <a href="tag/20/"><strong>耳から覚える・語彙・N1・１－４９</strong>    </a>
                        <midium> &nbsp;&nbsp;&nbsp;  120用語   </midium>
                    </div>
                </div>    
            </div>
            <div class="card mb-1">
                <div class="card-body collapse in">
                    <div class="p-1">
                        <div class="text-muted float-xs-right info">
                            <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#editTag">
                                <span class="icon-pencil2"></span></button>
                            <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#deleteTag">
                                <span class="icon-trash"></span>
                            </button>
                        </div>
                        <a href="tag/20/"><strong>耳から覚える・語彙・N1・１－４９</strong>    </a>
                        <midium> &nbsp;&nbsp;&nbsp;  120用語   </midium>
                    </div>
                </div>    
            </div>
        </div>
    </div><!--end row-->
</section>

<p class="clearfix" ></p>

<section id="textColor">
<h2 class="content-header-title">単語のタグ</h2>
	<hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-1">
                <div class="card-body collapse in">
                    <div class="p-1">
                        <div class="text-muted float-xs-right info">
                            <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#editTag">
                                <span class="icon-pencil2"></span></button>
                            <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#deleteTag">
                                <span class="icon-trash"></span>
                            </button>
                        </div>
                        <a href="tag/20/"><strong>耳から覚える・語彙・N1・１－４９</strong>    </a>
                        <midium> &nbsp;&nbsp;&nbsp;  120用語   </midium>
                    </div>
                </div>    
            </div>
            <div class="card mb-1">
                <div class="card-body collapse in">
                    <div class="p-1">
                        <div class="text-muted float-xs-right info">
                            <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#editTag">
                                <span class="icon-pencil2"></span></button>
                            <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#deleteTag">
                                <span class="icon-trash"></span>
                            </button>
                        </div>
                        <a href="tag/20/"><strong>耳から覚える・語彙・N1・１－４９</strong>    </a>
                        <midium> &nbsp;&nbsp;&nbsp;  120用語   </midium>
                    </div>
                </div>    
            </div>
            <div class="card mb-1">
                <div class="card-body collapse in">
                    <div class="p-1">
                        <div class="text-muted float-xs-right info">
                            <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#editTag">
                                <span class="icon-pencil2"></span></button>
                            <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#deleteTag">
                                <span class="icon-trash"></span>
                            </button>
                        </div>
                        <a href="tag/20/"><strong>耳から覚える・語彙・N1・１－４９</strong>    </a>
                        <midium> &nbsp;&nbsp;&nbsp;  120用語   </midium>
                    </div>
                </div>    
            </div>
        </div>
    </div><!--end row-->
</section>



<section id="textColor">
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-info btn-xs" data-title="add" data-toggle="modal" data-target="#addNewTag">
            <span class="icon-plus3">新しく作成</span></button>
        </div>
    </div>
</section>


<!-- Modal edit tag -->
<div class="modal fade text-xs-left" id="editTag" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <label class="modal-title text-text-bold-600" id="myModalLabel33">新しいタグを作成</label>
            </div>
            <form action="#">
                <div class="modal-body">
                <label>タイトル: </label>
                <div class="form-group">
                    <input type="text" value="日本語能力試験JLPTN1" class="form-control">
                </div>
                <div class="form-group">
                    <label for="projectinput5">タググールプ</label>
                    <select id="projectinput5" name="interested" class="form-control">
                        <option value="none" selected="">漢字</option>
                        <option value="design">単語</option>
                    </select>
                </div>
                <div class="modal-footer">
                <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="キャンセル">
                <input type="submit" class="btn btn-outline-primary btn-lg" value="変更">
                </div>
                </div>
            </form>
        </div>
    </div>
</div><!-- Modal edit tag -->



<!-- Modal delete tag -->
<div class="modal fade text-xs-left" id="deleteTag" tabindex="-1" role="dialog" aria-labelledby="myModalLabel19" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-body">
        <h5>確認メッセージ</h5>
        <hr>
        <p><strong>「タグのタイトル」が削除されます。よろしいですか？</strong></p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">キャンセル</button>
        <button type="button" class="btn btn-outline-primary">削除</button>
        </div>
    </div>
    </div>
</div><!-- Modal delete tag -->



<!-- Modal add new tag -->
<div class="modal fade text-xs-left" id="addNewTag" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <label class="modal-title text-text-bold-600" id="myModalLabel33">新しいタグを作成</label>
            </div>
            <form action="#">
                <div class="modal-body">
                <div class="form-group">
                    <label>タイトル: </label>
                    <input type="text" placeholder="タグのタイトル" class="form-control">
                </div>
                <div class="form-group">
                    <label for="projectinput5">タググールプ</label>
                    <select id="projectinput5" name="interested" class="form-control">
                        <option value="none" selected="">漢字</option>
                        <option value="design">単語</option>
                    </select>
                </div>
                <div class="modal-footer">
                <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="閉">
                <input type="submit" class="btn btn-outline-primary btn-lg" value="作成">
                </div>
                </div>
            </form>
        </div>
    </div>
</div><!-- Modal add new tag -->




</div><!-- //content-body -->

@endsection