@extends('layout')
@section('content')
<div>
    <h1>Lists of Resturants</h1>
    @if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('status')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">address</th>
                <th scope="col">operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->address}}</td>
                <td>
                    <a href="delete/{{$item->id}}"> <i class="fa fa-trash"></i> </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="edit/{{$item->id}}"> <i class="fa fa-edit"></i> </a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop