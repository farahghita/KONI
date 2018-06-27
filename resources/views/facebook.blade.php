@extends('layouts.app')

@section('content')


						<div class="padding">
							<div class="full col-sm-9">

								<!-- content -->
								<div class="row">

								 <!-- main col left
								 <div class="col-sm-5">

									  <div class="panel panel-default">
										<div class="panel-thumbnail"><img src="assets/img/bg_5.jpg" class="img-responsive"></div>
										<div class="panel-body">
										  <p class="lead">Urbanization</p>
										  <p>45 Followers, 13 Posts</p>

										  <p>
											<img src="img/uFp_tsTJboUY7kue5XAsGAs28.png" height="28px" width="28px">
										  </p>
										</div>
									  </div>


									  <div class="panel panel-default">
										<div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Bootstrap Examples</h4></div>
										  <div class="panel-body">
											<div class="list-group">
											  <a href="http://usebootstrap.com/theme/facebook" class="list-group-item">Modal / Dialog</a>
											  <a href="http://usebootstrap.com/theme/facebook" class="list-group-item">Datetime Examples</a>
											  <a href="http://usebootstrap.com/theme/facebook" class="list-group-item">Data Grids</a>
											</div>
										  </div>
									  </div>
										-->

									  <div class="well">
										   <form class="form-horizontal" role="form" action="{{ route('post.store') }}" method="post">
												 {{ csrf_field() }}
											<h4>Buat Kiriman</h4>
											<div class="form-group" style="padding:14px;">
													<input type="text" class="form-control" placeholder="Judul" name="title" value="">
											</div>
											<div class="form-group" style="padding:14px;">
												<label for="">kategori</label>
												<select class="form-control" name="category_id">
												<?php foreach ($categories as $category): ?>
												<option value="{{ $category->id}}"> {{ $category->name }} </option>
												<?php endforeach; ?>
												</select>
											</div>									</ul>
							
										
											 <div class="form-group" style="padding:14px;">
											  <textarea name="description" class="form-control" placeholder="Tulis disini"></textarea>
											</div>
													<input class="btn btn-primary pull-right" type="submit" class="btn-btn primary" name="" value="Kirim" >
													<ul class="list-inline"><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li></ul>
										 </form>
									  </div>

										<?php foreach ($posts as $post): ?>
									   <div class="panel panel-default">
										 <div class="panel-heading">
										 <img src="/cover/joko.jpg" class="img-post"> <a href="#" class="pull-centre">Joko Susilo</a> <br/>
											 <div class="pull-right"> <div class="dropdown">
															<a href="#"  class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-cog"></i></a>
																<ul class="dropdown-menu">
																	<li><a href="">edit</a></li>
																	<li><a href="">hapus</a></li>
																</ul>
																</div>
																</div>
																</div>
										  <div class="panel-body">
											<h4>{{ $post->title }}</h4>
											<a href="#">{{ $post->description }}</a>
											<div class="clearfix"></div>

											<hr>
											<form>
											<div class="input-group">
											  <div class="input-group-btn" class="input-group-btn">
											  <button class="btn btn-default"><i class="glyphicon glyphicon-send"></i></button>
											  </div>
											  <input class="form-control" placeholder="Add a comment.." type="text">
											</div>
											</form>

										  </div>
									   </div>
										 <?php endforeach; ?>

								</div>
							   </div><!--/row-->

								<div class="row">
								  <div class="col-sm-6">
									<a href="#">Twitter</a> <small class="text-muted">|</small> <a href="#">Facebook</a> <small class="text-muted">|</small> <a href="#">Google+</a>
								  </div>
								</div>

								<div class="row" id="footer">
								  <div class="col-sm-6">

								  </div>
								  <div class="col-sm-6">
									<p>
									<a href="#" class="pull-right">�KONI</a>
									</p>
								  </div>
								</div>

							  <hr>

							  

							  <hr>


							</div><!-- /col-9 -->
						</div><!-- /padding -->
					</div>
					<!-- /main -->

				</div>
			</div>
		</div>


		<!--post modal-->
		<div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		  <div class="modal-dialog">
		  <div class="modal-content">
			  <div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
					Update Status
			  </div>
			  <div class="modal-body">
				  <form class="form center-block">
					<div class="form-group">
					  <textarea class="form-control input-lg" autofocus="" placeholder="What do you want to share?"></textarea>
					</div>
				  </form>
			  </div>
			  <div class="modal-footer">
				  <div>
				  <button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Post</button>
					<ul class="pull-left list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
				  </div>
			  </div>
		  </div>
		  </div>
		</div>

        <script type="text/javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" src="/js/bootstrap.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
			$('[data-toggle=offcanvas]').click(function() {
				$(this).toggleClass('visible-xs text-center');
				$(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
				$('.row-offcanvas').toggleClass('active');
				$('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
				$('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
				$('#btnShow').toggle();
			});
        });
        </script>
</body></html>

@endsection
