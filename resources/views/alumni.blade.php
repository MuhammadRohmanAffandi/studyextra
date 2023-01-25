@extends('template_view')

@section('konten')
<!-- =========================
    SPEAKERS SECTION   
============================== -->
<section id="alumni" class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                <div class="section-title">
                    <h3>Alumni</h3>
                    <p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
                </div>
            </div>
            <div id="owl-speakers" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                @foreach($alumnis as $alumni)
                <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s" style="visibility: hidden; animation-delay: 0.9s; animation-name: none;">
                    <div class="alumni-gambar">
                        <img src="{{ asset('img/alumni/'. $alumni->foto_siswa) }}" class="" alt="">
                        <div class="alumni-wrapper">
                            <h4 style="color: #222;">{{ $alumni->nama_siswa}}</h4>
                            <h6 style="color: #666;">{{ $alumni->nama_sekolah_siswa}}</h6>
                            <hr>
                            <strong><i class="fa fa-pencil margin-r-5"></i> Kontak</strong>
                            <h6 style="color: #666;">{{ $alumni->email_siswa}}</h6>
                            <hr>
                            <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>
                            <h6 style="color: #666;">{{ $alumni->alamat_lengkap_rumah_siswa}}</h6>
                            <hr>
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Pengalaman</strong>
                            <h6 style="color: #666;">{{ $alumni->jenjang}}</h6>
                            <h6 style="color: #666;">{{ $alumni->paket}}</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="mt-4">
            <div class="box-footer">
                {{-- <div class="box-body"> --}}
                {{ $alumnis->links() }}
            </div>
        </div>
    </div>
</section>

@endsection