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
                                <th scope="col">address</th>
                                <th scope="col">action</th> <th scope="col"></th>
                            </tr>
                            </thead>

                            <tbody>
                            @if(isset($hospitals) && $hospitals-> count() > 0 )
                            @foreach($hospitals as $hospital)
                            <tr>
                                <th scope="row">{{$hospital->id}}</th>
                                <td>{{$hospital->name}}</td>
                                <td>{{$hospital->address}}</td>
                                <td><a href="{{route('doctor.hospital',$hospital->id)}}" class="btn btn-outline-success"> employer</a></td>
                                <td><a href="{{route('remove.hospital',$hospital->id)}}" class="btn btn-outline-danger"> delete</a></td>
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
