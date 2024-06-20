@extends('layout.main')

@section('title','mahasiswa')

@section('konten')
<div class="row">
    {{-- formulirtambah fakultas --}}
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Mahasiswa</h4>
            <p class="card-description">
              Formulir tambah mahasiswa
            </p>
            <form method="POST" action="{{ route('mahasiswa.store')}}" class ="forms-sample" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                <label for="text">id</label>
                <input type="text" class="form-control" name="id" placeholder="">
              </div>
              <div class="form-group">
                <label for="text">Npm</label>
                <input type="text" class="form-control" name="npm" placeholder="">
              </div>
              <div class="form-group">
                <label for="nama">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="nama" placeholder="">
              </div>
              <div class="form-group">
                <label for="text">tempat lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" placeholder="">
              </div>
              <div class="form-group">
                <label for="date">tanggal lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" placeholder="">
              </div>
              <div class="form-group">
                <label for="text">alamat</label>
                <input type="text" class="form-control" name="alamat" placeholder="">
              </div>
              <div class="form-group">
                <label for="text">prodi_id</label>
                <select name="prodi_id" class="form-control">
                    @foreach ($prodi as $item)
                        <option value="{{$item['id']}}">
                            {{$item['nama']}}
                        </option>
                    @endforeach
                </select>
                @error('prodi_id')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="text">url foto</label>
                <input type="file" class="form-control" name="url_foto"
                @error('url_foto')
                  <span class="text-danger">{{$message}}</span>    
                @enderror>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="{{ url('mahasiswa')}}" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection