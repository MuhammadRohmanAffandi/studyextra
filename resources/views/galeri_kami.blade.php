@extends('template_view')

@section('konten')
<!-- =========================
    SPEAKERS SECTION   
============================== -->
<section id="galeri" class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                <div class="section-title">
                    <h3>Galeri Kami</h3>
                    <p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
                </div>
            </div>
            <div id="owl-speakers" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                @foreach($galeris as $galeri)
                <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s" style="visibility: hidden; animation-delay: 0.9s; animation-name: none;">
                    <div class="galeri-gambar">
                        <img src="{{ asset('img/galeri/'.$galeri->foto_galeri )}}" class="" alt="">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="mt-4">
            <div class="box-footer">
                {{-- <div class="box-body"> --}}
                {{ $galeris->links() }}
            </div>
        </div>
    </div>
</section>

@endsection