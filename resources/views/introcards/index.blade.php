@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="/introcards/create" class="btn btn-round btn-info"><i class="material-icons">add_circle</i> Add Intro Card</a>
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
                    <h4 class="card-title ">Intro Cards page table</h4>
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
                                    Icon
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($introcards as $introcard)
                                <tr>
                                    <td>{{ $introcard->id}}</td>
                                    <td>{{ $introcard->title}}</td>
                                    <td>{!! Str::limit($introcard->description, 50) !!}</td>
                                    <td>{{ $introcard->icon}}</td>
                                    <td>

                                        <a  class="btn btn-warning pull-left" style="margin-top: 6px" href="{{ url('/introcards', [$introcard->id, 'edit']) }}">Edit</a>
                                        <form action="{{ url('/introcard', [$introcard->id]) }}" method="post">
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
