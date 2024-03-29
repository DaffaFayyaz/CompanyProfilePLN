<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="{{ asset('build/assets/app-8a73da3a.css') }}">
    <script src="{{ asset('build/assets/app-dbe23e4c.js') }}"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="icon" href="{{ url('/src/favicon.png') }}" type="image/x-icon"/>
  
   <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  
    <title>Tower</title>
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
        @foreach($fotos as $foto)
        <div class="absolute inset-0 bg-cover bg-center shadow-md" style="background-image: url('{{ asset('storage/' . $foto->foto_tower) }}');">
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
    ">Tower</h1>
    <p class="
    mt-2 font-semibold font-poppins text-md text-slate-200
    lg:text-lg
    ">Daftar informasi Tower</p>
</div>

</div>
</div>

</section>
</section>
    <a href="{{url('/tower/excel/export')}}"><button class="mt-5 mx-10 shadow-md text-white bg-blue-700 p-2 rounded-lg duration-200">Export</button></a>
    <div class="overflow-auto mt-5 mb-20 mx-10 rounded-lg shadow-lg">
        <table class="w-full">
            <thead>
                <tr class="text-sm text-left bg-blue-700 text-white">
                    <th class="p-3 tracking-wide whitespace-nowrap">No</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">Wilayah Kerja</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">UPT</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">ULTG</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">Route</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">Tegangan KV</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">Panjang SU KMS</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">Saluran SK KMS</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">Jenis</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">Luas Penampang</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">Kapasitas A</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">Tahun Operasi</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">Tanggal Operasi</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">Sirkit</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">Tower</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">Joint</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">Status Operasi</th>
                    <th class="p-3 tracking-wide whitespace-nowrap">Keterangan</th>
                </tr>
            </thead>
            @php
                $counter = 1;
            @endphp
    
            @if(count($towers) >= 1)
            @foreach($towers as $tower)
            <tr class="text-sm text-left bg-slate-50 border-b-2 border-gray-200">
                <td class="p-3 whitespace-nowrap font-bold text-blue-500">{{ $counter++ }}</td>
                <td class="p-3 whitespace-nowrap">{{ $tower->wilayah_kerja }}</td>
                <td class="p-3 whitespace-nowrap">{{ $tower->upt }}</td>
                <td class="p-3 whitespace-nowrap">{{ $tower->ultg }}</td>
                <td class="p-3 whitespace-nowrap">{{ $tower->route }}</td>
                <td class="p-3 whitespace-nowrap">{{ $tower->tegangan_kv }}</td>
                <td class="p-3 whitespace-nowrap">{{ $tower->panjang_su_kms }}</td>
                <td class="p-3 whitespace-nowrap">{{ $tower->saluran_sk_kms }}</td>
                <td class="p-3 whitespace-nowrap">{{ $tower->jenis }}</td>
                <td class="p-3 whitespace-nowrap">{{ $tower->luas_penampang }}</td>
                <td class="p-3 whitespace-nowrap">{{ $tower->kapasitas_a }}</td>
                <td class="p-3 whitespace-nowrap">{{ $tower->tahun_operasi }}</td>
                <td class="p-3 whitespace-nowrap">{{ $tower->tanggal_operasi }}</td>
                <td class="p-3 whitespace-nowrap">{{ $tower->sirkit }}</td>
                <td class="p-3 whitespace-nowrap">{{ $tower->tower }}</td>
                <td class="p-3 whitespace-nowrap">{{ $tower->joint }}</td>
                <td class="p-3 whitespace-nowrap">{{ $tower->status_operasi }}</td>
                <td class="p-3 whitespace-nowrap">{{ $tower->keterangan }}</td>
            </tr>
            @endforeach
            @else
            <tr>
                <td class="p-3 whitespace-nowrap">No Data Found.</td>
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
        <h1 class="text-slate-400 text-center">@Developed By SMK Bina Informatika Bintaro</h1>
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
