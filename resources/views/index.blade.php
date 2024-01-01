
<!doctype html>
<html class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
<link rel="stylesheet" href="{{ asset('build/assets/app-8a73da3a.css') }}">
<script src="{{ asset('build/assets/app-dbe23e4c.js') }}"></script>
  <link rel="icon" href="{{ url('/src/favicon.png') }}" type="image/x-icon"/>




  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

 <!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>


  <title>PLN ULTG Tangsel</title>

</head>

<body class="bg-slate-100">

    <style>
        .content {
            padding-top: 0;
            }
        .sticky {
            top: 0;
            width: 100%;
            position: fixed;
            }    
        .sticky + .content {
            padding-top: 70px;
            }
        .swiper-button-next1,
        .swiper-button-prev1 {
            color: white;
            }
        .swiper-button-next1,
        .swiper-button-prev1,
        .swiper-pagination1 {
          z-index: 2;
            }
        #typed-output {
          color: white;
        }
        
    </style>

  <section>
  
  <nav class="bg-white z-10 sticky shadow-md md:flex md:items-center md:justify-between" id="navigation">

    <div class="z-30 p-5 bg-white flex justify-between items-center relative">
      <span class="text-2xl font-[Poppins] cursor-pointer">
        <a href=""><img class="w-[100px] text-lg" src="{{ url('/src/LogoPLN.png') }}" alt="Logo PLN"></a>
      </span>

      <span class="text-3xl cursor-pointer mx-2 md:hidden block">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
      </span>
    </div>

    <ul class="
    shadow-md z-20 absolute bg-slate-50 w-full left-0 py-4 pl-7 opacity-0 top-[-400px] duration-500
    md:flex md:items-center md:z-auto md:static md:w-auto md:py-0 md:pl-0 md:opacity-100 md:shadow-none md:bg-white
    ">
      <li class="mx-4 my-3 md:my-0">
        <a href="{{url('/')}}" class="font-semibold font-poppins text-cyan-500 border-b-2 border-b-cyan-500 duration-200 md:text-md lg:text-lg">Home</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="{{url('/kegiatan')}}" class="font-semibold font-poppins hover:text-cyan-500 hover:border-b-2 hover:border-b-cyan-500 duration-200 md:text-md lg:text-lg">Kegiatan</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="{{url('/manajemen')}}" class="font-semibold font-poppins hover:text-cyan-500 hover:border-b-2 hover:border-b-cyan-500 duration-200 md:text-md lg:text-lg">Manajemen</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#gardu-induk" class="font-semibold font-poppins hover:text-cyan-500 hover:border-b-2 hover:border-b-cyan-500 duration-200 md:text-md lg:text-lg">Gardu Induk</a>
      </li>
    </ul>
    
  </nav>

<section class="content">

@foreach ($landingPages as $landingPage)
<div class="relative h-screen">
  <div class="absolute inset-0 bg-cover bg-center shadow-md" style="background-image: url('{{ asset('storage/' . $landingPage->image) }}');">
    <div class="absolute inset-0 bg-black opacity-70">
</div>
@endforeach

<div class="h-screen relative flex justify-center items-center text-center" data-aos="fade-down" data-aos-duration="1000">
  <div class="h-48">
    <h1 class="text-2xl font-lexend md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl text-blue-500 font-extrabold">PLN ULTG <span class="text-sky-500">Tangerang Selatan</span></h1>
    <div id="typed-output" class="font-prompt tracking-wide font-bold text-xl md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl mt-5"></div>
  </div>
