@php
    $quickLinks = [
        ['title' => 'Home', 'route' => '/'],
        ['title' => 'About', 'route' => 'about'],
        ['title' => 'Contact Us', 'route' => 'contact'],
        ['title' => 'Privacy Policy', 'route' => 'privacy-policy'],
        ['title' => 'Terms & Conditions', 'route' => 'termsAndConditions'],
    ];

    $serviceLinks = [
        ['title' => 'Legal Disputes', 'route' => 'legal-disputes'],
        ['title' => 'Commercial Law', 'route' => 'commercial-law'],
        ['title' => 'Enterprise Law', 'route' => 'enterprise-law'],
        ['title' => 'Intellectual Property Rights', 'route' => 'intellectual-property-rights'],
        ['title' => 'Labor & Employment Law', 'route' => 'labor-employment-law'],
        ['title' => 'Immigration Law', 'route' => 'immigration-law'],
    ];

    $footerTitle = 'mb-0 text-[13.78px] font-bold uppercase leading-[18px] tracking-[1.38px] text-secondary block';
    $footerList = 'mt-[13.7px] list-disc space-y-[9.2px] pl-4 marker:text-snow';
    $footerLink =
        'text-base leading-[23px] text-snow transition-colors duration-300 hover:text-secondary 4xl:text-[16.08px]    ';
@endphp

<footer
    class="bg-primary bg-cover bg-center bg-no-repeat pb-[26px] pt-[clamp(48px,2.9vw,55px)] lg:bg-[url('/assets/images/banners/footer-bg.webp')]">

    <div class="container relative 4xl:max-w-[1415px]!">
        <div class="grid gap-10 sm:grid-cols-2 xl:grid-cols-[minmax(0,1fr)_repeat(3,minmax(0,246px))] lg:gap-[46px]">

            {{-- About --}}
            <div class="max-w-[441px]">
                <a href="{{ route('/') }}" class="inline-block">
                    <img src="{{ asset('assets/images/logo/logo.webp') }}" alt="{{ config('var.website_name') }} logo"
                        width="146" height="60" loading="lazy" class="h-auto w-[clamp(110px,7.6vw,146px)]">
                </a>
                <p class="mb-0 mt-[18px] max-w-[422px] text-base leading-[26px] text-snow 4xl:text-[16.08px]">
                    Providing thoughtful, client-focused legal guidance for businesses, institutions, and individuals
                    navigating high-stakes decisions and future growth.
                </p>
            </div>

            {{-- Quick links --}}
            <nav aria-label="Quick links">
                <span class="{{ $footerTitle }}">Quick Links</span>
                <ul class="{{ $footerList }}">
                    @foreach ($quickLinks as $link)
                        <li class="{{ $footerLink }}">
                            <a href="{{ route($link['route']) }}" class="{{ $footerLink }}">{{ $link['title'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>

            {{-- Services --}}
            <nav aria-label="Services">
                <span class="{{ $footerTitle }}">Services</span>
                <ul class="{{ $footerList }}">
                    @foreach ($serviceLinks as $service)
                        @if (Route::has($service['route']))
                            <li class="{{ $footerLink }}">
                                <a href="{{ route($service['route']) }}"
                                    class="{{ $footerLink }}">{{ $service['title'] }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </nav>

            {{-- Contact --}}
            <div>
                <span class="{{ $footerTitle }} block">Contact Info</span>
                <ul class="mt-[13.7px] flex list-none flex-col gap-[9.2px] p-0">

                    {{-- Address --}}
                    <li class="flex items-start gap-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" aria-hidden="true" class="mt-[3px] shrink-0 text-secondary">
                            <path d="M12 21s7-6.200 7-12a7 7 0 1 0-14 0c0 5.800 7 12 7 12z" />
                            <circle cx="12" cy="9" r="2.500" />
                        </svg>
                        <address class="text-base not-italic leading-[23px] text-snow 4xl:text-[16.08px]">
                            {{ config('var.address') }}
                        </address>
                    </li>

                    {{-- Email --}}
                    <li class="flex items-center gap-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" aria-hidden="true" class="shrink-0 text-secondary">
                            <rect x="3" y="5" width="18" height="14" rx="2" />
                            <path d="M3 7l9 6 9-6" />
                        </svg>
                        <a href="mailto:{{ config('var.email') }}" aria-label="email"
                            class="{{ $footerLink }} [overflow-wrap:anywhere]">
                            {{ config('var.email') }}
                        </a>
                    </li>

                    {{-- Phone --}}
                    <li class="flex items-center gap-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" aria-hidden="true" class="shrink-0 text-secondary">
                            <path
                                d="M6 3h3l2 5-2.500 1.500a12 12 0 0 0 6 6L16 13l5 2v3a3 3 0 0 1-3 3C10.300 21 3 13.700 3 6a3 3 0 0 1 3-3z" />
                        </svg>
                        <a href="tel:{{ config('var.phone') }}" aria-label="phone"
                            class="text-base font-semibold leading-[23px] text-white transition-colors duration-300 hover:text-secondary 4xl:text-[16.08px]">
                            {{ config('var.phone') }}
                        </a>
                    </li>

                    {{-- Timing --}}
                    <li class="flex items-center gap-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" aria-hidden="true" class="shrink-0 text-secondary">
                            <circle cx="12" cy="12" r="9" />
                            <path d="M12 7v5l3 2" />
                        </svg>
                        <span class="text-[13.78px] leading-[18px] text-white">{{ config('var.timing') }}</span>
                    </li>

                </ul>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div
            class="mt-[clamp(40px,3.8vw,73px)] flex flex-col gap-4 border-t-[1.15px] border-secondary pt-[clamp(24px,1.9vw,36.74px)] sm:flex-row sm:items-center sm:justify-between">
            <p class="mb-0 text-[13.78px] leading-[18px] text-white">
                &copy; {{ date('Y') }} {{ config('var.website_name') }}. All rights reserved.
            </p>
            <div class="flex items-center gap-[27.56px]">
                <a href="{{ route('privacy-policy') }}"
                    class="text-[13.78px] leading-[18px] text-white transition-colors duration-300 hover:text-secondary">Privacy
                    Policy</a>
                <a href="{{ route('termsAndConditions') }}"
                    class="text-[13.78px] leading-[18px] text-white transition-colors duration-300 hover:text-secondary">Terms
                    of Use</a>
            </div>
        </div>
    </div>
</footer>
