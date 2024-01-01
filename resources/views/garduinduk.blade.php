<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/dist/output.css">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('build/assets/app-8a73da3a.css') }}">
    <script src="{{ asset('build/assets/app-dbe23e4c.js') }}"></script>
  <link rel="icon" href="{{ url('/src/favicon.png') }}" type="image/x-icon"/>
  
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
          <a href="{{url('/#gardu-induk')}}" class="font-semibold font-poppins text-cyan-500 border-b-2 border-b-cyan-500 duration-200 md:text-md lg:text-lg">Gardu Induk</a>
        </li>
      </ul>
      
    </nav>
  
    <section class="content">

        <div class="relative h-[700px]
        lg:h-screen
        ">
        
        
        <div class="absolute inset-0 bg-cover bg-center shadow-md" style="background-image: url('{{ asset('storage/' . $garduinduks->foto_gardu_induk) }}');">
              <div class="absolute inset-0 bg-black opacity-70">
        </div>
       
        
        
        <div class="
        relative flex flex-wrap gap-x-20 justify-center items-center overflow-hidden h-[700px]
        lg:h-screen
        ">

            <img src="{{ asset('storage/' . $garduinduks->foto_gardu_induk) }}" class="hidden cursor-pointer xl:block relative w-[500px] rounded-lg" data-aos="fade-right" data-aos-delay="800" data-aos-duration="1000">

            <div class="
            relative w-full pl-14 pr-14
            md:w-[650px]
            lg:w-[600px]
            xl:pr-14 xl:pl-0
            ">
       
            
            
              <h1 class="
              text-3xl font-bold font-lexend text-sky-500 tracking-wider
              md:text-4xl
              lg:text-4xl
              xl:text-5xl
              " data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">{{$garduinduks->nama_gardu_induk}}</h1>
           

              
              <h1 class="
              text-md font-bold font-gabarito text-slate-100 mt-4 tracking-wider
              md:text-xl
              lg:text-2xl
              " data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">{{$garduinduks->nama_gardu_induk}}
            </h1>
           

              
              <p class="
              text-sm mt-2 text-slate-300 font-poppins
              lg:text-lg
              " data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
                {{$garduinduks->isi_text_paragraf}}
            </p>
           
        
            </div>

        </div>
                </div>
            </div>
    </section>
</section>

<h1 class="mt-20 text-center text-slate-700 font-extrabold text-3xl xl:text-4xl" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">Team Leader</h1>

<section class="mt-10 xl:mt-20 mb-20 flex justify-center items-center">

  
    <div class="pb-5 rounded-lg text-center shadow-lg bg-white w-[250px]
    md:w-[300px]
    xl:w-[450px]
    "
     data-aos="zoom-in-up" data-aos-delay="500" data-aos-duration="1000">
        <img class="rounded-t-lg" src="{{ asset('storage/' . $garduinduks->foto_pimpinan) }}" alt="">

        <h1 class="
        font-bold text-xl mt-5
        md:text-2xl
        xl:text-3xl
        ">{{$garduinduks->nama_pimpinan}}</h1>
        
        <p class="
        text-sm text-slate-500
        md:text-md
        xl:text-lg
        ">{{$garduinduks->nama_jabatan}}</p>
 
    </div>


</section>

<div class="bg-white mt-10 py-10">

 <div class="text-center" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
      <h1 class="
      text-center text-2xl font-bold text-slate-700 
      md:text-3xl
      lg:text-4xl
      ">Single Line Diagram</h1>
      <p class="text-center mt-1 text-sm md:text-md lg:text-lg text-slate-500">Klik foto untuk detail gambar</p>
    </div>

    <a href="{{ asset('storage/' . $garduinduks->foto_diagram_line) }}">
      <img class="mt-10 mx-auto w-full md:w-[600px] lg:w-[800px] lg:mt-20" src="{{ asset('storage/' . $garduinduks->foto_diagram_line) }}" alt="Foto Struktur ULTG" data-aos="zoom-in-up" data-aos-delay="400" data-aos-duration="800">
    </a>
    
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
  src="{{$garduinduks->link_map}}"  
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

{{-- <div class="bg-blue-950 px-10 py-20 text-slate-300">
    <div class="mt-5 flex flex-wrap w-full gap-10 md:gap-14 font-poppins">
    <img class="hidden md:block w-[300px] text-lg" src="/src/logoPLN.png" alt="Logo PLN">
            <ul>
                <li><a href="">Tentang Perusahaan</a></li>
                <li><a href="">Visi dan Misi</a></li>
                <li><a href="">Pimpinan Organisasi</a></li>
                <li><a href="">Struktur Organisasi</a></li>
            </ul>
        
            <ul>
                <li><a href="">PLN Website</a></li>
                <li><a href="">Carrers</a></li>
                <li><a href="">Company Profile PLN</a></li>
                <li><a href="">News</a></li>
            </ul>
        
            <ul>
                <li>Jalan Raya Serpong, Tangerang Selatan Banten 15315</li>
                <li>+62 2123456789</li>
                <li>Humas@pln.go.id</li>
                <li>@ULTGTANGSEL</li>
            </ul>

            <h1 class="text-slate-200 tracking-wide">@Copyright SMK Bina Informatika</h1>
    </div>
  </div> --}}
    
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