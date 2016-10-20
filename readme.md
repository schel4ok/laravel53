jquery img alt overlay
http://callmenick.com/post/image-overlay-hover-effects-with-css3-transitions

уроки angularjs
http://webformyself.com/urok-1-angularjs-vvodnyj/
https://egghead.io/technologies/angularjs
https://angularjs.org/
https://laravel-angular.readme.io/docs/overview
https://material.angularjs.org/



Устанавливать node_modules очень геморройно. Постоянно какие-то ошибки.  

На винде если есть ошибки, то надо удалить:
* папку node_modules из проекта
* C:\Users\Администратор\AppData\Roaming\npm
* C:\Users\Администратор\AppData\Roaming\npm-cache
* деинсталлировать nodejs из панели управления

Потом заново установить nodejs, перезапустить openserver, запустить консоль, перейти в папку проекта и запустить команду npm install


На Debian пока не разобрался



файлы и папки, которые не синхронизируются
* /public
* /node_modules
* /vendor
* Homestead.yaml
* Homestead.json
* .env

поэтому после копировать репозиторий на новую машину надо так
```
cd /var/www
laravel new lara
git clone https://github.com/schel4ok/steklo
mv /var/www/lara/public/ /var/www/steklo/public/
mv /var/www/lara/vendor/ /var/www/steklo/vendor/
rm -r /var/www/lara
cd /var/www/steklo
composer update
bower update
gulp
```


## изменения
* временно удалил из файла resources\views\layout\main.blade.php чтобы не было ошибок на локалке  
@include('modules.counters') - это сразу после открывающего тега <body>
@include('modules.informers') - это где-то внизу страницы перед закрывающим тегом </body>
<script src="https://www.google.com/recaptcha/api.js"></script> - это где-то внизу страницы  

В бутстрапе bootstrap/mixins/grid.less значения отступов справа и слева почему-то заданы отрицательными. На странице получается что элемент страницы со свойством row выступает за пределы контейнера. Нахрена они так сделали?  
```
.row {
  .make-row();
}
  
.make-row(@gutter: @grid-gutter-width) {
  margin-left:  ceil((@gutter / -2));
  margin-right: floor((@gutter / -2));
  &:extend(.clearfix all);
}
```

доделать валидацию полей формы  
* валидацию файла (максимальный размер 10мб, допустимые расширения doc docx xls xlsx ppt pptx pdf dwg dxf ai psd cdr jpg png gif tiff zip rar txt ...)  
* валидацию телефона  


### modernizr
после обновления пакета modernizr в bower надо еще вручную скомпилировать modernizr.js вот таким образом
cd vendor\bower_components\modernizr
node .\bin\modernizr -c .\lib\config-all.json`  // works. Relying on the shebang fails on Windows. 