@extends('layout.app')

@section('content')
<div class="container mx-auto max-w-3xl py-8">
    <h1 class="text-3xl font-bold mb-6 text-center">Form Pendaftaran Peserta Didik</h1>
    <div class="relative shadow-md rounded-lg bg-white p-6">
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <strong>{{ $errors->first() }}</strong>
            </div>
        @endif

        <form id="multiStepForm" action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
            <input type="hidden" name="no_pendaftaran" value="{{ $noPendaftaran }}">

            <!-- Step Indicators -->
            <div class="flex justify-between mb-8">
                <div class="step-indicator" data-step="1">1. Data Siswa</div>
                <div class="step-indicator" data-step="2">2. Data Ayah</div>
                <div class="step-indicator" data-step="3">3. Data Ibu</div>
                <div class="step-indicator" data-step="4">4. Upload Berkas</div>
            </div>

            <!-- Step 1: Data Siswa -->
            <div class="form-step transition-all ease-in-out duration-500" id="step-1">
                <div>
                    <label for="user_id" class="block text-gray-700 font-medium">User ID:</label>
                    <input type="text" name="userId" id="user_id" value="{{ $userId }}" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" readonly>
                </div>
                <div>
                    <label for="no_pendaftaran" class="block text-gray-700 font-medium">No Pendaftaran:</label>
                    <input type="text" name="no_pendaftaran" id="no_pendaftaran" value="{{ $noPendaftaran }}" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" readonly>
                </div>
                <h2 class="text-2xl font-semibold mb-4">Data Siswa</h2>
                <div class="grid gap-4">
                    <div>
                        <label for="nama" class="block text-gray-700 font-medium">Nama:</label>
                        <input type="text" name="nama" id="nama" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="jenis_kelamin" class="block text-gray-700 font-medium">Jenis Kelamin:</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                    <div>
                        <label for="tempat_tanggal_lahir" class="block text-gray-700 font-medium">Tempat & Tanggal Lahir:</label>
                        <input type="date" name="tempat_tanggal_lahir" id="tempat_tanggal_lahir" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="alamat" class="block text-gray-700 font-medium">Alamat:</label>
                        <input type="text" name="alamat" id="alamat" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="agama" class="block text-gray-700 font-medium">Agama:</label>
                        <input type="text" name="agama" id="agama" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="anak_ke" class="block text-gray-700 font-medium">Anak Ke:</label>
                        <input type="text" name="anak_ke" id="anak_ke" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="jumlah_saudara" class="block text-gray-700 font-medium">Jumlah Saudara:</label>
                        <input type="number" name="jumlah_saudara" id="jumlah_saudara" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="status_anak" class="block text-gray-700 font-medium">Status Anak:</label>
                        <input type="text" name="status_anak" id="status_anak" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="bahasa_sehari_hari" class="block text-gray-700 font-medium">Bahasa Sehari-hari:</label>
                        <input type="text" name="bahasa_sehari_hari" id="bahasa_sehari_hari" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="golongan_darah" class="block text-gray-700 font-medium">Golongan Darah:</label>
                        <input type="text" name="golongan_darah" id="golongan_darah" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="kewarganegaraan" class="block text-gray-700 font-medium">Kewarganegaraan:</label>
                        <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                </div>
                <div class="mt-6 flex justify-end">
                    <button type="button" onclick="nextStep(2)" class="px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">Selanjutnya</button>
                </div>
            </div>

            <!-- Step 2: Data Ayah -->
            <div class="form-step hidden transition-all ease-in-out duration-500" id="step-2">
                <h2 class="text-2xl font-semibold mb-4">Data Ayah</h2>
                <div class="grid gap-4">
                    <div>
                        <label for="nama_ayah" class="block text-gray-700 font-medium">Nama Ayah:</label>
                        <input type="text" name="nama_ayah" id="nama_ayah" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="tanggal_lahir_ayah" class="block text-gray-700 font-medium">Tanggal Lahir Ayah:</label>
                        <input type="date" name="tanggal_lahir_ayah" id="tanggal_lahir_ayah" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="agama_ayah" class="block text-gray-700 font-medium">Agama Ayah:</label>
                        <input type="text" name="agama_ayah" id="agama_ayah" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="pendidikan_ayah" class="block text-gray-700 font-medium">Pendidikan Ayah:</label>
                        <input type="text" name="pendidikan_ayah" id="pendidikan_ayah" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="pekerjaan_ayah" class="block text-gray-700 font-medium">Pekerjaan Ayah:</label>
                        <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="kewarganegaraan_ayah" class="block text-gray-700 font-medium">Kewarganegaraan Ayah:</label>
                        <input type="text" name="kewarganegaraan_ayah" id="kewarganegaraan_ayah" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="alamat_ayah" class="block text-gray-700 font-medium">Alamat Ayah:</label>
                        <input type="text" name="alamat_ayah" id="alamat_ayah" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="no_telepon_ayah" class="block text-gray-700 font-medium">No. Telepon Ayah:</label>
                        <input type="text" name="no_telepon_ayah" id="no_telepon_ayah" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                </div>
                <div class="mt-6 flex justify-between">
                    <button type="button" onclick="prevStep(1)" class="px-6 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 focus:outline-none focus:ring focus:ring-gray-300">Kembali</button>
                    <button type="button" onclick="nextStep(3)" class="px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">Selanjutnya</button>
                </div>
            </div>

            <!-- Step 3: Data Ibu -->
            <div class="form-step hidden transition-all ease-in-out duration-500" id="step-3">
                <h2 class="text-2xl font-semibold mb-4">Data Ibu</h2>
                <div class="grid gap-4">
                    <div>
                        <label for="nama_ibu" class="block text-gray-700 font-medium">Nama Ibu:</label>
                        <input type="text" name="nama_ibu" id="nama_ibu" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="tanggal_lahir_ibu" class="block text-gray-700 font-medium">Tanggal Lahir Ibu:</label>
                        <input type="date" name="tanggal_lahir_ibu" id="tanggal_lahir_ibu" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="agama_ibu" class="block text-gray-700 font-medium">Agama Ibu:</label>
                        <input type="text" name="agama_ibu" id="agama_ibu" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="pendidikan_ibu" class="block text-gray-700 font-medium">Pendidikan Ibu:</label>
                        <input type="text" name="pendidikan_ibu" id="pendidikan_ibu" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="pekerjaan_ibu" class="block text-gray-700 font-medium">Pekerjaan Ibu:</label>
                        <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="kewarganegaraan_ibu" class="block text-gray-700 font-medium">Kewarganegaraan Ibu:</label>
                        <input type="text" name="kewarganegaraan_ibu" id="kewarganegaraan_ibu" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="alamat_ibu" class="block text-gray-700 font-medium">Alamat Ibu:</label>
                        <input type="text" name="alamat_ibu" id="alamat_ibu" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="no_telepon_ibu" class="block text-gray-700 font-medium">No. Telepon Ibu:</label>
                        <input type="text" name="no_telepon_ibu" id="no_telepon_ibu" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                </div>
                <div class="mt-6 flex justify-between">
                    <button type="button" onclick="prevStep(2)" class="px-6 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 focus:outline-none focus:ring focus:ring-gray-300">Kembali</button>
                    <button type="button" onclick="nextStep(4)" class="px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">Selanjutnya</button>
                </div>
            </div>

            <!-- Step 4: Upload File -->
            <div class="form-step hidden transition-all ease-in-out duration-500" id="step-4">
                <h2 class="text-2xl font-semibold mb-4">Upload Berkas</h2>
                <div class="grid gap-4">
                    <div>
                        <label for="foto_ijazah" class="block text-gray-700 font-medium">Foto Ijazah (Opsional):</label>
                        <input type="file" name="foto_ijazah" id="foto_ijazah" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="foto_kk" class="block text-gray-700 font-medium">Foto Kartu Keluarga (Opsional):</label>
                        <input type="file" name="foto_kk" id="foto_kk" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="foto_ktp" class="block text-gray-700 font-medium">Foto KTP (Opsional):</label>
                        <input type="file" name="foto_ktp" id="foto_ktp" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="foto_piagam" class="block text-gray-700 font-medium">Foto Piagam (Opsional):</label>
                        <input type="file" name="foto_piagam" id="foto_piagam" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
                <div class="mt-6 flex justify-between">
                    <button type="button" onclick="prevStep(3)" class="px-6 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 focus:outline-none focus:ring focus:ring-gray-300">Kembali</button>
                    <button type="submit" class="px-6 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:ring focus:ring-green-300">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function nextStep(step) {
        document.querySelectorAll('.form-step').forEach((step) => step.classList.add('hidden'));
        document.getElementById('step-' + step).classList.remove('hidden');
        updateStepIndicator(step);
    }

    function prevStep(step) {
        document.querySelectorAll('.form-step').forEach((step) => step.classList.add('hidden'));
        document.getElementById('step-' + step).classList.remove('hidden');
        updateStepIndicator(step);
    }

    function updateStepIndicator(step) {
        document.querySelectorAll('.step-indicator').forEach((indicator) => {
            indicator.classList.remove('text-blue-600', 'font-bold');
        });
        document.querySelector(`.step-indicator[data-step="${step}"]`).classList.add('text-blue-600', 'font-bold');
    }
</script>
@endsection
