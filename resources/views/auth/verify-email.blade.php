@extends('layout.app')

@section('title', 'Verify Email')

@section('content')
    <div class="w-full max-w-md p-8 space-y-8 bg-white shadow-lg rounded-lg">
        <div class="text-center">
            <h2 class="text-4xl font-extrabold text-gray-900">Verify Your Email Address</h2>
            <p class="mt-2 text-sm text-gray-600">Before proceeding, please check your email for a verification link. If you did not receive the email, click the button below to request another.</p>
        </div>

        @if (session('resent'))
            <div class="p-4 mb-4 text-green-700 bg-green-100 rounded">
                A fresh verification link has been sent to your email address.
            </div>
        @endif

        <form class="mt-6" action="{{ route('verification.resend') }}" method="POST">
            @csrf
            <!-- Tombol untuk mengirim ulang email verifikasi -->
            <button type="submit"
                class="w-full px-6 py-3 mt-6 text-lg font-semibold text-white bg-lime-500 rounded-lg hover:bg-lime-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lime-500">
                Resend Verification Email
            </button>
        </form>

        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">
                Already verified your email?
                <a href="/custom-login" class="font-medium text-blue-600 hover:underline">Login here</a>
            </p>
        </div>
    </div>
@endsection
