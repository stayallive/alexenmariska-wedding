@extends('layouts.default')

@section('content')
    <x-card :with-back-button="true">
        <form x-data="{
            rsvp: '{{ bool_as_js($person->rsvp) }}',
            food: '{{ $person->food?->value }}',
            diet: '{{ $person->diet }}',
            email: '{{ $person->email }}',
        }" action="{{ route('rsvp', $person->ulid) }}" method="post" class="w-full">
            @csrf
            <div class="mt-4 flex flex-col gap-y-6 w-full">
                <div>
                    <p class="ml-4 mb-1.5 text-neutral-700">
                        Hoi {{ $person }}, we hebben je er graag bij!
                    </p>
                    <div class="grid space-y-2">
                        <label for="answer-yes"
                               class="max-w-xs flex p-3 w-full bg-white border border-amber-500 rounded-card focus:border-amber-500 focus:ring-amber-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                            <input id="answer-yes"
                                   type="radio"
                                   name="answer"
                                   value="true"
                                   x-model="rsvp"
                                   class="shrink-0 mt-0.5 border-amber-500 rounded-full text-amber-600 focus:ring-amber-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-amber-500 dark:checked:border-amber-500 dark:focus:ring-offset-amber-800">
                            <span class="text-neutral-700 ms-3 dark:text-neutral-400">Ja, ik ben er bij!</span>
                        </label>

                        <label for="answer-no"
                               class="max-w-xs flex p-3 w-full bg-white border border-amber-500 rounded-card focus:border-amber-500 focus:ring-amber-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                            <input id="answer-no"
                                   type="radio"
                                   name="answer"
                                   value="false"
                                   x-model="rsvp"
                                   class="shrink-0 mt-0.5 border-amber-500 rounded-full text-amber-600 focus:ring-amber-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-amber-500 dark:checked:border-amber-500 dark:focus:ring-offset-amber-800">
                            <span class="text-neutral-700 ms-3 dark:text-neutral-400">Nee, ik ben er niet bij!</span>
                        </label>
                    </div>
                </div>

                <div x-show="rsvp === 'true'" class="flex flex-col gap-y-6 w-full">
                    <div>
                        <p class="ml-4 mb-1.5 text-neutral-700">
                            Wat wil je eten?
                        </p>
                        <div class="grid space-y-2">
                            <label for="food-meat"
                                   class="max-w-xs flex p-3 w-full bg-white border border-amber-500 rounded-card focus:border-amber-500 focus:ring-amber-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                                <input id="food-meat"
                                       type="radio"
                                       name="food"
                                       value="meat"
                                       x-model="food"
                                       class="shrink-0 mt-0.5 border-amber-500 rounded-full text-amber-600 focus:ring-amber-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-amber-500 dark:checked:border-amber-500 dark:focus:ring-offset-amber-800">
                                <span class="text-neutral-700 ms-3 dark:text-neutral-400">Vlees</span>
                            </label>

                            <label for="food-fish"
                                   class="max-w-xs flex p-3 w-full bg-white border border-amber-500 rounded-card focus:border-amber-500 focus:ring-amber-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                                <input id="food-fish"
                                       type="radio"
                                       name="food"
                                       value="fish"
                                       x-model="food"
                                       class="shrink-0 mt-0.5 border-amber-500 rounded-full text-amber-600 focus:ring-amber-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-amber-500 dark:checked:border-amber-500 dark:focus:ring-offset-amber-800">
                                <span class="text-neutral-700 ms-3 dark:text-neutral-400">Vis</span>
                            </label>

                            <label for="food-vega"
                                   class="max-w-xs flex p-3 w-full bg-white border border-amber-500 rounded-card focus:border-amber-500 focus:ring-amber-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                                <input id="food-vega"
                                       type="radio"
                                       name="food"
                                       value="vega"
                                       x-model="food"
                                       class="shrink-0 mt-0.5 border-amber-500 rounded-full text-amber-600 focus:ring-amber-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-amber-500 dark:checked:border-amber-500 dark:focus:ring-offset-amber-800">
                                <span class="text-neutral-700 ms-3 dark:text-neutral-400">Vegetarisch</span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <div>
                            <p class="ml-4 mb-1.5 text-neutral-700">
                                Speciale dieetwensen?
                            </p>
                            <textarea
                                rows="2"
                                name="diet"
                                class="py-3 px-4 block w-full border-gray-200 rounded-card focus:border-amber-500 focus:ring-amber-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                x-model="diet"
                                placeholder="Heb je allergiën of een andere speciale dieetwensen?"
                            ></textarea>
                        </div>
                    </div>
                    <div>
                        <div>
                            <p class="ml-4 mb-1.5 text-neutral-700">
                                E-mailadres?
                            </p>
                            <div class="max-w-sm">
                                <input x-model="email"
                                       type="email"
                                       name="email"
                                       placeholder="{{ Str::slug($person->name) }}@example.com"
                                       class="py-3 px-4 block w-full border-gray-200 rounded-card focus:border-amber-500 focus:ring-amber-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <p class="ml-4 mt-2 text-neutral-500 dark:text-neutral-500" id="hs-input-helper-text">
                                    We sturen je graag foto's na de bruiloft. Invullen is niet verplicht.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit"
                        class="py-3 px-4 inline-flex items-center gap-x-2 rounded-card border border-amber-800 text-amber-800 hover:border-amber-500 hover:text-amber-500 disabled:opacity-50 disabled:pointer-events-none dark:border-white dark:text-white dark:hover:text-neutral-300 dark:hover:border-neutral-300">
                    <span class="mx-auto">Opslaan</span>
                </button>
            </div>
        </form>
    </x-card>
@endsection
