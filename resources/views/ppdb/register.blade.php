<!-- resources/views/ppdb/register.blade.php -->
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="max-w-md w-full bg-white p-8 rounded-lg">
        <h2 class="text-2xl font-bold mb-6 text-center">Registrasi PPDB</h2>
        <form method="POST" action="{{ route('ppdb.register') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama:</label>
                <input type="text" name="name" required class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" name="email" required class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                <input type="password" name="password" required class="w-full px-3 py-2 border rounded-lg">
            </div>
           
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg">Register</button>
        </form>
    </div>
</div>
