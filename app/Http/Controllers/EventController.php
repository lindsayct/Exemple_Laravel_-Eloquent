<?php

namespace App\Http\Controllers;
use App\Models\Event;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {

        #exemplo se tiver chave estrangeira
        /*
        $event = Event::findOrFail($id)
        $eventOwner = User::where("id", $event->user_id)
        */

        #busca somento o registro específico (search):
        /* $events = Event::where([
            ['city', 'like', '%campinas%']
        ])->get();
 */
        #Busca todos os registros:
        $events = Event::all();

        return view('welcome', ['events' => $events]);

    }
}
