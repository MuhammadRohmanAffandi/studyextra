@extends('template_view')

@section('konten')
<!-- =========================
    SPEAKERS SECTION   
============================== -->
<section id="artikel" class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                <div class="section-title">
                    <h3>Artikel Kami</h3>
                    <p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
                </div>
            </div>
            <div id="owl-speakers" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                @foreach($artikels as $artikel)
                <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s" style="visibility: hidden; animation-delay: 0.9s; animation-name: none;">
                    <div class="artikel-gambar">
                        <img src="{{ asset('img/artikel/'.$artikel->gambar_artikel )}}" class="" alt="">
                        <div class="artikel-wrapper">
                            <h4 style="color: #222;">{{ $artikel->judul_artikel}}</h4>
                            <h6 style="color: #666;">{{ $artikel->caption_artikel}}</h6>
                            <div class="text-button-free">
                                <a style="color:#666" href="{{ url('baca-artikel')}}/{{ $artikel->id }}">Baca Artikel<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="mt-4">
            <div class="box-footer">
                {{-- <div class="box-body"> --}}
                {{ $artikels->links() }}
            </div>
        </div>
    </div>
</section>

@endsection