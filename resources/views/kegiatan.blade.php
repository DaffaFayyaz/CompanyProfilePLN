<!DOCTYPE html>
<html class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('build/assets/app-14ec4f35.css') }}">
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
<body>

    <style>
        .sticky {
            top: 0;
            width: 100%;
            position: fixed;
            }    
        .sticky + .content {
            padding-top: 70px;
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
                <a href="{{url('/kegiatan')}}" class="font-semibold font-poppins text-cyan-500 border-b-2 border-b-cyan-500 duration-200 md:text-md lg:text-lg">Kegiatan</a>
              </li>
              <li class="mx-4 my-6 md:my-0">
                <a href="{{url('/manajemen')}}" class="font-semibold font-poppins hover:text-cyan-500 hover:border-b-2 hover:border-b-cyan-500 duration-200 md:text-md lg:text-lg">Manajemen</a>
              </li>
              <li class="mx-4 my-6 md:my-0">
                <a href="{{url('/#gardu-induk')}}" class="font-semibold font-poppins hover:text-cyan-500 hover:border-b-2 hover:border-b-cyan-500 duration-200 md:text-md lg:text-lg">Gardu Induk</a>
              </li>
            </ul>
            
          </nav>
  
    <section class="content">

        <div class="
        relative h-[300px]
        lg:h-[400px]
        ">
            @foreach($fotos as $foto)
            <div class="absolute inset-0 bg-cover bg-center shadow-md" style="background-image: url('{{ asset('storage/' . $foto->foto_kegiatan) }}');">
              <div class="absolute inset-0 bg-black opacity-70">
          </div>
          @endforeach
  
    <div class="
    relative text-center mt-20 pb-20
    lg:mt-28
    " data-aos="fade-down" data-aos-duration="1000">
        <h1 class="
        font-extrabold font-lexend text-4xl text-blue-400
        lg:text-5xl
        ">Kegiatan</h1>
        <p class="
        mt-2 font-semibold font-poppins text-md text-slate-200
        lg:text-lg
        ">Informasi seputar GI dan ULTG Tangsel</p>
        <div id="typed-output" class="text-white"></div>
    </div>

    </div>
    </div>
    
    </section>
    </section>

    <section>
        <div class="relative mt-10 flex flex-wrap gap-14 justify-center w-full px-10" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">

            @foreach ($kegiatans as $kegiatan)
                          
            <div class="bg-blue-100 rounded-lg shadow-lg w-[300px]">
                <img src="{{ asset('storage/' . $kegiatan->foto) }}" alt="" class="object-cover w-[300px] h-[200px]">
                <div class="p-4">
                    <div class="flex gap-2 items-center">
                        <img class="w-[16px] h-[16px]" src="/src/calendar.png" alt="">
                        <h1 class="text-md font-poppins text-slate-800">{{ $kegiatan->tanggal }}</h1>
                    </div>
                    <h1 class="mt-2 text-xl font-lexend text-black font-bold">{{ $kegiatan->judul }}</h1>
                    <a href="/detailkegiatan/{{$kegiatan->id}}"><button class="mt-2 shadow-md text-blue-700 bg-white p-2 rounded-lg duration-200 hover:bg-blue-400 hover:text-white">Detail Kegiatan</button></a>
                </div>
            </div>
            @endforeach

        </div>
      </section>

          <div class="mt-20 text-center">
              @if ($kegiatans->previousPageUrl())
              <a href="{{ $kegiatans->previousPageUrl() }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                  Previous Page
              </a>
              @endif
          
              @if ($kegiatans->hasMorePages())
              <a href="{{ $kegiatans->nextPageUrl() }}" class="ml-2 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                  Next Page
              </a>
              @endif
          </div>

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

        document.addEventListener('DOMContentLoaded', function() {
        var typed = new Typed('#typed-output', {
        strings: ['Informasi', 'Kegiatan', 'Aktivitas'], // Add your desired texts here
        typeSpeed: 90, // Typing speed in milliseconds
        backSpeed: 40, // Backspacing speed in milliseconds
        loop: true, // Loop the animation
            });
        });

    </script>
</html>