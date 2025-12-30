@extends('layouts.app')

@section('title', $author->name)

@section('content')

  <!-- Author -->
  <div class="flex gap-4 items-center mb-10 text-white p-10 bg-[url('/src/img/bg-profile.png')] bg-cover">
    <img src="/src/img/profile.png" alt="profile" class="rounded-full max-w-28 ">
    <div class="">
      <p class="font-bold text-lg">Queen Fayola S</p>
      <p>Queen Fayola S, an expert content writer at Moco,
        continually
        acquires <br>
        valuable knowledge in web
        techonology, UI UX design, CEO, and business. <br>This knowledge is shared freely with the extensive
        community
        in indonesia</p>
    </div>
  </div>

  <!-- Berita -->
  <div class=" flex flex-col gap-5 px-4 lg:px-14">
    <div class="grid sm:grid-cols-1 gap-5 lg:grid-cols-4">
      <a href="detail-MotoGp.html">
        <div
          class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
          <div class="bg-primary text-white rounded-full w-fit px-5 py-1 font-normal ml-2 mt-2 text-sm absolute">
            Pariwisata</div>
          <img src="img/Berita-Liburan.png" alt="" class="w-full rounded-xl mb-3">
          <p class="font-bold text-base mb-1">Spot Liburan Asyik Di Banyumas Yang Bisa Kamu Kunjungi</p>
          <p class="text-slate-400">22 Januari 2024</p>
        </div>
      </a>
      <a href="detail-MotoGp.html">
        <div
          class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
          <div class="bg-primary text-white rounded-full w-fit px-5 py-1 font-normal ml-2 mt-2 text-sm absolute">
            Politik</div>
          <img src="img/Berita-Demo.png" alt="" class="w-full rounded-xl mb-3">
          <p class="font-bold text-base mb-1">Demo Terjadi Di Banyumas <br>Dikarenakan Kenaikan BBM</p>
          <p class="text-slate-400">22 Januari 2024</p>
        </div>
      </a>
      <a href="detail-MotoGp.html">
        <div
          class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
          <div class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-2 mt-2 text-sm absolute">
            Olahraga</div>
          <img src="img/Berita-Motor.png" alt="" class="w-full rounded-xl mb-3">
          <p class="font-bold text-base mb-1">MotoGp 2025 Akan Diadakan Di <br>Sirkuit Mandalika</p>
          <p class="text-slate-400">22 Januari 2024</p>
        </div>
      </a>
      <a href="detail-MotoGp.html">
        <div
          class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
          <div class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-2 mt-2 text-sm absolute">
            Gaya Hidup</div>
          <img src="img/Berita-Golf.png" alt="" class="w-full rounded-xl mb-3">
          <p class="font-bold text-base mb-1">Manfaat Bermain Golf Untuk <br>Menumbuhkan Koneksi</p>
          <p class="text-slate-400">22 Januari 2024</p>
        </div>
      </a>
    </div>

    <div class="grid sm:grid-cols-1 gap-5 lg:grid-cols-4">
      <a href="detail-MotoGp.html">
        <div
          class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
          <div class="bg-primary text-white rounded-full w-fit px-5 py-1 font-normal ml-2 mt-2 text-sm absolute">
            Pariwisata</div>
          <img src="img/Berita-Liburan.png" alt="" class="w-full rounded-xl mb-3">
          <p class="font-bold text-base mb-1">Spot Liburan Asyik Di Banyumas Yang Bisa Kamu Kunjungi</p>
          <p class="text-slate-400">22 Januari 2024</p>
        </div>
      </a>
      <a href="detail-MotoGp.html">
        <div
          class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
          <div class="bg-primary text-white rounded-full w-fit px-5 py-1 font-normal ml-2 mt-2 text-sm absolute">
            Politik</div>
          <img src="img/Berita-Demo.png" alt="" class="w-full rounded-xl mb-3">
          <p class="font-bold text-base mb-1">Demo Terjadi Di Banyumas <br>Dikarenakan Kenaikan BBM</p>
          <p class="text-slate-400">22 Januari 2024</p>
        </div>
      </a>
      <a href="detail-MotoGp.html">
        <div
          class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
          <div class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-2 mt-2 text-sm absolute">
            Olahraga</div>
          <img src="img/Berita-Motor.png" alt="" class="w-full rounded-xl mb-3">
          <p class="font-bold text-base mb-1">MotoGp 2025 Akan Diadakan Di <br>Sirkuit Mandalika</p>
          <p class="text-slate-400">22 Januari 2024</p>
        </div>
      </a>
      <a href="detail-MotoGp.html">
        <div
          class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
          <div class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-2 mt-2 text-sm absolute">
            Gaya Hidup</div>
          <img src="img/Berita-Golf.png" alt="" class="w-full rounded-xl mb-3">
          <p class="font-bold text-base mb-1">Manfaat Bermain Golf Untuk <br>Menumbuhkan Koneksi</p>
          <p class="text-slate-400">22 Januari 2024</p>
        </div>
      </a>
    </div>

    <div class="grid sm:grid-cols-1 gap-5 lg:grid-cols-4">
      <a href="detail-MotoGp.html">
        <div
          class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
          <div class="bg-primary text-white rounded-full w-fit px-5 py-1 font-normal ml-2 mt-2 text-sm absolute">
            Pariwisata</div>
          <img src="img/Berita-Liburan.png" alt="" class="w-full rounded-xl mb-3">
          <p class="font-bold text-base mb-1">Spot Liburan Asyik Di Banyumas Yang Bisa Kamu Kunjungi</p>
          <p class="text-slate-400">22 Januari 2024</p>
        </div>
      </a>
      <a href="detail-MotoGp.html">
        <div
          class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
          <div class="bg-primary text-white rounded-full w-fit px-5 py-1 font-normal ml-2 mt-2 text-sm absolute">
            Politik</div>
          <img src="img/Berita-Demo.png" alt="" class="w-full rounded-xl mb-3">
          <p class="font-bold text-base mb-1">Demo Terjadi Di Banyumas <br>Dikarenakan Kenaikan BBM</p>
          <p class="text-slate-400">22 Januari 2024</p>
        </div>
      </a>
      <a href="detail-MotoGp.html">
        <div
          class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
          <div class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-2 mt-2 text-sm absolute">
            Olahraga</div>
          <img src="img/Berita-Motor.png" alt="" class="w-full rounded-xl mb-3">
          <p class="font-bold text-base mb-1">MotoGp 2025 Akan Diadakan Di <br>Sirkuit Mandalika</p>
          <p class="text-slate-400">22 Januari 2024</p>
        </div>
      </a>
      <a href="detail-MotoGp.html">
        <div
          class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
          <div class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-2 mt-2 text-sm absolute">
            Gaya Hidup</div>
          <img src="img/Berita-Golf.png" alt="" class="w-full rounded-xl mb-3">
          <p class="font-bold text-base mb-1">Manfaat Bermain Golf Untuk <br>Menumbuhkan Koneksi</p>
          <p class="text-slate-400">22 Januari 2024</p>
        </div>
      </a>
    </div>

    <div class="grid sm:grid-cols-1 gap-5 lg:grid-cols-4">
      <a href="detail-MotoGp.html">
        <div
          class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
          <div class="bg-primary text-white rounded-full w-fit px-5 py-1 font-normal ml-2 mt-2 text-sm absolute">
            Pariwisata</div>
          <img src="img/Berita-Liburan.png" alt="" class="w-full rounded-xl mb-3">
          <p class="font-bold text-base mb-1">Spot Liburan Asyik Di Banyumas Yang Bisa Kamu Kunjungi</p>
          <p class="text-slate-400">22 Januari 2024</p>
        </div>
      </a>
      <a href="detail-MotoGp.html">
        <div
          class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
          <div class="bg-primary text-white rounded-full w-fit px-5 py-1 font-normal ml-2 mt-2 text-sm absolute">
            Politik</div>
          <img src="img/Berita-Demo.png" alt="" class="w-full rounded-xl mb-3">
          <p class="font-bold text-base mb-1">Demo Terjadi Di Banyumas <br>Dikarenakan Kenaikan BBM</p>
          <p class="text-slate-400">22 Januari 2024</p>
        </div>
      </a>
      <a href="detail-MotoGp.html">
        <div
          class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
          <div class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-2 mt-2 text-sm absolute">
            Olahraga</div>
          <img src="img/Berita-Motor.png" alt="" class="w-full rounded-xl mb-3">
          <p class="font-bold text-base mb-1">MotoGp 2025 Akan Diadakan Di <br>Sirkuit Mandalika</p>
          <p class="text-slate-400">22 Januari 2024</p>
        </div>
      </a>
      <a href="detail-MotoGp.html">
        <div
          class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
          <div class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-2 mt-2 text-sm absolute">
            Gaya Hidup</div>
          <img src="img/Berita-Golf.png" alt="" class="w-full rounded-xl mb-3">
          <p class="font-bold text-base mb-1">Manfaat Bermain Golf Untuk <br>Menumbuhkan Koneksi</p>
          <p class="text-slate-400">22 Januari 2024</p>
        </div>
      </a>
    </div>

    <!-- Pagination -->
    <div class="w-full flex items-center justify-center gap-3 pt-12 mb-10">
      <p class="border border-slate-300 rounded-lg px-4 py-2 font-medium text-slate-300 hover:cursor-pointer">&lt;</p>
      <p
        class="rounded-lg px-4 py-2 font-medium bg-primary text-white hover:bg-slate-300 hover:text-black hover:cursor-pointer">
        1</p>
      <p
        class="border border-slate-300 rounded-lg px-4 py-2 font-medium hover:bg-primary hover:border-none hover:text-white hover:cursor-pointer">
        2</p>
      <p
        class="border border-slate-300 rounded-lg px-4 py-2 font-medium hover:bg-primary hover:border-none hover:text-white hover:cursor-pointer">
        3</p>
      <p class="border border-slate-300 rounded-lg px-4 py-2 font-medium hover:cursor-pointer">...</p>
      <p
        class="border border-slate-300 rounded-lg px-4 py-2 font-medium hover:bg-primary hover:border-none hover:text-white hover:cursor-pointer">
        10</p>
      <p
        class="border border-slate-300 rounded-lg px-4 py-2 font-medium hover:bg-primary hover:border-none hover:text-white hover:cursor-pointer">
        ></p>
    </div>
  </div>

@endsection