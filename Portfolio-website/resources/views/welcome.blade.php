@extends('layout.main')
@section('content')
    <div class="flex flex-wrap justify-between items-center pt-16">
        <div class="w-full md:w-1/2">
            <h1 class="font-medium mb-5 max-w-md">Hai Semua 👋. Saya <span class="block text-5xl font-bold">Aiman Yusuf
                    Wicaksono</span></h1>
            <p class="text-sm text-slate-300 max-w-md mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Voluptatem
                delectus
                magnam assumenda
                porro
                aspernatur enim possimus similique voluptates, atque iusto! Blanditiis, corporis earum quia ipsum quibusdam
                maiores aliquid odit nemo.</p>
            <a href="/contact" class="text-sm font-medium px-3 py-2 bg-blue-500 rounded-full">Hubungi Saya</a>
        </div>
        <div class="w-full md:w-1/2">
            <img src="/img/hero-image.png" alt="">
        </div>
    </div>
@endsection
