@extends('template_view')

@section('konten')
<!-- =========================
   REGISTER SECTION   
============================== -->
<section id="pendaftaran" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                <h3>Silahkan Lakukan Pendaftaran</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet consectetuer diam nonummy.</p>
            </div>

            <div class="wow fadeInUp col-md-5 col-sm-5" data-wow-delay="1s" style="visibility: hidden; animation-delay: 1s; animation-name: none;">
                <form method="POST" action="{{ url('pendaftaran')}}" enctype="multipart/form-data">{{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <input name="nama_siswa" type="text" class="form-control" placeholder="Masukkan Nama Lengkap" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                        </div>
                        <div class="col-md-12">
                            <input name="no_hp_siswa" type="text" class="form-control" placeholder="Masukkan Nomor Hp" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                        </div>
                        <div class="col-md-12">
                            <input name="email_siswa" type="email" class="form-control" placeholder="Masukkan Email" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                        </div>
                        <div class="col-md-12">
                            <select name="jenis_kelamin_siswa" class="select form-control" data-live-search="true" tabindex="-98" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                <option selected="">--Pilih Jenis Kelamin--</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <input name="ttl_siswa" type="text" class="form-control" placeholder="Masukkan Tempat Tanggal Lahir" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                        </div>
                        <div class="col-md-12">
                            <input name="alamat_lengkap_rumah_siswa" type="text" class="form-control" placeholder="Masukkan Alamat Rumah" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                        </div>
                        <div class="col-md-12">
                            <input name="nama_sekolah_siswa" type="text" class="form-control" placeholder="Masukkan Nama Sekolah" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                        </div>
                        <div class="col-md-12">
                            <select name="jenjang" class="select form-control" data-live-search="true" tabindex="-98" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                <option selected="">--Pilih Jenjang--</option>
                                <option value="TK">TK</option>
                                <option value="SD/MI Sederajat">SD/MI Sederajat</option>
                                <option value="SMP Sederajat">SMP Sederajat</option>
                                <option value="SMA/SMK Sederajat">SMA/SMK Sederajat</option>
                                <option value="Unggulan">Unggulan</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <select name="paket" class="select form-control" data-live-search="true" tabindex="-98" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                <option selected="">--Pilih Paket--</option>
                                <option value="REGULAR">REGULAR</option>
                                <option value="PRIVATE">PRIVATE</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-file" data-text="Select your file!">
                                <input name="foto_siswa" type="file" class="custom-file-input" accept="image/*" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10">
                            <input name="submit" type="submit" class="form-control" id="submit" value="Daftar Sekarang">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    @include('sweetalert::alert')
</section>
@endsection