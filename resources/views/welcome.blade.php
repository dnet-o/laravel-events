@extends("layouts.main")
@section("title", "Home")

@section("content")
<main class="-mt-14">
  <section class="text-center pt-16 pb-56 hero-banner">
    <h1 class="text-3xl font-bold text-white">Home Page</h1>

    <div class="flex gap-4 justify-center items-end">
      <h2 class="text-2xl font-semibold text-white">Busque um evento:</h2>

      <form action="">
        <input type="text" id="search" name="search" placeholder="Procurar..." class="border rounded border-gray-600">
      </form>
    </div>
  </section>

  <hr class="my-8" />

  <section class="max-w-[1400px] mx-auto">
    <h2 class="text-2xl font-semibold text-center">Próximos Eventos</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 justify-self-stretch gap-12 px-20 pt-8">
      @foreach ($events as $event)
        <article class="flex flex-col gap-4 border rounded border-gray-600 cursor-pointer">
          <img src="/img/event_placeholder.jpg" alt="{{ $event->title }}">

          <div class="px-4 pb-4 justify-self-center">
            <h3 class="text-xl font-semibold text-center">{{ $event->title }}</h3>

            <div class="flex gap-2 font-semibold justify-around py-3">
              <p><i class="fas fa-calendar"></i> 10/08/2022</p>

              <p><i class="fas fa-user"></i> 20</p>
            </div>

            <p>{{ $event->description }}</p>
          </div>
        </article>
      @endforeach
    </div>
  </section>
</main>
@endsection
