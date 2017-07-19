@extends('index');
<title>部首の詳細</title>
<link rel="stylesheet" type="text/css" href="{{ URL::to('template/app-assets/vendors/css/ui/prism.min.css') }}">


@section('content')

<!--body header-->


<!-- content-body -->
<div class="content-body">




<!-- Card sizing section start -->
<section id="sizing">
  <div class="row">
	<div class="col-xl-3 col-md-6"><!-- card -->
		<div class="card" style="height: auto;">
			<div class="card-header">
				<span class="card-no">23</span> <h4 class="card-title">NHAN</h4>
				 <div class="heading-elements">
	                    	<a data-action="collapse"><i class="icon-star"></i></a>
	                	 </div>
			</div>
			<div class="card-body">
				<div class="card-block">
					<div class="kanji-card-mean">
						<h4 class="card-title kanji-title"><a href="www.google.com" >箱</a></h4>
						<h5 class="card-title kanji-onyomi">オンヨミ</h5>
						<h5 class="card-title kanji-kunyomi">はこ、わた・る</h5>
					</div>
					<div class="kanji-card-thumb">
                        <img class="img-fluid" src="{{ URL::to('template/app-assets/images/kanji/test.PNG') }}" alt="Card image cap">
					</div>
				</div>
				<div class="card-block">
					<p class="kanji-remember">親　親は木の上に立って自分の遊んでいる子供を見る</p>
					<div class="heading-elements">
						<ul class="list-inline mb-0 stroke-part">
	                         <li><i class="icon-star"></i><a href="#" class="card-link">竹</a></li>
	                         <li><i class="icon-star"></i><a href="#" class="card-link">木</a></li>
	                         <li><i class="icon-star"></i><a href="#" class="card-link">目</a></li>
	                     	</ul>
	                    	</div>
				</div>
			</div>
		</div>
	</div><!-- //card -->
	<div class="col-xl-3 col-md-6"><!-- card -->
		<div class="card" style="height: auto;">
			<div class="card-header">
				<span class="card-no">23</span> <h4 class="card-title">NHAN</h4>
				 <div class="heading-elements">
	                    	<a data-action="collapse"><i class="icon-star"></i></a>
	                	 </div>
			</div>
			<div class="card-body">
				<div class="card-block">
					<div class="kanji-card-mean">
						<h4 class="card-title kanji-title"><a href="www.google.com" >箱</a></h4>
						<h5 class="card-title kanji-onyomi">オンヨミ</h5>
						<h5 class="card-title kanji-kunyomi">はこ、わた・る</h5>
					</div>
					<div class="kanji-card-thumb">
						<img class="img-fluid" src="{{ URL::to('template/app-assets/images/kanji/test.PNG') }}" alt="Card image cap">
					</div>
				</div>
				<div class="card-block">
					<p class="kanji-remember">親　親は木の上に立って自分の遊んでいる子供を見る</p>
					<div class="heading-elements">
						<ul class="list-inline mb-0 stroke-part">
	                         <li><i class="icon-star"></i><a href="#" class="card-link">竹</a></li>
	                         <li><i class="icon-star"></i><a href="#" class="card-link">木</a></li>
	                         <li><i class="icon-star"></i><a href="#" class="card-link">目</a></li>
	                     	</ul>
	                    	</div>
				</div>
			</div>
		</div>
	</div><!-- //card -->

</section>




</div><!-- //content-body -->

@endsection