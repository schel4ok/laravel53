@extends('layouts.public')


@section('title')
Новости компании Стекло Групп о стекле, фурнитуре и изделиях из стекла 
@stop

@section('keywords')
Новости, Стекло Групп, стекло, фурнитура для стекла, изделия из стекла 
@stop

@section('description')
Новости компании Стекло Групп о стекле, фурнитуре и изделиях из стекла 
@stop

@section('content')

<h1>{{ $category->title }}</h1>

	@foreach ($news as $item)
        <article class="row">

        	<h3><i class="fa fa-calendar text-primary"> {{ date('d M Y', strtotime($item->created_at)) }} </i> | 
        	<a href="/{{ $category->sef }}/{!! $item->sef !!}" class="link" title="{!! $item->title !!}">{!! $item->title !!}</a>
            </h3>

          <div class="col-xs-12 col-sm-3 padding-0 center">
    		  <img src="/img/{{ $category->sef }}/{!! $item->image !!}" alt="{!! $item->title !!}" class="introimage">
          </div>

       		<div class="col-xs-12 col-sm-9 introtext">	
       			{!!  $item->introtext !!}                   
	        	<a href="/{{ $category->sef }}/{!! $item->sef !!}" class="btn btn-default pull-right" title="{!! $item->title !!}">Подробнее</a>
       		</div>

        </article>
    @endforeach

{!! $news->render() !!}

@endsection
