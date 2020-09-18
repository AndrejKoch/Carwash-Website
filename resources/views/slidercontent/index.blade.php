@extends('layouts.dashboard')
@section('content')

    <div class="row">
        <div class="col-md-12">

            <a href="/slidercontent/create" class="btn btn-round btn-info"><i class="material-icons">add_circle</i> Add Content Slider</a>

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
                    <h4 class="card-title ">Content Slider List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td>Id</td>
                                <td>Image</td>
                                <td>Title</td>
                                <td>Description</td>
                                <td>Action</td>
                            </tr>

                            @foreach($slidercontent as $slidercontent)
                                <tr>
                                    <td>{{ $slidercontent->id }}</td>
                                    <td><img src="/assets/img/slidercontent/thumbnails/{{$slidercontent->image}}" class="img-fluid"></td>
                                    <td>{{ $slidercontent->title }}</td>
                                    <td>{{ $slidercontent->description }}</td>


                                    <td>
                                        <a  class="btn btn-warning pull-left" style="margin-top: 6px" href="{{ url('/slidercontent', [$slidercontent->id, 'edit']) }}">Edit</a>
                                        <form action="{{ url('$slidercontent', [$slidercontent->id]) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection



