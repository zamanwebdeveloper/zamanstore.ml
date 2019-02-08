@extends('admin_layout')
@section('admin_content')
	<ul class="breadcrumb">
					<li>
						<i class="icon-home"></i>
						<a href="index.html">Home</a> 
						<i class="icon-angle-right"></i>
					</li>
					<li><a href="#">Dashboard</a></li>
				</ul>
				

				
				<div class="row-fluid">

					<a  href="{{url('/all-category')}}" class="quick-button metro yellow span2">
						<p>All Category</p>
					</a>
					<a href="{{url('/all-manufacture')}}" class="quick-button metro blue span2">
						<p>All Brand</p>
					</a>
					<a href="{{url('/all-product')}}" class="quick-button metro green span2">

						<p>All Products</p>
					</a>
					<a href="{{url('/manage-order')}}" class="quick-button metro pink span2">
						<p>Manage Order</p>
					</a>


					<div class="clearfix"></div>

				</div><!--/row-->
@endsection