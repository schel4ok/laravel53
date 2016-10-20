<html>
<body class="no-skin">



<div class="main-container" id="main-container">

    <div class="main-content">
        <div class="main-content-inner">
            <div class="page-content">
                <!-- #section:pages/error -->
                <div class="error-container">
                    <div class="well">
                        <h1 class="grey lighter smaller">
                <span class="blue bigger-125">
                    <i class="ace-icon fa fa-sitemap"></i>
                    Увы, ничего не найдено!</span> Ошибка 404. 
                        </h1>

                        <hr />
                        <h3 class="lighter smaller">Мы искали везде, но не смогли найти запрашиваемую страницу!</h3>

                        </div>
                            <form class="form-search">
                    <span class="input-icon align-middle">
                        <i class="ace-icon fa fa-search"></i>

                        <input type="text" class="search-query" placeholder="Искать..." />
                    </span>
                                <button class="btn btn-sm" type="button">Найти!</button>
                            </form>

                            <div class="space"></div>
                            <h4 class="smaller">Попытайтесь что-то из списка:</h4>

                            <ul class="list-unstyled spaced inline bigger-110 margin-15">
                                <li>
                                    <i class="ace-icon fa fa-hand-o-right blue"></i>
                                    Проверьте URL (адрес страницы) на опечатки
                                </li>

                                <li>
                                    <i class="ace-icon fa fa-hand-o-right blue"></i>
                                    Расскажите нам об ошибке на сайте - <a href="{{ URL::route('contacts') }}" class="btn btn-primary">
                                    <i class="ace-icon fa fa-tachometer"></i>Контакты</a>
                                </li>

                                <li>
                                    <i class="ace-icon fa fa-hand-o-right blue"></i>Вернитесь на 
                                    <a href="{{ URL::route('home') }}" class="btn btn-primary">
                                        <i class="ace-icon fa fa-tachometer"></i>главную</a> страницу
                                </li>

                                <li>Вернитесь на 
                                    <a href="javascript:history.back()" class="btn btn-grey">
                                        <i class="ace-icon fa fa-arrow-left"></i>
                                        предыдущую страницу
                                    </a>
                                </li>

                            </ul>
                        </div><!--error container-->

                        <hr />
                        <div class="space"></div>


                    </div><!--Page content-->
                </div><!--main-content inner-->

                <!-- /section:pages/error -->
            </div><!--main-content-->
        </div><!--class="main-container" id="main-container-->
</body>
</html>
