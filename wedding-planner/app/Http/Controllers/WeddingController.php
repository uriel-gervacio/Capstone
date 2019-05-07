<?php

namespace App\Http\Controllers;

use App\Mail\Invitation;
use App\Music;
use App\Reading;
use App\Wedding;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WeddingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $this->authorize('index', Reading::class);

        $weddings = DB::table('weddings')->get();
       
        return view('/weddings/search')->with('wed', $weddings);
    }

    public function view(Wedding $wedding)
    {
        $this->authorize('viewRecord', $wedding);
        
        return view('/weddings/view', compact('wedding'));
    }

    public function create()
    {
        $this->authorize('create', Wedding::Class);

        $states = DB::table('states')->get();
       
        return view('/weddings/create')->with('states', $states);
    }

    public function store(Request $request)
    {
        $this->authorize('create', Wedding::Class);

        $newWedding = request()->validate([
            'brideFirstName' => 'required|max:50',
            'groomFirstName' => 'required|max:50',
            'brideLastName' => 'required|max:50',
            'groomLastName' => 'required|max:50',
            'brideAddress' => 'required',
            'groomAddress' => 'required',
            'brideCity' => 'required',
            'groomCity' => 'required',
            'brideState' => 'required',
            'groomState' => 'required',
            'brideZipCode' => 'required| regex:(\d{5}([\-]\d{4})?)',
            'groomZipCode' => 'required| regex:(\d{5}([\-]\d{4})?)',
            'brideEmail' => 'required|email',
            'groomEmail' => 'required|email',
            'bridePhoneNumber' => 'required| regex:(^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$)',
            'groomPhoneNumber' => 'required| regex:(^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$)',
            'weddingDate' => 'required',
            'weddingTime' => 'required',
            'rehearsalDate' => '',
            'rehearsalTime' => '',
        ]);

        $hash = hash('ripemd160', request('weddingDate'));
        $id = hash('snefru', $hash); //hashing once more for more security

        $wedding = Wedding::create($newWedding);
        $wedding->update(['hashID' => $id]);

        // auto send invitation to bride
        $brideEmail = $wedding->brideEmail;
        $brideName = $wedding->brideFirstName;

        Mail::to($brideEmail)->send(new Invitation($brideName, $brideEmail, $id, Invitation::BRIDE_URL));

        // auto send invitation to groom
        $groomEmail = $wedding->groomEmail;
        $groomName = $wedding->groomFirstName;
        Mail::to($groomEmail)->send(new Invitation($groomName, $groomEmail, $id, Invitation::GROOM_URL));

        return redirect('/weddings/create');
    }

    public function edit(Wedding $wedding)
    {
        $this->authorize('viewDetails', $wedding);
        $states = DB::table('states')->get();
        return view('/weddings/edit', compact('wedding'))->with('states', $states);
    }

    public function coupleEdit()
    {
        $wedding = Wedding::where('groomEmail', auth()->user()->email)
                            ->orWhere('brideEmail', auth()->user()->email)->first();

        $this->authorize('viewDetails', $wedding);
        
        if ($wedding == null) {

            return abort('403');

        }
        
        else{
        $prelude = Music::where('type', 'prelude')->get();
        $bridesmaid = Music::where('type', 'Bridesmaids Entrance')->get();
        $bridal = Music::where('type', 'Bridal Entrance')->get();
        $gloria = Music::where('type', 'Gloria')->get();
        $responsorial = Music::where('type', 'Responsorial Psalm')->get();
        $gospel = Music::where('type', 'Gospel Acclamation')->get();
        $lighting = Music::where('type', 'Lighting of Candle')->get();
        $preparation = Music::where('type', 'Preparation')->get();
        $eucharistic = Music::where('type', 'Eucharistic Acclamations')->get();
        $communion = Music::where('type', 'Communion')->get();
        $visitation = Music::where('type', 'Visitation to Mary')->get();
        $recessional = Music::where('type', 'Recessional')->get();
        $firstReading = Reading::where('type', 'FIRST READING')->get();
        $secondReading = Reading::where('type', 'Second READING')->get();
        $gospelReading = Reading::where('type', 'GOSPEL')->get();
        
        return view('/weddings/details', compact('wedding'))->with('preludes', $prelude)->with('lightings', $lighting)
        ->with('bridesmaids', $bridesmaid)->with('bridals', $bridal)->with('glorias', $gloria)
        ->with('responsorials', $responsorial)->with('gospels', $gospel)
        ->with('preparations', $preparation)->with('eucharistics', $eucharistic)
        ->with('communions', $communion)->with('visitations', $visitation)
        ->with('recessionals', $recessional)->with('firstReadings', $firstReading)
        ->with('secondReadings', $secondReading)->with('gospelReadings', $gospelReading)
        ->with('participants', $wedding->participants)->with('ushers', $wedding->ushers);
    }
}

    public function details(Wedding $wedding)
    {
        $this->authorize('viewDetails', $wedding);

        $prelude = Music::where('type', 'prelude')->get();
        $bridesmaid = Music::where('type', 'Bridesmaids Entrance')->get();
        $bridal = Music::where('type', 'Bridal Entrance')->get();
        $gloria = Music::where('type', 'Gloria')->get();
        $responsorial = Music::where('type', 'Responsorial Psalm')->get();
        $gospel = Music::where('type', 'Gospel Acclamation')->get();
        $lighting = Music::where('type', 'Lighting of Candle')->get();
        $preparation = Music::where('type', 'Preparation')->get();
        $eucharistic = Music::where('type', 'Eucharistic Acclamations')->get();
        $communion = Music::where('type', 'Communion')->get();
        $visitation = Music::where('type', 'Visitation to Mary')->get();
        $recessional = Music::where('type', 'Recessional')->get();
        $firstReading = Reading::where('type', 'FIRST READING')->get();
        $secondReading = Reading::where('type', 'Second READING')->get();
        $gospelReading = Reading::where('type', 'GOSPEL')->get();
        $states = DB::table('states')->get();
        
        return view('/weddings/details', compact('wedding'))->with('preludes', $prelude)->with('lightings', $lighting)
            ->with('bridesmaids', $bridesmaid)->with('bridals', $bridal)->with('glorias', $gloria)
            ->with('responsorials', $responsorial)->with('gospels', $gospel)
            ->with('preparations', $preparation)->with('eucharistics', $eucharistic)
            ->with('communions', $communion)->with('visitations', $visitation)
            ->with('recessionals', $recessional)->with('firstReadings', $firstReading)
            ->with('secondReadings', $secondReading)->with('gospelReadings', $gospelReading)
            ->with('participants', $wedding->participants)
            ->with('ushers', $wedding->ushers)->with('states', $states);
    }

    public function readingText(Wedding $wedding)
    {
        $firstReading = Reading::where('type', 'FIRST READING')->get();
        $secondReading = Reading::where('type', 'Second READING')->get();
        $gospelReading = Reading::where('type', 'GOSPEL')->get();

        return view('/weddings/readingText', compact('wedding'))->with('firstReadings', $firstReading)
        ->with('secondReadings', $secondReading)->with('gospelReadings', $gospelReading);
    }

    public function save(Wedding $wedding)
    {
        
        $this->authorize('update', $wedding);
       
        
        request()->validate([
            'brideFirstName' => 'required',
            'groomFirstName' => 'required|max:50',
            'brideLastName' => 'required|max:50',
            'groomLastName' => 'required|max:50',
            'brideAddress' => 'required',
            'groomAddress' => 'required',
            'brideCity' => 'required',
            'groomCity' => 'required',
            'brideState' => 'required',
            'groomState' => 'required',
            'brideZipCode' => 'required| regex:(\d{5}([\-]\d{4})?)',
            'groomZipCode' => 'required| regex:(\d{5}([\-]\d{4})?)',
            'brideEmail' => 'required|email',
            'groomEmail' => 'required|email',
            'bridePhoneNumber' => 'required| regex:(^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$)',
            'groomPhoneNumber' => 'required| regex:(^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$)',
            'weddingDate' => 'required',
            'weddingTime' => 'required',
            'rehearsalDate' => '',
            'rehearsalTime' => '',
            'flowerGirl' => 'max:50',
            'ringbearer' => 'max:50',
            'gmEscort' => 'max:50',
            'gpEscort' => 'max:50',
            'firstReader' => 'max:50',
            'secondReader' => 'max:50',
            'thirdReader' => 'max:50',
            'altarCompanion' => 'max:50',
            'florist' => 'max:50',
            'photographer' => 'max:50',
            'videographer' => 'max:50',
            'minister' => 'max:50',
            //'unityCandle'=>'Rule::in([1,0])',
            // 'sideCandles'=>'in:Yes,No',
            //'litSideCandles'=>'Rule::in([Please have them lit before the ceremony begins, Parents/mothers will light during the procession])',
            // 'firstReading'=>'',
            // 'secondReading'=>'',
            // 'gospel' => '',
        ]);
     
        $wedding->update([
            //--Liturgy--//
            'brideFirstName' => request('brideFirstName'),
            'groomFirstName' => request('groomFirstName'),
            'brideLastName' => request('brideLastName'),
            'groomLastName' => request('groomLastName'),
            'brideAddress' => request('brideAddress'),
            'groomAddress' => request('groomAddress'),
            'brideCity' => request('brideCity'),
            'groomCity' => request('groomCity'),
            'brideState' => request('brideState'),
            'groomState' => request('groomState'),
            'brideZipCode' => request('brideZipCode'),
            'groomZipCode' => request('groomZipCode'),
            'brideEmail' => request('brideEmail'),
            'groomEmail' => request('groomEmail'),
            'bridePhoneNumber' => request('bridePhoneNumber'),
            'groomPhoneNumber' => request('groomPhoneNumber'),
            'weddingDate' => request('weddingDate'),
            'weddingTime' => request('weddingTime'),
            'rehearsalDate' => request('rehearsalDate'),
            'rehearsalTime' => request('rehearsalTime'),
            'unityCandle' => request('unityCandle'),
            'sideCandles' => request('sideCandles'),
            'litSideCandles' => request('litSideCandles'),
            'firstReading' => request('firstReading'),
            'firstReader' => request('firstReader'),
            'secondReading' => request('secondReading'),
            'secondReader' => request('secondReader'),
            'gospel' => request('gospel'),
            'faithPrayer' => request('faithPrayer'),
            'thirdReader' => request('thirdReader'),
            'giftPresenter' => request('giftPresenter'),
            'flowersToMoms' => request('flowersToMoms'),
            'minister' => request('minister'),
            'flowersToMary' => request('flowersToMary'),
            'altarCompanion' => request('altarCompanion'),
            'conclusion' => request('conclusion'),
            'florist' => request('florist'),
            'photographer' => request('photographer'),
            'videographer' => request('videographer'),
            'additionalInfo' => request('additionalInfo'),
            'flowerGirl' => request('flowerGirl'),
            'ringBearer' => request('ringBearer'),
            'altarServers' => request('altarServers'),
            'grandparents' => request('grandparents'),
            'gmEscort' => request('gmEscort'),
            'gpEscort' => request('gpEscort'),
            'runner' => request('runner'),
            'prelude' => request('prelude'),
            'lighting' => request('lightingOfCandle'),
            'bridesmaids' => request('bridesmaidsEntrance'),
            'preparation' => request('preparation'),
            'bridal' => request('bridalEntrance'),
            'eucharist' => request('eucharisticAcclamations'),
            'gloria' => request('gloria'),
            'communion' => request('communion'),
            'responsorialPsalm' => request('responsorialPsalm'),
            'visitation' => request('visitationToMary'),
            'gospelSong' => request('gospelAcclamation'),
            'recessional' => request('recessional'),
            'bestMan' => request('bestMan'),
            'brideOfHonor' => request('brideOfHonor'),
            'matrimonyType' => request('matrimonyType'),
        ]);

        if (auth()->user()->isAdmin()) 
        {
            $wedding->update([
                'adminComplete' => request('adminComplete'),
                'coupleComplete' => request('coupleComplete'),
            ]);
        }
        else{
            $wedding->update([
                'coupleComplete' => request('coupleComplete'),
            ]);
            
        }

        $wedding->ushers()->delete();
        $wedding->participants()->delete();

        $participantEntries = request('participant');

        foreach ($participantEntries as $participantEntry) {
            $wedding->participants()->create(['participant' => $participantEntry]);
        }

        $usherEntries = request('usher');

        foreach ($usherEntries as $usherEntry) {
            $wedding->ushers()->create(['usher' => $usherEntry]);
        }

        if (auth()->user()->isAdmin()) {
            
            return redirect('/weddings/details/'.$wedding->id)->with('success', 'Successfully updated');
        }
        else{
            return redirect('/weddings/edit')->with('success', 'Successfully updated'); 
        }
    }

    public function destroy(Wedding $wedding)
    {
        $this->authorize('delete', $wedding);

        $wedding->ushers()->delete();
        $wedding->participants()->delete();
        $wedding->delete();

        return redirect('/weddings/search')->with('success', 'Successfully deleted');
    }
   
}
