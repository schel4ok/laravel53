<p>
Имя: {{ $input['name'] }}<br>
Телефон: {{ $input['tel'] }}<br>
Желательное время звонка:  {{ isset($input['time']) ? $input['time'] : ' ' }} <br>
Email:  {{ isset($input['email']) ? $input['email'] : ' ' }}<br>
-------------------------<br>
Сообщение:  {{ isset($input['msg']) ? $input['msg'] : ' ' }}
</p>