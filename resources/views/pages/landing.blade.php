@extends('layoutssss.app')

@section('title', 'Selamat Datang di Sekolah Kita')

@section('content')
<div class="relative w-full overflow-hidden">
<div class="relative w-full overflow-hidden">
    <!-- Container Slide -->
    <div class="slide-container flex transition-transform duration-500 ease-in-out" id="slide-container">
        <div class="slide min-w-full relative">
            <img src="{{ asset('images/8.jpeg') }}" alt="Slide 1" class="w-full h-[600px] object-cover">
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 bg-white bg-opacity-75 p-6 rounded-lg shadow-lg max-w-2xl text-center">
                <h2 class="text-2xl font-semibold mb-2">Hallo Test</h2>
                <p class="text-gray-700">Pendidikan berkualitas dan lingkungan belajar yang inspiratif untuk semua siswa.</p>
            </div>
        </div>
        <div class="slide min-w-full relative">
            <img src="{{ asset('images/image2.jpeg') }}" alt="Slide 2" class="w-full h-[600px] object-cover">
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 bg-white bg-opacity-75 p-6 rounded-lg shadow-lg max-w-2xl text-center">
                <h2 class="text-2xl font-semibold mb-2">Fasilitas Lengkap dan Modern</h2>
                <p class="text-gray-700">Kami menyediakan fasilitas belajar yang lengkap untuk mendukung kegiatan belajar mengajar.</p>
            </div>
        </div>
        <div class="slide min-w-full relative">
            <img src="{{ asset('images/image3.jpeg') }}" alt="Slide 3" class="w-full h-[600px] object-cover">
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 bg-white bg-opacity-75 p-6 rounded-lg shadow-lg max-w-2xl text-center">
                <h2 class="text-2xl font-semibold mb-2">Kegiatan Ekstrakurikuler</h2>
                <p class="text-gray-700">Berbagai kegiatan ekstrakurikuler untuk mengembangkan bakat dan minat siswa.</p>
            </div>
        </div>
    </div>

    <!-- Navigation Arrows -->
    <button class="absolute left-0 top-1/2 transform -translate-y-1/2 p-2 bg-lime-500 rounded-full hover:bg-lime-700" id="prev">
        &#10094;
    </button>
    <button class="absolute right-0 top-1/2 transform -translate-y-1/2 p-2 bg-lime-500 rounded-full hover:bg-lime-700" id="next">
        &#10095;
    </button>

    <!-- Pagination -->
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2" id="pagination">
        <span class="w-3 h-3 bg-white rounded-full cursor-pointer hover:bg-gray-300" data-index="0"></span>
        <span class="w-3 h-3 bg-white rounded-full cursor-pointer hover:bg-gray-300" data-index="1"></span>
        <span class="w-3 h-3 bg-white rounded-full cursor-pointer hover:bg-gray-300" data-index="2"></span>
    </div>
</div>

 <!-- Bagian Visi dan Misi dengan Ikon di Kiri -->
 <div class="container mx-auto py-8 flex flex-col md:flex-row items-center">
    <!-- Ikon Visi Misi di Sebelah Kiri -->
    <div class="md:w-1/2 w-full flex flex-col items-center mb-8 md:mb-0" data-aos="fade-right">
        <!-- Ikon untuk Visi -->
        <div class="mb-6">
            <i class="fas fa-book-open text-green-600 text-7xl mb-5 ml-9"></i> <!-- Ikon Visi -->
            <h3 class="text-2xl font-bold text-green-600">Visi Dan Misi</h3>
        </div>

        
    </div>

    <!-- Visi dan Misi di Sebelah Kanan -->
    <div class="md:w-1/2 w-auto" data-aos="fade-up">
        <!-- Visi -->
        <div class="mb-6 text-center">
            <h2 class="text-4xl font-bold text-green-600 mb-6 flex justify-center items-center">
                <i class="fas fa-eye mr-2"></i> <!-- Ikon Visi Kecil -->
                Visi
            </h2>
            <p class="text-lg font-bold text-gray-700">
                TERWUJUDUNYA PESERTA DIDIK YANG DISIPLIN DALAM IMAN, ILMU, AMAL, SERTA BERAHKHLAKUL KARIMAH
            </p>
        </div>

      <!-- Misi -->
