@extends('layouts.app')

@section('content')

	<!-- Items feed -->
	<div class="items-feed-wrapper similar-items-wrapper">
		<div class="siw-heading">
			<span>Selected Category: {{ $category->name }}</span>
		</div>
		<div class="items-feed">
			@foreach($designs as $design)
				<!-- Single item -->
				<div class="single-item">
					<div>
						<img src="{{ asset('storage/designs/'.$design->id.'/'.$design->regular_thumbnail) }}" alt="{{ $design->title }}">
						<div class="si-info">
							<span class="si-label">{{ $category->name }}</span>
							<span class="si-title">{{ $design->title }}</span>
						</div>
					</div>
				</div>
				<!-- Single item -->
			@endforeach
			<!-- Category tiles pagination wrapper -->
			<div class="pagination-wrapper">
				{!! $designs->links() !!}
			</div>
			<!-- Category tiles pagination wrapper -->
		</div>	
	</div>
	<!-- Items feed -->

	<!-- Subscribe section -->
	@include('live.partials.subscribe')

@endsection