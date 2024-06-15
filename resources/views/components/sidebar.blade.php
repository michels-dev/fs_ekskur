<aside id="logo-sidebar" class="fixed top-10 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
  <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
     <ul class="space-y-2 font-medium">
        <li>
           <a href="{{ route('pages.landing-page-ekskur') }}" class="sidebar-item flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-300 dark:hover:bg-gray-700 group">
              <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                 <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                 <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
              </svg>
              <span class="ms-3 font-GabaritoRegular">Dashboard</span>
           </a>
        </li>
        <li>
           <a href="{{ route('pages.form-ekskur-rutin') }}" class="sidebar-item flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-300 dark:hover:bg-gray-700 group">
            <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
               <path fill-rule="evenodd" d="M6 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3H6Zm1.5 1.5a.75.75 0 0 0-.75.75V16.5a.75.75 0 0 0 1.085.67L12 15.089l4.165 2.083a.75.75 0 0 0 1.085-.671V5.25a.75.75 0 0 0-.75-.75h-9Z" clip-rule="evenodd" />
             </svg>
              <span class="flex-1 ms-3 whitespace-nowrap font-GabaritoRegular">Ekskur Rutin</span>
           </a>
        </li>
        <li>
           <a href="{{ route('pages.form-ekskur-temporer') }}" class="sidebar-item flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-300 dark:hover:bg-gray-700 group">
            <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
               <path fill-rule="evenodd" d="M6 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3H6Zm1.5 1.5a.75.75 0 0 0-.75.75V16.5a.75.75 0 0 0 1.085.67L12 15.089l4.165 2.083a.75.75 0 0 0 1.085-.671V5.25a.75.75 0 0 0-.75-.75h-9Z" clip-rule="evenodd" />
             </svg>
              <span class="flex-1 ms-3 whitespace-nowrap font-GabaritoRegular">Ekskur Temporer</span>
           </a>
        </li>
        {{-- <li>
           <a href="" class="sidebar-item flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-500 dark:hover:bg-gray-700 group">
              <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
              </svg>
              <span class="flex-1 ms-3 whitespace-nowrap">Log out</span>
           </a>
        </li> --}}
     </ul>
  </div>
</aside>

@push('after-scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebarItems = document.querySelectorAll('.sidebar-item');

        // Fungsi untuk mengatur item aktif berdasarkan URL saat ini
        function setActiveItem() {
            const currentUrl = window.location.pathname;

            sidebarItems.forEach(item => {
                const itemHref = new URL(item.getAttribute('href'), window.location.origin).pathname;

                // Periksa apakah URL saat ini sesuai dengan href item secara tepat
                if (currentUrl === itemHref) {
                    item.classList.add('bg-blue-300', 'dark:bg-gray-700');
                } else {
                    item.classList.remove('bg-blue-300', 'dark:bg-gray-700');
                }
            });
        }

        // Atur item aktif saat halaman dimuat
        setActiveItem();

        sidebarItems.forEach(item => {
            item.addEventListener('click', function(event) {
                // Hapus kelas aktif dari semua item
                sidebarItems.forEach(i => i.classList.remove('bg-blue-300', 'dark:bg-gray-700'));

                // Tambahkan kelas aktif ke item yang diklik
                this.classList.add('bg-blue-300', 'dark:bg-gray-700');
            });
        });
    });
</script>
@endpush

