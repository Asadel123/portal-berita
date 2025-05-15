<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portal Berita</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 min-h-screen flex flex-col">

  <!-- Header -->
  <header class="bg-white flex justify-between items-start relative">
    <!-- Logo -->
    <div class="absolute left-[52px] top-[29px] mb-[7px] text-[40px] font-[cursive] text-[#4C48D2]">
      Logo
    </div>

    <!-- Icon dan Text -->
    <div class="absolute right-[262px] top-[36px] mb-[27px] flex items-center space-x-2">
      <!-- Icon Person -->
      <svg xmlns="http://www.w3.org/2000/svg" class="w-[36px] h-[35px] text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A4 4 0 0112 20a4 4 0 016.879-2.196M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
      </svg>
    </div>
    <div class="absolute right-[149px] top-[48px] mb-[26px] text-[20px] text-black">
      Masuk
    </div>

    <!-- Spacer to give height -->
    <div class="h-[100px] w-full"></div>
  </header>

  <!-- Garis pembatas -->
  <div class="border-b-[3px] border-[#4C48D2] w-full"></div>

  <!-- Kategori Navigasi -->
  <nav class="bg-gray-100">
    <ul class="flex justify-center space-x-36 text-lg font-semibold py-4 text-black">
      <li><a href="#" class="hover:text-blue-600">NEWS</a></li>
      <li><a href="#" class="hover:text-blue-600">BOLA</a></li>
      <li><a href="#" class="hover:text-blue-600">EKONOMI</a></li>
      <li><a href="#" class="hover:text-blue-600">POLITIK</a></li>
      <li><a href="#" class="hover:text-blue-600">TEKNOLOGI</a></li>
      <li><a href="#" class="hover:text-blue-600">OTOMOTIF</a></li>
      <li><a href="#" class="hover:text-blue-600">LIFESTYLE</a></li>
    </ul>
  </nav>

  <!-- Konten -->
  <main class="flex-grow container mx-auto px-6 py-8">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-gray-200 border-b-[3px] border-[#4C48D2] py-2 fixed bottom-0 w-full">
    <p class="text-center text-sm text-black">@portalberita</p>
  </footer>

</body>
</html>
