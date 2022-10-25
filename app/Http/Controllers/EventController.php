<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function about()
    {
        return view("about");
    }

    public function conditions()
    {
        $arr = ["Banana", "Maça", "Abacaxi", "Abacate"];

        return view("conditions", ["frutas" => $arr]);
    }

    public function contact()
    {
        return view("contact");
    }

    public function create()
    {
        return view("events.create");
    }

    public function index()
    {
        $events = Event::all();

        return view("welcome", ["events" => $events]);
    }

    public function php()
    {
        return view("php");
    }

    public function product($id = null)
    {
        return view("product", ["id" => $id]);
    }

    public function products()
    {
        $search = request("search");

        if (!$search) $search = "nada. Insira algo na busca.";

        return view("products", ["search" => $search]);
    }

    public function store(Request $request)
    {
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect("/")->with("msg", "Evento criado com sucesso!");
    }
}
