<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Saya</title>
  <!-- Tailwind CSS CDN untuk styling cepat & modern -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

  <!-- NAVBAR -->
  <header class="bg-white shadow-md fixed w-full top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
      <div class="text-xl font-bold text-blue-600">LogoWebsite</div>
      <nav class="space-x-6 text-sm font-semibold">
        <a href="#home" class="hover:text-blue-600 transition">Home</a>
        <a href="#information" class="hover:text-blue-600 transition">Information</a>
        <a href="#gallery" class="hover:text-blue-600 transition">Gallery</a>
        <a href="#footer" class="hover:text-blue-600 transition">Kontak</a>
      </nav>
    </div>
  </header>

  <main class="pt-20 flex-grow">
    <!-- SECTION HOME -->
    <section id="home" class="min-h-screen flex items-center justify-center bg-blue-50 text-center px-4">
      <div>
        <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 mb-4">Selamat Datang di Website Kami</h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Solusi terbaik untuk informasi, layanan, dan koleksi galeri kami.</p>
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
  <footer id="footer" class="bg-gray-900 text-white py-12">
    <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-3 gap-8">
      
      <!-- Hubungi Kami -->
      <div>
        <h3 class="text-lg font-bold mb-3 border-b border-gray-700 pb-2">Hubungi Kami</h3>
        <p class="text-sm text-gray-400 mb-1">Email: info@website.com</p>
        <p class="text-sm text-gray-400">Telepon / WA: +62 812-3456-7890</p>
      </div>

    <!-- Alamat -->
    <div>
        <h3 class="text-lg font-bold mb-3 border-b border-gray-700 pb-2">Alamat</h3>
        <p class="text-sm text-gray-400 leading-relaxed">
        Jl. Jendral Sudirman No. 123,<br>
        Kota Jakarta Selatan, DKI Jakarta 12190
        </p>
    </div>

    <!-- Media Sosial -->
    <div>
        <h3 class="text-lg font-bold mb-3 border-b border-gray-700 pb-2">Ikuti Kami</h3>
        <div class="flex space-x-4">
        <a href="https://facebook.com" target="_blank" class="text-gray-400 hover:text-blue-500 transition">Facebook</a>
        <a href="https://instagram.com" target="_blank" class="text-gray-400 hover:text-pink-500 transition">Instagram</a>
        </div>
    </div>

    </div>
    <div class="text-center text-xs text-gray-500 mt-10 pt-4 border-t border-gray-800">
    &copy; 2026 Website Saya. All rights reserved.
    </div>
</footer>

</body>
</html>