@extends('layouts.public')


@section('title')
{{ $item->metatitle }}
@stop

@section('keywords')
{{ $item->metakey }}
@stop

@section('description')
{{ $item->metadesc }}
@stop



@section('content')

	<article class="news">

        <i class="fa fa-calendar text-primary"> {{ date('d M Y', strtotime($item->created_at)) }} </i>
        <h1>{{ $item->title }}</h1>
          <div id="thumbnail">
       		<a href="/img/{{ $category->sef }}/big/{!! $item->image !!}" data-lightbox="news" data-title="{!! $item->title !!}"> 
    		  <img src="/img/{{ $category->sef }}/{!! $item->image !!}" alt="{!! $item->title !!}" class="img-thumbnail img-responsive pull-left margin-right-20">
       		</a>
          </div>
	       	<div class="fulltext">{!! $item->fulltext !!}</div>
       	
       	<div class="clearfix"></div>

    </article>


<ul class="pager">
@if (!empty($previous) and $previous->category_id === $item->category_id )
<li class="previous"><a href="{{ $previous->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $previous->title }}">← Пред новость</a></li>
@endif

<li><a href="/{{ $category->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $category->title }}">&uarr; в раздел</a></li>

@if (!empty($next) and $next->category_id === $item->category_id )
<li class="next"><a href="{{ $next->sef }}" data-toggle="tooltip" data-placement="top" title="{{ $next->title }}">След новость →</a></li>
@endif
</ul>


@stop