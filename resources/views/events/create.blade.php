@extends("layouts.main")
@section("title", "Create Event")

@section("content")
<main class="max-w-[1400px] mx-auto px-12">
  <h1 class="text-4xl font-bold text-center">Create Event Page</h1>

  <form action="/events/publish" method="post" class="mt-14 p-12 border rounded border-stone-400 bg-gray-100">

    @csrf

    <div class="flex flex-col gap-8">
      <label for="title" class="text-xl font-semibold">Evento:</label>

      <input type="text" name="title" id="title" placeholder="Nome do evento" class="border rounded border-stone-300 p-4">
    </div>

    <div class="flex flex-col gap-8 mt-12">
      <label for="city" class="text-xl font-semibold">Cidade:</label>

      <input type="text" name="city" id="city" placeholder="Local do evento" class="border rounded border-stone-300 p-4">
    </div>

    <div class="flex flex-col gap-8 mt-12">
      <label for="private" class="text-xl font-semibold">Evento Privado?</label>

      <select type="text" name="private" id="private" class="border rounded border-stone-300 p-4">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>

    <div class="flex flex-col gap-8 mt-12">
      <label for="description" class="text-xl font-semibold">Descrição:</label>

      <textarea name="description" id="description" placeholder="Detalhes do evento..." class="border rounded border-stone-300 p-4"></textarea>
    </div>

    <div class="w-1/5 mx-auto mt-12">
      <input type="submit" value="Criar evento" class="w-full border text-white text-xl font-bold rounded border-green-500 bg-green-500 hover:border-green-400 hover:bg-green-400 cursor-pointer py-4">
    </div>
  </form>
</main>
@endsection