</div>

    </div>
  </div> 

  </section>
  </section>

  <div class="flex flex-wrap gap-10 justify-center items-center bg-gradient-to-r from-blue-950 to-slate-900" id="tentang-perusahaan">
    @foreach ($landingPages as $landingPage)
    <div class="
    relative px-10 py-20 w-full
    md:w-[650px]
    lg:w-[700px]
    " data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
    
      <h1 class="
      text-3xl font-bold font-lexend text-sky-500 tracking-wider
      md:text-4xl
      lg:text-4xl
      xl:text-5xl
      ">Tentang Kami</h1>

      <h1 class="
      text-md font-bold font-gabarito text-slate-100 mt-7 tracking-wider
      md:text-xl
      lg:text-2xl
      ">PT PLN (Persero) ULTG Tangerang Selatan UPT Cawang UIT JBB</h1>

      
      <p class="
      text-sm mt-3 text-slate-400
      lg:text-lg
      ">
      {{ $landingPage->text }}
      </p>
      

      <button class="
      mt-7 text-sm text-white p-3 font-semibold border-2 border-white duration-200
     hover:bg-blue-600 hover:border-blue-600  hover:duration-300
      md:text-md lg:text-lg
      "><a href="#visi-misi">Learn More</a>
      </button>

    </div>

    <img src="{{ asset('storage/' . $landingPage->image2) }}" class="hidden cursor-pointer xl:block relative w-[500px] rounded-lg" data-aos="zoom-in-up" data-aos-delay="200" data-aos-duration="700" >
    @endforeach
</div >
<span id="visi-misi"></span>
<span></span>
  <div class="mt-20">
    <h1 class="
    font-bold font-lexend text-2xl text-center text-slate-700 tracking-wide 
    md:text-3xl
    lg:text-4xl
    " data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">Visi & Misi</h1>
    <hr class="mt-5">
  </div>

<section class="max-w-full overflow-hidden">

  <div class="
  mt-10 flex flex-wrap gap-10 justify-center
  xl:gap-20
  ">

   <div class="
   text-center px-10
   md:px-24
   lg:px-32
   xl:px-0 xl:w-[500px]
   " data-aos="fade-right" data-aos-delay="250" data-aos-duration="1000">
    <h1 class="
    text-blue-600 font-semibold text-2xl tracking-wide box animate__animated
    lg:text-3xl
    ">Visi</h1>
    @foreach ($visiMisis as $visiMisi)
    <p class="mt-3 text-sm text-slate-500 lg:text-lg">
        {{ $visiMisi->visi }}
    </p>
    @endforeach
   </div>

   <div class="
   text-center px-10
   md:px-24
   lg:px-32
   xl:px-0 xl:w-[500px]
   " data-aos="fade-left" data-aos-delay="250" data-aos-duration="1000">
    <h1 class="
    text-blue-600 font-semibold text-2xl tracking-wide
    lg:text-3xl
    ">Misi</h1>
    @foreach ($visiMisis as $visiMisi)
    <p class="mt-3 text-sm text-slate-500 lg:text-lg" id="pimpinan-organisasi">
        {{ $visiMisi->misi }}
    </p>
    @endforeach
   </div>

  </div>

</section >

<div class="
mt-20 py-7 bg-slate-200 shadow-lg overflow-hidden
lg:mt-32
" >

    <h1 class="
    font-bold text-2xl text-center text-blue-800 tracking-wide font-lexend
    md:text-3xl
    lg:text-4xl
    " data-aos="zoom-in-down" data-aos-delay="100" data-aos-duration="700" >Manager <span class="text-blue-600">ULTG</span></h1>

 <div class="
 swiper-container relative h-[350px] z-1 slider1 w-full mt-3 max-w-full overflow-hidden
 lg:mt-10 lg:h-[400px]
 " data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
 
    <div class="swiper-wrapper">
 
      @foreach($pimpinanManagers->reverse() as $pimpinanManager)
      <div class="swiper-slide text-center mt-4">
        <div class="text-center shadow-lg cursor-pointer bg-slate-50 inline-block pb-5 group">
          <img src="{{ asset('storage/' . $pimpinanManager->image) }}" alt="" class="
          w-[250px] object-cover group-hover:w-[270px] mx-auto duration-200
          lg:w-[280px] lg:group-hover:w-[300px]
          " >      
            <h1 class="
            font-bold text-xl mt-6 tracking-wide font-gabarito
            md:text-xl
            " >{{$pimpinanManager->nama_manager}}</h1>

            <h1 class="
            text-sm mt-1 font-poppins text-slate-500 font-semibold
            ">Manager PLN ULTG Tangsel</h1>
          
            <h1 class="
            text-slate-500 text-sm font-poppins
            " id="struktur-organisasi" >{{$pimpinanManager->tahun_pimpinan}}</h1>
            
        </div>
      </div>
      @endforeach

    </div>
   
    <div class="swiper-pagination swiper-pagination1"></div>
  
  </div>