<div>
    <h2 class="text-4xl font-bold text-green-600 mb-6 justify-center flex items-center">
        <i class="fas fa-bullseye mr-2"></i> <!-- Ikon Misi Kecil -->
        Misi
    </h2>
    <ul class="list-none text-lg text-gray-700">
        <li class="mb-2 flex items-start"> <!-- Tambah items-start untuk memastikan ikon sejajar vertikal di awal -->
            <i class="fas fa-check-circle text-green-600 mr-2 font-bold mt-1"></i> <!-- Ikon Poin -->
            <span>Mewujudkan pembelajaran dan pembiasaan dalam mempelajari Al-Qur'an dan menjalankan ajaran Islam</span>
        </li>
        <li class="mb-2 flex items-start">
            <i class="fas fa-check-circle text-green-600 mr-2 font-bold mt-1"></i> <!-- Ikon Poin -->
            <span>Mewujudkan pembentukan karakter Islami yang mampu melaksanakan sholat wajib maupun sunnah</span>
        </li>
        <li class="mb-2 flex items-start">
            <i class="fas fa-check-circle text-green-600 mr-2 font-bold mt-1"></i> <!-- Ikon Poin -->
            <span>Menyelenggarakan pendidikan yang berkualitan dalam pencapaian prestasi akademik</span>
        </li>
        <li class="mb-2 flex items-start">
            <i class="fas fa-check-circle text-green-600 mr-2 font-bold mt-1"></i> <!-- Ikon Poin -->
            <span>Meningkatkan pengetahuan dan profesionalisme tenaga pendidikan sesuai dengan dunia pendidikan</span>
        </li>
        <li class="mb-2 flex items-start">
            <i class="fas fa-check-circle text-green-600 mr-2 font-bold mt-1"></i> <!-- Ikon Poin -->
            <span>Menyelenggarakan tata kelola madrasah yang transparan, efektif dan efisien</span>
        </li>
    </ul>
</div>
<!-- tujuan -->
<div>
    <h2 class="text-4xl font-bold text-green-600 mt-10 mb-6 flex items-center">
        <i class="mr-2"></i> <!-- Ikon Misi Kecil -->
        TUJUAN PENDIDIKAN MADRASAH 
    </h2>
    <ul class="list-none text-lg text-gray-700">
        <li class="mb-2 flex items-start"> <!-- Tambah items-start untuk memastikan ikon sejajar vertikal di awal -->
            <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i> <!-- Ikon Poin -->
            <span>Menanamkan ilmu agama Islam sebagai landasan aqidah Islamiyah dan akhlakul karimah</span>
        </li>
        <li class="mb-2 flex items-start">
            <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i> <!-- Ikon Poin -->
            <span>Membiasakan perilaku Islami di lingkunagn sekolah </span>
        </li>
        <li class="mb-2 flex items-start">
            <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i> <!-- Ikon Poin -->
            <span>Mengoptimalkan proses pembelajaran yang aktif, keratif, efektif dan menyenangkan </span>
        </li>
        <li class="mb-2 flex items-start">
            <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i> <!-- Ikon Poin -->
            <span>Mengembangkan potensi akademik, minat dan bakat siswa melalu bombing konseling dan ekstrakurikuler</span>
        </li>
        <li class="mb-2 flex items-start">
            <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i> <!-- Ikon Poin -->
            <span>Mempersiapkan peserta didik untuk menuntaskan wajib belajar pendidikan dasar 9 tahun </span>
        </li>
        <li class="mb-2 flex items-start">
            <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i> <!-- Ikon Poin -->
            <span>Meningkatkan prestasi akademik siswa </span>
        </li>
        <li class="mb-2 flex items-start">
            <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i> <!-- Ikon Poin -->
            <span>Menciptakn suasana yang aman, tentram dan damai </span>
        </li>
    </ul>
</div>

    </div>
</div>



<div class="container mx-auto py-16">
    <h2 class="text-4xl font-bold text-center text-green-600 mb-8" data-aos="fade-up">Program Unggulan</h2>

    <!-- Grid Layout untuk Program Unggulan -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Program 1 -->
        <div class="bg-lime-500 shadow-lg p-6 rounded-lg" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('images/program/tahfidz.jpeg') }}" alt="Program 1" class="w-auto h- object-cover mb-4 rounded">
            <h3 class="text-2xl font-bold text-green-600 mb-2">Tahfidz</h3>
            <p class="text-white font-bold">
            Program penguatan sekolah dalam membentuk karakter siswa yang cerdas dan berakhlak mulia.
            </p>
        </div>

        <!-- Program 2 -->
        <div class="bg-lime-500 shadow-lg p-6 rounded-lg" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('images/program/matematika.jpeg') }}" alt="Program 2" class="w-full h- object-cover mb-4 rounded">
            <h3 class="text-2xl font-bold text-green-600 mb-2">Mathematics Clas</h3>
            <p class="text-white font-bold">
                Menigkatkan Kemampuan akedemik siswa , terutama di bidang Matematika 
            </p>
        </div>

        <!-- Program 3 -->
        <div class="bg-lime-500 shadow-lg p-6 rounded-lg" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('images/program/fullday.jpg') }}" alt="Program 3" class="w-auto h- object-cover mb-4 rounded">
            <h3 class="text-2xl font-bold text-green-600 mb-2">Fullday School</h3>
            <p class="text-white font-bold">
            Sekolah sudah melaksanakan fullday dimana siswa belajar dari 7.30 – 11.00 untuk kelas kecil, 07.30 – 15.00 untuk kelas besar
            </p>
        </div>
    </div>
