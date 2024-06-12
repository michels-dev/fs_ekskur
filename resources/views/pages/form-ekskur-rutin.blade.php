@extends('layouts.template')
  @section('title', 'Ekskur Rutin')
  @section('content')
  @include('components.navbar')
  @include('components.footer')
    @push('after-styles')

    @endpush

    <main class="pt-10">
      <div class="mx-auto max-w-7xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
            <li class="me-2">
                <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500 font-GabaritoRegular">Form Input</button>
            </li>
            <li class="me-2">
                <button id="services-tab" data-tabs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300 font-GabaritoRegular">Table</button>
            </li>
        </ul>
        <div id="defaultTabContent">
            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                <h2 class="mb-5 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white font-GabaritoRegular">Form Input Ekskur Rutin</h2>
                <form>
                  <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                    <div class="relative z-0 w-full mb-5 group col-span-12 md:col-span-6">
                      <input type="text" name="sekolah" id="sekolah" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-GabaritoRegular" placeholder=" " required />
                      <label for="sekolah" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 font-GabaritoRegular">Sekolah</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group col-span-12 md:col-span-6">
                      <input type="text" name="periode" id="periode" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-GabaritoRegular" placeholder=" " required />
                      <label for="periode" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 font-GabaritoRegular">Periode</label>
                    </div>
                  </div>
                  <div class="grid grid-cols-1 md:grid-cols-12 gap-6 mb-5">
                    <div class="relative z-0 w-full mb-5 group col-span-12 md:col-span-6">
                      <input type="text" name="nik" id="nik" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-GabaritoRegular" placeholder=" " required />
                      <label for="nik" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 font-GabaritoRegular">Nomor ID (NIK)</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group col-span-12 md:col-span-6">
                      <input type="text" name="nama_lengkap" id="nama_lengkap" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-GabaritoRegular" placeholder=" " required />
                      <label for="nama_lengkap" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 font-GabaritoRegular">Nama Lengkap</label>
                    </div>
                  </div>
                  <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                    <div class="relative z-0 w-full mb-5 group col-span-12 md:col-span-6">
                      <input type="text" name="jenis_ekskur" id="jenis_ekskur" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-GabaritoRegular" placeholder=" " required />
                      <label for="jenis_ekskur" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 font-GabaritoRegular">Jenis Ekskur</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group col-span-12 md:col-span-6">
                      <input type="text" name="honor" id="honor" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer font-GabaritoRegular" placeholder=" " required />
                      <label for="honor" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 font-GabaritoRegular">Honor</label>
                    </div>
                  </div>
                  <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 font-GabaritoRegular">Simpan</button>
                </form>
            </div>
            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="services" role="tabpanel" aria-labelledby="services-tab">
                <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white font-GabaritoRegular">Table Ekskur Rutin</h2>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                          <tr>
                            <th scope="col" class="px-6 py-3 font-GabaritoRegular">
                                id
                            </th>
                            <th scope="col" class="px-6 py-3 font-GabaritoRegular">
                                Sekolah
                            </th>
                            <th scope="col" class="px-6 py-3 font-GabaritoRegular">
                                Periode
                            </th>
                            <th scope="col" class="px-6 py-3 font-GabaritoRegular">
                                NIK
                              </th>
                            <th scope="col" class="px-6 py-3 font-GabaritoRegular">
                                Nama Lengkap
                            </th>
                            <th scope="col" class="px-6 py-3 font-GabaritoRegular">
                                Jenis Ekskur
                            </th>
                            <th scope="col" class="px-6 py-3 font-GabaritoRegular">
                                Honor
                            </th>
                            <th scope="col" class="px-6 py-3 font-GabaritoRegular">
                                  Action
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white font-GabaritoRegular">
                                  Apple MacBook Pro 17"
                              </th>
                              <td class="px-6 py-4 font-GabaritoRegular">
                                  Silver
                              </td>
                              <td class="px-6 py-4 font-GabaritoRegular">
                                  Laptop
                              </td>
                              <td class="px-6 py-4 font-GabaritoRegular">
                                  $2999
                              </td>
                              <td class="px-6 py-4 font-GabaritoRegular">
                                $2999
                            </td>
                            <td class="px-6 py-4 font-GabaritoRegular">
                                $2999
                            </td>
                            <td class="px-6 py-4 font-GabaritoRegular">
                                $2999
                            </td>
                              <td class="px-6 py-4 font-GabaritoRegular">
                                  <a href="#" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Edit</a>
                                  <a href="#" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Delete</a>
                              </td>
                          </tr>
                      </tbody>
                  </table>
                </div>
            </div>
        </div>
      </div>
    </main>

  @endsection

  @push('after-scripts')

  @endpush