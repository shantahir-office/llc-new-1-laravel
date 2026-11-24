@props([
    'subtitle' => 'Chambers & Advisory',
    'title' => 'Comprehensive Legal Services',
    'description' =>
        'From everyday business decisions to high-conflict corporate disputes, explore specialized solutions engineered for success.',
    'services' => [
        [
            'title' => 'Legal Disputes',
            'route' => 'legal-disputes',
            'image' => 'assets/images/services/ser1.webp',
            'description' =>
                'Strategic trial representation for business disputes, contract breaches and complex claims.',
        ],
        [
            'title' => 'Commercial Law',
            'route' => 'commercial-law',
            'image' => 'assets/images/services/ser2.webp',
            'description' =>
                'Legal support for contracts, transactions, partnerships and everyday commercial decisions.',
        ],
        [
            'title' => 'Enterprise Law',
            'route' => 'enterprise-law',
            'image' => 'assets/images/services/ser3.webp',
            'description' =>
                'Guidance on governance, boardroom fiduciary standards, restructuring and shareholder matters.',
        ],
        [
            'title' => 'Intellectual Property Rights',
            'route' => 'intellectual-property-rights',
            'image' => 'assets/images/services/ser4.webp',
            'description' =>
                'Trademark, copyright and patent protection through registration, licensing and enforcement.',
        ],
        [
            'title' => 'Labor & Employment Law',
            'route' => 'labor-employment-law',
            'image' => 'assets/images/services/ser5.webp',
            'description' =>
                'Workplace policies, executive retention, compliance and dispute resolution for employers.',
        ],
        [
            'title' => 'Immigration Law',
            'route' => 'immigration-law',
            'image' => 'assets/images/services/ser3.webp',
            'description' =>
                'Guidance for individuals and global enterprises navigating visas, residency and cross-border mobility.',
        ],
        [
            'title' => 'Legal Disputes',
            'route' => 'legal-disputes',
            'image' => 'assets/images/services/ser1.webp',
            'description' =>
                'Strategic trial representation for business disputes, contract breaches and complex claims.',
        ],
        [
            'title' => 'Commercial Law',
            'route' => 'commercial-law',
            'image' => 'assets/images/services/ser2.webp',
            'description' =>
                'Legal support for contracts, transactions, partnerships and everyday commercial decisions.',
        ],
        [
            'title' => 'Enterprise Law',
            'route' => 'enterprise-law',
            'image' => 'assets/images/services/ser3.webp',
            'description' =>
                'Guidance on governance, boardroom fiduciary standards, restructuring and shareholder matters.',
        ],
        [
            'title' => 'Intellectual Property Rights',
            'route' => 'intellectual-property-rights',
            'image' => 'assets/images/services/ser4.webp',
            'description' =>
                'Trademark, copyright and patent protection through registration, licensing and enforcement.',
        ],
        [
            'title' => 'Labor & Employment Law',
            'route' => 'labor-employment-law',
            'image' => 'assets/images/services/ser5.webp',
            'description' =>
                'Workplace policies, executive retention, compliance and dispute resolution for employers.',
        ],
        [
            'title' => 'Immigration Law',
            'route' => 'immigration-law',
            'image' => 'assets/images/services/ser3.webp',
            'description' =>
                'Guidance for individuals and global enterprises navigating visas, residency and cross-border mobility.',
        ],
    ],
])


    <div class="container">
        <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between lg:pl-[19px]">
            <div class="max-w-[716px]">
                <span class="sub-title">{{ $subtitle }}</span>
                <h2 class="section-title mb-0 mt-[13px]">{{ $title }}</h2>
                <p class="section-desc mb-0 mt-[17px] max-w-[666px]">{{ $description }}</p>
            </div>
            <div class="flex shrink-0 gap-[15px]">
                <button type="button" class="circle-btn services-prev" aria-label="Previous service">
                    <x-svgs.chevron direction="left" />
                </button>
                <button type="button" class="circle-btn circle-btn-fill services-next" aria-label="Next service">
                    <x-svgs.chevron direction="right" />
                </button>
            </div>
        </div>

        <div class="swiper services-swiper mt-[clamp(32px,2.6vw,49px)] overflow-visible!">
            <div class="swiper-wrapper">
                @foreach ($services as $service)
                    <div class="swiper-slide w-[290px]! sm:w-[380px]! xl:w-[420px]! 4xl:w-[464.51px]!">
                        <article
                            class="service-card group transition-transform duration-500 ease-out hover:-translate-y-2 motion-reduce:transition-none motion-reduce:hover:translate-y-0">

                            <div
                                class="relative overflow-hidden rounded-[26.6px] shadow-[0px_10px_24px_-14px_rgba(0,0,0,0.35)] transition-shadow duration-500 group-hover:shadow-[0px_24px_40px_-16px_rgba(0,0,0,0.45)]">
                                <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}" loading="lazy"
                                    decoding="async" width="439" height="302"
                                    class="h-auto w-full transition-transform duration-700 ease-out group-hover:scale-110 motion-reduce:transition-none motion-reduce:group-hover:scale-100">

                                {{-- Shine --}}
                                <span aria-hidden="true"
                                    class="pointer-events-none absolute inset-0 -translate-x-full bg-[linear-gradient(115deg,transparent_35%,rgba(255,255,255,0.35)_50%,transparent_65%)] transition-transform duration-1000 ease-out group-hover:translate-x-full motion-reduce:hidden"></span>
                            </div>

                            <div class="flex items-end justify-between gap-4 px-[9px] pt-[13px]">
                                <div class="min-w-0">
                                    <span
                                        class="mb-0 block truncate text-xl font-bold leading-[1.55] transition-colors duration-300 group-hover:text-secondary 4xl:text-[23.96px]">
                                        {{ $service['title'] }}
                                    </span>
                                    <p class="mb-0 mt-2.5 line-clamp-2 text-base leading-[25px] 4xl:text-[15.97px]">
                                        {{ $service['description'] }}
                                    </p>
                                </div>

                                <a href="{{ route($service['route']) }}"
                                    class="service-arrow transition-transform duration-500 ease-out group-hover:-rotate-45 group-hover:scale-110 motion-reduce:transition-none motion-reduce:group-hover:rotate-0 motion-reduce:group-hover:scale-100"
                                    aria-label="{{ $service['title'] }}">
                                    <x-svgs.arrow-right />
                                </a>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

