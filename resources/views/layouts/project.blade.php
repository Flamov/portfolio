@extends ('master')

@section ('css')

	<link href="/css/project.css" rel="stylesheet">

@endsection

@section ('content')

	<main>

		<section class="project-header {{ $project->key }}">

			<div class="wrapper">

				<h2>{{ $project->title }}</h2>
				<p>{{ $project->description }}</p>

				<ul>
					<li class="title">Responsibilities:</li>
					<li>{{ $project->responsibilities }}</li>
				</ul>

				<ul>
					<li class="title">Technologies:</li>
					<li>{{ str_replace(';', ',', $project->technologies) }}</li>
				</ul>

				<ul>
					<li class="title">Timeframe:</li>
					<li>{{ date('M Y', strtotime($project->started)) }} – {{ date('M Y', strtotime($project->ended)) }}</li>
				</ul>

				@if(isset($project->url_article) || isset($project->url_website))

					<div class="links">

						@isset($project->url_article)
							@include('components.link', [
								'url' => $project->url_article,
								'icon' => 'external',
								'text' => 'Read article'
							])
						@endisset

						@isset($project->url_website)
							@include('components.link', [
								'url' => $project->url_website,
								'icon' => 'external',
								'text' => 'View website'
							])
						@endisset

					</div>

				@endif

			</div>

		</section>

		<section class="project-content {{ $project->key }}">

			@yield ('project-content')

		</section>

	</main>

@endsection
