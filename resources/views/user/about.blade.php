      @extends('layouts.user.main')

      @section('title', 'About Us - Fortu Digital Teknologi')
      <!-- Hero Section -->
      @push('cssOnPage')
          <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
          <style>
              .hero-bg {
                  background-image: url('{{ asset('storage/' . $hero?->image_1) }}');
                  background-size: cover;
                  background-position: center;
              }
          </style>
      @endpush
      @section('content')
          <section class="bg-purple-900 hero-bg text-white">
              <div class="container mx-auto px-4 py-20 flex flex-col md:flex-row items-center">
                  <!-- Text Content -->
                  <div class="md:w-1/2 mb-10 md:mb-0 text-center md:text-left">
                      <h1 class="text-4xl lg:text-5xl font-bold mb-4">{{ $hero?->title }}</h1>
                      <div class="text-lg text-purple-200 max-w-lg">
                          {!! $hero?->text !!}
                      </div>
                  </div>
                  <!-- Image Content -->
                  <div class="md:w-1/2 flex justify-center">
                      <img src="{{ asset('storage/' . $hero?->image_2) }}" alt="Grafik Isometric" class="w-full max-w-md">
                  </div>
              </div>
          </section>

          <!-- About Us Content Section -->
          <section class="py-16 lg:py-24">
              <div class="container mx-auto px-4 max-w-4xl">
                  <div class="ql-snow">
                      <div class="ql-editor">
                          {!! $about?->text !!}
                      </div>
                  </div>
              </div>
          </section>
      @endsection
