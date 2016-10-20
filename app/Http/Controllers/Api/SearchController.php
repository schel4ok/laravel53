<?php

namespace App\Http\Controllers\Api;

use App\Furnitura;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{

    /**
     * Поиск по таблице Furnitura.
     * @param  Request $request
     * @return mixed
     */
    public function search(Request $request)
    {
        // Определим сообщение, которое будет отображаться, если ничего не найдено 
        // или поисковая строка пуста
        $error = ['error' => 'Ничего не нашлось. Попробуй еще разок!'];

        // Удостоверимся, что поисковая строка есть
        if($request->has('q')) {

            // Используем синтаксис Laravel Scout для поиска по таблице Furnitura.
            $posts = Furnitura::search($request->get('q'))->get();

            // Если есть результат есть, вернем его, если нет  - вернем сообщение об ошибке.
            return $posts->count() ? $posts : $error;

        }

        // Вернем сообщение об ошибке, если нет поискового запроса
        return $error;
    }

}
