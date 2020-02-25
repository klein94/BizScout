<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\GoogleMapsAPI\GoogleMapsAPI;
use App\Place;

class PlacesController extends Controller
{
    public function index() {
        $results = new GoogleMapsAPI();
        return view('dashboard', ['data' => $results->search('establishment', 'hardware')]);
    }

    public function getContact($place_id) {
        // contact/ChIJpwQQAWcW-TIResPz71qUQJQ
        $results = new GoogleMapsAPI();
        echo $results->getContact($place_id);
    }

    public function getPhoto($photo_ref) {
        // contact/ChIJpwQQAWcW-TIResPz71qUQJQ
        $results = new GoogleMapsAPI();
        echo $results->getPhoto($photo_ref);
    }

    public function store(Request $request)
    {
        $place = new Place;
        $place->name = $request->input('name');
        $place->address = $request->input('address');
        $place->contact = $request->input('contact');
        $place->photo = $request->input('photo');
        // $place->type = $request->input('type');
        // $place->keyword = $request->input('keyword');

        //return response(['success' => $place]);

        if ($place->save()) {
            return response(['success' => $place]);
        } else {
            return response(['error' => $place]);
        }

        // $member = $request->isMethod('put') ? 
        //     Member::findOrFail($request->id) : new Member;

        // $member->firstname = $request->input('firstname');
        // $member->lastname = $request->input('lastname');
        // $member->middlename = $request->input('middlename');
        // $member->age = $request->input('age');
        // $member->birthdate = $request->input('birthdate');
        // $member->address = $request->input('address');
        // $member->status = $request->input('status');
        // $member->classification_id = $request->input('classification_id');
        // $member->contact = $request->input('contact');
        // $member->picture = $request->input('picture');
        
        // $reqType = $request->isMethod('put') ? 'update' : 'create';

        // if ($member->save()) {
        //     return new MemberResource($member);
        // } else {
        //     return response(['error' => $member]);
        // }
    }
}
