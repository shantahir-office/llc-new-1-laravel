@extends('components.layouts.web.master')
@section('main-content')
    {{--  Hero Section Start  --}}
    <section class="hero-banner lg:bg-[url('/assets/images/banners/hero-bg.webp')]">
        <div class="container">
            <div
                class="mt-[18px] grid gap-6 lg:grid-cols-[minmax(0,702fr)_minmax(0,490fr)] lg:gap-10 items-center text-center lg:text-start">
                <div class="div">
                    <span class="block text-xs font-semibold uppercase leading-4 tracking-[0.2em] text-secondary">
                        Strategic Counsel & Jurisprudence
                    </span>
                    <h1
                        class="mb-0 max-w-[702px] text-white leading-[1.3] 4xl:leading-[1] text-[30px] xl:text-[40px] 4xl:text-[60px]">
                        Defending Your Interests with Decisive Strategic Rigor.</h1>
                </div>
                <div class="flex flex-col gap-6 lg:pl-6 lg:pt-4">
                    <p class="mb-0 text-base 4xl:leading-7 text-muted 4xl:text-lg">
                        We engineer boardroom tested legal solutions for complex transnational litigation, high value
                        corporate restructuring, and sovereign asset protection.
                    </p>
                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4">
                        <x-banner-btn />
                        <x-banner-btn variant="outline" text="Explore Services" type="button" function="openChatWidget()"
                            :showArrow="false" />
                    </div>
                </div>
            </div>
            <x-hero-cards />
        </div>
    </section>
    {{--  Hero Section End  --}}


    {{--  About Section Start  --}}
    <section class="relative overflow-hidden bg-light">
        <img src="{{ asset('assets/images/icons/statue.webp') }}" alt="statue of liberty" aria-hidden="true" loading="lazy"
            decoding="async" width="317" height="644"
            class="pointer-events-none absolute right-0 bottom-0 hidden w-[clamp(160px,16.5vw,317px)] lg:block">

        <div class="container relative">
            <div class="grid items-center gap-5 lg:gap-12 lg:grid-cols-[minmax(0,1fr)_minmax(0,448px)] lg:gap-[67px]">
                <div class="flex flex-col gap-6">
                    <span class="sub-title"><span class="w-8 border-t-2 border-secondary-dark"></span>What We Do</span>
                    <h2 class="section-title mb-0 max-w-[699px] leading-none 4xl:tracking-[-1.2px]">
                        We are committed to providing top-notch legal representation to businesses, families, and global
                        enterprises.
                    </h2>
                    <p class="mb-0 max-w-[699px] text-base leading-[26px]">
                        Our firm is committed to providing thoughtful, practical, and personalized legal guidance. We work
                        to understand each client's objectives, identify potential risks, and develop strategies that
                        support informed decisions and long-term success.
                    </p>
                    <div class="pt-2">
                        <x-banner-btn variant="outline" text="Read More" />
                    </div>
                </div>

                <div class="group relative mx-auto w-full max-w-[448px]">
                    <div
                        class="rounded-3xl border border-secondary/30 bg-cream p-4 shadow-[0_20px_25px_-5px_rgba(0,0,0,0.1),0_8px_10px_-6px_rgba(0,0,0,0.1)] transition duration-500 group-hover:border-secondary">
                        <div class="overflow-hidden rounded-2xl">
                            <img src="{{ asset('assets/images/about1.webp') }}" alt="Justice scales and gavel"
                                loading="lazy" decoding="async" width="423" height="423"
                                class="aspect-square w-full object-cover transition duration-700 group-hover:scale-105">
                        </div>
                    </div>

                    <div
                        class="absolute -bottom-[11px] right-3 flex items-center gap-3.5 rounded-2xl border border-secondary/40 bg-primary p-4 shadow-[0_25px_50px_-12px_rgba(0,0,0,0.25)] sm:-right-[11px] sm:p-5">
                        <svg class="shrink-0 text-secondary" width="29" height="28" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                            stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 2l8 4v6c0 5-3.4 8.7-8 10-4.6-1.3-8-5-8-10V6z" />
                            <path d="M8.5 12l2.5 2.5 4.5-5" />
                        </svg>
                        <div>
                            <p class="mb-0 text-sm font-bold leading-6 text-white sm:text-base">100% Retainer Trust</p>
                            <p
                                class="mb-0 text-[11px] font-semibold uppercase leading-4 tracking-[0.6px] text-secondary sm:text-xs">
                                Privileged &amp; Confidential
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-[clamp(48px,4.6vw,88px)] grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @php
                    $features = [
                        [
                            'icon' => 'icon1.svg',
                            'title' => 'Client Focused',
                            'text' =>
                                'Solutions shaped meticulously around your specific corporate charter and personal wealth goals.',
                        ],
                        [
                            'icon' => 'icon2.svg',
                            'title' => 'Strategic Guidance',
                            'text' =>
                                'Thoughtful, proactive counsel navigating complex regulatory frameworks and arbitration.',
                        ],
                        [
                            'icon' => 'icon3.svg',
                            'title' => 'Trusted Partnership',
                            'text' =>
                                'Unflinching communication and transparent execution at every critical step of the matter.',
                        ],
                        [
                            'icon' => 'icon4.svg',
                            'title' => 'Practical Solutions',
                            'text' =>
                                'Actionable legal advice strictly aligned with your commercial timelines and bottom-line.',
                        ],
                    ];
                @endphp

                @foreach ($features as $feature)
                    <div class="feature-card">
                        <span class="feature-icon">
                            <img src="{{ asset('assets/images/icons/' . $feature['icon']) }}" alt="services icon"
                                aria-hidden="true" loading="lazy" width="20" height="20">
                        </span>
                        <span class="block pt-[0.7px] text-lg font-bold leading-7">{{ $feature['title'] }}</span>
                        <p class="mb-0 text-sm leading-[23px]">{{ $feature['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- About Section End --}}


    {{-- Process Section Start --}}
    <section class="border-t border-black/[0.04] bg-white viewport-section">
        <x-process />
    </section>
    {{-- Process Section End --}}


    {{-- Services Section Start --}}
    <section class="overflow-hidden bg-light pt-[clamp(64px,8.6vw,166px)] pb-[clamp(64px,9.6vw,184px)]">
        <x-services />
    </section>
    {{-- Services Section End --}}


    {{-- Contact Form Section Start --}}
    <section class="relative overflow-hidden border-t border-black/[0.04] bg-white viewport-section">
        <x-contact-form />
    </section>
    {{-- Contact Form Section End --}}


    {{-- Testimonials Section Start --}}
    <section class="relative overflow-hidden border-t border-black/[0.04] bg-light lg:py-0">
        <x-testimonials />
    </section>
    {{-- Testimonials Section End --}}


    {{-- Industries Section Start --}}
    <section class="bg-white viewport-section">
        <x-industries />
    </section>
    {{-- Industries Section End --}}

    
    {{-- FAQ Section Start --}}
    <section class="relative overflow-hidden bg-light viewport-section">
        <x-faq />
    </section>
    {{-- FAQ Section End --}}
@endsection
