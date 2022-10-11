@extends("layouts.main")
@section("title", "Product")

@section("content")
<main>
  @if($id)
    <h1 class="text-3xl font-bold">O id da rota é {{ $id }}</h1>
  @else
    <h1 class="text-3xl font-bold">Por favor, informar um produto</h1>
  @endif
</main>

@endsection