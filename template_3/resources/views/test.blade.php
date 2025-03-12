<h1>gffvf</h1>

@php
  $user = "yahoo baba";
  $fruits = ["apple", "orange", "Banana", "Grapes"];
@endphp

<script>
  // var data = @json($fruits);
  var data = {{Js::from($fruits)}};
  data.forEach(function (entry) {
    console.log(entry);
  })
  console.log(data);

</script>