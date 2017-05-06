<ul class="nav">
	<li class="@if ($section === 'project') current @endif"><a href="{{ $app->make('url')->to('/projects') }}"><span>Projects</span></a></li>
	<li class="@if ($section === 'photography') current @endif"><a href="{{ $app->make('url')->to('/photography') }}"><span>Photography</span></a></li>
	<li class="@if ($section === 'contact') current @endif"><a href="{{ $app->make('url')->to('/contact') }}"><span>Contact</span></a></li>
</ul>

<ul class="links">
	<li class="github"><a href="https://www.github.com/Flamov" target="_blank" rel="noopener noreferrer"><span>GitHub</span></a></li>
	<li class="codepen"><a href="https://www.codepen.io/Flamov" target="_blank" rel="noopener noreferrer"><span>Codepen</span></a></li>
</ul>