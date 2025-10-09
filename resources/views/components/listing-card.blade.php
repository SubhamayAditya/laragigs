@props(['listing'])

<x-card>
    <div class="flex">
        {{-- <img class="hidden w-48 mr-6 md:block" src="{{ asset('images/no-image.png') }}" alt="" /> --}}
        <img class="w-48 mr-6 mb-6"
                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
                    alt="{{ $listing->title }}" />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>

             {{--********** tags **********--}}
            <x-listing-tags :tagsValues="$listing->tags" />

            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>{{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>
