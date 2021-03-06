@extends('components.main')
@section('container')
<!-- component -->
<div class="flex flex-row min-h-screen bg-gray-100 text-gray-800">
    <aside
      class="sidebar w-64 md:shadow transform -translate-x-full md:translate-x-0 transition-transform duration-150 ease-in bg-white"
    >
      <div class="sidebar-header flex items-center justify-center py-4">
        <div class="inline-flex">
          <a href="#" class="inline-flex flex-row items-center">
            <img class="w-32" src="{{ asset('images/logo1.png') }}">
          </a>
        </div>
      </div>
      <div class="sidebar-content px-4 py-6">
        <ul class="flex flex-col w-full">
          <li class="my-px">
            <a
              href="{{ url('/admin/home') }}"
              class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-700 bg-gray-100"
            >
              <span class="flex items-center justify-center text-lg text-gray-700">
                <svg
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  class="h-6 w-6"
                >
                  <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                  />
                </svg>
              </span>
              <span class="ml-3">Dashboard</span>
            </a>
          </li>
          <li class="my-px">
            <a
              href="{{ url('/admin/client') }}"
              class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-700 hover:bg-gray-100 hover:text-gray-700"
            >
              <span class="flex items-center justify-center text-lg text-gray-700">
                <svg
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  class="h-6 w-6"
                >
                  <path
                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                  />
                </svg>
              </span>
              <span class="ml-3">Data Nasabah</span>
            </a>
          </li>
          <li class="my-px">
            <a
              href="{{ url('/admin/money') }}"
              class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-700 hover:bg-gray-100 hover:text-gray-700"
            >
              <span class="flex items-center justify-center text-lg text-gray-700">
                <svg
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                stroke="currentColor"
                class="h-6 w-6"
              >
                <path
                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                />
              </svg>
              </span>
              <span class="ml-3">Debit / Kredit</span>
            </a>
          </li>
          <li class="my-px">
            <span class="flex font-medium text-sm text-gray-700 px-4 my-4 uppercase">Account</span>
          </li>
          <li class="my-px">
            <a
              href="{{ url('/admin/account') }}"
              class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-700 hover:bg-gray-100 hover:text-gray-700"
            >
              <span class="flex items-center justify-center text-lg text-gray-700">
                <svg
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  class="h-6 w-6"
                >
                  <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
              </span>
              <span class="ml-3">Profile</span>
            </a>
          </li>
          <li class="my-px">
            <a
              href="{{ url('/admin/settings') }}"
              class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-700 hover:bg-gray-100 hover:text-gray-700"
            >
              <span class="flex items-center justify-center text-lg text-gray-700">
                <svg
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  class="h-6 w-6"
                >
                  <path
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                  />
                  <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </span>
              <span class="ml-3">Settings</span>
            </a>
          </li>
          <li class="my-px">
            <a
              {{-- href="{{ url('/logout') }}" --}}
              onclick="openModal('modal')"
              class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-700 hover:bg-gray-100 hover:text-gray-700 cursor-pointer"
            >
              <span class="flex items-center justify-center text-lg text-red-400">
                <svg
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  class="h-6 w-6"
                >
                  <path
                    d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"
                  />
                </svg>
              </span>
              <span class="ml-3">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <main class="main flex flex-col flex-grow -ml-64 md:ml-0 transition-all duration-150 ease-in">
      <header class="header bg-white shadow py-4 px-4">
        <div class="header-content flex items-center flex-row">
          <form action="#">
            <div class="hidden md:flex relative">
              <div
                class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-700"
              >
                <svg
                  class="h-6 w-6"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </div>

              <input
                id="search"
                type="text"
                name="search"
                class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-300 w-full h-10 focus:outline-none focus:border-indigo-400"
                placeholder="Search..."
              />
            </div>
            <div class="flex md:hidden">
            </div>
          </form>
          <div class="flex ml-auto">
            <a href class="flex flex-row items-center">
              <img
                src="https://pbs.twimg.com/profile_images/378800000298815220/b567757616f720812125bfbac395ff54_normal.png"
                alt
                class="h-10 w-10 bg-gray-200 border rounded-full"
              />
              <span class="flex flex-col ml-2">
                <span class="truncate w-20 font-semibold tracking-wide leading-none">{{ Auth()->user()->name }}</span>
                <span class="truncate w-20 text-gray-500 text-xs leading-none mt-1">{{ Auth()->user()->level }}</span>
              </span>
            </a>
          </div>
        </div>
      </header>
        @yield('dascontainer')
        <footer class="footer px-4 py-6">
          <div class="footer-content">
            <p class="text-sm text-gray-600 text-center">Powered by taufiq@2022 </a></p>
          </div>
        </footer>
    </main>

<div id="modal" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
    <div class="relative top-40 mx-auto shadow-lg rounded-md bg-white max-w-md">
      <div class="text-center font-bold pt-5">
        <span>Do you want to Quit ?</span>
      </div>
        <!-- Modal footer -->
        <div class="flex justify-center py-5">
          <div class="px-4 py-2 flex justify-end items-center space-x-4">
            <a href="{{ url('/logout') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">Yes</a>
        </div>
          <div class="px-4 py-2 flex justify-end items-center space-x-4">
              <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-700 transition" onclick="closeModal()">Close</button>
          </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function openModal(modalId) {
    modal = document.getElementById(modalId)
    modal.classList.remove('hidden')
}

function closeModal() {
    modal = document.getElementById('modal')
    modal.classList.add('hidden')
}
</script>
  </div>@endsection