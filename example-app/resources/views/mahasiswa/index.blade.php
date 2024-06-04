@extends('layout.main')

@section('title','mahasiswa')

@section('konten')
    {{-- <h1>UMDP</h1>
    <h2>prodi</h2>
    <ul>
    @foreach ($prodi as $item)
        <li>{{$item ["nama"]}}{{$item["singkatan"]}}</li>
    @endforeach --}}
    </ul>
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">mahasiswa</h4>
                  <p class="card-description">
                    Add class <code>list data mahasiswa</code>
                  </p>
                  <a href="{{route('mahasiswa.create')}}" class="btn btn-rounded btn-primary">Tambah</a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>npm</th>
                          <th>nama mahasiswa</th>
                          <th>tempat lahir</th>
                          <th>tanggal lahir</th>
                          <th>alamat</th>
                          <th>prodi id</th>
                          <th>url foto</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($mahasiswa as $item)
                        <tr>
                            <td>{{$item ["id"]}}</td>
                            <td>{{$item["npm"]}}</td>
                            <td>{{$item["nama"]}}</td>
                            <td>{{$item["tempat_lahir"]}}</td>
                            <td>{{$item["tanggal_lahir"]}}</td>
                            <td>{{$item["alamat"]}}</td>
                            <td>{{$item["prodi_id"]}}</td>
                            <td>{{$item["url_foto"]}}</td>
                        </tr>
                         @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            @if(session('success'))
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                  title: "Good job!",
                  text: "{{session('success') }}",
                  icon: "success"
                });
            </script>
          @endif
@endsection
