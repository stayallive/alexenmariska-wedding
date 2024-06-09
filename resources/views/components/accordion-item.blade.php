<div class="hs-accordion bg-white border -mt-px first:rounded-t-card last:rounded-b-card dark:bg-neutral-800 dark:border-neutral-700">
    <button
        class="hs-accordion-toggle hs-accordion-active:text-amber-600 inline-flex items-center gap-x-3 w-full text-start text-neutral-700 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-amber-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400">
        <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14"></path>
            <path d="M12 5v14"></path>
        </svg>
        <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14"></path>
        </svg>
        {{ $title }}
    </button>
    <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-bordered-heading-one">
        <div class="pb-4 px-5">
            <p class="text-neutral-700 dark:text-neutral-200">
                {{ $slot }}
            </p>
        </div>
    </div>
</div>
