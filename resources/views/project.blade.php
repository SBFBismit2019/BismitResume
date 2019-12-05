<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BISMIT Projects</title>
    <link rel="icon" type="image/ico" href="{{asset('images/project/logoBisMitSmall.png')}}" />
    <!-- CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/project.css')}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:700&display=swap" rel="stylesheet">
</head>
<body>
@include('layouts.partials.navbar')
@include('layouts.partials.upBtn')
<!--beginning of pop-up section -->
    <section>
        <div class="pop-up"  id="popUp">
          <div class="pop">
            <div class="exit-btn" onclick="exitBtn(1)">&#8592; click to back</div>
            <div class="content1">
              <div class="group gambar">
                <div class="model"><img class="img-fluid"src="{{asset('images/project/slide/beraniSehat(1).jpg')}}" alt=""></div>
                <div class="model"><img class="img-fluid"src="{{asset('images/project/slide/beraniSehat(2).jpg')}}" alt=""></div>
                <div class="model"><img class="img-fluid"src="{{asset('images/project/slide/beraniSehat(3).jpg')}}" alt=""></div>
                <table>
                  <tr>
                      <th ><img class="img-fluid select" src="{{asset('images/project/slide/beraniSehat(1).jpg')}}" alt="" onclick="slide(1)"></th>
                      <th ><img class="img-fluid select" src="{{asset('images/project/slide/beraniSehat(2).jpg')}}" alt="" onclick="slide(2)"></th>
                      <th ><img class="img-fluid select" src="{{asset('images/project/slide/beraniSehat(3).jpg')}}" alt="" onclick="slide(3)"></th>
                  </tr>
                </table>
              </div>
              <div class="group description">     
                <div class="judul">
                  <h4>Berani Sehat</h4>
                  <div class="garis"></div>
                </div>
                <div class="isi"><p>Beranisehat.com diluncurkan pada tahun 2014 oleh Media Aesculapius, sebuah badan mahasiswa di Fakultas Kedokteran Universitas Indonesia yang telah dikenal sepak terjangnya sejak 1970. Selain Beranisehat.com, Media Aesculapius telah lebih dari separuh abad mengirimkan Surat Kabar Media Aesculapius ke dokter-dokter di seluruh pelosok Indonesia. Karya lainnya dari Media Aesculapius adalah buku Kapita Selekta Kedokteran, kini telah mencapai edisi IV, yang menjadi pegangan tidak hanya dokter dan mahasiswa kedokteran, namun juga kalangan keperawatan dan profesi medis lainnya</p></div>
                <a class="ancor" href="http://beranisehat.com/">beranisehat.com</a>
              </div>
            </div>
          </div>
        </div>
        <div class="pop-up"  id="popUp">
          <div class="pop">
            <div class="exit-btn" onclick="exitBtn(2)">&#8592; click to back</div>
            <div class="content1">
              <div class="group gambar">
                <div class="model"><img class="img-fluid"src="{{asset('images/project/slide/dtsIndonesia(1).jpg')}}" alt=""></div>
                <div class="model"><img class="img-fluid"src="{{asset('images/project/slide/dtsIndonesia(2).jpg')}}" alt=""></div>
                <div class="model"><img class="img-fluid"src="{{asset('images/project/slide/dtsIndonesia(3).jpg')}}" alt=""></div>
                <table>
                  <tr>
                      <th ><img class="img-fluid select" src="{{asset('images/project/slide/dtsIndonesia(1).jpg')}}" alt="" onclick="slide(1)"></th>
                      <th ><img class="img-fluid select" src="{{asset('images/project/slide/dtsIndonesia(2).jpg')}}" alt="" onclick="slide(2)"></th>
                      <th ><img class="img-fluid select" src="{{asset('images/project/slide/dtsIndonesia(3).jpg')}}" alt="" onclick="slide(3)"></th>
                  </tr>
                </table>
              </div>
              <div class="group description">     
                <div class="judul">
                  <h4>DST Indonesia</h4>
                  <div class="garis"></div>
                </div>
                <div class="isi"><p>DTS Indonesia atau Development, Technology, and Strategy adalah sebuah organisasi yang berfokus kepada research di bidang ekonomi. DTS didirikan oleh orang-orang yang expert pada bidangnya masing-masing.</p></div>
                <a class="ancor" href="http://www.dts-indonesia.com/">www.dts-indonesia.com</a>
              </div>
            </div>
          </div>
        </div>
        <div class="pop-up"  id="popUp">
          <div class="pop">
            <div class="exit-btn" onclick="exitBtn(3)">&#8592; click to back</div>
            <div class="content1">
              <div class="group gambar">
                <div class="model"><img class="img-fluid"src="{{asset('images/project/slide/kriaBudaya(1).jpg')}}" alt=""></div>
                <div class="model"><img class="img-fluid"src="{{asset('images/project/slide/kriaBudaya(2).jpg')}}" alt=""></div>
                <div class="model"><img class="img-fluid"src="{{asset('images/project/slide/kriaBudaya(3).jpg')}}" alt=""></div>
                <table>
                  <tr>
                      <th ><img class="img-fluid select" src="{{asset('images/project/slide/kriaBudaya(1).jpg')}}" alt="" onclick="slide(1)"></th>
                      <th ><img class="img-fluid select" src="{{asset('images/project/slide/kriaBudaya(2).jpg')}}" alt="" onclick="slide(2)"></th>
                      <th ><img class="img-fluid select" src="{{asset('images/project/slide/kriaBudaya(3).jpg')}}" alt="" onclick="slide(3)"></th>
                  </tr>
                </table>
              </div>
              <div class="group description">     
                <div class="judul">
                  <h4>Kria Budaya</h4>
                  <div class="garis"></div>
                </div>
                <div class="isi"><p>Founded on February, 17th 1983, the group with great name of the country’s leading university: Universitas Indonesia; and has been participating in various competitions and festivals, both domestic and international scale. Liga Tari Mahasiswa Universitas Indonesia Krida Budaya is a student organization focusing on preserving and developing folklore dances and music. In the course of time, Krida Budaya has grown into a phenomenal dance group that focused to wider dance perspectives. Its members, nowadays, also learn basic ballet, contemporary dance, and modern dance in additional to folklore dance. The group would not have come this far without guidance from numerous highly dedicated people that constantly accompanying them; the seniors, dance mentors, Tom Ibnur (as the Artistic Director) and A.G. Sudibyo (as the Advisor).</p></div>
                <a class="ancor" href="http://kridabudaya.com/">kriabudaya.com</a>
              </div>
            </div>
          </div>
        </div>
        <div class="pop-up"  id="popUp">
          <div class="pop">
            <div class="exit-btn" onclick="exitBtn(4)">&#8592; click to back</div>
            <div class="content1">
              <div class="group gambar">
                <div class="model"><img class="img-fluid"src="imgs/slide/Penny(1).jpg" alt=""></div>
                <div class="model"><img class="img-fluid"src="imgs/slide/Penny(2).jpg" alt=""></div>
                <div class="model"><img class="img-fluid"src="imgs/slide/Penny(3).jpg" alt=""></div>
                <table>
                  <tr>
                      <th ><img class="img-fluid select" src="imgs/slide/Penny(1).jpg" alt="" onclick="slide(1)"></th>
                      <th ><img class="img-fluid select" src="imgs/slide/Penny(2).jpg" alt="" onclick="slide(2)"></th>
                      <th ><img class="img-fluid select" src="imgs/slide/Penny(3).jpg" alt="" onclick="slide(3)"></th>
                  </tr>
                </table>
              </div>
              <div class="group description">     
                <div class="judul">
                  <h4>Penni</h4>
                  <div class="garis"></div>
                </div>
                <div class="isi"><p>Penni.id merupakan tempat bagi mahasiswa untuk mencari pekerjaan sampingan demi mendapatkan penghasilan.</p></div>
                <a class="ancor" href="http://penni.id">penni.id</a>
              </div>
            </div>
          </div>
        </div>
        <div class="pop-up"  id="popUp">
          <div class="pop">
            <div class="exit-btn" onclick="exitBtn(5)">&#8592; click to back</div>
            <div class="content1">
              <div class="group gambar">
                <div class="model"><img class="img-fluid"src="imgs/slide/Polri(1).jpg" alt=""></div>
                <div class="model"><img class="img-fluid"src="imgs/slide/Polri(2).jpg" alt=""></div>
                <div class="model"><img class="img-fluid"src="imgs/slide/Polri(3).jpg" alt=""></div>
                <table>
                  <tr>
                      <th ><img class="img-fluid select" src="imgs/slide/Polri(1).jpg" alt="" onclick="slide(1)"></th>
                      <th ><img class="img-fluid select" src="imgs/slide/Polri(2).jpg" alt="" onclick="slide(2)"></th>
                      <th ><img class="img-fluid select" src="imgs/slide/Polri(3).jpg" alt="" onclick="slide(3)"></th>
                  </tr>
                </table>
              </div>
              <div class="group description">     
                <div class="judul">
                  <h4>Rumah Sakit Bhayangkara Lemdiklat Polri</h4>
                  <div class="garis"></div>
                </div>
                <div class="isi"><p>si monyet itu sok pinter orangnya. dia itu sangat suka memasak. masaknya pasti yang aneh aneh, kalau ngak sup ikan, ya sup buaya. ngak ngerti juga sama dianya gimana. kalau makan ngak kontrol, semua di hamok. gila lah orangnya</p></div>
                <a class="ancor" href="http://rumkitbhayangkaralemdiklatpolri.com/">rumkitbhayangkaralemdiklatpolri.com</a>
              </div>
            </div>
          </div>
        </div>
        <div class="pop-up"  id="popUp">
          <div class="pop">
            <div class="exit-btn" onclick="exitBtn(6)">&#8592; click to back</div>
            <div class="content1">
              <div class="group gambar">
                <div class="model"><img class="img-fluid"src="imgs/slide/TokopediaAICenter(1).jpg" alt=""></div>
                <div class="model"><img class="img-fluid"src="imgs/slide/TokopediaAICenter(2).jpg" alt=""></div>
                <div class="model"><img class="img-fluid"src="imgs/slide/TokopediaAICenter(3).jpg" alt=""></div>
                <table>
                  <tr>
                      <th ><img class="img-fluid select" src="imgs/slide/TokopediaAICenter(1).jpg" alt="" onclick="slide(1)"></th>
                      <th ><img class="img-fluid select" src="imgs/slide/TokopediaAICenter(2).jpg" alt="" onclick="slide(2)"></th>
                      <th ><img class="img-fluid select" src="imgs/slide/TokopediaAICenter(3).jpg" alt="" onclick="slide(3)"></th>
                  </tr>
                </table>
              </div>
              <div class="group description">     
                <div>
                  <h4>Tokopedia AI Center</h4>
                  <div class="garis"></div>
                </div>
                <div class="isi"><p>Tokopedia AI Center adalah sebuah tempat pengembangan AI di Universitas Indonesia yang terletak di Fakultas Ilmu Komputer Indonesia. AI Center ini berfokus kepada penelitian dan pengembangan untuk memajukan kecerdasan buatan di Indonesia.</p></div>
                <a class="ancor" href="https://tokopedia-ai.cs.ui.ac.id/">tokopedia-ai.cs.ui.ac.id</a>
              </div>
            </div>
          </div>
        </div>
    </section>   
      <!--end of pop-up section -->
      <!-- beginning of gallery section -->
    <section class="gallery">
        <div class="header"><h1 class="mainTitle">PROJECTS</h1></div>
        <div class="content">
            <div class="tiles container-fluid">
                <div class="row flex-wrap justify-content-center">
                  <div class="tile col-10 col-md-5 border"><div class="hover" onmouseout="mouseout(1)" onclick="pop(1)">Berani Sehat</div><img class="img-fluid" onmouseover="mouseover(1)" src="{{asset('images/project/slide/beraniSehat(1).jpg')}}" alt=""></div>
                  <div class="tile col-10 col-md-5 border"><div class="hover" onmouseout="mouseout(2)" onclick="pop(2)">DST Indonesia</div><img class="img-fluid" onmouseover="mouseover(2)" src="{{asset('images/project/slide/dtsIndonesia(1).jpg')}}" alt=""></div>
                </div>
            </div>
            <div class="tiles container-fluid">
                <div class="row justify-content-center">
                  <div class="tile col-10 col-md-5 border"><div class="hover" onmouseout="mouseout(3)" onclick="pop(3)">Kria Budaya</div><img class="img-fluid" onmouseover="mouseover(3)" src="{{asset('images/project/slide/kriaBudaya(1).jpg')}}" alt=""></div>
                  <div class="tile col-10 col-md-5 border"><div class="hover" onmouseout="mouseout(4)" onclick="pop(4)">Penni</div><img class="img-fluid" onmouseover="mouseover(4)" src="{{asset('images/project/slide/Penny(1).jpg')}}" alt=""></div>
                </div>
            </div>
            <div class="tiles container-fluid">
                <div class="row justify-content-center">
                  <div class="tile col-10 col-md-5 border"><div class="hover" onmouseout="mouseout(5)" onclick="pop(5)">Bhayangkara Lemdiklat Polri</div><img class="img-fluid" onmouseover="mouseover(5)" src="{{asset('images/project/slide/Polri(1).jpg')}}" alt=""></div>
                  <div class="tile col-10 col-md-5 border"><div class="hover" onmouseout="mouseout(6)" onclick="pop(6)">Tokopedia AI Center</div><img class="img-fluid" onmouseover="mouseover(6)" src="{{asset('images/project/slide/TokopediaAICenter(1).jpg')}}" alt=""></div>
                </div>
            </div>
        </div>
        <!-- scroll to top button -->
        
        <!-- <button id="upBtn"><i class="fas fa-chevron-up fa-2x"></i></button> -->
        <!-- page numbers -->
        <div id="paginator">
            <button class="sideBtn"><i class="fas fa-chevron-left fa-2x"></i></button>
            <button class="numBtn">1</button>
            <button class="numBtn"><a href="/project2">2</a></button>
            <button class="sideBtn"><a href="/project2"><i class="fas fa-chevron-right fa-2x sideBtn"></i></a></button>
        </div>
    </section>
    @include('layouts.partials.contact')
    @include('layouts.partials.footer')
</body>
<!-- scripts -->
<script src="{{asset('js/project.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>