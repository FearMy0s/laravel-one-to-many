@extends('layouts.base')
@section('content')
    <h1>Modifica: {{$post->title}}</h1>
    <form action="{{route('posts.update', $post->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" value="{{old('title',$post->title)}}">
        </div>
        <div class="form-group">
            <label for="Description">Descrizione</label>
            <textarea type="text" class="form-control" id="Description" name="Description">{{old('Description',$post->Description)}}</textarea>
          </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
        <button type="submit" class="btn btn-primary" href="{{ URL::previous() }}">Indietro</button>
      </form>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

      @endif
@endsection
