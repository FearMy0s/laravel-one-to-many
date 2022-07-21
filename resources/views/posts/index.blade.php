@extends('layouts.base')

@section('content')
    <h1>Lista Post</h1>
    <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Azioni</th>
                <a href="{{route('posts.create')}}" class="btn btn-primary">Crea</a>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <th>{{$post->id}}</th>
                    <th>{{$post->title}}</th>
                    <th>{{$post->Description}}</th>
                    <td>
                        <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary" >Visualizza</a>
                        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-warning" >Modifica</a>
                        <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Cancella</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
          </table>

    </div>
@endsection
