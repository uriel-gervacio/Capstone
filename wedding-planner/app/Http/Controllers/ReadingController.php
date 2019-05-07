<?php

namespace App\Http\Controllers;

use App\Reading;
use DB;
use Illuminate\Http\Request;

class ReadingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $this->authorize('index', Reading::class);
        
        $readings = DB::table('readings')->get();
        
        return view('/readings/index')->with('reading', $readings);
    }

    public function create()
    {
        $this->authorize('create', Reading::class);

        $typesR = Reading::readingTypes();
        $optionsR = Reading::readingOptions();

        return view('/readings/create')->with('typeR', $typesR)->with('optionR', $optionsR);
    }

    public function store(Request $request)
    {
        $this->authorize('create', Reading::class);
        
        $newReading = request()->validate([
            'Option' => 'required',
            'Type' => 'required',
            'Title' => 'required',
            'BibleVerse' => 'required',
            'Text' => 'required',
        ]);

        $reading = Reading::create($newReading);
        
        return redirect('/readings');
    }

    public function edit(Reading $reading)
    {
        $this->authorize('view', $reading);
        
        $typesR = Reading::readingTypes();
        $optionsR = Reading::readingOptions();

        return view('/readings/edit', compact('reading'))->with('typeR', $typesR)->with('optionR', $optionsR);
    }

    public function update(Reading $reading)
    {
        $this->authorize('update', $reading);

        request()->validate([
            'Option' => 'required',
            'Type' => 'required',
            'Title' => 'required',
            'BibleVerse' => 'required',
            'Text' => 'required',
        ]);

        $reading->update([
            'Option' => request('Option'),
            'Type' => request('Type'),
            'Title' => request('Title'),
            'BibleVerse' => request('BibleVerse'),
            'Text' => request('Text'),
        ]);
       
        return redirect('/readings')->with('success', 'Successfully updated');
    }

    public function delete(Reading $reading)
    {
        $this->authorize('delete', $reading);

        $reading->delete();

        return redirect('/readings')->with('success', 'Successfully deleted');
    }

}
