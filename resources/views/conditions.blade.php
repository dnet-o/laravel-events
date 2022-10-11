@extends("layouts.main")
@section("title", "Conditions")

@section("content")
<main>
  <h1 class="text-3xl font-bold">Conditions Page</h1>
  <a href="/">Go back to Home page</a>

  @if(10 > 5)
    <p>10 bigger than 5</p>
  @else
    <p>10 smaller than 5</p>
  @endif

  <select name="fruta" id="fruta">
    @foreach ($frutas as $fruta)
      <option>{{ $fruta }}, {{ $loop -> index + 1 }}</option>
    @endforeach
  </select>
</main>
@endsection