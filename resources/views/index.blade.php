@extends('layout/main')

@section('title', 'List Golongan Darah')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-4 text-center">List Golongan Darah</h1>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <table class="table mt-4">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Golongan Darah</th>
                        <th scope="col">Rhesus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $goldar as $gdar)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $gdar-> golongandarah }}</td>
                        <td>{{ $gdar-> rhesus }}</td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
</div>
@endsection