<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wedding;
use App\Usher;

class UsherController extends Controller
{
    public function create (Wedding $wedding)
    {
         $this->authorize('update', $wedding);
        
         $attributes = request()->validate([
             'usher' => 'required',
         ]);

         $wedding->usher()->create($attributes);

        return redirect('/weddings/search');
    }

    public function update(Wedding $wedding, Usher $usher)
    {
        $usher->update([
            'usher'=>request('usher'),
            ]);
  
            return redirect('/weddings/search');

    }
}
