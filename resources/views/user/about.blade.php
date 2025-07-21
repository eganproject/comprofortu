      @extends('layouts.user.main')

      @section('title', 'About Us - Fortu Digital Teknologi')
      <!-- Hero Section -->
      @section('content')
          <style>
              .hero-bg {
                  background-image: url('/image/fortu.png');
                  background-size: cover;
                  background-position: center;
              }
          </style>
          <section class="bg-purple-900 hero-bg text-white">
              <div class="container mx-auto px-4 py-20 flex flex-col md:flex-row items-center">
                  <!-- Text Content -->
                  <div class="md:w-1/2 mb-10 md:mb-0 text-center md:text-left">
                      <h1 class="text-4xl lg:text-5xl font-bold mb-4">Satu Platform, Multi Solusi</h1>
                      <p class="text-lg text-purple-200 max-w-lg">
                          Capaian berbagai macam bentuk Solusi membentuk kemudahan operasi infrastruktur digital, dikemas
                          dalam Satu Platform sentral aplikasi online & on-premise.
                      </p>
                  </div>
                  <!-- Image Content -->
                  <div class="md:w-1/2 flex justify-center">
                      <img src="https://placehold.co/450x300/FFFFFF/8B5CF6?text=Isometric+Graphic"
                          alt="Grafik Isometrik Platform" class="w-full max-w-md">
                  </div>
              </div>
          </section>

          <!-- About Us Content Section -->
          <section class="py-16 lg:py-24">
              <div class="container mx-auto px-4 max-w-4xl">
                  <div class="text-center md:text-left">
                      <h2 class="text-3xl font-bold mb-6">Fortu Digital Teknologi</h2>
                      <div class="space-y-4 text-gray-600 leading-relaxed">
                          <p>
                              Fortu berdiri di tahun 2017, bergerak dalam bidang teknologi layar informasi dan komunikasi,
                              hadir sebagai prinsipal produk teknologi Indonesia yang telah terdaftar sebagai merek dalam
                              negeri untuk mendukung program industri teknologi Indonesia mencapai solusi global.
                          </p>
                          <p>
                              Kami mengembangkan produk interaktif manusia-mesin berbasis kebutuhan informasi, komunikasi,
                              dan layanan. Dengan tim pengembang hardware dan software yang berdedikasi dan kompeten, kami
                              mempunyai fleksibilitas pengembangan dalam menghadapi tren teknologi dengan menawarkan produk
                              dengan teknologi terbaik dan berkualitas.
                          </p>
                          <p>
                              Dengan semangat pengembangan kami berupaya menciptakan produk yang sesuai dengan kebutuhan
                              pasar Indonesia. Kami yakin Fortu dapat menjadi produk kebanggaan dalam negeri.
                          </p>
                      </div>
                  </div>

                  <!-- Visi & Misi -->
                  <div class="mt-16 space-y-12">
                      <!-- Visi -->
                      <div>
                          <h3 class="text-2xl font-bold mb-3">Visi</h3>
                          <p class="text-gray-600 leading-relaxed">
                              Membuka dan meningkatkan potensi produktivitas sumber daya manusia Indonesia melalui solusi
                              teknologi.
                          </p>
                      </div>
                      <!-- Misi -->
                      <div>
                          <h3 class="text-2xl font-bold mb-3">Misi</h3>
                          <p class="text-gray-600 leading-relaxed">
                              Menciptakan produk dengan kombinasi teknologi terbaik berdasar kepada kebutuhan informasi dan
                              komunikasi yang paling efektif.
                          </p>
                      </div>
                  </div>
              </div>
          </section>

      @endsection
