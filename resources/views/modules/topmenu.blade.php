<nav class="navbar navbar-default navbar-right topmenu">
		<header class="navbar-header">
			<a class="navbar-brand" href="/">
		        <img alt="brand" src="/img/logo-small.png">
		     </a>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</header>
		<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
			<div name="q" class="search navbar-left">
               	<i class="fa fa-search"> </i><input type="text" name="search" v-model="query" value="{{ old('search') }}" class="form-control fa fa-search" placeholder=" Найти...">
				<button class="btn btn-default" type="button" @click="search()" v-if="!loading">Search!</button>
				<button class="btn btn-default" type="button" disabled="disabled" v-if="loading">Searching...</button>
            </div>
			<ul class="nav">
  				@foreach ($tree as $node)  
  					@if ($node->menutype == 'topmenu')
  					<li><a href="/{{ $node->sef }}" class="{{ $node->class }} {{ Request::is($node->sef. '*') ? 'active' : '' }}"> {{ $node->title }}</a></li>
  					@endif
  				@endforeach		

			</ul>
		</div>
</nav>