</div>

<section class="mt-20">
  <div class="bg-gradient-to-r from-blue-600 to-blue-800 overflow-hidden text-center py-10">

    <h1 class="
    font-extrabold font-lexend text-white text-2xl tracking-wide
    md:text-3xl
    lg:text-4xl
    " 
    data-aos="zoom-in-down" data-aos-delay="100" data-aos-duration="700">Our Team</h1>
    <div class="
    w-[350px] mx-auto mt-14 flex flex-wrap gap-10 justify-center
    md:w-[700px]
    lg:w-[800px]
    xl:w-[1000px]
    " data-aos="slide-up" data-aos-delay="200" data-aos-duration="700">

      @foreach ($jajaranManajemens as $jajaranManajemen)
      <div class="mx-3 text-center md:mx-5 lg:mx-8 xl:mx-11 w-[120px] whitespace-normal
      md:w-[150px]
      lg:w-[180px]
      xl:w-[200px]
      ">
        <img src="{{ asset('storage/' . $jajaranManajemen->foto) }}" alt=""
        class="
        object-cover mx-auto w-28 h-28 rounded-full border-2 border-slate-200
        md:w-32 md:h-32
        lg:w-40 lg:h-40
        xl:w-44 xl:h-44
        ">
        <h1 class="mt-3 font-semibold font-gabarito tracking-wide text-white text-md lg:text-lg">{{$jajaranManajemen->nama}}</h1>
        <h1 class="text-slate-200 text-md font-poppins">{{$jajaranManajemen->nama_jabatan}}</h1>
      </div>
      @endforeach

    </div>

    <button class="
    mt-12 text-sm text-white p-2 font-semibold border-b-2 border-b-white duration-200
  hover:text-cyan-400 hover:border-b-cyan-400 hover:duration-300
    md:text-md lg:text-lg
    " data-aos="zoom-in-up" data-aos-delay="50" data-aos-duration="700"><a href="{{url('/manajemen')}}">Detail Struktur Anggota</a>
    </button>
  </div>
</section>

<section data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">

  <div class="mt-20 lg:mt-32">
    <h1 class="
    font-bold text-2xl text-center text-slate-700 tracking-wide font-lexend
    md:text-3xl
    lg:text-4xl
    ">System Instalasi <span class="text-teal-400">GI ULTG TANGSEL</span></h1>
    <hr class="mt-5">
  </div>

