@extends('layouts.template')
  @section('title', 'Update Ekskur Rutin')
  @section('content')
  @include('components.navbar')
  @include('components.sidebar')
  @include('components.footer')
    @push('after-styles')

    @endpush

  <section class="bg-gray-100 dark:bg-gray-900 pt-20 md:pt-20 font-GabaritoRegular">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
      <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
          <h2 class="text-gray-900 dark:text-white text-2xl font-extrabold mb-8">Update Ekskur Rutin</h2>
          <form action="{{ route('pages.update-ekskur-temporer', ['id' => $data->id]) }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
              <div class="relative z-0 w-full mb-5 group col-span-12 md:col-span-6">
                <input type="text" name="sekolah" id="sekolah" value="{{ $data->sekolah }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-GabaritoRegular" placeholder=" " required />
                <label for="sekolah" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 font-GabaritoRegular">Sekolah</label>
              </div>
              <div class="relative z-0 w-full mb-5 group col-span-12 md:col-span-6">
                <input type="text" name="periode" id="periode" value="{{ $data->periode }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-GabaritoRegular" placeholder=" " required />
                <label for="periode" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 font-GabaritoRegular">Periode</label>
              </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 mb-5">
              <div class="relative z-0 w-full mb-5 group col-span-12 md:col-span-6">
                <input type="text" name="npwp" id="npwp" value="{{ $data->npwp }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-GabaritoRegular" placeholder=" " required />
                <label for="npwp" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 font-GabaritoRegular">NPWP</label>
              </div>
              <div class="relative z-0 w-full mb-5 group col-span-12 md:col-span-6">
                <input type="text" name="nik" id="nik" value="{{ $data->nik }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-GabaritoRegular" placeholder=" " required />
                <label for="nik" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 font-GabaritoRegular">Nomor ID (NIK)</label>
              </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
              <div class="relative z-0 w-full mb-5 group col-span-12 md:col-span-4">
                <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ $data->nama_lengkap }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-GabaritoRegular" placeholder=" " required />
                <label for="nama_lengkap" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 font-GabaritoRegular">Nama Lengkap</label>
              </div>
              <div class="relative z-0 w-full mb-5 group col-span-12 md:col-span-4">
                <input type="text" name="jenis_ekskur" id="jenis_ekskur" value="{{ $data->jenis_ekskur }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-GabaritoRegular" placeholder=" " required />
                <label for="jenis_ekskur" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 font-GabaritoRegular">Jenis Ekskur</label>
              </div>
              <div class="relative z-0 w-full mb-5 group col-span-12 md:col-span-4">
                <input type="text" name="honor" id="honor" value="{{ $data->honor }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-GabaritoRegular" placeholder=" " required />
                <label for="honor" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 font-GabaritoRegular">Honor</label>
              </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
              <div class="relative z-0 w-full mb-5 group col-span-12 md:col-span-4">
                <input type="text" name="nama_bank" id="nama_bank" value="{{ $data->nama_bank }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-GabaritoRegular" placeholder=" " required />
                <label for="nama_bank" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 font-GabaritoRegular">Nama Bank</label>
              </div>
              <div class="relative z-0 w-full mb-5 group col-span-12 md:col-span-4">
                <input type="text" name="norek" id="norek" value="{{ $data->norek }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-GabaritoRegular" placeholder=" " required />
                <label for="norek" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 font-GabaritoRegular">Nomor Rekening</label>
              </div>
              <div class="relative z-0 w-full mb-5 group col-span-12 md:col-span-4">
                  <input type="text" name="atas_nama" id="atas_nama" value="{{ $data->atas_nama }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-GabaritoRegular" placeholder=" " required />
                  <label for="atas_nama" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 font-GabaritoRegular">Atas Nama</label>
                </div>
            </div>
            <a href="{{ route('pages.form-ekskur-temporer') }}" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-500 dark:focus:ring-green-800 font-GabaritoRegular">Kembali</a>
            <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 font-GabaritoRegular">Update</button>
          </form>
        </div>
      </div>
  </section>

  @endsection

  @push('after-scripts')

  @endpush