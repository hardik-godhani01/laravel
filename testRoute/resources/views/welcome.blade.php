@php
  $fruits = [1 => "Apple", 2 => "Banana", 3 => "Orange", 4 => "Grapes"];
@endphp


@includeWhen(true, 'pages.header', ['names' => $fruits]){{--if value is true so include print--}}
@includeunless(false, 'pages.header', ['names' => $fruits]){{--if value is flase so include print--}}


{{-- @include('pages.header', ['names' => $fruits]) --}}

<h1>welcome to our laravel tutorial</h1>

@include('pages.footer')


{{-- <ul>
  <li><a href="deta ilsPage">details</a></li>
  <li><a href="printname">printName</a></li>
  <li><a href="studentsPage">studentsPage</a></li>
  <li><a href="testPage">testPage</a></li>
</ul> --}}

{{-- <li><a href="detailsPage">details</a></li>
<li><a href="{{route('Findname')}}">printName</a></li> --}}


{{--{{ 5 + 7 }}
<br><br>
{{ "hello world" }}
<br><br>
{{ "<h1>hello world</h1>" }}
{!!"<h1>yahoo baba</h1>"!!}
--}}
{{--comment--}}


{{-- @php
$user = "yahoo baba";
@endphp
{{ "username is: $user "}}
<br><br>

{!!"hello testing"!!} --}}

{{-- @php
$names = ["Salman khan", "John Abraham", "Sahid Kapoor"]
@endphp

<ul>
  @foreach ($names as $n)
  <li>{{ $n }}</li>
  @endforeach
</ul>

<ul>
  @foreach ($names as $n)
  @if ($loop->first)
  <li style="color: blueviolet">{{$n}}</li>
  @elseif($loop->last)
  <li style="color: red">{{$n}}</li>
  @else
  <li>{{$n}}</li>
  @endif @endforeach
</ul> --}}