@foreach($statsAlats as $statsAlat)
  <div class="
  flex flex-wrap w-[350px] mx-auto gap-7 justify-center mt-5
  md:w-[600px]
  lg:w-[880px]
  2xl:w-full
  ">

    <div class="
    shadow-lg bg-blue-500 text-center px-8 py-3 duration-200 border-b-8 border-b-blue-600 border-t-8 border-t-blue-600 
    hover:border-b-blue-700 hover:border-t-blue-700 hover:bg-blue-600
    md:px-20
    ">
      <h1 class="text-3xl md:text-4xl font-bold text-white tracking-wide">{{ $statsAlat->jumlah_trafo }}</h1>
      <p class="
      font-bold text-sm mt-2 text-white font-poppins
      lg:text-lg
      ">Trafo</p>
      <button class="mt-3 bg-white p-2 rounded-md text-blue-500 hover:text-blue-600 hover:bg-slate-100">
        <a href="{{url('/trafo')}}" class="text-sm font-semibold ">Lihat Detail</a>
      </button>
    </div>

    <div class="
    shadow-lg bg-blue-500 text-center px-8 py-3 duration-200 border-b-8 border-b-blue-600 border-t-8 border-t-blue-600 
    hover:border-b-blue-700 hover:border-t-blue-700 hover:bg-blue-600
    md:px-20
    ">
      <h1 class="text-3xl md:text-4xl font-bold text-white tracking-wide">{{ $statsAlat->jumlah_bayline }}</h1>
      <p class="
      font-bold text-sm mt-2 text-white font-poppins
      lg:text-lg
      ">Bayline</p>
      <button class="mt-3 bg-white p-2 rounded-md text-blue-500 hover:text-blue-600 hover:bg-slate-100">
        <a href="{{url('/baylines')}}" class="text-sm font-semibold ">Lihat Detail</a>
      </button>
    </div>

    <div class="
    shadow-lg bg-blue-500 text-center px-8 py-3 duration-200 border-b-8 border-b-blue-600 border-t-8 border-t-blue-600 
    hover:border-b-blue-700 hover:border-t-blue-700 hover:bg-blue-600
    md:px-20
    ">
      <h1 class="text-3xl md:text-4xl font-bold text-white tracking-wide">{{ $statsAlat->jumlah_tower }}</h1>
      <p class="
      font-bold text-sm mt-2 text-white font-poppins
      lg:text-lg
      ">Tower</p>
      <button class="mt-3 bg-white p-2 rounded-md text-blue-500 hover:text-blue-600 hover:bg-slate-100">
        <a href="{{url('/tower')}}" class="text-sm font-semibold ">Lihat Detail</a>
      </button>
    </div>

    <div class="
    shadow-lg bg-blue-500 text-center px-8 py-3 duration-200 border-b-8 border-b-blue-600 border-t-8 border-t-blue-600 
    hover:border-b-blue-700 hover:border-t-blue-700 hover:bg-blue-600
    md:px-20
    ">
      <h1 class="text-3xl md:text-4xl font-bold text-white tracking-wide">{{ $statsAlat->jumlah_alat_uji }}</h1>
      <p class="
      font-bold text-sm mt-2 text-white font-poppins
      lg:text-lg
      ">Alat uji</p>
      <button id="gardu-induk" class="mt-3 bg-white p-2 rounded-md text-blue-500 hover:text-blue-600 hover:bg-slate-100">
        <a href="{{url('/alatuji')}}" class="text-sm font-semibold ">Lihat Detail</a>
      </button>
    </div>
    @endforeach

  </section>

  <div class="
  bg-slate-50 mt-20 pt-10 shadow-sm overflow-hidden
  lg:mt-32
  ">

    <h1 class="
    font-bold text-2xl text-center text-blue-800 tracking-wide font-lexend
    md:text-3xl
    lg:text-4xl
    " data-aos="zoom-in-down" data-aos-delay="100" data-aos-duration="700">Gardu Induk</h1>
    <p class="text-center mt-1 text-sm md:text-md lg:text-lg text-slate-500">Tekan dan Geser Layar Anda</p>
 
  <div class="
  relative swiper-container slider2 h-[450px] mt-7 overflow-hidden
  md:h-[490px] md:mt-10
  lg:h-[520px] lg:mt-12
  2xl:h-[560px]
  " data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
    <div class="swiper-wrapper">

        <!-- slide 1 -->
        @foreach($garduinduks as $garduinduk )
        <div class="swiper-slide">
            <div class="
            bg-slate-50 shadow-md w-[300px] mx-auto
            md:w-[340px]
            lg:w-[430px]
            xl:w-[400px]
            2xl:w-[480px]
            ">
                <img class="" src="{{ asset('storage/' . $garduinduk->foto_gardu_induk) }}" alt="">
                <h1 class="
                font-bold text-slate-950 text-lg mt-2 ml-2 font-gabarito
                lg:text-xl
                ">{{$garduinduk->nama_gardu_induk}}</h1>
                <p class="text-md ml-2 text-slate-500 underline">{{$garduinduk->alamat}}</p>
                <a href="/garduinduk/{{$garduinduk->id}}">
                <button class="
                my-4 ml-2 text-sm bg-neutral-100 text-blue-500 border-2 border-blue-500 p-3 font-semibold shadow-lg duration-200 hover:bg-blue-600 hover:border-blue-600 hover:text-white
                ">More Detail</button></a>
            </div>
        </div>
        @endforeach

    </div>

    <div class="swiper-pagination swiper-pagination2"></div>

  </div>
  </div>

  <section class="mt-20 bg-blue-950 py-10">

    <h1 class="
    font-bold text-2xl text-center text-slate-100 font-lexend
    md:text-3xl
    lg:text-4xl
    ">Temukan Kami</h1>
    
    <div class="px-5">
    <iframe
    class="
    mt-7 w-full h-[500px] shadow-lg
    md:mt-10
    "
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.324621078842!2d106.6710061005951!3d-6.352002947283623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e453ebc2ca3f%3A0xd04ca7e1022847e1!2sPLN%20GI%20Serpong!5e0!3m2!1sid!2sid!4v1695703801669!5m2!1sid!2sid"  
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    </div>
  </section>

  <div class="bg-slate-900 px-14 py-20 text-slate-300">
    <div class="flex flex-wrap gap-10 xl:gap-0 w-[200px] md:w-[600px] xl:w-full font-poppins">

      <div class="hidden md:block w-[200px] xl:w-3/12">
        <img class="w-[250px] mt-3" src="/src/LogoPLN.png" alt="Logo PLN">
      </div>
            
      <div class="w-[200px] xl:w-3/12">
        <span class="font-bold text-xl text-white tracking-wide font-lexend border-b-2 border-b-blue-500">About</span>
        <ul class="w-[300px] mt-2">
            <li class="hover:pl-3 duration-300"><a href="#tentang-perusahaan">Tentang Perusahaan</a></li>
            <li class="hover:pl-3 duration-300"><a href="#visi-misi">Visi dan Misi</a></li>
            <li class="hover:pl-3 duration-300"><a href="#pimpinan-organisasi">Pimpinan Organisasi</a></li>
            <li class="hover:pl-3 duration-300"><a href="#struktur-organisasi">Struktur Organisasi</a></li>
        </ul>
      </div>
        
      <div class="w-[200px] xl:w-3/12">
      <span class="font-bold text-xl text-white tracking-wide font-lexend border-b-2 border-b-blue-500">Help</span>
        <ul class="w-[300px] mt-2">
            <li class="hover:pl-3 duration-300"><a href="https://portal.pln.co.id/">PLN Website</a></li>
            <li class="hover:pl-3 duration-300"><a href="https://web.pln.co.id/karier/informasi-rekrutmen-pln">Careers</a></li>
            <li class="hover:pl-3 duration-300"><a href="https://web.pln.co.id/">Company Profile PLN</a></li>
            <li class="hover:pl-3 duration-300"><a href="{{url('/kegiatan')}}">News</a></li>
        </ul>
      </div>
        
      <div class="w-[200px] xl:w-3/12">
      <span class="font-bold text-xl text-white tracking-wide font-lexend border-b-2 border-b-blue-500">Info</span>
        <ul class="w-[300px] mt-2">
            <li class="hover:pl-3 duration-300">Jalan Raya Puspitek Serpong, Tangerang Selatan</li>
            <li class="hover:pl-3 duration-300">+62 217800638 </li>
            <li class="hover:pl-3 duration-300">pln123@pln.co.id</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="bg-slate-950 py-5">
    <h1 class="text-slate-400 text-center">@Developed By SMK Bina Informatika Bintaro </h1>
  </div>

  <script>

    AOS.init();
 
    function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[70px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[70px]'),list.classList.remove('opacity-100'))
    }

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navigation");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}   

