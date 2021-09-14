@extends('layouts.tampilan')
@section('nav')
<link rel="stylesheet" href="css/style.css">
<div class="body" style="background-color: #e9ecef">
    <div class="container  rounded mt-3 pb-3 bg-dark " style="background-color: #7ee9ff">
        <center>
         <img src='@foreach ($posts as $b)
                    {{ $b ["foto"] }}
                @endforeach' alt="" class="rounded-circle mt-3" style="max-width: 450px; max-height: 350px;">
         <h1 class="container text-white" style="font-family: Comic Sans MS">
            @foreach ($posts as $a)
                {{ $a["nama"] }}
            @endforeach
        </h1>
        </center>
        <div class="wreap pb-3 pt-2 rounded row mt-3 bg-secondary" style="background-color:#39d9fe">
        <a href="" class="text-white mb-3 row container " style="font-family: Comic Sans MS; text-decoration: none; margin-left:30px" >
        @foreach ($posts as $b)
                    {{ $b ["alamat"] }}
                @endforeach
        </a>
        <a href="" class="text-white mb-3 row container" style="font-family: Comic Sans MS; text-decoration: none;margin-left:30px" >
        @foreach ($posts as $b)
                    {{ $b ["lord"] }}
                @endforeach
        </a>
        <a href="" class="text-white mb-3 row container" style="font-family: Comic Sans MS; text-decoration: none;margin-left:30px" >
        @foreach ($posts as $b)
                    {{ $b ["nomor"] }}
                @endforeach
        </a>
        </div>
        <center>
        <!-- <p class="text-white mt-3" style="font-family: Comic Sans MS">
            @foreach($posts as $a)
                {{ $a ["body"] }}
            @endforeach
        </p> -->
       </center>
    </div>
    <div class="container rounded">
        <div class="row mt-3 bg-dark pb-3" style="background-color: #7ee9ff">
            <div class="col-3 ">
                <img src='@foreach ($posts as $b)
                    {{ $b ["foto"] }}
                @endforeach' alt="" class="rounded-circle mt-3">
            </div>
            <div class="col-9 mt-3">
                <h1 class="text-white" style="font-family: Comic Sans MS">Kelebihan :</h1>
                <div class="row">
                    <h5 class="text-white col-4" style="font-family: Comic Sans MS">- Beban Ortu</h4>
                    <h5 class="text-white col-4" style="font-family: Comic Sans MS">- Rapot Merah</h4>
                    <h5 class="text-white col-4" style="font-family: Comic Sans MS">- Mata Minus</h4>
                </div>
                <div class="row mt-2">
                        <h5 class="text-white col-8" style="font-family: Comic Sans MS">- Achievement Tidur 12 jam</h4>
                </div>
                <div class="row mt-4 ">
                    <h4 class="text-white " style="font-family: Comic Sans MS"> Inggin tahu lebih bayak? <a href="/about" style="text-decoration: none; color: #e9ecef" class="text-secondary">About </a></h4></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 bg-dark" style="background-color: #7ee9ff">
        <center><h1 class="text-white" style="font-family: Comic Sans MS">Pencapaian :</h1></center>
            <div class="row">
                <div class="col-4 "><img src='@foreach ($posts as $b)
                    {{ $b ["foto"] }}
                @endforeach' alt="" class="rounded-circle mb-3" style="margin-left: 10px">
                <div class="row"><h4 class="text-white " style="font-family: Comic Sans MS">2nd Juara Ngehayal</h4></div>
                <div class="row"><p class="text-white mt-4" style="font-family: Comic Sans MS">Note: Gambaran Orang</p></div>
                </div>
                <div class="col-4 "><center><img src='@foreach ($posts as $b)
                    {{ $b ["foto"] }}
                @endforeach' alt="" class="rounded-circle mb-3">
                <div class="row"><h4 class="text-white " style="font-family: Comic Sans MS">1st Juara Tidur</h4></div>
                </div></center>
                <div class="col-4 "><img src='@foreach ($posts as $b)
                    {{ $b ["foto"] }}
                @endforeach' alt="" class="rounded-circle mb-3" style="margin-left: 145px">
                <h4 class="text-white " style="margin-left: 145px; font-family:Comic Sans MS">3rd Juara Makan</h4>
                </div>
            </div>
    </div>
    <div class="mt-5 bg-dark" style="background-color: #7ee9ff; ">
        {{-- <center> --}}
            <!-- <h1 class="text-white " style="font-family: Comic Sans MS">Ini Footer!</h1> -->
            {{-- <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, provident?Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quia numquam esse, molestiae quo minima dolores modi quae eius suscipit sint voluptas exercitationem architecto? Facere impedit nemo dolorem corporis illum accusamus repudiandae similique, porro possimus alias fugiat omnis facilis laudantium corrupti suscipit rerum inventore! Nam, a et repellendus dignissimos quia cumque necessitatibus eligendi sunt. Ipsa iusto excepturi corrupti asperiores doloremque modi. Aliquid ratione illo nulla dolore ad beatae rerum quisquam sequi, minima earum rem esse odit ipsam non! Ad culpa eveniet voluptates velit earum corrupti, voluptate eum vitae ipsum nostrum debitis nihil ipsam rerum! Unde repudiandae voluptatum impedit magni aut.</p> --}}
        <div class="row container ">

            <div class="col-1"><img src="https://cdn.pixabay.com/photo/2016/12/04/18/58/instagram-1882330__340.png" class="rounded-circle mt-1 mb-1" style="max-width: 60%">
            </div>
            <div class="col-3">
                <p class="text-white mt-3" style="font-family: Comic Sans MS; text-decoration: none; margin-right:100px">
                    @Blablabla
                </p>
            </div>
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
</div>
@endsection