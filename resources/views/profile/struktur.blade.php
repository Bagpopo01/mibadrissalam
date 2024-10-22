@extends('layoutssss.app')

@section('title', 'Sejarah Singkat Sekolah')

@section('content')
 <!-- Header -->
 <header class="bg-blue-900 text-white p-4 text-center">
        <h1 class="text-3xl font-bold">Struktur Organisasi MI Badrissalam Sukorejo</h1>
    </header>

    <!-- Organizational Structure -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col items-center">
                <!-- Kepala Sekolah -->
                <div class="bg-teal-200 p-4 rounded-md shadow-md mb-6 text-center w-1/2">
                    <h2 class="text-xl font-bold">Kepala Sekolah</h2>
                    <p>NUR ALFIYAH, S.Pd.I</p>
                </div>
                
                <!-- Wakil Kepala Sekolah -->
                <div class="bg-purple-200 p-4 rounded-md shadow-md mb-6 text-center w-1/2">
                    <h2 class="text-xl font-bold">Wakil Kepala Sekolah</h2>
                    <p>SLAMET SUSANTO, S.Pd.I</p>
                </div>

                <!-- Bendahara, Sekretaris, Komite Sekolah -->
                <div class="flex flex-wrap justify-center gap-6 mb-6">
                    <div class="bg-pink-200 p-4 rounded-md shadow-md text-center w-1/3">
                        <h2 class="text-xl font-bold">Bendahara</h2>
                        <p>NURYANTI, S.Pd.I</p>
                    </div>
                    <div class="bg-indigo-200 p-4 rounded-md shadow-md text-center w-1/3">
                        <h2 class="text-xl font-bold">Sekretaris</h2>
                        <p>JOKO RIYANTO, S.Pd</p>
                    </div>
                    <div class="bg-blue-200 p-4 rounded-md shadow-md text-center w-1/3">
                        <h2 class="text-xl font-bold">Komite Sekolah</h2>
                        <p>YOGO SANTOSA, S.E</p>
                    </div>
                </div>

                <!-- Guru Kelas -->
                <h2 class="text-2xl font-bold mb-6">Guru Kelas</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="bg-yellow-200 p-4 rounded-md shadow-md text-center">
                        <h3 class="text-lg font-bold">Guru Kelas I A</h3>
                        <p>Nurvanti, S.Pd.I</p>
                    </div>
                    <div class="bg-yellow-200 p-4 rounded-md shadow-md text-center">
                        <h3 class="text-lg font-bold">Guru Kelas II A</h3>
                        <p>Avi Avu. V.I. S.Pd</p>
                    </div>
                    <div class="bg-yellow-200 p-4 rounded-md shadow-md text-center">
                        <h3 class="text-lg font-bold">Guru Kelas III A</h3>
                        <p>Arifah, S.Pd</p>
                    </div>
                    <div class="bg-yellow-200 p-4 rounded-md shadow-md text-center">
                        <h3 class="text-lg font-bold">Guru Kelas IV A</h3>
                        <p>Nurul Istiqoma, S.Pd</p>
                    </div>
                    <div class="bg-yellow-200 p-4 rounded-md shadow-md text-center">
                        <h3 class="text-lg font-bold">Guru Kelas V A</h3>
                        <p>Tiyas Milati, S.Pd</p>
                    </div>
                    <div class="bg-yellow-200 p-4 rounded-md shadow-md text-center">
                        <h3 class="text-lg font-bold">Guru Kelas VI A</h3>
                        <p>Slamet Susanto, S.Pd.I</p>
                    </div>
                </div>

                <!-- Guru Pendukung -->
                <h2 class="text-2xl font-bold mb-6">Guru Pendukung</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-green-200 p-4 rounded-md shadow-md text-center">
                        <h3 class="text-lg font-bold">Guru Penjas</h3>
                        <p>Masvkuri, S.Pd.I</p>
                    </div>
                    <div class="bg-green-200 p-4 rounded-md shadow-md text-center">
                        <h3 class="text-lg font-bold">Guru Tahfidz</h3>
                        <p>Darvanto</p>
                    </div>
                    <div class="bg-green-200 p-4 rounded-md shadow-md text-center">
                        <h3 class="text-lg font-bold">Guru Agama</h3>
                        <p>Masvkuri, S.Pd.I</p>
                    </div>
                    <div class="bg-green-200 p-4 rounded-md shadow-md text-center">
                        <h3 class="text-lg font-bold">Guru Kesenian</h3>
                        <p>Sulasin, S.Pd</p>
                    </div>
                    <div class="bg-green-200 p-4 rounded-md shadow-md text-center">
                        <h3 class="text-lg font-bold">Guru Muatan Lokal</h3>
                        <p>Rohmad Efendi, S.Pd</p>
                    </div>
                </div>

                <!-- Pembina Eskul -->
                <div class="bg-green-200 p-4 rounded-md shadow-md mt-6 text-center w-1/2">
                    <h2 class="text-xl font-bold">Pembina Eskul</h2>
                    <p>Sri Wisati, S.Pd.I</p>
                </div>
            </div>
        </div>
    </section>
@endsection
