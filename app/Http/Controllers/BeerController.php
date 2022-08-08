<?php

namespace App\Http\Controllers;

use App\Beer;
use App\Setting;
use DateTime;
use Faker\Provider\Person;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers = Beer::orderBy('beerAmount', 'desc')->get();
        $total = 0;
        foreach ($beers as $beer){
            if ($beer->id != 10){
                $total += $beer->beerAmount;
            }
        }
        $result = compact('beers', 'total');
        return view('List', $result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3|max:18|unique:beers,name'
        ]);
        $person = new Beer();
        $person->name = $request->name;
        $person->beerAmount = 0;
        $person->totaal = 1;
        $person->hoogste = 1;
        $person->selected = true;
        $person->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function showBeer(Beer $beer)
    {
        dd($beer);
        return view('Edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        dd($request, $beer);
    }

    public function plusAndMin(Request $request, Beer $beer)
    {
        $beer = Beer::where('id', '=', $request->id)->first();
        if ($request->plus == 'plus')
            $beer->beerAmount += 1;
        elseif ($request->plus == 'min' && $beer->beerAmount != 0)
            $beer->beerAmount -= 1;
        $beer->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->remove;
        $beer = Beer::where('id', '=', $id)->first();
        if ($beer->id != 1){
            $beer->delete();
        }
        $beers = Beer::orderBy('beerAmount', 'desc')->get();
        $result = compact('beers');
        return redirect('/');
    }

    public function deletePage()
    {
        $spelers = Beer::get();
        $total = 0;
        foreach ($spelers as $beer){
            $total += $beer->beerAmount;
        }
        $result = compact('spelers', 'total');
        return view('remove', $result);
    }

    public function EditProfile(Request $request)
    {
        $deadline = false;
        $date_now = new DateTime();
        $date2    = new DateTime("2022-07-01");
        if ($date_now < $date2) {
            $deadline = false;
        }else{
            $deadline = true;
        }

        $id = $request->id;
        $person = Beer::where('id', '=', $id)->first();
        $result = compact('person', 'deadline');
        return view('Edit', $result);
    }

    public function EditIT(Request $request)
    {
        $bool = $request->selected === 'true'? true: false;
        $id = $request->id;
        $person = Beer::where('id', '=', $id)->first();
        $person->name = $request->name;
        $person->selected = $bool;
        if ($request->beerAmount != null)
            $person->beerAmount += $request->beerAmount;
        if($request->totaal != null){
            $person->totaal = $request->total;
            $person->hoogste = $request->hoogste;
        }
        $person->save();
        return redirect('/');
    }

    public function ad()
    {
        //Get value
        $setting = Setting::first();
        $value = $setting->ad;
        //Random name
        $people = Beer::where('selected', 'like', true)->get();
        $a=[];
        foreach ($people as $person){
            $name = $person->name;
            array_push($a,$name);
        }
        if(count($a) == 0){
            return redirect('/');
        }
        $random = array_rand($a);
        $randomName = $a[$random];

        //Random number
        $randomNumber = rand(1,6);
        if ($value == 3 && $randomNumber != 6){
            $randomNumber = rand(1,6);
        }
        elseif ($value == 12 && $randomNumber > 3){
            $randomNumber = rand(1,6);
        }
        elseif ($value == 18 && $randomNumber > 4){
            $randomNumber = rand(1,6);
        }
        elseif ($value == 0){
            $randomNumber = rand(1,5);
        }
        elseif ($value == 1){
            $randomNumber = 6;
        }

        $result = compact('randomName', 'randomNumber');
        return view('Ad', $result);
    }
}
