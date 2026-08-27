<div {{ $attributes->merge(['class' => 'border border-[#27272a] bg-[#18181b] p-5']) }}>
    @if(isset($title) && $title)
        <div class="mb-4 border-b border-[#27272a] pb-3">
            <h3 class="text-sm font-medium text-white">{{ $title }}</h3>
        </div>
    @endif
    <div>
        {{ $slot }}
    </div>
</div>