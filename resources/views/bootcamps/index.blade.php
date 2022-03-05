@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Bootcamp </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('/bootcamp/create') }}" title="Create a bootcamp"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg" id="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Nama Bootcamp</th>
            <th>Harga</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($bootcamps as $bootcamp)

            <tr><td>{{ $bootcamp->id }}</td>
                <td>{{ $bootcamp->tanggal }}</td>
                <td>{{ $bootcamp->waktu }}</td>
                <td>{{ $bootcamp->nama_bootcamp }}</td>
                <td>{{ $bootcamp->harga }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $bootcamps->links() !!}

@endsection
