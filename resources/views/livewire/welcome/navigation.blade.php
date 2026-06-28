<nav class="flex items-center justify-end gap-4">
    @auth
        <a
            href="{{ url('/dashboard') }}"
            id="nav-dashboard"
            class="text-sm font-semibold text-white bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 hover:from-indigo-400 hover:via-purple-400 hover:to-pink-400 rounded-full px-5 py-2.5 transition-all duration-300 shadow-[0_0_20px_rgba(168,85,247,0.4)] hover:shadow-[0_0_30px_rgba(168,85,247,0.6)] hover:scale-105"
        >
            Dashboard
        </a>
    @else
        <a
            href="{{ route('login') }}"
            id="nav-login"
            class="text-sm font-medium text-zinc-400 hover:text-white transition-colors duration-200"
        >
            Log in
        </a>

        @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                id="nav-register"
                class="text-sm font-semibold text-white bg-white/10 hover:bg-white/20 border border-white/10 rounded-full px-5 py-2.5 transition-all duration-300 backdrop-blur-sm hover:border-white/20 hover:scale-105"
            >
                Register
            </a>
        @endif
    @endauth
</nav>
