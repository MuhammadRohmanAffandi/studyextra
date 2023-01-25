@extends('template_view')

@section('konten')
<!-- =========================
    SPEAKERS SECTION   
============================== -->
<section id="ebook" class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                <div class="section-title">
                    <h3>E-Book Kami</h3>
                    <p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
                </div>
            </div>
            <div id="owl-speakers" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                @foreach($ebooks as $ebook)
                <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s" style="visibility: hidden; animation-delay: 0.9s; animation-name: none;">
                    <div class="">
                        <div class="">
                            <!-- <ul class="">
                                <h3 href="home" class="">{{ $ebook->nama_ebook}}</h3>
                            </ul> -->
                            <ul class="">
                                <a href="{{ asset('dokumen/ebook/'. $ebook->file_ebook) }}" class="">{{ $ebook->file_ebook}}</a>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="mt-4">
            <div class="box-footer">
                {{-- <div class="box-body"> --}}
                {{ $ebooks->links() }}
            </div>
        </div>
    </div>
</section>

@endsection