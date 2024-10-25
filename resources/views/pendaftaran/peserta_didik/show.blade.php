@extends('layout.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Detail Peserta Didik</h1>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-3">{{ $pendaftaran->nama }}</h2>
        <p><strong>No Pendaftaran:</strong> {{ $pendaftaran->no_pendaftaran }}</p>
        <p><strong>Jenis Kelamin:</strong> {{ $pendaftaran->jenis_kelamin }}</p>
        <p><strong>Tempat & Tanggal Lahir:</strong> {{ $pendaftaran->tempat_tanggal_lahir }}</p>
        <p><strong>Alamat:</strong> {{ $pendaftaran->alamat }}</p>
        <p><strong>Agama:</strong> {{ $pendaftaran->agama }}</p>
        <p><strong>Anak Ke:</strong> {{ $pendaftaran->anak_ke }}</p>
        <p><strong>Jumlah Saudara:</strong> {{ $pendaftaran->jumlah_saudara }}</p>
        <p><strong>Status Anak:</strong> {{ $pendaftaran->status_anak }}</p>
        <p><strong>Bahasa Sehari-hari:</strong> {{ $pendaftaran->bahasa_sehari_hari }}</p>
        <p><strong>Golongan Darah:</strong> {{ $pendaftaran->golongan_darah }}</p>
        <p><strong>Kewarganegaraan:</strong> {{ $pendaftaran->kewarganegaraan }}</p>

        <h3 class="mt-6 text-lg font-semibold">Informasi Ayah</h3>
        <p><strong>Nama Ayah:</strong> {{ $pendaftaran->nama_ayah }}</p>
        <p><strong>Tanggal Lahir Ayah:</strong> {{ $pendaftaran->tanggal_lahir_ayah }}</p>
        <p><strong>Agama Ayah:</strong> {{ $pendaftaran->agama_ayah }}</p>
        <p><strong>Pendidikan Ayah:</strong> {{ $pendaftaran->pendidikan_ayah }}</p>
        <p><strong>Pekerjaan Ayah:</strong> {{ $pendaftaran->pekerjaan_ayah }}</p>
        <p><strong>Kewarganegaraan Ayah:</strong> {{ $pendaftaran->kewarganegaraan_ayah }}</p>
        <p><strong>Alamat Ayah:</strong> {{ $pendaftaran->alamat_ayah }}</p>
        <p><strong>No Telepon Ayah:</strong> {{ $pendaftaran->no_telepon_ayah }}</p>

        <h3 class="mt-6 text-lg font-semibold">Informasi Ibu</h3>
        <p><strong>Nama Ibu:</strong> {{ $pendaftaran->nama_ibu }}</p>
        <p><strong>Tanggal Lahir Ibu:</strong> {{ $pendaftaran->tanggal_lahir_ibu }}</p>
        <p><strong>Agama Ibu:</strong> {{ $pendaftaran->agama_ibu }}</p>
        <p><strong>Pendidikan Ibu:</strong> {{ $pendaftaran->pendidikan_ibu }}</p>
        <p><strong>Pekerjaan Ibu:</strong> {{ $pendaftaran->pekerjaan_ibu }}</p>
        <p><strong>Kewarganegaraan Ibu:</strong> {{ $pendaftaran->kewarganegaraan_ibu }}</p>
        <p><strong>Alamat Ibu:</strong> {{ $pendaftaran->alamat_ibu }}</p>
        <p><strong>No Telepon Ibu:</strong> {{ $pendaftaran->no_telepon_ibu }}</p>

        <h3 class="mt-6 text-lg font-semibold">Dokumen Pendukung</h3>
        <p><strong>Foto Ijazah:</strong> 
            @if($pendaftaran->foto_ijazah)
                <a href="{{ asset('storage/' . $pendaftaran->foto_ijazah) }}" target="_blank" class="text-blue-500 underline">Lihat Dokumen</a>
            @else
                Tidak ada
            @endif
        </p>
        <p><strong>Foto Kartu Keluarga:</strong> 
            @if($pendaftaran->foto_kk)
                <a href="{{ asset('storage/' . $pendaftaran->foto_kk) }}" target="_blank" class="text-blue-500 underline">Lihat Dokumen</a>
            @else
                Tidak ada
            @endif
        </p>
        <p><strong>Foto KTP:</strong> 
            @if($pendaftaran->foto_ktp)
                <a href="{{ asset('storage/' . $pendaftaran->foto_ktp) }}" target="_blank" class="text-blue-500 underline">Lihat Dokumen</a>
            @else
                Tidak ada
            @endif
        </p>
        <p><strong>Foto Piagam:</strong> 
            @if($pendaftaran->foto_piagam)
                <a href="{{ asset('storage/' . $pendaftaran->foto_piagam) }}" target="_blank" class="text-blue-500 underline">Lihat Dokumen</a>
            @else
                Tidak ada
            @endif
        </p>
    </div>

    <a href="{{ route('pendaftaran.index') }}" class="inline-block mt-4 px-4 py-2 bg-blue-500 text-white rounded-md">Kembali ke Daftar</a>
</div>
@endsection
