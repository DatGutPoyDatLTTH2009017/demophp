<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('events.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Event
     */
    public function store(EventRequest $request)
    {
        $events = new Event();
        $events->fill($request->validated());
        $events->save();
        return $events;
    }


    public function show(Event $event)
    {
        //
    }

    public function edit(Event $event)
    {
        //
    }


    public function update($id)
    {
        $currentEvent = Event::find($id);
        return view('events/edit',[
            'current' => $currentEvent
        ]);
    }
    public function delete($id)
    {
        $detailEvent = Event::find($id);
        $detailEvent->delete();
        return redirect('/admin/event/list');
    }

    public function list()
    {
        $events = Event::query()->paginate(5);
        return view('events/list', [
            'list' => $events,
        ]);
    }
    public function save(EventRequest $request, $id){
        $detailEvent = Event::find($id);
        $detailEvent->update($request->validated());
        $detailEvent->save();
        return redirect('/admin/event/list');
    }
}
