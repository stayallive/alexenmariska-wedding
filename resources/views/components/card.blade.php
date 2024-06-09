@props([
    'withBackButton' => false,
])

<div class="flex flex-col h-screen justify-center items-center p-4">
    <div class="min-h-60 flex flex-col bg-white border shadow-sm rounded-card overflow-y-scroll">
        <div class="flex flex-auto flex-col justify-center items-center p-6">
            <h3 class="text-5xl leading-[4rem] font-['Braveheart'] text-copper">
                Alex & Mariska
            </h3>
            @if(isset($title))
                <p class="mt-2 text-neutral-700 text-center">
                    {{ $title }}
                </p>
            @endif

            {{ $slot }}

            <p class="mt-4">
                @if($withBackButton)
                    <a class="inline-flex items-center gap-x-1 text-sm rounded-lg border border-transparent text-amber-600 hover:text-amber-800 disabled:opacity-50 disabled:pointer-events-none dark:text-amber-500 dark:hover:text-amber-400"
                       href="{{ route('dashboard') }}">
                        Terug
                    </a>
                    &middot;
                @endif
                @if(invite())
                    <a class="inline-flex items-center gap-x-1 text-sm rounded-lg border border-transparent text-amber-600 hover:text-amber-800 disabled:opacity-50 disabled:pointer-events-none dark:text-amber-500 dark:hover:text-amber-400"
                       href="{{ route('signout') }}">
                        Uitloggen
                    </a>
                    &middot;
                @endif
                <a class="inline-flex items-center gap-x-1 text-sm rounded-lg border border-transparent text-amber-600 hover:text-amber-800 disabled:opacity-50 disabled:pointer-events-none dark:text-amber-500 dark:hover:text-amber-400"
                   href="mailto:contact@alexenmariska.wedding">
                    Contact
                </a>
            </p>
        </div>
    </div>
</div>
