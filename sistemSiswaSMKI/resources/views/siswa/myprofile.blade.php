@extends('layout.main')

@section('container')
    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>{{ $siswa->nama_siswa }}</h2>
              <h3>{{ $siswa->nis }}</h3>
              
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
                 <button class="nav-link" data-bs-toggle="tab"  data-bs-target="#profile-edit">Mata Pelajaran</button> 
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
                  <div class="container">
                    <span>Mata Pelajaran</span>
                      <p class="small fst-italic">
                        {{$siswa->mapel->count()}}
                      </p>  
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">NIS</div>
                    <div class="col-lg-9 col-md-8">{{$siswa->nis}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nama</div>
                    <div class="col-lg-9 col-md-8">{{$siswa->nama_siswa}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                    <div class="col-lg-9 col-md-8">{{$siswa->jenis_kelamin}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                    <div class="col-lg-9 col-md-8">{{$siswa->tgl_lahir}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8">{{$siswa->alamat}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">No Telpon</div>
                    <div class="col-lg-9 col-md-8">{{$siswa->kelas->nama_kelas}}</div>
                  </div>
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#smallModal">
                    Small Modal
                  </button>
                
                   <table class="table table-striped">
                    <thead>
                      <tr>
                          <th scope="col">Kode Mapel</th>
                          <th scope="col">Nama Mapel</th>
                          <th scope="col">Pengajar</th>
                          <th scope="col">Nilai</th>
                          <th scope="col">Tanggal</th>
                      </tr>
                      </thead>
                      @foreach($siswa->mapel as $mapel)
                      <tbody>
                        <td>{{$mapel->kode_mapel}}</td>
                        <td>{{$mapel->nama_mapel}}</td>
                        <td><a href="/Guru/{{$mapel->guru_id}}/profile">{{$mapel->guru->nama_guru}}</a></td>
                        <td>{{$mapel->pivot->nilai}}</td>
                        <td>{{$mapel->pivot->tanggal}}</td>
                      </tbody>
                      @endforeach
                   </table>
                </div>

                {{-- <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Changes made to your account
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">
                            Information on new products and services
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                          <label class="form-check-label" for="securityNotify">
                            Security alerts
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End settings Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form --> --}}

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

    <div class="modal fade" id="smallModal" tabindex="-1">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Small Modal</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="/Siswa/{{$siswa->id}}/nilai" method="POST">
              @csrf
          <div class="modal-body">
            <div class="mb-1"><label class="">Nama Mapel</label></div>
              <div class="">
                <select class="form-select" name="mapel" aria-label="Default select example">
                  <option selected>Pilih Mata Pelajaran</option>
                  @foreach($matapelajaran as $mp)
                  <option value="{{$mp->id}}">{{$mp->nama_mapel}}</option>
                  @endforeach
                </select>
              </div>
            <div class="mb-1"><label for="nilai" class="">Nilai</label></div>
            <div class="">
              <input type="text" class="form-control" name="nilai">
            </div>
            <div class="mb-1"><label for="tgl" class="">Tanggal</label></div>
            <div class="">
              <input type="date" class="form-control" name="tanggal">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
          </div>
        </div>  
          </div>
        </div>
      </div>
    </div>

@endsection
