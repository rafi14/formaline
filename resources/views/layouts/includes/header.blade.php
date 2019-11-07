<section class="header-main shadow">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-3 col-sm-4">
				<div class="brand-wrap">
					<img  class="logo" src="http://localhost:8000/asset/img/logo/banner.png" height="40">
				</div> <!-- brand-wrap.// -->
			</div>
			<div class="col-lg-6 col-sm-8">
			<form method="post" action="{{ route('post_index') }}" class="search-wrap">
				@csrf
					<div class="input-group w-100">
						<input name="text_search_tag"  type="text" class="form-control" style="width:40%;" placeholder="Cari Pertanyaan by Universitas">
					
						<div class="input-group-append">
							<button class="btn btn-primary" type="submit">
								<i class="fa fa-search"></i>
							</button>
						</div>
					</div>
				</form> <!-- search-wrap .end// -->
			</div> <!-- col.// -->
			<i class="fas fa-bell fa-2x ml-5 mt-3" style="color:#545454" ></i>
			<i class="fas fa-envelope fa-2x ml-5 mt-3" style="color:#545454"></i>
			<!--div class="col-lg-3 col-sm-12">
					<a href="#" class="widget-header float-md-right">
						<div class="icontext">
							
						</div>
						</div>
					</a>
			</div--> <!-- col.// -->
		</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->
<hr>
</header> <!-- section-header.// -->