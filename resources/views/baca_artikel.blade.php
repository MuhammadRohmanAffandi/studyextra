@extends('template_view')

@section('konten')
<section id="artikel" class="parallax-section" style="background-position: 50% 242px;">
    <div class="container">
        <div class="row">

            <div class="wow fadeInUp col-md-6 col-sm-6 animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                <h3>{{ $artikel->judul_artikel}}</h3>
                <p>{!! $artikel->uraian_artikel !!}</p>
            </div>

            <div class="wow fadeInUp col-md-6 col-sm-6 animated" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                <img src="{{ asset('img/artikel/'.$artikel->gambar_artikel )}}" class="img-responsive" alt="Overview">
            </div>

        </div>
    </div>
</section>

@endsection