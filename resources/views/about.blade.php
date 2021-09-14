@extends('layouts.tampilan')
@section('nav')
<div class="body" style="background-color: #e9ecef">
    <div class="container  rounded mt-3 bg-dark" style="background-color: #7ee9ff">
        <center>
         <img src='@foreach ($posts as $b)
                    {{ $b ["foto"] }}
                @endforeach' alt="" class="rounded-circle mt-3" style="max-width: 450px; max-height: 350px;">
         <h1 class="container text-white" style="font-family: Comic Sans MS">
            @foreach($posts as $a)
                {{ $a ["nama"] }}
            @endforeach
        </h1>
        </center>
        <center>
        <p class="text-white" style="font-family: Comic Sans MS">
             @foreach($posts as $a)
                {{ $a["porto"] }}
            @endforeach
        </p>
        </center>
        <div class="row">
            <div class="col-3">
                <img src='@foreach ($posts as $b)
                    {{ $b ["foto"] }}
                @endforeach' alt="" class="rounded-circle mt-3" >
            </div>
            <div class="col-9">
            
                <div class="row">
                    <h1 class="container text-white mt-4" style="font-family: Comic Sans MS">Hobi :</h1>
                </div>
                <div class="row"> 
                    <h4 class="container text-white" style="font-family: Comic Sans MS">Nggak ada (Sebenernya ada, Tidur, Ngehalu).</h4>
                </div>
           
            </div>
            <div class="row">
                <div class="">
                    <center>
                    <h1 class="container text-white mt-4" style="font-family: Comic Sans MS">Alasan  Nyari Kerja :</h1>
                    <div class="row">
                        <h4 class="container text-white mb-4" style="font-family: Comic Sans MS">Agar Tidak Jadi Beban Ortu, Mencari Pengalaman</h4>
                    </div>
                    <div class="row">
                        <!-- <p class="text-white" style="font-family: Comic Sans MS">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero velit voluptates quisquam debitis nemo doloribus molestias aliquam eius qui voluptatem quas quod earum quaerat sapiente, ex fugit voluptatum, consectetur, consequuntur ducimus exercitationem veritatis sint officia? Perferendis, deserunt maiores blanditiis repudiandae, temporibus quisquam eveniet laborum impedit corrupti officia quia totam dicta esse magnam mollitia architecto odit dolor provident! Modi doloremque officiis reiciendis ut, aut, adipisci itaque nesciunt maxime at repellat impedit eum amet hic accusamus doloribus.</p> -->
                    </div>
                    </center>
                    <div class="row mt-4">
                        <div class="col-3 ">
                            <img src='@foreach ($posts as $b)
                              {{ $b ["foto"] }}
                            @endforeach' alt="" class="rounded-circle mt-3">
                        </div>
                        <div class="col-9 mt-3">
                            <h1 class="text-white mb-4" style="font-family: Comic Sans MS">Pencapaian :</h1>
                            <div class="row">
                                <h3 class="text-white col-4" style="font-family: Comic Sans MS">- Beban Ortu</h4>
                                <h3 class="text-white col-4" style="font-family: Comic Sans MS">- Rapot Merah</h4>
                                <h3 class="text-white col-4" style="font-family: Comic Sans MS">- Mata Minus</h4>
                            </div>
                            <div class="row mt-2">
                                    <h3 class="text-white col-8 mt-4" style="font-family: Comic Sans MS">- Achievement Tidur 12 jam</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <center>
                            <h1 class="text-white mb-4 mt-4" style="font-family: Comic Sans MS">Yang sudah di Buat</h1>
                            <h5 class="text-white mb-4" style="font-family: Comic Sans MS">Beberapa Bootstrap dan PHP</h5>
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="max-width: 75%">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                </div>
                                <div class="carousel-inner rounded mb-4">
                                  <div class="carousel-item active">
                                    <img src="project.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="Screenshot (2).png" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="tugas1.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="tugas.jpeg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </center>
                    </div>
                    <div class="row">
                    <center>
                        <h1 class="text-white mb-4" style="font-family: Comic Sans MS">Bahasa Yang Dikuasai :</h1>
                    </center>
                        <div class="col-4"><h4  class="text-white mb-4" style="font-family: Comic Sans MS">-Bahasa Indonesia</h4>
                            <div class="row">
                                <h5 class="text-white mb-4" style="font-family: Comic Sans MS">-PHP(Masih Belajar)</h5>
                            </div>
                        </div>
                        <div class="col-4"><h4  class="text-white mb-4" style="font-family: Comic Sans MS; margin-left:66px">-Bahasa 
                        Inggris</h4>
                        <div class="row">
                            <center>
                                <h5 class="text-white mb-4" style="font-family: Comic Sans MS; margin: left 89px;">-HTML/CSS(Lumayan)</h5>
                            </center>
                            </div>
                        </div>
                        <div class="col-4"><h4  class="text-white mb-4" style="font-family: Comic Sans MS; margin-left:145px">-Bahasa 
                        Sunda</h4></div>
                    
                    </div>
                    <div class="row">
                        <center>
                        <h3 class="text-white mb-4 mt-3" style="font-family: Comic Sans MS">>>>>> <a href="/blog" style="text-decoration: none; color:#00cbfb; font-weight:bold" class="text-secondary">Blog</a> <<<<<</h5>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 bg-dark" style="background-color: #7ee9ff; ">
        {{-- <center> --}}
            <!-- <h1 class="text-white " style="font-family: Comic Sans MS">Ini Footer!</h1> -->
            {{-- <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, provident?Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quia numquam esse, molestiae quo minima dolores modi quae eius suscipit sint voluptas exercitationem architecto? Facere impedit nemo dolorem corporis illum accusamus repudiandae similique, porro possimus alias fugiat omnis facilis laudantium corrupti suscipit rerum inventore! Nam, a et repellendus dignissimos quia cumque necessitatibus eligendi sunt. Ipsa iusto excepturi corrupti asperiores doloremque modi. Aliquid ratione illo nulla dolore ad beatae rerum quisquam sequi, minima earum rem esse odit ipsam non! Ad culpa eveniet voluptates velit earum corrupti, voluptate eum vitae ipsum nostrum debitis nihil ipsam rerum! Unde repudiandae voluptatum impedit magni aut.</p> --}}
        </center>
        <div class="row container ">

            <div class="col-1"><img src="https://cdn.pixabay.com/photo/2016/12/04/18/58/instagram-1882330__340.png" class="rounded-circle mt-1 mb-1" style="max-width: 60%">
            </div>
            <div class="col-3"><p class="text-white mt-3" style="font-family: Comic Sans MS; text-decoration: none;">@Blablabla</p></div>
            <div class="col-1"><img src="https://pbs.twimg.com/profile_images/1354479643882004483/Btnfm47p_400x400.jpg" class="rounded-circle mt-1 mb-1" style="max-width: 60%; margin-left: 145px">
            </div>
            <div class="col-4"><p class="text-white mt-3" style="font-family: Comic Sans MS; text-decoration: none;; margin-left: 105px">Follow me on Twittard</p></div>
            <div class="col-1"><img src="https://cdn.pixabay.com/photo/2015/08/03/13/58/soon-873316__340.png" class="rounded-circle mt-1 mb-1" style="max-width: 60%; margin-left: 355px">
            </div>
            <div class="col-2"><p class="text-white mt-3" style="font-family: Comic Sans MS; text-decoration: none;      margin-left: 200px">Chat</p></div>
        </div> 
        <div class="row container">
            <p class="text-white mt-2" style="text-align: left ;">&copy; Portofolio 2021</p>
        </div>
    </div>
@endsection 