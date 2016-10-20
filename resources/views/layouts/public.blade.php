<!DOCTYPE html>
<html lang="en">
    <head>

        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <meta name="keywords" content="@yield('keywords', 'стеклянные двери, цельностеклянные перегородки, стеклянные душевые кабины, зеркала, стеклянные полки и стеллажи, мебель из стекла и другие конструкции на заказ')" />
        <meta name="description" content="@yield('description', 'Производство и монтаж стеклянных дверей, цельностеклянных перегородок, стеклянных душевых кабин, зеркал, стеклянных полок...')" />

        <title>@yield('title', 'Стеклянные двери, стеклянные перегородки, душевые кабины, фурнитура для стекла') | 8 (495) 790-84-15 Стекло Групп</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ elixir("css/app.css") }}">


</head>


    <body>
        <div class="flex-center position-ref full-height panel panel-default">

            <header class="layout-header panel-heading">
                @include('modules.topmenu')
                <callback></callback>
                @include('modules.mainmenu')
            </header>


            {!! Breadcrumbs::renderIfExists() !!}

            

            <div class="alert alert-danger" role="alert" v-if="error">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                @{{ error }}
            </div>
            <div id="furnitura" class="row list-group">
            <div class="item col-xs-4 col-lg-4" v-for="furnitura in furnitura">
                <div class="thumbnail">
                        <img class="group list-group-image" :src="furnitura.image" alt="@{{ furnitura.title }}" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">@{{ furnitura.title }}</h4>
                            <p class="group inner list-group-item-text">@{{ furnitura.description }}</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">$@{{ furnitura.partnumber }}</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            @if(Session::has('message'))
                <div class="alert alert-info">{{Session::get('message')}}</div>
            @endif
            @if(Session::has('errors'))
                <div class="alert alert-info">@foreach($errors->all() as $error){{ $error }}<br>@endforeach
            </div>
            @endif


            <content id="content" class="panel-body content" style="clear:both;">@yield('content')</content>
        

            <div class="clearfix"></div>

            <footer id="bottommodules" class="panel-footer">@yield('bottommodules')</footer>



        </div>

        @include('modules.totop')
        @include('modules.callback')
        <script src="{{ elixir("js/app.js") }}"></script>

    </body>

</html>
