@extends('template.index')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Merk</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Edit Data Merk</li>
            </ol>
            <a href="/merk" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/merk/update/{{$merkData->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Merk Mobil</label>
                        <input type="text" value={{$merkData->merk}} class="form-control" name="merk" required>
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection