<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/dist/output.css">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="icon" href="{{ url('/src/favicon.png') }}" type="image/x-icon"/>

     <link rel="stylesheet" href="{{ asset('build/assets/app-14ec4f35.css') }}">
    <script src="{{ asset('build/assets/app-dbe23e4c.js') }}"></script>
  
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
        .sticky {
            top: 0;
            width: 100%;
            position: fixed;
            }    
        .sticky + .content {
            padding-top: 10px;
            }
    </style>

<section>
  
    <nav class="bg-white z-10 sticky shadow-md md:flex md:items-center md:justify-between" id="navigation">
  
      <div class="z-30 p-5 bg-white flex justify-between items-center relative">
        <span class="text-2xl font-[Poppins] cursor-pointer">
          <a href="https://plnultgtangsel.com/"><img class="w-[100px] text-lg" src="/src/LogoPLN.png" alt="Logo PLN"></a>
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
          <a href="{{url('/')}}" class="font-semibold font-poppins hover:text-cyan-500 hover:border-b-2 hover:border-b-cyan-500 duration-200 md:text-md lg:text-lg">Home</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="{{url('/kegiatan')}}" class="font-semibold font-poppins hover:text-cyan-500 hover:border-b-2 hover:border-b-cyan-500 duration-200 md:text-md lg:text-lg">Kegiatan</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="{{url('/manajemen')}}" class="font-semibold font-poppins hover:text-cyan-500 hover:border-b-2 hover:border-b-cyan-500 duration-200 md:text-md lg:text-lg">Manajemen</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="{{url('/#gardu-induk')}}" class="font-semibold font-poppins hover:text-cyan-500 hover:border-b-2 hover:border-b-cyan-500 duration-200 md:text-md lg:text-lg">Gardu Induk</a>
        </li>
      </ul>
      
    </nav>
  
    <section class="content flex justify-center">

      <div class="
      text-left px-5
      md:w-[600px]
      lg:w-[800px]
      ">
        <h1 class="mt-20 text-slate-700 font-extrabold text-3xl xl:text-4xl">{{$kegiatans->judul}}</h1>

        <div class="flex gap-2 mt-3 items-center">
          <img class="w-[16px] h-[16px]" src="/src/calendar.png" alt="">
          <h1 class="text-md font-poppins text-slate-800">{{$kegiatans->tanggal}}</h1>
        </div>

        <p class="mt-2">{{$kegiatans->text}}</p>
      
        <img src="{{ asset('storage/' . $kegiatans->foto) }}" 
        class="mt-5 w-full" alt="">
      </div>

    </section>
</section>

<h1 class="mt-20 text-center text-slate-700 font-extrabold text-3xl xl:text-4xl">Foto Kegiatan</h1>

<section class="mt-10 w-full">
  <div class="flex flex-wrap justify-center gap-10 px-5">
    
    <img src="{{ asset('storage/' . $kegiatans->foto2) }}" 
    class="rounded-md shadow-md md:w-[300px]" alt="">

    <img src="{{ asset('storage/' . $kegiatans->foto3) }}" 
    class="rounded-md shadow-md md:w-[300px]" alt="">

    <img src="{{ asset('storage/' . $kegiatans->foto4) }}" 
    class="rounded-md shadow-md md:w-[300px]" alt="">

    <img src="{{ asset('storage/' . $kegiatans->foto5) }}" 
    class="rounded-md shadow-md md:w-[300px]" alt="">

    <img src="{{ asset('storage/' . $kegiatans->foto6) }}" 
    class="rounded-md shadow-md md:w-[300px]" alt="">
    
    <img src="{{ asset('storage/' . $kegiatans->foto7) }}" 
    class="rounded-md shadow-md md:w-[300px]" alt="">
    
    <img src="{{ asset('storage/' . $kegiatans->foto8) }}" 
    class="rounded-md shadow-md md:w-[300px]" alt="">
    
    <img src="{{ asset('storage/' . $kegiatans->foto9) }}" 
    class="rounded-md shadow-md md:w-[300px]" alt="">

  </div>
</section>

<div class="mt-10 bg-slate-900 px-14 py-20 text-slate-300">
  <div class="flex flex-wrap gap-10 xl:gap-0 w-[200px] md:w-[600px] xl:w-full font-poppins">

    <div class="hidden md:block w-[200px] xl:w-3/12">
      <img class="w-[250px] mt-3" src="/src/LogoPLN.png" alt="Logo PLN">
    </div>
          
    <div class="w-[200px] xl:w-3/12">
      <span class="font-bold text-xl text-white tracking-wide font-lexend border-b-2 border-b-blue-500">About</span>
      <ul class="w-[300px] mt-2">
          <li class="hover:pl-3 duration-300"><a href="{{url('/#tentang-perusahaan')}}">Tentang Perusahaan</a></li>
          <li class="hover:pl-3 duration-300"><a href="{{url('/#visi-misi')}}">Visi dan Misi</a></li>
          <li class="hover:pl-3 duration-300"><a href="{{url('/#pimpinan-organisasi')}}">Pimpinan Organisasi</a></li>
          <li class="hover:pl-3 duration-300"><a href="{{url('/#struktur-organisasi')}}">Struktur Organisasi</a></li>
      </ul>
    </div>
      
    <div class="w-[200px] xl:w-3/12">
    <span class="font-bold text-xl text-white tracking-wide font-lexend border-b-2 border-b-blue-500">Help</span>
      <ul class="w-[300px] mt-2">
          <li class="hover:pl-3 duration-300"><a href="https://portal.pln.co.id/">PLN Website</a></li>
          <li class="hover:pl-3 duration-300"><a href="https://web.pln.co.id/karier/informasi-rekrutmen-pln">Carrers</a></li>
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
  <h1 class="text-slate-400 text-center">@Developed By SMK Bina Informatika Bintaro</h1>
</div>
    
</body>

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

    </script>

</html>