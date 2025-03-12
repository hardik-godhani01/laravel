<h1>header page</h1>

{{-- @foreach ($name as $key => $value)
<p>key is :<b>{{$key}}</b> and value is <b>{{$value}}
    @endforeach --}}

    @forelse ($names as $key => $value)
    <p>key is :<b>{{$key}}</b> and value is <b>{{$value}}
  @empty
  <p>empty array.</p>
@endforelse
