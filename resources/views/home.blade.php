<h1>hello from home page</h1>
@foreach ($products as $p) 
<p onclick='getprod()';>{{$p}}</p>
@endforeach