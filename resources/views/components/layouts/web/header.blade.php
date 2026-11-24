{{-- Menu data --}}
@php
    $currentRoute = Route::currentRouteName();
    $services = config('var.services');

    $menuItems = [
        ['title' => 'Home', 'route' => '/'],
        ['title' => 'About', 'route' => 'about'],
        ['title' => 'Services', 'route' => 'empty', 'dropdown' => $services],
        ['title' => 'Careers', 'route' => 'empty'],
        ['title' => 'Contact Us', 'route' => 'contact'],
    ];

    // Active when the current route is the item itself or one of its dropdown links
    $isActive = function ($item) use ($currentRoute) {
        $routes = array_column($item['dropdown'] ?? [], 'route');
        $routes[] = $item['route'];

        return in_array($currentRoute, $routes, true);
    };

    // Shared link styles
    $navLink = 'rounded-full px-5 py-2 text-sm font-medium leading-5 transition-colors duration-300';
    $navActive = 'bg-secondary font-semibold text-primary';
    $navIdle = 'text-muted hover:text-white';

    $mobileLink =
        'flex items-center justify-between py-4 text-[15px] font-medium tracking-[0.3px] transition-colors duration-300';
    $mobileActive = 'text-secondary';
    $mobileIdle = 'text-white hover:text-secondary';
@endphp

