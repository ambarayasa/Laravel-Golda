@extends('layout/main')

@section('title', 'List Golongan Darah')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-4 text-center">CRUD Golongan Darah</h1>
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
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $goldar as $gdar)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $gdar-> golongandarah }}</td>
                        <td>{{ $gdar-> rhesus }}</td>
                        <td>
                            <a href="/golongandarah/{{ $gdar->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                            <form action="/golongandarah/{{ $gdar->id }}" method="post" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
            <a href="/golongandarah/create" class="btn btn btn-success mb-1 float-right btn-sm">Tambah Data</a>
        </div>
    </div>
</div>
@endsection