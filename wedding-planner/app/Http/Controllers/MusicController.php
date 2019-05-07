<?php

namespace App\Http\Controllers;

use App\Music;
use DB;
use Illuminate\Http\Request;

class MusicController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $this->authorize('index', Music::class);

        $song = DB::select("Select * From musics");
       
        return view('/music/index')->with('songs', $song);
    }

    public function create(Music $music)
    {
        $this->authorize('create', Music::class);

        $type = DB::select("Select distinct type From musics");
       
        return view('/music/create')->with('types', $type);
    }

    public function store(Request $request)
    {    
        $this->authorize('create', Music::class);

        $newMusic = request()->validate([
            'songTitle' => 'required|max:50',
            'type' => 'required|max:50',
            'url' => "nullable|regex:(^(https:\/\/)[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.+$])",
        ]);

        $newMusic = Music::create($newMusic);

        return redirect('/music/index');
    } 

    public function edit(Music $music)
    {
        $this->authorize('view', $music);

        $song = DB::select("Select distinct type from musics");
      
        return view('/music/edit', compact('music'))->with('songs', $song);
    }

    public function update(Music $music)
    {
        $this->authorize('update', $music);

        request()->validate([
            'songTitle' => 'required|max:50',
            'type' => 'required|max:50',
            'url' => "nullable|regex:(^(https:\/\/)[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.+$])",
        
        ]);
 
        $music->update([
            'songTitle' => request('songTitle'),
            'type' => request('type'),
            'url' => request('url'),
        ]);
 
        return redirect('/music/index')->with('success', 'Successfully updated');
    }

    public function delete(Music $music)
    {
        $this->authorize('delete', $music);

        $music->delete();

        return redirect('/music/index')->with('success', 'Successfully deleted');
    }

    public function getMusic(){   
        $music = Music::all();
        
        return $music;
    }

}