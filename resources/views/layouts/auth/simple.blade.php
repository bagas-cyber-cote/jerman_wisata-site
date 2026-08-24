<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
        <style>
            /* Cross-fade layer transition */
            .slider-container {
                position: relative;
                height: 100%;
            }
        </style>
    </head>
    <body class="min-h-screen font-sans antialiased bg-slate-900 text-slate-800">
        
        <div class="grid min-h-screen w-full grid-cols-1 lg:grid-cols-2 overflow-hidden">
            
            <!-- SISI KIRI LAYAR: SLIDER GAMBAR WISATA JERNIH -->
            <aside 
                x-data="{ 
                    activeSlide: 0, 
                    slides: [
                        { img: '{{ asset('storage/jembatan-jerman.png') }}', badge: 'GILI LAMPU & GILI KONDO', title: 'Gili Lampu & Gili Kondo', desc: 'Surga bawah laut yang tenang dan asri.' },
                        { img: '{{ asset('storage/sawah-jerman.png') }}', badge: 'AIR TERJUN JERUK MANIS', title: 'Air Terjun Jeruk Manis', desc: 'Nikmati keasrian dan kesegaran air alami di kaki Gunung Rinjani.' },
                        { img: '{{ asset('storage/tibu-bunter.png') }}', badge: 'TOUR GUIDE LOKAL', title: 'Jelajah Bersama Tour Guide', desc: 'Pengalaman menjelajah destinasi wisata lokal dengan panduan profesional.' }
                    ],
                    timer: null,
                    startAutoSlide() {
                        this.timer = setInterval(() => {
                            this.nextSlide();
                        }, 4000);
                    },
                    stopAutoSlide() {
                        clearInterval(this.timer);
                    },
                    nextSlide() {
                        this.activeSlide = (this.activeSlide + 1) % this.slides.length;
                    },
                    prevSlide() {
                        this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length;
                        this.restartAutoSlide();
                    },
                    goToSlide(index) {
                        this.activeSlide = index;
                        this.restartAutoSlide();
                    },
                    restartAutoSlide() {
                        this.stopAutoSlide();
                        this.startAutoSlide();
                    }
                }"
                x-init="startAutoSlide()"
                @mouseenter="stopAutoSlide()"
                @mouseleave="startAutoSlide()"
                class="relative hidden lg:block w-full h-full overflow-hidden bg-black"
            >
                <!-- Cross-fade slides -->
                <div class="slider-container w-full h-full">
                    <template x-for="(slide, index) in slides" :key="index">
                        <div
                            class="absolute inset-0 h-full w-full transition-all duration-1000 ease-[cubic-bezier(0.22,1,0.36,1)]"
                            :class="activeSlide === index ? 'z-10 opacity-100 blur-0' : 'z-0 pointer-events-none opacity-0 blur-xl'"
                        >
                            <img :src="slide.img" :alt="slide.title" class="h-full w-full object-cover transition-all duration-1000 ease-[cubic-bezier(0.22,1,0.36,1)]" />
                            
                            <!-- Overlay Gradasi Gelap -->
                            <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-black/40"></div>
                            
                            <!-- Content Overlay -->
                            <div class="absolute inset-0 flex flex-col justify-between p-10 z-10 text-white">
                                
                                <!-- Header / Logo Kiri Atas -->
                                <a href="{{ route('home') }}" class="flex items-center gap-3 w-fit" wire:navigate>
                                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-emerald-500 font-bold text-white shadow-md">
                                        EL
                                    </span>
                                    <span class="text-base font-semibold tracking-wide text-white drop-shadow">
                                        {{ config('app.name', 'Explore East Lombok') }}
                                    </span>
                                </a>

                                <!-- Teks Judul & Deskripsi Kiri Bawah -->
                                <div class="max-w-lg mb-24">
                                    <span 
                                        class="inline-block px-3.5 py-1 text-xs font-bold tracking-wider uppercase bg-emerald-500/30 text-emerald-300 rounded-full border border-emerald-400/40 backdrop-blur-md mb-3"
                                        x-text="slide.badge"
                                    ></span>
                                    <h1 class="text-4xl lg:text-5xl font-extrabold tracking-tight text-white drop-shadow-md leading-tight mb-2" x-text="slide.title"></h1>
                                    <p class="text-sm text-gray-200 drop-shadow" x-text="slide.desc"></p>
                                </div>

                                <!-- Copyright Kiri Paling Bawah -->
                                <p class="text-xs text-gray-400">
                                    &copy; 2026 Explore East Lombok. All rights reserved.
                                </p>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Kontrol pill untuk navigasi manual -->
                <div class="absolute bottom-8 left-1/2 z-40 flex -translate-x-1/2 items-center gap-2 rounded-full border border-white/30 bg-black/55 p-1.5 shadow-2xl shadow-black/40 backdrop-blur-xl">
                    <button 
                        @click.stop="prevSlide()" 
                        type="button"
                        class="flex size-9 items-center justify-center rounded-full text-white/80 transition-all duration-300 hover:bg-emerald-500 hover:text-white active:scale-90"
                        aria-label="Gambar sebelumnya"
                    >
                        <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>

                    <div class="flex items-center gap-1.5 px-1">
                        <template x-for="(slide, index) in slides" :key="index">
                            <button 
                                @click.stop="goToSlide(index)" 
                                type="button"
                                class="h-2 rounded-full transition-all duration-500 ease-out"
                                :class="activeSlide === index ? 'w-8 bg-emerald-400 shadow-[0_0_12px_rgba(52,211,153,0.75)]' : 'w-2 bg-white/40 hover:w-5 hover:bg-white/75'"
                                :aria-label="'Buka slide ' + (index + 1)"
                                :aria-current="activeSlide === index ? 'true' : 'false'"
                            ></button>
                        </template>
                    </div>

                    <button 
                        @click.stop="nextSlide()" 
                        type="button"
                        class="flex size-9 items-center justify-center rounded-full text-white/80 transition-all duration-300 hover:bg-emerald-500 hover:text-white active:scale-90"
                        aria-label="Gambar selanjutnya"
                    >
                        <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </aside>

            <!-- SISI KANAN LAYAR: BACKGROUND GAMBAR BLUR HITAM STATIS -->
            <main class="relative flex min-h-screen items-center justify-center p-6 sm:p-10 lg:p-12 overflow-hidden bg-slate-950">
                <div class="absolute inset-0 z-0 h-full w-full overflow-hidden">
                    <img 
                        src="{{ asset('storage/air-terjun-jerman.png') }}" 
                        alt="Background Statis Blur" 
                        class="w-full h-full object-cover filter blur-xl scale-110 brightness-40 contrast-125" 
                    />
                    <div class="absolute inset-0 bg-black/60"></div>
                </div>

                <div class="relative z-10 w-full max-w-md px-2 py-8 sm:px-6">
                    <div class="mb-6 flex justify-center lg:hidden">
                        <a href="{{ route('home') }}" class="flex items-center gap-2" wire:navigate>
                            <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-emerald-500 font-bold text-white">EL</span>
                            <span class="text-lg font-bold text-white">{{ config('app.name', 'Explore East Lombok') }}</span>
                        </a>
                    </div>

                    <div class="w-full">
                        {{ $slot }}
                    </div>
                </div>
            </main>

        </div>

        @persist('toast')
            <flux:toast.group>
                <flux:toast />
            </flux:toast.group>
        @endpersist

        @fluxScripts
    </body>
</html>