<table>
<tbody>
<tr><td>Опция</td>							<td>Значение</td>							<td>Цена, руб</td></tr>
<tr><td>Размер дверной коробки (мм):</td>	<td>{{$doorsize}}</td>						<td>{{$baseprice}}</td></tr>
<tr><td>Стекло</td>							<td>{{$glass['label']}}</td>				<td>{{$glass['price']}}</td></tr>
<tr><td>Материал дверной коробки:</td>		<td>{{$korobka['label']}}</td>				<td>{{$korobka['price']}}</td></tr>
<tr><td>Петли:</td>							<td>{{$petli['label']}}</td>				<td>{{$petli['price']}}</td></tr>
<tr><td>Декор:</td>							<td>{{$dekor['label']}}</td>				<td>{{$dekor['price']}}</td></tr>
<tr><td>Доставка:</td>						<td>{{$dostavka['label']}}</td>				<td>{{$dostavka['price']}}</td></tr>
<tr><td>Монтаж:</td>						<td>{{$montazh}}</td>						<td>{{$montazh}}</td></tr>

<tr><td>Стоимость двери:</td>				<td></td>
  <td>{{$fullprice}}</td>
</tr>
</tbody>
</table>

-------------------------<br>
Имя: {{ $name }}<br>
Телефон : {{ $tel }}<br>
Email :{{ $email }}<br>
-------------------------<br>
Сообщение : {{ isset($msg) ? $msg : ' ' }}
</p>