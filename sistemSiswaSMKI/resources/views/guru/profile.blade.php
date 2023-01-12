@extends('layout.main')

@section('container')
    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>{{ $guru->nama_guru }}</h2>
              
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Info</button>
                </li>

                <li class="nav-item">
                 <button class="nav-link" data-bs-toggle="tab"  data-bs-target="#profile-edit">Pengajar</button> 
                </li>

                {{-- <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li> --}}

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  {{-- <div class="container">
                    <span>Mata Pelajaran</span>
                      <p class="small fst-italic">
                        {{$siswa->mapel->count()}}
                      </p>  
                  </div> --}}
                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">NIS</div>
                    <div class="col-lg-9 col-md-8">{{$guru->nama_guru}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">No Telpon</div>
                    <div class="col-lg-9 col-md-8">{{$guru->no_tlp_guru}}</div>
                  </div>
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                
                   <table class="table table-striped">
                    <thead>
                      <tr>
                          <th scope="col">Kode Mapel</th>
                          <th scope="col">Nama Mapel</th>
                      </tr>
                      </thead>
                      @foreach($guru->mapel as $mapel)
                      <tbody>
                           <td>{{$mapel->kode_mapel}}</td>
                           <td>{{$mapel->nama_mapel}}</td>
                      </tbody>
                     @endforeach
                   </table>
                </div>
                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
 @endsection   