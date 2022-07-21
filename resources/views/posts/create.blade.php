@extends('layouts.base')
@section('content')
    <h1>Crea un Post</h1>
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label for="Description">Descrizione</label>
            <textarea type="text" class="form-control" id="Description" name="Description">{{old('Description')}}</textarea>
          </div>
        <button type="submit" class="btn btn-primary">Crea</button>
      </form>
      <ul>
        @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endsection
