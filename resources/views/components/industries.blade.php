@props([
    'title' => 'Industries We Serve',
    'industries' => [
        'Corporate & Business',
        'Banking & Finance',
        'Real Estate & Construction',
        'Technology & IT',
        'Healthcare & Life Sciences',
        'Energy & Environment',
        'Media, Entertainment & Sports',
        'Retail & Consumer Products',
        'Insurance',
        'Government & Public Sector',
        'Education',
        'Family & Individuals',
    ],
])


    <div class="container 4xl:max-w-[1496px]!">
        <h2 class="section-title mb-0 text-center leading-[0.95]">{{ $title }}</h2>

        <ul
            class="mt-[clamp(32px,3.4vw,66px)] grid list-none gap-4 p-0 sm:grid-cols-2 lg:grid-cols-3 lg:gap-x-[clamp(24px,2.7vw,52px)] lg:gap-y-[clamp(20px,2.4vw,46px)]">
            @foreach ($industries as $industry)
                <li
                    class="group relative isolate block cursor-default overflow-hidden rounded-full bg-pill px-6 py-[21px] text-center text-base font-semibold leading-[25px] transition-all duration-500 ease-out hover:-translate-y-1 hover:text-white hover:shadow-[0px_18px_30px_-14px_rgba(0,0,0,0.45)] hover:ring-2 hover:ring-secondary/60 motion-reduce:transition-none motion-reduce:hover:translate-y-0 lg:text-lg 4xl:text-[22.74px]">

                    {{-- Neeche se bharne wala rang --}}
                    <span aria-hidden="true"
                        class="pointer-events-none absolute left-1/2 top-full -z-10 aspect-square w-[160%] -translate-x-1/2 rounded-full bg-primary transition-[top] duration-700 ease-[cubic-bezier(0.22,1,0.36,1)] group-hover:top-[-100%] motion-reduce:transition-none"></span>

                    {{-- Shine --}}
                    <span aria-hidden="true"
                        class="pointer-events-none absolute inset-0 -translate-x-full bg-[linear-gradient(115deg,transparent_35%,rgba(255,255,255,0.25)_50%,transparent_65%)] transition-transform delay-200 duration-1000 ease-out group-hover:translate-x-full motion-reduce:hidden"></span>

                    <span class="relative">{{ $industry }}</span>
                </li>
            @endforeach
        </ul>
    </div>