<header class="absolute inset-x-0 top-0 z-50 pt-[clamp(20px,1.8vw,34px)]">
    <div class="container flex items-center justify-between gap-6">

        {{-- Logo --}}
        <a href="{{ route('/') }}" class="shrink-0">
            <img src="{{ asset('assets/images/logo/logo-white.webp') }}" alt="{{ config('var.website_name') }} logo"
                width="146" height="60" class="h-auto w-[clamp(110px,7.6vw,146px)]">
        </a>

        {{-- Desktop menu --}}
        <ul
            class="hidden items-center gap-1 rounded-full border border-white/10 bg-white/5 px-3 py-1.5 lg:flex xl:absolute xl:left-1/2 xl:-translate-x-1/2">
            @foreach ($menuItems as $item)
                @if (!empty($item['dropdown']))
                    <li class="group/nav relative">
                        <button type="button" aria-haspopup="true"
                            class="{{ $navLink }} {{ $isActive($item) ? $navActive : $navIdle }} flex items-center gap-1.5 group-hover/nav:text-white">
                            {{ $item['title'] }}
                            <x-svgs.chevron width="14" height="14"
                                class="transition-transform duration-300 group-hover/nav:rotate-180 group-focus-within/nav:rotate-180" />
                        </button>

                        <div
                            class="invisible absolute left-1/2 top-full z-[1000] -translate-x-1/2 pt-4 transition-[visibility] delay-300 duration-0 group-hover/nav:visible group-hover/nav:delay-0 group-focus-within/nav:visible group-focus-within/nav:delay-0">

                            <ul
                                class="relative m-0 min-w-[290px] origin-top list-none overflow-hidden rounded-2xl border border-white/10 bg-primary-light/60 p-2 opacity-0 shadow-[0_24px_60px_-12px_rgba(0,0,0,0.55)] backdrop-blur-xl backdrop-saturate-150 translate-y-3 scale-95 transition duration-500 ease-[cubic-bezier(0.16,1,0.3,1)]
                                    before:absolute before:inset-x-6 before:top-0 before:h-px before:bg-linear-to-r before:from-transparent before:via-secondary before:to-transparent
                                    group-hover/nav:translate-y-0 group-hover/nav:scale-100 group-hover/nav:opacity-100
                                    group-focus-within/nav:translate-y-0 group-focus-within/nav:scale-100 group-focus-within/nav:opacity-100
                                    motion-reduce:transition-none">

                                @foreach ($item['dropdown'] as $sub)
                                    <li style="--i: {{ $loop->index }}"
                                        class="translate-y-2 opacity-0 blur-sm transition duration-[400ms] ease-[cubic-bezier(0.16,1,0.3,1)]
                                            group-hover/nav:translate-y-0 group-hover/nav:opacity-100 group-hover/nav:blur-none group-hover/nav:delay-[calc(var(--i)*45ms+80ms)]
                                            group-focus-within/nav:translate-y-0 group-focus-within/nav:opacity-100 group-focus-within/nav:blur-none group-focus-within/nav:delay-[calc(var(--i)*45ms+80ms)]
                                            motion-reduce:transition-none">
                                        <a href="{{ route($sub['route']) }}"
                                            class="group/link relative flex items-center justify-between gap-4 rounded-xl px-4 py-2.5 text-sm font-medium transition-all duration-300
                                                before:absolute before:left-0 before:top-1/2 before:h-0 before:w-0.5 before:-translate-y-1/2 before:rounded-full before:bg-secondary before:transition-all before:duration-300
                                                hover:bg-white/[0.06] hover:pl-5 hover:text-secondary hover:before:h-5
                                                {{ $currentRoute === $sub['route'] ? 'bg-white/[0.06] pl-5 text-secondary before:h-5' : 'text-muted' }}">
                                            <span>{{ $sub['title'] }}</span>
                                            <x-svgs.arrow-right width="14" height="13"
                                                class="shrink-0 -translate-x-2 opacity-0 transition duration-300 group-hover/link:translate-x-0 group-hover/link:opacity-100" />
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @else
                    <li>
                        <a href="{{ route($item['route']) }}"
                            class="{{ $navLink }} block {{ $isActive($item) ? $navActive : $navIdle }}">
                            {{ $item['title'] }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>

        {{-- Right side --}}
        <div class="flex items-center gap-3 sm:gap-4">
            <div class="hidden xl:block">
                <x-banner-btn />
            </div>
            <a href="tel:{{ config('var.phone') }}" aria-label="Call us"
                class="flex size-10 items-center justify-center rounded-full border border-secondary/30 bg-white/10 text-secondary transition hover:bg-secondary hover:text-primary">
                <x-svgs.phone />
            </a>

            {{-- Mobile toggle --}}
            <button type="button"
                class="flex size-10 items-center justify-center rounded-full border border-white/10 bg-white/5 text-white lg:hidden"
                data-twe-offcanvas-toggle data-twe-target="#mobileMenu" aria-controls="mobileMenu"
                aria-label="Open menu">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" aria-hidden="true">
                    <path d="M4 7h16M4 12h16M4 17h16" />
                </svg>
            </button>
        </div>
    </div>
</header>

{{-- Mobile offcanvas menu  --}}
<div id="mobileMenu" tabindex="-1" data-twe-offcanvas-init aria-label="Mobile menu"
    class="invisible fixed bottom-0 left-0 top-0 z-[1045] flex w-80 max-w-full -translate-x-full flex-col overflow-hidden bg-primary text-white shadow-[20px_0_60px_-20px_rgba(0,0,0,0.7)] transition duration-300 ease-in-out data-[twe-offcanvas-show]:translate-x-0 lg:hidden">

    {{-- Gold glow --}}
    <span aria-hidden="true"
        class="pointer-events-none absolute -right-24 -top-24 -z-10 rounded-full bg-secondary/20 p-32 blur-3xl"></span>
    <span aria-hidden="true"
        class="pointer-events-none absolute -bottom-32 -left-24 -z-10 rounded-full bg-secondary/10 p-32 blur-3xl"></span>

    {{-- Header --}}
    <div class="flex items-center justify-between border-b border-white/10 px-6 py-5">
        <img src="{{ asset('assets/images/logo/logo-white.webp') }}" alt="{{ config('var.website_name') }} logo"
            width="110" height="45" class="h-auto w-[110px]" loading="lazy">

        <button type="button" data-twe-offcanvas-dismiss aria-label="Close menu"
            class="flex size-10 items-center justify-center rounded-full border border-secondary/30 bg-white/5 text-secondary transition-all duration-300 hover:rotate-90 hover:bg-secondary hover:text-primary">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" aria-hidden="true">
                <path d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    {{-- Menu --}}
    <nav aria-label="Mobile navigation" class="grow overflow-y-auto px-6 py-2">
        <ul class="flex list-none flex-col p-0">
            @foreach ($menuItems as $item)
                <li class="border-b border-white/10">
                    @if (!empty($item['dropdown']))
                        <details class="group">
                            <summary
                                class="{{ $mobileLink }} cursor-pointer list-none {{ $isActive($item) ? $mobileActive : $mobileIdle }} [&::-webkit-details-marker]:hidden">
                                {{ $item['title'] }}
                                <span
                                    class="flex size-7 items-center justify-center rounded-full border border-white/15 transition-all duration-300 group-open:rotate-180 group-open:border-secondary group-open:bg-secondary group-open:text-primary">
                                    <x-svgs.chevron width="12" height="12" />
                                </span>
                            </summary>

                            <ul class="mb-4 flex list-none flex-col gap-0.5 border-l border-secondary/50 p-0 pl-4">
                                @foreach ($item['dropdown'] as $sub)
                                    <li>
                                        <a href="{{ route($sub['route']) }}"
                                            @if ($currentRoute === $sub['route']) aria-current="page" @endif
                                            class="block py-2 text-sm transition-all duration-300 hover:translate-x-1 hover:text-secondary {{ $currentRoute === $sub['route'] ? 'font-semibold text-secondary' : 'text-white/70' }}">
                                            {{ $sub['title'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </details>
                    @else
                        <a href="{{ route($item['route']) }}"
                            @if ($isActive($item)) aria-current="page" @endif
                            class="{{ $mobileLink }} {{ $isActive($item) ? $mobileActive : $mobileIdle }}">
                            {{ $item['title'] }}
                            @if ($isActive($item))
                                <span aria-hidden="true"
                                    class="size-2 rounded-full bg-secondary shadow-[0_0_10px_rgba(197,168,128,0.9)]"></span>
                            @endif
                        </a>
                    @endif
                </li>
            @endforeach
        </ul>
    </nav>

    {{-- Bottom --}}
    <div class="border-t border-white/10 px-6 py-5">
        <ul class="mb-5 flex list-none flex-col gap-3 p-0 text-sm">
            <li>
                <a href="tel:{{ config('var.phone') }}"
                    class="flex items-center gap-3 font-semibold text-white transition-colors hover:text-secondary">
                    <span
                        class="flex size-8 shrink-0 items-center justify-center rounded-full bg-secondary/15 text-secondary">
                        <x-svgs.phone />
                    </span>
                    {{ config('var.phone') }}
                </a>
            </li>
            <li>
                <a href="mailto:{{ config('var.email') }}"
                    class="flex items-center gap-3 text-white/80 transition-colors hover:text-secondary [overflow-wrap:anywhere]">
                    <span
                        class="flex size-8 shrink-0 items-center justify-center rounded-full bg-secondary/15 text-secondary">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="3" y="5" width="18" height="14" rx="2" />
                            <path d="M3 7l9 6 9-6" />
                        </svg>
                    </span>
                    {{ config('var.email') }}
                </a>
            </li>
            <li class="flex items-center gap-3 text-white/60">
                <span
                    class="flex size-8 shrink-0 items-center justify-center rounded-full bg-secondary/15 text-secondary">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="9" />
                        <path d="M12 7v5l3 2" />
                    </svg>
                </span>
                {{ config('var.timing') }}
            </li>
        </ul>
    </div>
</div>
