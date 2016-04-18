@extends('layouts.layout_begin')

@section('content')
		<main class="site-content" role="main">

        	@include('partialsHome.slider')

			@include('partialsHome.about')


			@include('partialsHome.codeWork')

			@include('partialsHome.social')

			@include('partialsHome.codeCommercial')

			@include('partialsHome.modal')

		</main>
@endsection
