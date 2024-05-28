extends('layout.main')

@section('title','Fakultas')

@section('content')
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
                  <h4 class="card-title">Prodi</h4>
                  <p class="card-description">
                    Add class <code>list data Prodi</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>NAma Prodi</th>
                          <th>Singkatan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($prodi as $item)
                        <tr>
                            <td>{{$item ["nama"]}}</td>
                            <td>{{$item["singkatan"]}}</td>
                        </tr>
                         @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection
