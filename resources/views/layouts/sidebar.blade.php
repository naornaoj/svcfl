

<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="block inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <a href="https://flowbite.com" class="flex ms-2 md:me-24">
          <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
          <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Flowbite</span>
        </a>
      </div>
      <div class="flex items-center">
          <div class="flex items-center ms-3">
            <button id="theme-toggle" type="button" class="mr-2 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
               <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
               <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            </button>
            <div>
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
              </button>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
              <div class="px-4 py-3" role="none">
                <p class="text-sm text-gray-900 dark:text-white" role="none">
                {{ Auth::user()->name }}
                </p>
                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                  neil.sims@flowbite.com
                </p>
              </div>
              <ul class="py-1" role="none">
                <li>
                  <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">{{ __('Profile') }}</a>
                </li>
                <li>
                  <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" 
                           role="menuitem"
                           onclick="event.preventDefault(); this.closest('form').submit();">
                           {{ __('Log Out') }}
                        </x-dropdown-link>
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="{{ url('/dashboard') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                  <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                  <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
               </svg>
               <span class="ms-3">Dashboard</span>
            </a>
         </li> 
         <li>
            <a href="{{ url('/users') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                  <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
            </a>
         </li>
         <li>
            <a href="{{ url('/diagnostics') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg width="25px" height="25px" viewBox="0 0 1.5 1.5" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#4c5665;}.cls-2{fill:#bec3c7;}.cls-3{fill:#d0d7df;}.cls-4{fill:#a4b0c0;}.cls-5{fill:#768ba0;}</style></defs><title/><g data-name="Science" id="Science-2"><path class="cls-1" d="M0.594 0.375A0.625 0.625 0 0 0 0.313 0.439v0.106A0.55 0.55 0 0 1 0.594 0.469a0.563 0.563 0 0 1 0.419 0.938h0.119a0.625 0.625 0 0 0 0.071 -0.134 0.625 0.625 0 0 0 0.046 -0.241A0.659 0.659 0 0 0 0.594 0.375"/><path class="cls-1" height="3" rx="1" ry="1" width="34" x="" y="45" d="M0.031 1.406h1a0.037 0.037 0 0 1 0.031 0.031v0.031a0.037 0.037 0 0 1 -0.031 0.031h-1A0.037 0.037 0 0 1 0 1.469V1.438a0.037 0.037 0 0 1 0.031 -0.031"/><path class="cls-2" height="23" rx="2" ry="2" width="9" x="10" y="6" d="M0.375 0.188h0.156a0.063 0.063 0 0 1 0.063 0.063v0.594a0.063 0.063 0 0 1 -0.063 0.063H0.375a0.063 0.063 0 0 1 -0.063 -0.063V0.25A0.063 0.063 0 0 1 0.375 0.188"/>
                  <path class="cls-3" height="23" rx="2" ry="2" width="9" x="10" y="6" d="M0.375 0.188h0.156a0.063 0.063 0 0 1 0.063 0.063v0.594a0.063 0.063 0 0 1 -0.063 0.063H0.375a0.063 0.063 0 0 1 -0.063 -0.063V0.25A0.063 0.063 0 0 1 0.375 0.188"/><path class="cls-4" d="M0.594 0.25v0.594a0.063 0.063 0 0 1 -0.063 0.063H0.375a0.063 0.063 0 0 1 -0.063 -0.063h0.125A0.063 0.063 0 0 0 0.5 0.781V0.188h0.031a0.063 0.063 0 0 1 0.063 0.063"/><path class="cls-4" height="4" width="3" x="14" y="2" d="M0.438 0.063h0.094v0.125H0.438z"/>
                  <path class="cls-3" points="12 2 14 2 14 6 12 6" d="M0.375 0.063h0.063v0.125H0.375"/>
                  <path class="cls-5" height="2" rx="1" ry="1" width="9" x="10" d="M0.344 0H0.563a0.037 0.037 0 0 1 0.031 0.031A0.037 0.037 0 0 1 0.563 0.063H0.344A0.037 0.037 0 0 1 0.313 0.031 0.037 0.037 0 0 1 0.344 0"/><path class="cls-2" height="2" rx="1" ry="1" width="15" x="7" y="38" d="M0.25 1.188h0.406A0.037 0.037 0 0 1 0.688 1.219 0.037 0.037 0 0 1 0.656 1.25H0.25A0.037 0.037 0 0 1 0.219 1.219 0.037 0.037 0 0 1 0.25 1.188"/><path class="cls-3" height="2" rx="1" ry="1" width="15" x="7" y="38" d="M0.25 1.188h0.406A0.037 0.037 0 0 1 0.688 1.219 0.037 0.037 0 0 1 0.656 1.25H0.25A0.037 0.037 0 0 1 0.219 1.219 0.037 0.037 0 0 1 0.25 1.188"/><path class="cls-5" height="5" width="3" x="13" y="40" d="M0.406 1.25H0.5v0.156H0.406z"/><path class="cls-1" d="M0.375 0.906h0.156V0.938A0.037 0.037 0 0 1 0.5 0.969H0.406A0.037 0.037 0 0 1 0.375 0.938z"/></g>
               </svg>
               <span class="ms-3">Express Diagnostics</span>
            </a>
         </li> 
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                  <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
            </a>
         </li>
      </ul>
   </div>
</aside>

