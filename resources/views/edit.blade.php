@extends('layout.layout')
@section('title', 'edit')
@section('content')

    <form action="{{route('activity.update', $activity->id)}}" name="edit">
        @csrf
        <h1>Edit</h1>
        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{$activity->title}}">
        </div>
        <div>
            <label>Matter</label>
            <input type="text" name="matter" value="{{$activity->matter}}">
        </div>
        <div>
            <label>Teacher</label>
            <select name="teacher_name">
                <option value="John"
                @if ($activity->teacher_name === 'John')
                    selected
                @endif
                >John</option>
                <option value="Marcus"
                @if ($activity->teacher_name === 'Mascus')
                    selected
                @endif
                >Marcus</option>
                <option value="Josh"
                @if ($activity->teacher_name === 'Josh')
                    selected
                @endif
                >Josh</option>
            </select>
        </div>
        <button type="submit">Edit</button>
    </form>
@endsection
