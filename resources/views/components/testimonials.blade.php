@props([
    'subtitle' => 'Client Experiences Matter',
    'title' => 'What Our Clients Are Saying',

    'testimonials' => [
        [
            'quote' =>
                'Their team delivered exceptional clarity on our complex corporate restructuring. Straightforward, responsive, and deeply knowledgeable at every step. Indispensable strategic partner.',
            'name' => 'Kevin Andrew Vance',
            'role' => 'Chief Executive Officer, Astra Global',
            'rating' => 5,
        ],
        [
            'quote' =>
                'They handled our contract dispute with remarkable precision. Every update was clear, every deadline was met, and the outcome protected our business exactly as we hoped.',
            'name' => 'Sophia Martinez',
            'role' => 'Managing Director, Northbridge Logistics',
            'rating' => 5,
        ],
        [
            'quote' =>
                'Registering and protecting our trademarks felt effortless with their guidance. They explained each step in plain language and moved faster than we expected.',
            'name' => 'Daniel Brooks',
            'role' => 'Founder, Lumen Creative Studio',
            'rating' => 5,
        ],
        [
            'quote' =>
                'From drafting new workplace policies to resolving a sensitive employee matter, their advice was practical, discreet, and always focused on our long-term goals.',
            'name' => 'Rachel Kim',
            'role' => 'Head of People, Vertex Health Group',
            'rating' => 5,
        ],
        [
            'quote' =>
                'Relocating our senior team abroad seemed overwhelming until they took charge. Their immigration team managed every visa and filing with care and kept us informed throughout.',
            'name' => 'Omar Haddad',
            'role' => 'Chief Operating Officer, Meridian Tech Solutions',
            'rating' => 5,
        ],
    ],
])


<svg width="885" height="790" viewBox="0 0 885 790" fill="none" preserveAspectRatio="none"
    xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
    class="pointer-events-none absolute inset-y-0 left-0 hidden h-full 4xl:h-auto w-[50vw] lg:block 4xl:w-[872px]">
    <path d="M0 6.40816C0 6.40816 1193.5 -52.0909 808 184.409C422.5 420.908 635 789.408 635 789.408H0V6.40816Z"
        fill="url(#paint0_linear_14662_605)" />
    <defs>
        <linearGradient id="paint0_linear_14662_605" x1="317.5" y1="6.40821" x2="317.5" y2="789.408"
            gradientUnits="userSpaceOnUse">
            <stop stop-color="#2D1424" />
            <stop offset="1" stop-color="#C5A880" />
        </linearGradient>
    </defs>
</svg>

<img src="{{ asset('assets/images/icons/vector1.webp') }}" alt="vector1" aria-hidden="true" loading="lazy"
    decoding="async" width="477" height="637"
    class="pointer-events-none absolute right-0 top-[93px] hidden h-auto lg:block">

<div class="container relative">
    <div class="grid items-center gap-10 lg:grid-cols-[minmax(0,41%)_minmax(0,1fr)] lg:gap-0">
        <div class="order-2 flex justify-center lg:order-1 lg:justify-start">
            <img src="{{ asset('assets/images/testimonials/user1.webp') }}" alt="Client portrait" loading="lazy"
                decoding="async" width="535" height="600"
                class="lg:block h-auto w-full max-w-[535px] lg:w-[102%] hidden 4xl:mt-[100px]">
        </div>

        <div class="order-1 min-w-0 lg:order-2 lg:py-10">
            <div class="flex items-center gap-5">
                <span
                    class="flex size-14 shrink-0 items-center justify-center rounded-full bg-primary shadow-[0_5px_7.5px_-1.2px_rgba(0,0,0,0.1),0_2.5px_5px_-2.5px_rgba(0,0,0,0.1)] 4xl:size-[69.75px]">
                    <svg width="30" height="22" viewBox="0 0 35 25" fill="#C5A880" aria-hidden="true">
                        <path
                            d="M0 25V14.6C0 6.4 4.4 1.5 13.2 0l1.6 3.4C10.5 4.6 8.2 7 7.9 10.6h6.9V25zm18.5 0V14.6C18.5 6.4 22.9 1.5 31.7 0l1.6 3.4c-4.3 1.2-6.6 3.6-6.9 7.2h6.9V25z" />
                    </svg>
                </span>
                <div class="flex flex-col gap-[3px] pt-[6.85px]">
                    <span
                        class="sub-title text-secondary">{{ $subtitle }}</span>
                    <h2 class="mb-0 section-title 4xl:text-[36px] 4xl:leading-10">{{ $title }}</h2>
                </div>
            </div>

            <div class="swiper testimonial-swiper mx-0! mt-[30px] max-w-[734px]">
                <div class="swiper-wrapper">
                    @foreach ($testimonials as $item)
                        <div class="swiper-slide">
                            <blockquote class="text-lg italic leading-[1.4] text-quote sm:text-xl 4xl:text-[24.91px]">
                                "{{ $item['quote'] }}"
                            </blockquote>
                            <div class="mt-[29.4px] border-t-[1.25px] border-[#F3F4F6] pt-2.5">
                                <span class="block mb-0 text-lg font-bold leading-[30px] 4xl:text-[19.93px]">
                                    {{ $item['name'] }}</span>
                                <p class="mb-0 text-sm leading-5 text-[#6B7280] 4xl:text-[14.95px]">
                                    {{ $item['role'] }}</p>
                                <div class="flex gap-[5px] pt-[5px] text-secondary"
                                    aria-label="{{ $item['rating'] }} out of 5 stars">
                                    @for ($i = 0; $i < $item['rating']; $i++)
                                        <x-svgs.star />
                                    @endfor
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-[44px] flex gap-[15px]">
                <button type="button" class="circle-btn testi-prev" aria-label="Previous testimonial">
                    <x-svgs.chevron direction="left" />
                </button>
                <button type="button" class="circle-btn circle-btn-fill testi-next" aria-label="Next testimonial">
                    <x-svgs.chevron direction="right" />
                </button>
            </div>
        </div>
    </div>
</div>
