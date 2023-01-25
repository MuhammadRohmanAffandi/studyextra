@extends('template_view')

@section('konten')
<!-- =========================
    OVERVIEW SECTION   
============================== -->
<section id="register" class="parallax-section" style="background-position: 50% 242px;">
    <div class="container">
        <div class="row">
            <div class="wow fadeInUp col-md-6 col-sm-6 animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                <h3>Profil Kami</h3>
                <p>This is a Bootstrap v3.3.6 layout that is responsive and mobile friendly. You may download and modify this template for your website. Please tell your friends about templatemo.</p>
                <p>Quisque facilisis scelerisque venenatis. Nam vulputate ultricies luctus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
            </div>
            <div class="wow fadeInUp col-md-6 col-sm-6 animated" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                <img src="/assets/images/overview-img.jpg" class="img-responsive" alt="Overview">
            </div>
            <div class="wow fadeInLeft col-md-4 col-sm-4" data-wow-delay="0.3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                <h3>Visi</h3>
                <p>MENDAMPINGI SISWA SELANGKAH LEBIH MAJU DARI YANG TERMAJU SERTA BERAKHLAK MULIA</p>
            </div>

            <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                <h3>Misi</h3>
                <p>MENJADIKAN SISWA NOMOR 1 BERINTLEKTUAL TINGGI INTELEGENSI AKTIF</p>
            </div>

            <div class="wow fadeInRight col-md-4 col-sm-4" data-wow-delay="0.9s" style="visibility: hidden; animation-delay: 0.9s; animation-name: none;">
                <h3>Moto</h3>
                <p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
            </div>
        </div>
    </div>
</section>

<!-- =========================
    CONTACT SECTION   
============================== -->
<section id="contact" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="wow fadeInUp col-md-offset-1 col-md-5 col-sm-6" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                <div class="">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.489136846892!2d112.57465891469049!3d-7.0691455948944295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77fd00dcdbd963%3A0xa7e1435cf4ffc8b2!2sLBB%20Study%20Extra!5e0!3m2!1sen!2sid!4v1651134827066!5m2!1sen!2sid" width="100%" height="543" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>

            <div class="wow fadeInUp col-md-5 col-sm-6" data-wow-delay="0.9s" style="visibility: hidden; animation-delay: 0.9s; animation-name: none;">
                <div class="contact_detail">
                    <div class="section-title">
                        <h2>Kritik dan Saran</h2>
                    </div>
                    <form id="" method="post" action="{{ url('tentang-kami')}}">{{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="nama_siswa" type="text" class="form-control" placeholder="Masukkan Nama" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="email_siswa" type="email" class="form-control" placeholder="Masukkan Email" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <textarea name="kritik" rows="6" class="form-control" placeholder="Masukkan Kritik dan Saran" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <input name="submit" type="submit" class="form-control" id="submit" value="Kirim">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    @include('sweetalert::alert')

</section>
@endsection