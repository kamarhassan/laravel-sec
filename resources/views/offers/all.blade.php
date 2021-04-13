@extends('layouts.navigate')
@section('create')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('OfferView.name of offer')}}</th>
            <th scope="col">{{__('OfferView.price of offer')}}</th>
            <th scope="col">{{__('OfferView.details of offer')}}</th>
        </tr>
        </thead>
        <tbody>

        @foreach($getOffer  as $offer)
            <tr>
                <th scope="row">{{$offer->id}}</th>
                <td>{{$offer->name}}</td>
                <td>{{$offer->price}}</td>
                <td>{{$offer->details}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