const swiper1 = new Swiper('.slider1', {
  // Optional parameters
  slidesPerView: 1,
  direction: 'horizontal',

  // If we need pagination
  pagination: {
    el: '.swiper-pagination1',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next1',
    prevEl: '.swiper-button-prev1',
  },

  breakpoints: {
        768: {
          slidesPerView: 2,
          spaceBetween: -70,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 0,
        },
        1280: {
          slidesPerView: 4,
        }
    }

});

const swiper2 = new Swiper('.slider2', {
  // Optional parameters
  slidesPerView: 1,
  direction: 'horizontal',

  // If we need pagination
  pagination: {
    el: '.swiper-pagination2',
  },

  breakpoints: {
        768: {
          slidesPerView: 2,
          spaceBetween: -10,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 0,
        },
        1280: {
          slidesPerView: 3,
          spaceBetween: 0,
        }
    }

});

document.addEventListener('DOMContentLoaded', function() {
  var typed = new Typed('#typed-output', {
    strings: ['Profil Perusahaan', 'Layanan Kelistrikan', 'Tentang kami', 'Kegiatan Kerja', 'Semangat kerja'], // Add your desired texts here
    typeSpeed: 90, // Typing speed in milliseconds
    backSpeed: 40, // Backspacing speed in milliseconds
    loop: true, // Loop the animation
    
  });
});

  </script>

</body>

</html>