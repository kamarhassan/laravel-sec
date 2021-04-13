<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\OfferTrait;
class OfferController extends Controller
{  use OfferTrait;
    public function __construct()
    {

    }

    public function getOffer()
    {
        return Offer::get();
    }

    public function create()
    {
        return view('offers.create');
    }

    public function store(OfferRequest $request)
    {


//        $rules = $this->getRules();
//        $messages = $this->getMessages();
//        $validator = Validator::make($request->all(), $rules, $messages);
//        if ($validator->fails()) {
//            return redirect()->back()->withErrors($validator)->withInput($request->all());
////        return $validator->errors();
//        }
         $file_name = $this->saveImage($request->photo, 'images/offers');

        //insert
        Offer::create([
            'photo' => $file_name,
            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details,
            'lang' => $request->language,
        ]);
        return redirect()->back()->with(['success' => __('mesage.offers has been success inserted')]);
    }

    /* protected function getRules()
        {
            return $rules = [
                'name' => 'required | max:100 | unique:offers,name',
                'price' => ' required | numeric',
                'details' => 'required'
            ];
        }

        protected function getMessages()
        {
            return $messages = [
                'name.required' => __('error.name required'),
                'name.max' => __('error.name max   '),
                'name.unique' => __('error.name unique'),
                'price.required' => __('error.price required'),
                'price.numeric' => __('error.price numeric '),
                'details.required' => __('error.details required'),
            ];


        }




     */


    public function allOffer()
    {
        $getOffer = Offer::select('id', 'name', 'price', 'details','photo')->get();
        return view('offers.all', compact('getOffer'));
    }

    public function offerEdit($offer_id)
    {
        $offers = Offer::find($offer_id);
        if (!$offers) return redirect()->back();
        $offers = Offer::select('id', 'name', 'price', 'details','photo')->find($offer_id);
        return view('offers.edit', compact('offers'));
//        return $offers;
    }

    public function offerUpdate(Request $request, $offer_id)
    {
        $offers = Offer::find($offer_id);
        if (!$offers) return redirect()->back();
        $offers->update($request->all());
        return redirect()->back()->with(['success'=>__('mesage.offers has been success updated')]);

    }


}
