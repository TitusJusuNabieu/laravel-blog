{{-- <style>
    #menu-toggle:checked + #menu {
        display: block;
    }
    
</style>
    <div class="bg-gray-800">

        <header class=" px-4 py-3  justify-between flex items-center">
            <div>
             <img src="{{asset('images/blog.png')}}" alt="logo" class="h-10">
            </div>
     
            <div>
                <label class="cursor-pointer lg:hidden block">
                    <img src="{{asset('images/hambuger.png')}}" alt="logo" class="h-8">
                    <input class="hidden" type="checkbox" id="menu-toggle">

                </label>
                {{-- <input class="h" type="checkbox" id="menu-toggle"> --}}

                {{-- <div class="w-full  hidden lg:flex lg:w-auto w-full" id="menu">
                    <a href="/" class="block font-semibold text-white px-2 rounded hover:bg-gray-600 py-2 mt-1">Home</a>
                    <a href="/about" class="block font-semibold text-white px-2 rounded hover:bg-gray-600 py-2 mt-1">About</a>
                    <a href="/services" class="block font-semibold text-white px-2 rounded hover:bg-gray-600 py-2 mt-1">Services</a>
                    <a href="/posts" class="block font-semibold text-white px-2 rounded hover:bg-gray-600 py-2 mt-1">Blog</a>
                </div>
             
            </div>


            
    
            
         </header>
         
    </div> --}} 










    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
          <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
              <!-- Mobile menu button-->
              <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out">
                <!-- Icon when menu is closed. -->
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <svg class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <!-- Icon when menu is open. -->
                <!-- Menu open: "block", Menu closed: "hidden" -->
                <svg class="hidden h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
              </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
              <div class="flex-shrink-0">
                <a href="{{ url('/') }}" class=" no-underline">
                    <img class="block lg:hidden h-8 w-auto mt-7" src="{{asset('images/blog.png')}}" alt="" />
                </a>
                <a href="{{ url('/') }}" class=" no-underline">
                <img class="hidden lg:block h-8 w-auto" src="{{asset('images/blog.png')}}" alt="" />
                </a>
              </div>
              <div class="hidden sm:block sm:ml-6">
                <div class="flex">
                    <a href="/" class="block font-semibold text-white px-2 rounded hover:bg-gray-600 py-2 mt-1">Home</a>
                    <a href="/about" class="block font-semibold text-white px-2 rounded hover:bg-gray-600 py-2 mt-1">About</a>
                    <a href="/services" class="block font-semibold text-white px-2 rounded hover:bg-gray-600 py-2 mt-1">Services</a>
                    <a href="/posts" class="block font-semibold text-white px-2 rounded hover:bg-gray-600 py-2 mt-1">Blog</a>
                </div>
              </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
              <button class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
              </button>



              <div class="flex-1 text-right">
                @guest
                    <a class="no-underline hover:bg-gray-600 text-white text-sm rounded p-3 font-semibold text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="no-underline hover:bg-gray-600 text-white rounded text-sm p-3 font-semibold text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    

                    <div class="ml-3 relative">
                        
                        <div>
                          <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-white transition duration-150 ease-in-out">
                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                          </button>
                          <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>
                        </div>
                        <!--
                          Profile dropdown panel, show/hide based on dropdown state.
              
                          Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                          Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
                        <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                          <div class="py-1 rounded-md bg-white shadow-xs">
                            <a href='/posts/create' class="block font-semibold gray-white px-10 rounded hover:bg-gray-600 py-2 mt-1"> Create Post</a>
                            <a href='/dashBoard' class="block font-semibold gray-white px-10 rounded hover:bg-gray-600 py-2 mt-1"> Dashboard</a>
                            <a href="{{ route('logout') }}"
                       class="no-underline block font-semibold gray-white px-20 rounded hover:bg-gray-600 py-2 mt-1"
                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                @endguest
            </div>
      
              <!-- Profile dropdown -->
              
      
        <!--
          Mobile menu, toggle classes based on menu state.
      
          Menu open: "block", Menu closed: "hidden"
        -->
        <div class="hidden sm:hidden">
          <div class="px-2 pt-2 pb-3">
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Dashboard</a>
            <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Team</a>
            <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Projects</a>
            <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Calendar</a>
          </div>
        </div>
      </nav>











