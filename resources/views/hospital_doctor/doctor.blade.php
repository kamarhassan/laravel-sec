@extends('layouts.navigate')
@section('create')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="content">
                        <div class="title m-b-md">
                            Hospital list
                        </div>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">specified</th>
                                <th scope="col">action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @if(isset($doctors) && $doctors-> count() > 0 )
                            @foreach($doctors as $doctor)
                            <tr>
                                <th scope="row">{{$doctor->id}}</th>
                                <td>{{$doctor->name}}</td>
                                <td>{{$doctor->specified}}</td>
{{--                                <td><a href="{{route('doctor.hospital',$doctor->id)}}" class="btn btn-outline-danger"> delete</a></td>--}}
{{--                                <td><a href="{{route('doctor.hospital',$doctor->id)}}" class="btn btn-outline-danger"> delete</a></td>--}}
                            </tr>
                                @endforeach
                                @endif

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
