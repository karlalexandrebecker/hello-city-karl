<footer>
            <p class="text-gray-400">
                &copy; Copyright {{ date('Y') }} 
                @if(!Route::is('about'))
                &middot; <a href="{{ route('about') }}" class="text-indigo-400 hover:text-indigo-600 underline">About us</a>
                @endif
                
            </p>
            
        </footer>