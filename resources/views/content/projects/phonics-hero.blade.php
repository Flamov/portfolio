@extends ('layouts.project')

@section ('project-content')

	<h3>The Idea</h3>

	<p>Phonics Hero is an iPad app that contains games that help with synthetic phonics.</p>

	<h3>Result</h3>

	<p>The games were made using the HTML5 <code>canvas</code> API. We used <a href="https://www.greensock.com/tweenmax" target="_blank" rel="noopener noreferrer">TweenMax</a> for the animations and <a href="http://www.createjs.com/" target="_blank" rel="noopener noreferrer">CreateJS</a> for audio and touch events, wrapped in a mobile app using <a href="https://cordova.apache.org/" target="_blank" rel="noopener noreferrer">Cordova</a>.</p>

	@component("components.project-image")
		@slot("image", "/img/projects/phonicshero/phonicshero-image-1.jpg")
		@slot("caption", "Each watch page features a full-screen background video, compressed and encoded for the desktop and mobile web.")
	@endcomponent

@endsection