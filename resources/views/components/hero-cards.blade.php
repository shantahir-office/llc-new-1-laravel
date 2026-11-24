    @php
        $heroCards = [
            ['image' => 'hero-1.webp', 'tag' => 'Litigation Chambers', 'title' => 'Appellate Defense'],
            ['image' => 'hero-2.webp', 'tag' => 'Corporate M&A', 'title' => 'Commercial Contracts'],
            ['image' => 'hero-3.webp', 'tag' => 'Board Advisory', 'title' => 'Institutional Counsel'],
            ['image' => 'hero-4.webp', 'tag' => 'Global Trade', 'title' => 'Transnational Trade'],
        ];

    @endphp

    <div class="mt-[clamp(40px,4.2vw,80px)] grid grid-cols-2 gap-4 lg:grid-cols-4 lg:gap-6">
        @foreach ($heroCards as $card)
            <div class="animate-float hover:[animation-play-state:paused] motion-reduce:animate-none {{ $loop->even ? 'lg:mt-6' : '' }}"
                style="animation-delay: -{{ $loop->index * 1.5 }}s">
                <article
                    class="group relative aspect-[290/406] overflow-hidden rounded-2xl border border-white/5 bg-black/40 shadow-[0_25px_50px_-12px_rgba(0,0,0,0.25)] transition duration-500 ease-[cubic-bezier(0.16,1,0.3,1)] hover:-translate-y-3 hover:border-secondary/60 hover:shadow-[0_30px_60px_-15px_rgba(197,168,128,0.45)]">
                    <img src="{{ asset('assets/images/banners/' . $card['image']) }}" alt="{{ $card['title'] }}"
                        width="290" height="406" decoding="async"
                        class="absolute inset-px size-[calc(100%-2px)] rounded-2xl object-cover transition duration-[1200ms] ease-out group-hover:scale-110 group-hover:rotate-1 {{ $loop->last ? 'grayscale group-hover:grayscale-0' : '' }}">
                    <span
                        class="absolute inset-0 bg-linear-to-t from-primary via-primary/30 to-transparent transition-opacity duration-500 group-hover:opacity-90"></span>
                    <span
                        class="absolute inset-0 bg-linear-to-t from-secondary/25 to-transparent opacity-0 transition-opacity duration-500 group-hover:opacity-100"></span>
                    <span
                        class="pointer-events-none absolute inset-y-0 -left-full w-3/4 -skew-x-12 bg-linear-to-r from-transparent via-white/25 to-transparent transition-all duration-1000 ease-out group-hover:left-[130%]"></span>
                    <div class="absolute inset-x-4 bottom-4 flex flex-col gap-1 pt-[5px]">
                        <span
                            class="text-[10px] font-semibold uppercase leading-4 tracking-[0.55px] text-secondary transition-all duration-500 group-hover:tracking-[2px] sm:text-[11px]">
                            {{ $card['tag'] }}
                        </span>
                        <span
                            class="block mb-0 text-sm font-semibold leading-[22px] text-white transition-transform duration-500 group-hover:-translate-y-1 sm:text-base">
                            {{ $card['title'] }}
                        </span>
                        <span class="mt-1 h-px w-0 bg-secondary transition-all duration-500 group-hover:w-14"></span>
                    </div>
                </article>
            </div>
        @endforeach
    </div>
