<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jeruk Manis Tourism</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

  <!-- NAVBAR -->
  <header class="bg-white/80 backdrop-blur-md shadow-sm fixed w-full top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
      <div class="text-xl font-bold text-blue-600 tracking-wider">LogoWebsite</div>
      <nav class="space-x-6 text-sm font-semibold">
        <a href="#home" class="hover:text-blue-600 transition">Home</a>
        <a href="#information" class="hover:text-blue-600 transition">Information</a>
        <a href="#gallery" class="hover:text-blue-600 transition">Gallery</a>
        <a href="#footer" class="hover:text-blue-600 transition">Kontak</a>
      </nav>
    </div>
  </header>

  <main class="flex-grow">
<!-- SECTION HOME -->
<section id="home" class="min-h-screen flex items-center justify-start text-left px-6 sm:px-12 md:px-20 relative overflow-hidden">
  
  <!-- Gambar Background mengambil file dari public/storage -->
  <img 
    src="{{ asset('storage/air-terjun-jeruk-manis.jpg') }}" 
    alt="Background Home" 
    class="absolute inset-0 w-full h-full object-cover object-center"
  />

  <!-- Overlay Hitam Transparan -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- Konten Teks & Tombol Futuristik -->
  <div class="relative z-10 text-white max-w-2xl pt-16">
    <h1 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-md tracking-tight leading-tight">
      WELCOME TO THE TRAVEL WEBSITE OF JERUK MANIS
    </h1>
    <p class="text-lg text-gray-300 drop-shadow mb-10 font-light">
      Official website for tourist information and booking tour guides jeruk manis tourism.
    </p>
    
    <!-- Tombol Minimalis & Futuristik -->
    <div class="flex flex-col sm:flex-row justify-start items-stretch sm:items-center gap-5">
      
      <!-- Tombol Register (Glow Cyber style) -->
      <a href="{{ route('register') }}" class="group relative inline-flex items-center justify-center px-8 py-3 text-sm font-medium tracking-wide text-white transition-all duration-300 ease-out bg-white/10 rounded-full backdrop-blur-md border border-white/20 hover:border-cyan-400 hover:bg-cyan-500/20 hover:shadow-[0_0_25px_rgba(34,211,238,0.4)] active:scale-95">
        <span class="relative z-10 flex items-center gap-2">
          Regist Now
          <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
          </svg>
        </span>
      </a>

      <!-- Tombol Login (Glassmorphism Line style) -->
      <a href="{{ route('login') }}" class="group relative inline-flex items-center justify-center px-8 py-3 text-sm font-medium tracking-wide text-gray-300 transition-all duration-300 ease-out rounded-full border border-white/10 hover:border-white/40 hover:text-white hover:bg-white/5 active:scale-95">
        <span class="relative z-10">Login</span>
      </a>

    </div>
  </div>
</section>

    <!-- SECTION INFORMATION -->
    <section id="information" class="py-20 max-w-6xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-8">Informasi</h2>
      <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-sm border">
          <h3 class="text-xl font-bold mb-2">Tentang Kami</h3>
          <p class="text-gray-600">Tuliskan deskripsi ringkas mengenai profil, visi, atau misi Anda di sini.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-sm border">
          <h3 class="text-xl font-bold mb-2">Layanan Utama</h3>
          <p class="text-gray-600">Tuliskan informasi penting atau layanan unggulan yang ingin disampaikan kepada pengunjung.</p>
        </div>
      </div>
    </section>

    <!-- SECTION GALLERY -->
    <section id="gallery" class="py-20 bg-gray-100">
      <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Galeri</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
          <div class="bg-gray-300 h-48 rounded-lg flex items-center justify-center text-gray-500">[ Foto 1 ]</div>
          <div class="bg-gray-300 h-48 rounded-lg flex items-center justify-center text-gray-500">[ Foto 2 ]</div>
          <div class="bg-gray-300 h-48 rounded-lg flex items-center justify-center text-gray-500">[ Foto 3 ]</div>
        </div>
      </div>
    </section>
  </main>

  <!-- SECTION FOOTER -->
<footer id="footer" class="bg-[#0b0f0d] text-white py-4">
  <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-12 gap-4 items-start">
    
    <!-- Deskripsi Brand / Organisasi -->
    <div class="md:col-span-5 pr-0 md:pr-2">
      <h2 class="text-base font-bold tracking-wide text-white mb-1">JERUK MANIS TOURISM SITE</h2>
      <p class="text-[11px] text-gray-400 leading-tight max-w-sm">
        Official website for tourist information and booking tour guides jeruk manis tourism.
      </p>
    </div>

    <!-- Media Sosial -->
    <div class="md:col-span-2">
      <h3 class="text-[10px] font-semibold tracking-wider uppercase text-gray-300 mb-1.5">SOCIAL MEDIA</h3>
      <ul class="space-y-1 text-[11px] text-gray-400">
        <li>
          <a href="https://www.facebook.com/share/17tAQen99n/" target="_blank" class="flex items-center gap-1.5 hover:text-white transition">
            <svg class="w-3 h-3 fill-current text-gray-400 shrink-0" viewBox="0 0 24 24">
              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
            <span>Desa Wisata Jeruk Manis</span>
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/desawisatajerukmanis_?igsh=MXh3aGpyOG4xa2YxNQ==" target="_blank" class="flex items-center gap-1.5 hover:text-white transition">
            <svg class="w-3 h-3 fill-current text-gray-400 shrink-0" viewBox="0 0 24 24">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
            </svg>
            <span>desawisatajerukmanis_</span>
          </a>
        </li>
      </ul>
    </div>

    <!-- Hubungi Kami -->
    <div class="md:col-span-2">
      <h3 class="text-[10px] font-semibold tracking-wider uppercase text-gray-300 mb-1.5">CONNTACT US</h3>
      <ul class="space-y-1 text-[11px] text-gray-400">
        <li class="flex items-center gap-1.5">
          <svg class="w-3 h-3 text-purple-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
          </svg>
          <span>+62 853-3749-1415</span>
        </li>
        <li class="flex items-center gap-1.5">
          <svg class="w-3 h-3 text-purple-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
          </svg>
          <span class="break-all">jerukmanistourism@gmail.com</span>
        </li>
      </ul>
    </div>

    <!-- Alamat Lengkap -->
    <div class="md:col-span-3">
      <h3 class="text-[10px] font-semibold tracking-wider uppercase text-gray-300 mb-1.5">COMPLETE ADDRES</h3>
      <address class="not-italic text-[11px] text-gray-400 leading-tight space-y-0.5">
        <p>Jl. Pariwisata Air Terjun Jeruk Manis,</p>
        <p>Desa Jeruk Manis, Kec. Sikur,</p>
        <p>Kab. Lombok Timur, Prov. Nusa Tenggara Barat,</p>
        <p>Kode Pos 83662.</p>
      </address>
    </div>

  </div>

  <!-- Copyright / Garis Bawah -->
  <div class="max-w-6xl mx-auto px-4 mt-3 pt-2 border-t border-gray-800/60 text-center">
    <p class="text-[10px] text-gray-500">
      &copy; 2026 HMPS Teknik Komputer UnHaz | Hak Cipta Dilindungi.
    </p>
  </div>
</footer>

</body>
</html>