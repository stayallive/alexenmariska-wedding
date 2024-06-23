@props([
    'withBackButton' => false,
])

<div class="w-full h-dvh overflow-y-scroll">
    <div class="min-h-dvh flex items-center">
        <div class="mx-auto p-4 w-full sm:py-4 sm:w-96">
            <div class="min-h-60 flex flex-col bg-white border shadow-sm rounded-card w-full">
                <div class="flex flex-auto flex-col justify-center items-center px-4 py-6">
                    <h3 class="text-5xl leading-[4rem] font-['Braveheart'] text-copper">
                        Alex & Mariska
                    </h3>
                    @if(isset($title))
                        <p class="mt-2 text-neutral-700 text-center">
                            {{ $title }}
                        </p>
                    @endif

                    {{ $slot }}
                </div>

                <div class="p-4 border-t sm:px-5 text-center">
                    @if($withBackButton)
                        <a class="inline-flex items-center gap-x-1 text-sm rounded-lg border border-transparent text-amber-600 hover:text-amber-800 disabled:opacity-50 disabled:pointer-events-none dark:text-amber-500 dark:hover:text-amber-400"
                           href="{{ route('invite') }}">
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
                </div>
            </div>
        </div>
    </div>
</div>
