<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wedding;
use App\Participant;

class ParticipantController extends Controller
{
    public function create (Wedding $wedding)
    {
         $this->authorize('update', $wedding);
        
         $attributes = request()->validate([
             'participant' => 'required',
         ]);

         $wedding->participant()->create($attributes);

        return redirect('/weddings/search');
    }

    public function update(Wedding $wedding, Participant $participant)
    {
        $participant->update([
            'participant'=>request('participant'),
            ]);
  
            return redirect('/weddings/search');

    }
}
