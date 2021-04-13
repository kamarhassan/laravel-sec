<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OfferController extends Controller
{
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
        Offer::create([
            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details,
            'lang'=>$request->language,
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

}
