@extends('layouts.main')

@section('content')

{{--
id
name
birth_date
death_date
opera
nazionalità
genere
foto
--}}

<div class="container p-5 d-flex flex-column align-items-center" style="min-height: calc(100vh - 90px - 150px);">

  <h1 class="py-4">Artisti</h1>

  <table class="table">
    <thead class="thead-dark">
      <tr class="">
        <th scope="col">#id</th>
        <th scope="col">name</th>
        <th scope="col">birth_date</th>
        <th scope="col">death_date</th>
        <th scope="col">opera</th>
        <th scope="col">nazionalità</th>
        <th scope="col">genere</th>
        <th scope="col">foto</th>
      </tr>
    </thead>
    <tbody>
      {{-- @foreach ( as ) --}}

        <tr>
          {{-- <td>{{ -> }}</td> --}}
          <td>#id</td>
          <td>name</td>
          <td>birth_date</td>
          <td>death_date</td>
          <td>opera</td>
          <td>nazionalità</td>
          <td>genere</td>
          <td>foto</td>
            <a href="#" class="btn btn-success">VAI</a>
            {{-- OPPURE --}}
            {{-- <a href="{{ route('artisti.show', $comic->id) }}" class="btn btn-success">VAI</a> --}}
          </td>
        </tr>

      {{-- @endforeach --}}


    </tbody>
  </table>

</div>

@endsection