</div>




<div class="container mx-auto py-16">
    <h2 class="text-4xl font-bold text-center text-green-600 mb-8" data-aos="fade-up">Ekstrakurikuler</h2>

  <!-- Grid Layout untuk Ekstrakurikuler -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  gap-8">
    <!-- Ekstrakurikuler 5 ke atas -->
    <div class="order-1 lg:order-5 bg-lime-500 shadow-lg p-6 rounded-lg" data-aos="fade-up" data-aos-delay="300">
        <img src="{{ asset('images/ekstrakulikuler/batminton.jpg') }}" alt="Ekstrakurikuler 5" class="w-full h-40 object-cover mb-4 rounded">
        <h3 class="text-2xl font-bold text-green-600 mb-2">Badminton</h3>
        <p class="text-white">Membantu siswa meningkatkan ketangkasan fisik dan reaksi melalui olahraga badminton.</p>
    </div>

    <!-- Ekstrakurikuler 1 -->
    <div class="order-2 lg:order-1 bg-lime-500 shadow-lg p-6 rounded-lg mb-4 lg:mb-0" data-aos="fade-up" data-aos-delay="100">
        <img src="{{ asset('images/ekstrakulikuler/pramuka.jpg') }}" alt="Ekstrakurikuler 1" class="w-full h-40 object-cover mb-4 rounded">
        <h3 class="text-2xl font-bold text-green-600 mb-2">Pramuka</h3>
        <p class="text-white">Kegiatan pramuka bertujuan untuk mengembangkan keterampilan kepemimpinan, kemandirian, dan kerjasama antar siswa.</p>
    </div>

    

    <!-- Ekstrakurikuler 3 -->
    <div class="order-4 lg:order-3 bg-lime-500 shadow-lg p-6 rounded-lg mb-4 lg:mb-0" data-aos="fade-up" data-aos-delay="300">
        <img src="{{ asset('images/ekstrakulikuler/hadroh.jpeg') }}" alt="Ekstrakurikuler 3" class="w-full h-40 object-cover mb-4 rounded">
        <h3 class="text-2xl font-bold text-green-600 mb-2">Hadroh</h3>
        <p class="text-white">Kami memilih seni hadroh sebagai kegiatan ekstrakurikuler karena dapat menambah pengetahuan dan wawasan baru tentang syair-syair Islam.</p>
    </div>

    <!-- Ekstrakurikuler 4 -->
    <div class="order-5 lg:order-4 bg-lime-500 shadow-lg p-6 rounded-lg mb-4 lg:mb-0" data-aos="fade-up" data-aos-delay="400">
        <img src="{{ asset('images/ekstrakulikuler/pencaksilat.jpg') }}" alt="Ekstrakurikuler 4" class="w-full h-40 object-cover mb-4 rounded">
        <h3 class="text-2xl font-bold text-green-600 mb-2">Pencak Silat Pagar Nusa</h3>
        <p class="text-white">Program ini dirancang untuk membentuk karakter, kedisiplinan, dan kebugaran siswa melalui pembelajaran seni bela diri tradisional Indonesia.</p>
    </div>

    <!-- Ekstrakurikuler 6 -->
    <div class="order-6 bg-lime-500 shadow-lg p-6 rounded-lg" data-aos="fade-up" data-aos-delay="600">
        <img src="{{ asset('images/ekstrakulikuler/futsal.jpeg') }}" alt="Ekstrakurikuler 6" class="w-full h-40 object-cover mb-4 rounded">
        <h3 class="text-2xl font-bold text-green-600 mb-2">Futsal</h3>
        <p class="text-white">Olahraga futsal mengajarkan kerja sama tim dan ketangkasan dalam permainan bola yang cepat.</p>
    </div>

    <!-- Ekstrakurikuler 7 -->
    <div class="order-8 justify-center bg-lime-500 shadow-lg p-6 rounded-lg" data-aos="fade-up" data-aos-delay="700">
        <img src="{{ asset('images/ekstrakulikuler/voly.jpg') }}" alt="Ekstrakurikuler 7" class="w-full h-40 object-cover mb-4 rounded">
        <h3 class="text-2xl font-bold text-green-600 mb-2">Voly</h3>
        <p class="text-white">Olahraga voli melatih koordinasi mata dan gerak tangan, karena mata mengawasi bola dan tangan bersiap untuk menghalau bola</p>
    </div>
