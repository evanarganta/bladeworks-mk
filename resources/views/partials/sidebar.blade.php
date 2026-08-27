<aside class="w-full md:w-60 shrink-0 border-b md:border-b-0 md:border-r border-[#27272a] bg-[#111113] p-4">
    <nav class="space-y-1">
        <a href="{{ url('/') }}" class="flex items-center justify-between px-3 py-2 text-xs font-medium border border-transparent {{ (request()->is('/') || request()->is('dashboard')) ? 'border-[#3f3f46] bg-[#18181b] text-white' : 'text-[#a1a1aa] hover:border-[#27272a] hover:bg-[#18181b] hover:text-[#d4d4d8]' }}">
            <span>dashboard.</span>
            @if(request()->is('/') || request()->is('dashboard'))
                <span class="h-1.5 w-1.5 rounded-full bg-white"></span>
            @endif
        </a>

        <a href="{{ url('/guru') }}" class="flex items-center justify-between px-3 py-2 text-xs font-medium border border-transparent {{ request()->is('guru*') ? 'border-[#3f3f46] bg-[#18181b] text-white' : 'text-[#a1a1aa] hover:border-[#27272a] hover:bg-[#18181b] hover:text-[#d4d4d8]' }}">
            <span>data guru.</span>
            @if(request()->is('guru*'))
                <span class="h-1.5 w-1.5 rounded-full bg-white"></span>
            @endif
        </a>

        <a href="{{ url('/siswa') }}" class="flex items-center justify-between px-3 py-2 text-xs font-medium border border-transparent {{ request()->is('siswa*') ? 'border-[#3f3f46] bg-[#18181b] text-white' : 'text-[#a1a1aa] hover:border-[#27272a] hover:bg-[#18181b] hover:text-[#d4d4d8]' }}">
            <span>data siswa.</span>
            @if(request()->is('siswa*'))
                <span class="h-1.5 w-1.5 rounded-full bg-white"></span>
            @endif
        </a>

        <a href="{{ url('/mapel') }}" class="flex items-center justify-between px-3 py-2 text-xs font-medium border border-transparent {{ request()->is('mapel*') ? 'border-[#3f3f46] bg-[#18181b] text-white' : 'text-[#a1a1aa] hover:border-[#27272a] hover:bg-[#18181b] hover:text-[#d4d4d8]' }}">
            <span>mata pelajaran.</span>
            @if(request()->is('mapel*'))
                <span class="h-1.5 w-1.5 rounded-full bg-white"></span>
            @endif
        </a>

        <a href="{{ url('/jadwal') }}" class="flex items-center justify-between px-3 py-2 text-xs font-medium border border-transparent {{ request()->is('jadwal*') ? 'border-[#3f3f46] bg-[#18181b] text-white' : 'text-[#a1a1aa] hover:border-[#27272a] hover:bg-[#18181b] hover:text-[#d4d4d8]' }}">
            <span>jadwal.</span>
            @if(request()->is('jadwal*'))
                <span class="h-1.5 w-1.5 rounded-full bg-white"></span>
            @endif
        </a>

        <a href="{{ url('/nilai') }}" class="flex items-center justify-between px-3 py-2 text-xs font-medium border border-transparent {{ request()->is('nilai*') ? 'border-[#3f3f46] bg-[#18181b] text-white' : 'text-[#a1a1aa] hover:border-[#27272a] hover:bg-[#18181b] hover:text-[#d4d4d8]' }}">
            <span>nilai.</span>
            @if(request()->is('nilai*'))
                <span class="h-1.5 w-1.5 rounded-full bg-white"></span>
            @endif
        </a>

        <a href="{{ url('/profil') }}" class="flex items-center justify-between px-3 py-2 text-xs font-medium border border-transparent {{ request()->is('profil*') ? 'border-[#3f3f46] bg-[#18181b] text-white' : 'text-[#a1a1aa] hover:border-[#27272a] hover:bg-[#18181b] hover:text-[#d4d4d8]' }}">
            <span>profil.</span>
            @if(request()->is('profil*'))
                <span class="h-1.5 w-1.5 rounded-full bg-white"></span>
            @endif
        </a>
    </nav>
</aside>
