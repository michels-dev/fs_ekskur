@extends('layouts.template')

@section('title', 'Dashboard Admin')

@section('content')
@include('components.navbar')
@include('components.sidebar')
@include('components.footer')

<section class="bg-gray-100 dark:bg-gray-900 pt-20 md:pt-10">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
            <span href="#" class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                <svg class="w-2.5 h-2.5 me-1.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M2.273 5.625A4.483 4.483 0 0 1 5.25 4.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0 0 18.75 3H5.25a3 3 0 0 0-2.977 2.625ZM2.273 8.625A4.483 4.483 0 0 1 5.25 7.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0 0 18.75 6H5.25a3 3 0 0 0-2.977 2.625ZM5.25 9a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h13.5a3 3 0 0 0 3-3v-6a3 3 0 0 0-3-3H15a.75.75 0 0 0-.75.75 2.25 2.25 0 0 1-4.5 0A.75.75 0 0 0 9 9H5.25Z" />
                  </svg>
                Payroll
            </span>
            <h1 class="text-gray-900 dark:text-white text-2xl md:text-2xl font-extrabold mb-2 font-GabaritoRegular">Welcome back!</h1>
            <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6 font-GabaritoRegular">Sistem Input Ekstakulikuler - BPK PENABUR Jakarta.</p>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <h2 class="text-gray-900 dark:text-white text-xl font-extrabold mb-2 font-GabaritoRegular">Ekskur Rutin</h2>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4 font-GabaritoRegular">Table data, tambah, edit, dan hapus ekskur rutin yang tersedia.</p>
                <a href="{{ route('pages.form-ekskur-rutin') }}" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center font-GabaritoRegular">Read more
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
                </a>
                <dotlottie-player class="float-right mr-4 mb-4" src="https://lottie.host/4686cc2f-66a9-4829-acd7-dde11b163495/E2XGpEXzlE.json" background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay></dotlottie-player>
            </div>
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <h2 class="text-gray-900 dark:text-white text-xl font-extrabold mb-2 font-GabaritoRegular">Ekskur Temporer</h2>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4 font-GabaritoRegular">Table data, tambah, edit, dan hapus ekskur temporer yang tersedia.</p>
                <a href="{{ route('pages.form-ekskur-temporer') }}" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center font-GabaritoRegular">Read more
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                <dotlottie-player class="float-right mr-4 mb-4" src="https://lottie.host/482b02ce-4480-4ec2-97fe-fe0bfeee1aa7/EO7vLpcjHY.json" background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay></dotlottie-player>
            </div>
        </div>
    </div>
</section>

@endsection

@push('after-scripts')
@endpush
