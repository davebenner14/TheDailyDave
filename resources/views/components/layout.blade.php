<!doctype html>

<title>The Daily Dave</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<style>
    html {
        scroll-behavior: smooth;
    }
    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">




        <div id="navbar-fixed-container">

            <nav class="md:flex md:justify-between md:items-center">
                
                
                <div class="md:ml-4 text-xl font-semibold inline-block">
                    <a href="/">The
                    <span class="text-blue-500 mr-2">Daily</span><span class="">Dave</span>
                    </a>
                </div>


                <span class="inline-block">
                    <a href="https://davebenner.ca" target="_blank" rel="noopener noreferrer" class="hover:text-gray-600 transition-colors duration-200">
                    <img src="/images/DaveLogo-removebg-preview.png" style="max-width: 60px; max-height: 60px; inline-block">
                    </a>
                </span>
                <span class="inline-block">
                    <a href="https://github.com/davebenner14" target="_blank" rel="noopener noreferrer" class="hover:text-gray-600 transition-colors duration-200">
    
                    <svg
                    {{-- GitHub --}}
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-7 w-7"
                        fill="currentColor"
                        style="color: #333"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                    </svg>
                    </a>
                </span>
                <span class="inline-block">
                    <a href="https://www.facebook.com/david.benner.33" target="_blank" rel="noopener noreferrer" class="hover:text-gray-600 transition-colors duration-200">
    
                    <svg
                    {{-- Facebook --}}
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-7 w-7"
                        fill="currentColor"
                        style="color: #1877f2"
                        viewBox="0 0 24 24">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                    </svg>
                    </a>
                </span>

            <span class="inline-block">
                <a href="https://www.instagram.com/captain.benner/?next=%2F" target="_blank" rel="noopener noreferrer" class="hover:text-gray-600 transition-colors duration-200">

                <svg
                {{-- Instagram --}}
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-7 w-7"
                    fill="currentColor"
                    style="color: #c13584"
                    viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                </svg>
                </a>
            </span>

            <span class="inline-block">
                <a href="https://www.linkedin.com/in/david-benner-76648617b/" target="_blank" rel="noopener noreferrer" class="hover:text-gray-600 transition-colors duration-200">

                <svg
                {{-- LinkedIn --}}
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-7 w-7"
                    fill="currentColor"
                    style="color: #0077b5"
                    viewBox="0 0 24 24">
                        <path
                            d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                </svg>
                </a>
            </span>

            <span class="inline-block">
                <a href="https://twitter.com/davebenner14" target="_blank" rel="noopener noreferrer" class="hover:text-gray-600 transition-colors duration-200">

                <svg
                {{-- Twitter --}}
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-7 w-7"
                    fill="currentColor"
                    style="color: #1da1f2"
                    viewBox="0 0 24 24">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                </svg>
                </a>
            </span>

{{-- 


            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                    <x-dropdown>
                        <x-slot name="trigger">
                            <buttoWelcomen class="text-xs font-bold uppercase">
                                , {{ auth()->user()->name }}!
                            </buttoWelcomen>
                        </x-slot>



                        
                        @admin
                            <x-dropdown-item
                                href="/admin/posts"
                                :active="request()->is('admin/posts')"
                            >
                                Dashboard
                            </x-dropdown-item>

                            <x-dropdown-item
                                href="/admin/posts/create"
                                :active="request()->is('admin/posts/create')"
                            >
                                New Post
                            </x-dropdown-item>
                        @endadmin

                        <x-dropdown-item
                            href="#"
                            x-data="{}"
                            @click.prevent="document.querySelector('#logout-form').submit()"
                        >
                            Log Out
                        </x-dropdown-item>

                        <form id="logout-form" method="POST" action="/logout" class="hidden">
                            @csrf
                        </form>
                    </x-dropdown>
                @else
                    <a href="/register"
                       class="text-xs font-bold uppercase {{ request()->is('register') ? 'text-blue-500' : '' }}">
                        Register
                    </a>

                    <a href="/login"
                       class="ml-6 text-xs font-bold uppercase {{ request()->is('login') ? 'text-blue-500' : '' }}">
                        Log In
                    </a>
                @endauth

                <a href="/"
                   class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div> --}}

            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                    <x-dropdown class="min-w-[VALUE]">
                        <x-slot name="trigger">
                            <button class="text-xs font-bold uppercase">
                                Welcome, {{ auth()->user()->name }}!
                            </button>
                        </x-slot>
            
                        @admin
                            <x-dropdown-item
                                href="/admin/posts"
                                :active="request()->is('admin/posts')"
                            >
                                Dashboard
                            </x-dropdown-item>
            
                            <x-dropdown-item
                                href="/admin/posts/create"
                                :active="request()->is('admin/posts/create')"
                            >
                                New Post
                            </x-dropdown-item>
                        @endadmin
            
                        <x-dropdown-item
                            href="#"
                            x-data="{}"
                            @click.prevent="document.querySelector('#logout-form').submit()"
                        >
                            Log Out
                        </x-dropdown-item>
            
                        <form id="logout-form" method="POST" action="/logout" class="hidden">
                            @csrf
                        </form>
                    </x-dropdown>
                @else
                    <a href="/register"
                       class="text-xs font-bold uppercase {{ request()->is('register') ? 'text-blue-500' : '' }}">
                        Register
                    </a>
            
                    <a href="/login"
                       class="ml-6 text-xs font-bold uppercase {{ request()->is('login') ? 'text-blue-500' : '' }}">
                        Log In
                    </a>
                @endauth
            
                {{-- <a href="/"
                   class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a> --}}
                <a href="/?scrollToBottom=true"
   class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
    Subscribe for Updates
</a>

                
            </div>
            




        </nav>
        </div>

        <style>
            #navbar-fixed-container {
              position: fixed;
              top: 0;
              left: 0;
              width: 100%;
              /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
              z-index: 100;
            }
            
            /* Add a padding-top to the body equal to the height of the fixed container to avoid content being hidden behind the navbar */
            body {
              padding-top: /* Your fixed container height */;
            }
          </style>
          










         
        {{ $slot }}

        <footer id="newsletter"
                class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16"
        >
        <img src="/images/Cartoon_Robot.svg.png" alt="" class="mx-auto mb-6" style="width: 145px;">

            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">(This will not actually subscribe you to anything and is just an empty button. But be sure to give it a try!)</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

            
                    <form method="POST" action="/newsletter" class="lg:flex text-sm" onsubmit="subscribe(event)">
                        @csrf
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>
                            <div>
                                <input id="email"
                                       name="email"
                                       type="text"
                                       placeholder="Your email address"
                                       class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                                @error('email')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                    
                    <script>
                        function subscribe(event) {
                            event.preventDefault();
                            var message = document.createElement('div');
                            message.innerHTML = 'Subscribed! (But not really)';
                            message.classList.add('bg-green-200', 'text-green-700', 'py-2', 'px-4', 'rounded', 'mt-4');
                            var form = event.target;
                            form.parentNode.insertBefore(message, form.nextSibling);
                        }
                    </script>
                    
                    
                </div>
            </div>
        </footer>
    </section>

    <x-flash/>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);
            const scrollToBottomParam = urlParams.get('scrollToBottom');

            if (scrollToBottomParam === 'true') {
                window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
                // Remove the scrollToBottom parameter from the URL without triggering a reload
                window.history.pushState({}, '', window.location.pathname);
            }
        });
    </script>
</body>