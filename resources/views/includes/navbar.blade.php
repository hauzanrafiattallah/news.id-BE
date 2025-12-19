<!-- Nav -->
    <div class="sticky top-0 z-50 flex justify-between py-5 px-4 lg:px-14 bg-white shadow-sm">
      <div class="flex gap-10 w-full">
        <!-- Logo dan Menu -->
        <div class="flex items-center justify-between w-full lg:w-auto">
          <!-- Logo -->
          <a href="index.html">
            <div class="flex items-center gap-2">
              <img src="{{ asset('assets/img/Logo.png') }}" alt="Logo" class="w-8 lg:w-10">
              <p class="text-lg lg:text-xl font-bold">News.id</p>
            </div>
          </a>
          <button class="lg:hidden text-primary text-2xl focus:outline-none" id="menu-toggle">
            ☰
          </button>
        </div>

        <!-- Menu Navigasi -->
        <div id="menu"
          class="hidden lg:flex flex-col lg:flex-row lg:items-center lg:gap-10 w-full lg:w-auto mt-5 lg:mt-0">
          <ul
            class="flex flex-col lg:flex-row items-start lg:items-center gap-4 font-medium text-base w-full lg:w-auto">
            <li><a href="index.html" class="text-primary hover:text-gray-600">Beranda</a></li>
            @foreach (\App\Models\NewsCategory::all() as $category )
            <li><a href="gayahidup.html" class="hover:text-primary">{{ $category->title }}</a></li>
            @endforeach
          </ul>
        </div>
      </div>

      <!-- Search dan Login -->
      <div class="hidden lg:flex items-center gap-2 mt-4 lg:mt-0 w-full lg:w-auto relative">
        <div class="relative w-full lg:w-auto">
          <input type="text" placeholder="Cari berita..."
            class="border border-slate-300 rounded-full px-4 py-2 pl-8 w-full text-sm font-normal lg:w-auto focus:outline-none focus:ring-primary focus:border-primary"
            id="searchInput" />
          <!-- Icon Search -->
          <span class="absolute inset-y-0 left-3 flex items-center text-slate-400">
            <img src="{{ asset('assets/img/search.png') }}" alt="search" class="w-4">
          </span>
        </div>
        <a href="login.html"
          class="bg-primary px-8 py-2 rounded-full text-white font-semibold h-fit text-sm lg:text-base">
          Masuk
        </a>
      </div>
    </div>

    <!-- Menu Dropdown untuk Mobile -->
    <div id="dropdown-menu"
      class="hidden absolute top-0 left-0 w-full h-screen bg-white z-40 flex flex-col items-start gap-4 px-8 py-12 text-lg font-semibold shadow-md">
      <a href="index.html" class="hover:text-primary">Beranda</a>
      <a href="gayahidup.html" class="hover:text-primary">Gaya Hidup</a>
      <a href="olahraga.html" class="hover:text-primary">Olahraga</a>
      <a href="kesehatan.html" class="hover:text-primary">Kesehatan</a>
      <a href="politik.html" class="hover:text-primary">Politik</a>
      <a href="pariwisata.html" class="hover:text-primary">Pariwisata</a>
      <a href="login.html" class="hover:text-primary">Masuk</a>
    </div>

@push('scripts')
<script>
    document.getElementById('menu-toggle')?.addEventListener('click', () => {
        document.getElementById('dropdown-menu').classList.toggle('hidden');
    });
</script>
@endpush
