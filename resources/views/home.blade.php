@extends('layout.layout')
@section('title', 'Home')
@section('content')
    <h1>HOME</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Matter</th>
                <th>Teacher</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($activities as $activity)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$activity->title}}</td>
                    <td>{{$activity->matter}}</td>
                    <td>{{$activity->teacher_name}}</td>
                    <td>
                        <a href="{{route('activity.edit', $activity->id)}}">Edit</a>

                        <form action="{{route('activity.destroy', $activity->id)}}" name="destroy">
                            @csrf

                            <button type="submit" name="destroy">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
