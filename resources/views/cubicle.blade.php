<!DOCTYPE html>
<html>
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
  
    <title>Cubicle</title>
    <style>
 
    </style>
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

<section class="content">

    <div class="
    relative h-[300px]
    lg:h-[400px]
    ">
        <div class="absolute inset-0 bg-cover bg-center shadow-md" style="background-image: url('/src/cubicle.png');">
          <div class="absolute inset-0 bg-black opacity-70">
      </div>

<div class="
relative text-center mt-20 pb-20
lg:mt-28
" data-aos="fade-down" data-aos-duration="1000">
    <h1 class="
    font-extrabold font-lexend text-4xl text-blue-400
    lg:text-5xl
    ">Cubicle</h1>
    <p class="
    mt-2 font-semibold font-poppins text-md text-slate-200
    lg:text-lg
    ">Daftar informasi Cubicle</p>
</div>

</div>
</div>

</section>
</section>

    <div class="overflow-auto my-20 mx-10 rounded-lg shadow-lg">
        <table class="w-full">
            <thead>
                <tr class="text-sm text-left bg-blue-700 text-white">
                    <th class="p-3 tracking-wide whitespace-nowrap">No</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">Gardu Induk</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">Merk</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">Supply Inc</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">Uraian</th>
                </tr>
            </thead>
            @php
                $counter = 1;
            @endphp
    
            @if(count($cubicles) >= 1)
            @foreach($cubicles as $cublicle)
            <tr class="text-sm text-left bg-slate-50 border-b-2 border-gray-200">
                <td class="p-3 whitespace-nowrap font-bold text-blue-500">{{ $counter++ }}</td>
                <td class="p-3 whitespace-nowrap">{{ $cubicle->gardu_induk }}</td>
                <td class="p-3 whitespace-nowrap">{{ $cubicle->merk }}</td>
                <td class="p-3 whitespace-nowrap">{{ $cubicle->supply_inc }}</td>
                <td class="p-3 whitespace-nowrap">{{ $cubicle->uraian }}</td>
            </tr>
            @endforeach
            @else
            <tr class="text-sm text-left bg-slate-50 border-b-2 border-gray-200">
                <td class="p-3 whitespace-nowrap " colspan="4">No Data Found.</td>
            </tr>
            @endif
        </table>
    </div>

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
        <h1 class="text-slate-400 text-center">@Developed By SMK Bina Informatika Bintaro </h1>
      </div>

</body>

<script>

    AOS.init();
 
    function Menu(e){
    let list = document.querySelector('ul');
    e.name === 'menu' ? (e.name = "close",list.classList.add('top-[70px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[70px]'),list.classList.remove('opacity-100'))
    }

</script>

</html>
