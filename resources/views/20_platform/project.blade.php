@extends('00_header.platform')

@section('content')
	
	@if($mine)
	<div class="container-fluid">
		@include('60_campaign.edit_project')
	</div>
	@endif

	<div class="container-fluid">
		<div class="row py-3 bg-light shadow">
			<div class="col-md-8 text-left">
				<h1 class="project-title text-left">
					<span class="btn-sm">
						@if($mine)
						<a data-toggle="modal" data-target="#editProjectModal">
							<i class="fa fa-pencil-square-o mr-1 env_color"></i>
						</a>
						@endif
					</span>{{$project->title}}
				</h1>
			</div>
			<div class="col-md-4 py-2 text-right">
				<span class="mr-1"><i class="fas fa-share text-primary"></i> Share</span>
				<a class="btn btn-outline-info btn-sm" href="https://www.facebook.com/sharer/sharer.php?u={{ URL::current() }}" target="_blank" title="Facebook">
					<i class="fa fa-facebook-square"></i>
				</a>
				<a class="btn btn-outline-info btn-sm" href="https://twitter.com/intent/tweet?url={{ URL::current() }}" target="_blank" title="Twitter">
					<i class="fa fa-twitter-square"></i>
				</a>
				<a class="btn btn-outline-info btn-sm" href="https://plus.google.com/share?url={{ URL::current() }}" target="_blank" title="Google+">
					<i class="fa fa-google-plus-square"></i>
				</a>
				<a class="btn btn-outline-info btn-sm" href="https://www.linkedin.com/shareArticle?url={{ URL::current() }}" target="_blank" title="LinkedIn">
					<i class="fa fa-linkedin-square"></i>
				</a>
				<a class="btn btn-outline-info btn-sm" href="http://pinterest.com/pin/create/button/?url={{ URL::current() }}" target="_blank" title="Pinterest">
					<i class="fa fa-pinterest-square"></i>
				</a>
				<a class="btn btn-outline-info btn-sm" href="https://reddit.com/submit?url={{ URL::current() }}" target="_blank" title="Reddit">
					<i class="fa fa-reddit-square"></i>
				</a>
			</div>
		</div>

		<div class="row pt-1">
			<div class="col-md-2">
				@include('50_project.53_modules.menu')
			</div>
			<div class="col-md-8">
				@include('50_project.description')
			</div>
			<div class="col-md-2">
				@include('30_sidebar.sidebar')
			</div>
		</div>

	</div>

	<!-- 'Backdrop' issued Modals -->
	@include('70_tools.71_modals.vlink_modal')

@endsection
