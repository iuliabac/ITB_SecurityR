<div {{ $attributes->merge(['class' => 'relative']) }}>
    <!-- Trigger slot -->
    <div>
        {{ $trigger }}
    </div>

    <!-- Content slot -->
    <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50 hidden group-hover:block">
        {{ $content }}
    </div>
</div>
