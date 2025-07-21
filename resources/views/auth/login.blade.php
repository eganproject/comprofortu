@extends('layouts.auth.main')

@section('title', 'Login - Admin Panel')

@section('content')
    <div class="bg-gray-900/50 backdrop-blur-xl p-8 rounded-2xl border border-purple-800/50 shadow-2xl">

        <div class="text-center mb-8">
            <div class="inline-block p-3 bg-purple-600/20 rounded-full mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="text-purple-300">
                    <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
                </svg>
            </div>
            <h1 class="text-3xl font-bold text-white">Selamat Datang Kembali</h1>
            <p class="text-gray-400 mt-2">Silakan masuk untuk melanjutkan ke panel admin.</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Alamat Email</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i data-lucide="mail" class="w-5 h-5 text-gray-400"></i>
                    </span>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                        autocomplete="email" autofocus
                        class="w-full pl-10 pr-4 py-2.5 bg-gray-800/50 rounded-lg text-white placeholder-gray-500 focus:outline-none transition-all duration-300 
                           @error('email') 
                                border-red-500/80 focus:ring-2 focus:ring-red-500 
                           @else 
                                border-purple-800/60 focus:ring-2 focus:ring-purple-500 
                           @enderror"
                        placeholder="akun@email.com">
                </div>

                {{-- Pesan Error Modern --}}
                @error('email')
                    <div role="alert" class="flex items-center mt-2 text-red-400 text-xs">
                        <i data-lucide="alert-circle" class="w-4 h-4 mr-1.5 flex-shrink-0"></i>
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </div>

            <div>
                <div class="flex justify-between items-center mb-2">
                    <label for="password" class="block text-sm font-medium text-gray-300">Password</label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="text-sm text-purple-400 hover:text-purple-300 transition-colors">
                            Lupa password?
                        </a>
                    @endif
                </div>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i data-lucide="lock" class="w-5 h-5 text-gray-400"></i>
                    </span>
                    <input type="password" id="password" name="password" required autocomplete="current-password"
                        class="w-full pl-10 pr-4 py-2.5 bg-gray-800/50 rounded-lg text-white placeholder-gray-500 focus:outline-none transition-all duration-300 
                           @error('password') 
                                border-red-500/80 focus:ring-2 focus:ring-red-500 
                           @else 
                                border-purple-800/60 focus:ring-2 focus:ring-purple-500 
                           @enderror"
                        placeholder="••••••••">
                </div>

                {{-- Pesan Error Modern --}}
                @error('password')
                    <div role="alert" class="flex items-center mt-2 text-red-400 text-xs">
                        <i data-lucide="alert-circle" class="w-4 h-4 mr-1.5 flex-shrink-0"></i>
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-4 rounded-lg shadow-lg shadow-purple-600/30
                       transition-all duration-300 transform hover:scale-105">
                    Masuk
                </button>
            </div>
        </form>

        <div class="text-center mt-8">
            <p class="text-sm text-gray-400">
                Belum punya akun?
                <a href="/register" class="font-medium text-purple-400 hover:text-purple-300 transition-colors">Daftar di
                    sini</a>
            </p>
        </div>
    </div>
@endsection
