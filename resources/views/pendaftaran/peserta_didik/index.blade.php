@extends('layout.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Daftar Peserta Didik Saya</h1>

    @if($pendaftarans->count() > 0)
        <div class="bg-white p-6 rounded-lg shadow-md">
            <table class="min-w-full bg-white border">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border">ID</th>
                        <th class="py-2 px-4 border">Nama</th>
                        <th class="py-2 px-4 border">Jenis Kelamin</th>
                        <th class="py-2 px-4 border">Alamat</th>
                        <th class="py-2 px-4 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pendaftarans as $pendaftaran)
                        <tr>
                            <td class="py-2 px-4 border">{{ $pendaftaran->id }}</td>
                            <td class="py-2 px-4 border">{{ $pendaftaran->nama }}</td>
                            <td class="py-2 px-4 border">{{ $pendaftaran->jenis_kelamin }}</td>
                            <td class="py-2 px-4 border">{{ $pendaftaran->alamat }}</td>
                            <td class="py-2 px-4 border">
                                <a href="{{ route('peserta-didik.show', ['id' => $pendaftaran->id]) }}" class="text-blue-500 underline">Lihat Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p>Tidak ada peserta didik yang terdaftar.</p>
    @endif
</div>
@endsection
