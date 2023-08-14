@extends('layout.layout')
@section('title', 'Create')
@section('content')

    <form action="{{route('activity.store')}}" name="create">
        @csrf
        <h1>create</h1>
        <div>
            <label>Title</label>
            <input type="text" name="title">
        </div>
        <div>
            <label>Matter</label>
            <input type="text" name="matter">
        </div>
        <div>
            <label>Teacher</label>
            <select name="teacher_name">
                <option value="John">John</option>
                <option value="Marcus">Marcus</option>
                <option value="Josh">Josh</option>
            </select>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
