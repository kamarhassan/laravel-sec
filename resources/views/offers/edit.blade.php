@extends('layouts.navigate')
@section('create')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="content">
                        <div class="title m-b-md">
                            {{__('mesage.title of form block')}}
                        </div>
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        <form method="POST" action={{route('offers.update',$offers->id)}}>
                        @csrf <!-- to add token      <input type="hidden"  name="_token" > -->
                            <div class="form-group">
                                <label for="exampleInputEmail1"> {{__('mesage.enter name of offer')}}</label>
                                <input type="text" class="form-control" name="name" value="{{$offers->name }}"
                                       placeholder=" {{__('mesage.enter name of offer')}}">
                                @error('name')
                                <small class="form-text text-danger">{{$errors->first('name')}}</small>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">{{__('mesage.enter price of offer')}}</label>
                                <input type="text" class="form-control" name="price" value="{{$offers->price }}"
                                       placeholder="{{__('mesage.enter price of offer')}}">
                                @error('price')
                                <small class="form-text text-danger">{{$errors->first('price')}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">{{__('mesage.enter details of offer')}}</label>
                                <input type="text" class="form-control" name="details" value="{{$offers->details }}"
                                       placeholder="{{__('mesage.enter details of offer')}}">
                                @error('details')
                                <small class="form-text text-danger">{{$errors->first('details')}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <img  style="width: 90px; height: 90px;" src="{{asset('images/offers/'.$offers->photo)}}">

{{--                                <label for="exampleInputPassword1">{{__('mesage.photo required')}}</label>--}}
{{--                                <input type="file" class="form-control" name="photo" value="{{$offers->photo}}">--}}
{{--                                @error('photo')--}}
{{--                                <small class="form-text text-danger">{{$errors->first('photo')}}</small>--}}
{{--                                @enderror--}}
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary">{{__('mesage.saved button')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
