@extends('layouts.template')
  @section('title', 'Ekskur Rutin')
  @section('content')
  @include('components.navbar')
  @include('components.sidebar')
  @include('components.footer')
    @push('after-styles')

    @endpush
    <section class="bg-gray-100 dark:bg-gray-900 pt-32 md:pt-32">
      <div class="mx-auto max-w-7xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
            <li class="me-2">
                <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500 font-GabaritoRegular">Table</button>
            </li>
            <li class="me-2">
                <button id="services-tab" data-tabs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300 font-GabaritoRegular">Form input</button>
            </li>
        </ul>
        <div id="defaultTabContent">
          <div class="hidden p-4 bg-gray-100 border-spacing-3 rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
            <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white font-GabaritoRegular">Table Ekskur Rutin</h2>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
              <table id="tableRutin" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($rutins as $data)
                        <tr class="border-b dark:border-gray-700 font-GabaritoRegular">
                            <th class="border-b dark:border-gray-700 px-6 py-4">
                                {{ $no++ }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $data->sekolah }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->periode }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->nik }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->nama_lengkap }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->jenis_ekskur }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->honor }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('pages.show-ekskur-rutin', ['id' => $data->id]) }}" class="inline-block text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-1.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                        <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                        <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                    </svg>
                                </a>
                                <a href="#" onclick="deleteEkskurRutin(event, {{ $data->id }}, '{{ $data->nama_lengkap }}')" class="inline-block text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-1.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                        <path d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z" />
                                        <path fill-rule="evenodd" d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087Zm6.133 2.845a.75.75 0 0 1 1.06 0l1.72 1.72 1.72-1.72a.75.75 0 1 1 1.06 1.06l-1.72 1.72 1.72 1.72a.75.75 0 1 1-1.06 1.06L12 15.685l-1.72 1.72a.75.75 0 1 1-1.06-1.06l1.72-1.72-1.72-1.72a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
            <div class="hidden p-4 bg-gray-100 rounded-lg md:p-8 dark:bg-gray-800 font-GabaritoRegular" id="services" role="tabpanel" aria-labelledby="services-tab">
                <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white font-GabaritoRegular">Form Input Ekskur Rutin</h2>
                <form action="{{ route('pages.store-ekskur-rutin') }}" method="POST">
                  @csrf
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
        </div>
      </div>
    </section>

  @endsection

  @push('after-scripts')
  <script>
    $(document).ready(function() {
      var table = $('#tableRutin').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true,
          "responsive": true,
          "lengthMenu": [5, 15, 25, 50, 100],
          "language": {
            "lengthMenu": "Tampilkan _MENU_ data",
            "info": "Menampilkan _START_ hingga _END_ dari _TOTAL_ data",
            "infoEmpty": "Menampilkan 0 hingga 0 dari 0 data",
            "infoFiltered": "(disaring dari total _MAX_ data)",
            "search": "Cari:",
            "paginate": {
              "previous": "Sebelumnya",
              "next": "Selanjutnya"
            }
          }
        });
      });
  </script>

  <script>
    function deleteEkskurRutin(event, id, nama) {
      event.preventDefault();
      Swal.fire({
          title: "Hapus Data?",
          text: "Apakah Anda yakin ingin menghapus data dengan Nama " + nama + "?",
          icon: "error",
          showCancelButton: true,
          confirmButtonText: "Ya, Hapus",
          confirmButtonColor: '#FF0000',
          cancelButtonText: "Batal",
      }).then((result) => {
          if (result.isConfirmed) {
              window.location.href = "{{ url('pages/destroy-ekskur-rutin') }}/" + id;
              Swal.fire("Terhapus!", "Data berhasil dihapus.", "success");
          }
      });
    }
  </script>
  @endpush