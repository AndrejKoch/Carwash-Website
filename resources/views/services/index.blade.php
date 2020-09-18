@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="/services/create" class="btn btn-round btn-info"><i class="material-icons">add_circle</i> Add Service</a>
        </div>
    </div>

    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Services page table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <tr>
                                <th>
                                    id
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    Image
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $services)
                                <tr>
                                    <td>{{ $services->id }}</td>
                                    <td>{{ $services->name }}</td>
                                    <td>{!! Str::limit($services->description, 50) !!}</td>
                                    <td>{{ $services->price }}</td>
                                    <td><img src="/assets/img/services/thumbnails/{{$services->image}}" class="img-fluid"></td>

                                    <td>

                                        <a  class="btn btn-warning pull-left" style="margin-top: 6px" href="{{ url('/services', [$services->id, 'edit']) }}">Edit</a>
                                        <form action="{{ url('/services', [$services->id]) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-danger pull-left">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
