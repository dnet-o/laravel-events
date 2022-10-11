@extends("layouts.main")
@section("title", "PHP")

@section("content")
<main>
  <h1 class="text-3xl font-bold">PHP Page</h1>
  <a href="/">Go back to Home page</a>

  <p>@php
    $name = "Variável Nome";
    echo $name;
  @endphp</p>
</main>
@endsection