</div>



<!-- Bagian Testimoni dengan Background Gambar -->
<div class="relative bg-cover bg-center mt-8 py-20" style="background-image: url('{{ asset('images/image2.jpeg') }}');">
    
    <!-- Overlay Gelap untuk Membantu Keterbacaan Teks -->
    <div class="absolute inset-0 bg-black opacity-50"></div>

    <!-- Konten Testimoni -->
    <div class="relative container mx-auto text-white text-center">
        <h2 class="text-4xl font-bold mb-8" data-aos="fade-up">Testimoni</h2>

        <!-- Grid Layout untuk Testimoni -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimoni 1 -->
            <div class="bg-lime-400 bg-opacity-70 p-6 rounded-lg shadow-lg" data-aos="fade-right">
                <img src="{{ asset('images/testimoni1.jpg') }}" alt="Testimoni 1" class="w-24 h-24 mx-auto rounded-full mb-4 object-cover">
                <p class="text-white text-lg italic">"Sekolah ini memberikan pengalaman belajar yang luar biasa. Guru-gurunya sangat peduli dan fasilitasnya lengkap!"</p>
                <h3 class="text-xl font-bold mt-4 text-white">- Syfa Anastasya</h3>
            </div>

            <!-- Testimoni 2 -->
            <div class="bg-lime-400 bg-opacity-70 p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('images/testimoni2.jpg') }}" alt="Testimoni 2" class="w-24 h-24 mx-auto rounded-full mb-4 object-cover">
                <p class="text-white text-lg italic">"Lingkungan yang sangat mendukung untuk belajar. Saya sangat bangga menjadi bagian dari sekolah ini."</p>
                <h3 class="text-xl font-bold mt-4 text-white">- lucky Pradana</h3>
            </div>

            <!-- Testimoni 3 -->
            <div class="bg-lime-400 bg-opacity-70 p-6 rounded-lg shadow-lg" data-aos="fade-left" data-aos-delay="400">
                <img src="{{ asset('images/testimoni3.jpg') }}" alt="Testimoni 3" class="w-24 h-24 mx-auto rounded-full mb-4 object-cover">
                <p class="text-white text-lg italic">"Program-program ekstrakurikuler sangat membantu dalam mengembangkan bakat dan kemampuan siswa."</p>
                <h3 class="text-xl font-bold mt-4 text-white">- Joko Riyanto</h3>
            </div>
        </div>
    </div>
</div>

<!-- Bagian Perpustakaan -->
<div class="container mx-auto py-16">
    <h2 class="text-4xl font-bold text-center text-green-600 mb-8" data-aos="fade-up">Perpustakaan</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Deskripsi Perpustakaan -->
        <div data-aos="fade-right">
            <h3 class="text-3xl font-bold text-green-600 mb-4">Fasilitas Perpustakaan</h3>
            <p class="text-lg text-gray-700 mb-4">
                Perpustakaan kami dilengkapi dengan berbagai koleksi buku yang lengkap dan modern. Dengan suasana yang nyaman, perpustakaan ini menjadi tempat yang ideal bagi siswa untuk belajar dan menggali informasi. Kami juga menyediakan layanan digital untuk memudahkan akses ke berbagai referensi dan sumber daya ilmu pengetahuan.
            </p>
            <ul class="list-disc list-inside text-lg text-gray-700">
                <li>Koleksi buku yang beragam</li>
                <li>Ruang baca yang nyaman</li>
                <li>Akses digital ke sumber daya online</li>
                <li>Komputer dengan akses internet</li>
            </ul>
        </div>

        <!-- Gambar Perpustakaan -->
        <div data-aos="fade-left">
            <img src="{{ asset('images/perpustakaan.jpg') }}" alt="Perpustakaan" class="w-full h-64 object-cover rounded-lg shadow-lg">
        </div>
    </div>
</div>
</div>

@endsection
