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
                               class="cursor-pointer max-w-xs flex p-3 w-full bg-white border border-amber-500 rounded-card focus:border-amber-500 focus:ring-amber-500">
                            <input id="answer-yes"
                                   type="radio"
                                   name="answer"
                                   value="true"
                                   x-model="rsvp"
                                   class="shrink-0 mt-1 border-amber-500 rounded-full text-amber-600 focus:ring-amber-500 disabled:opacity-50 disabled:pointer-events-none">
                            <span class="text-neutral-700 ms-3">Ja, ik ben er bij!</span>
                        </label>

                        <label for="answer-no"
                               class="cursor-pointer max-w-xs flex p-3 w-full bg-white border border-amber-500 rounded-card focus:border-amber-500 focus:ring-amber-500">
                            <input id="answer-no"
                                   type="radio"
                                   name="answer"
                                   value="false"
                                   x-model="rsvp"
                                   class="shrink-0 mt-1 border-amber-500 rounded-full text-amber-600 focus:ring-amber-500 disabled:opacity-50 disabled:pointer-events-none">
                            <span class="text-neutral-700 ms-3">Nee, ik ben er niet bij!</span>
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
                                   class="cursor-pointer max-w-xs flex p-3 w-full bg-white border border-amber-500 rounded-card focus:border-amber-500 focus:ring-amber-500">
                                <input id="food-meat"
                                       type="radio"
                                       name="food"
                                       value="meat"
                                       x-model="food"
                                       class="shrink-0 mt-1 border-amber-500 rounded-full text-amber-600 focus:ring-amber-500 disabled:opacity-50 disabled:pointer-events-none">
                                <span class="text-neutral-700 ms-3">Vlees</span>
                            </label>

                            <label for="food-fish"
                                   class="cursor-pointer max-w-xs flex p-3 w-full bg-white border border-amber-500 rounded-card focus:border-amber-500 focus:ring-amber-500">
                                <input id="food-fish"
                                       type="radio"
                                       name="food"
                                       value="fish"
                                       x-model="food"
                                       class="shrink-0 mt-1 border-amber-500 rounded-full text-amber-600 focus:ring-amber-500 disabled:opacity-50 disabled:pointer-events-none">
                                <span class="text-neutral-700 ms-3">Vis</span>
                            </label>

                            <label for="food-vega"
                                   class="cursor-pointer max-w-xs flex p-3 w-full bg-white border border-amber-500 rounded-card focus:border-amber-500 focus:ring-amber-500">
                                <input id="food-vega"
                                       type="radio"
                                       name="food"
                                       value="vega"
                                       x-model="food"
                                       class="shrink-0 mt-1 border-amber-500 rounded-full text-amber-600 focus:ring-amber-500 disabled:opacity-50 disabled:pointer-events-none">
                                <span class="text-neutral-700 ms-3">Vegetarisch</span>
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
                                class="py-3 px-4 block w-full border-gray-200 rounded-card focus:border-amber-500 focus:ring-amber-500 disabled:opacity-50 disabled:pointer-events-none"
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
                                       class="py-3 px-4 block w-full border-gray-200 rounded-card focus:border-amber-500 focus:ring-amber-500 disabled:opacity-50 disabled:pointer-events-none">
                                <p class="ml-4 mt-2 text-neutral-500" id="hs-input-helper-text">
                                    We sturen je graag foto's na de bruiloft. Invullen is niet verplicht.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit"
                        class="py-3 px-4 inline-flex items-center gap-x-2 rounded-card border border-amber-800 text-amber-800 hover:border-amber-500 hover:text-amber-500 disabled:opacity-50 disabled:pointer-events-none">
                    <span class="mx-auto">Opslaan</span>
                </button>
            </div>
        </form>
    </x-card>
@endsection
