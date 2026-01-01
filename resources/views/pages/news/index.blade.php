@extends('layouts.app')

@section('title', "Semua Berita")

@section('content')

  <div class="w-full mb-16 bg-[#F6F6F6]">
    <h1 class="text-center font-bold text-2xl p-24">Semua Berita</h1>
  </div>

  <div class=" flex flex-col gap-5 px-4 lg:px-14">
    <div class="grid sm:grid-cols-1 gap-5 lg:grid-cols-4">
      @foreach ($news as $item)
        <a href="{{ route('news.show', $item->slug) }}" class="block">
          <div
            class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out"
            style="height: 100%;">
            <div class="bg-primary text-white rounded-full w-fit px-5 py-1 font-normal ml-2 mt-2 text-sm absolute">
              {{ $item->newsCategory->title }}
            </div>
            <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="" class="w-full rounded-xl mb-3"
              style="height: 200px; object-fit: cover;">
            <p class="font-bold text-base mb-1">{{ $item->title }}</p>
            <p class="text-slate-400">{{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }}</p>
          </div>
        </a>
      @endforeach
    </div>
    {{ $news->links('vendor.pagination.custom')  }}
  </div>

@endsection