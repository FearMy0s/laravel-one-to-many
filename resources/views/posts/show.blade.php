@extends('layouts.base')

@section('content')
<div>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <th>{{$post->title}}</th>
                <th>{{$post->Description}}</th>
            </tr>
        </tbody>
      </table>

</div>
@endsection
