{{-- <h1>Users Page</h1>

<h3>hello {{$user}}</h3>
<h3>city:{{ !empty($city) ? $city : "No city select"}}</h3> --}}

{{-- @foreach($user as $id => $u)
<h3>{{$id}} {{$u['name']}} | {{$u['age']}} | {{$u['city']}}
  <a href="{{route('view.user',$id)}}">Show</a>
</h3>
@endforeach --}}


{{-- laravel pass data route to view.. --}}
{{-- <h1>Users Page</h1>
<h1>hello:{{$user}}</h1> --}}

{{-- <h1>city:{{$city}}</h1> --}}
{{-- <h3>city:{{!empty($city) ? $city : "no city selected" }}</h3> --}}

@foreach ($user as $id => $value)
  <h3>{{$id}} : {{$value['name']}} | {{$value['phone']}} | {{$value['city']}}

    <a href="{{route('view.user' , parameters: $id)}}">Show</a>


  </h3>
@endforeach



