@props([
    'subtitle' => 'How It Works',
    'title' => 'Simple Trademark Registration Process',
    'description' =>
        'Secure your trademark in just three transparent online steps. Registration has never been this straightforward or convenient.',
    'steps' => [
        [
            'title' => 'Submit Mark Details',
            'text' =>
                'Share your brand name, logo file, and commercial service descriptions through our encrypted intake protocol. Our intake examiners immediately verify classification scopes.',
        ],
        [
            'title' => 'Expert Clearance & Filing',
            'text' =>
                'Our search specialists conduct deep conflict audits, draft the formal specification of goods and services, and file directly into the USPTO electronic database.',
        ],
        [
            'title' => 'Registration & Protection',
            'text' =>
                'Once approved by the examining attorney, receive your official United States Certificate of Registration and unlock exclusive rights with federal brand gating.',
        ],
    ],
])


<div class="container">
    <div class="lg:pl-[19px]">
        <span class="sub-title">{{ $subtitle }}</span>
        <h2 class="section-title mb-0 mt-2.5">{{ $title }}</h2>
        <p class="section-desc mb-0 mt-3.5 max-w-[745px]">{{ $description }}</p>
    </div>

    <div class="relative mt-[clamp(40px,3.7vw,71px)]">

        <svg class="pointer-events-none absolute inset-0 hidden size-full xl:block" viewBox="0 0 1230 400"
            preserveAspectRatio="none" fill="none" stroke="currentColor" stroke-linecap="round" aria-hidden="true"
            style="color: var(--color-frame)">
            <g stroke-width="4">
                <path d="M198 9.5H58.9A50 50 0 0 0 8.9 59.5V200" />
                <path d="M203 390.4H340.4A50 50 0 0 0 390.4 340.4V204" />
                <path d="M424.3 71.6V59.5A50 50 0 0 1 474.3 9.5H755.7A50 50 0 0 1 805.7 59.5V71.6" />
                <path d="M424.3 204V340.4A50 50 0 0 0 474.3 390.4H755.7A50 50 0 0 0 805.7 340.4V204" />
                <path d="M1032 9.5H1171.1A50 50 0 0 1 1221.1 59.5V200" />
                <path d="M1027 390.4H889.6A50 50 0 0 1 839.6 340.4V204" />
            </g>
            <g stroke-width="12">
                <path d="M6 200V343.5A50 50 0 0 0 56 393.5H200" />
                <path d="M1224 200V343.5A50 50 0 0 1 1174 393.5H1030" />
            </g>
            <g stroke-width="4">
                <path d="M390.4 204Q390.4 200.5 394 200.5H420.7Q424.3 200.5 424.3 204" />
                <path d="M839.6 204Q839.6 200.5 836 200.5H809.3Q805.7 200.5 805.7 204" />
            </g>
            <rect x="485.5" y="0" width="259" height="15.4" fill="currentColor" stroke="none" />
        </svg>

        <div class="relative grid gap-6 lg:grid-cols-3 xl:gap-x-[6.5%] xl:px-[2.41%] xl:py-[2.56%]">
            @foreach ($steps as $step)
                <div class="group rounded-[26px] bg-light p-4 xl:aspect-square">
                    <div
                        class="flex h-full flex-col items-center justify-center rounded-[20px] border-[2.6px] border-frame bg-[#FBFBFB] px-5 py-10 text-center
                            transition duration-500 ease-out
                            group-hover:-translate-y-2 group-hover:border-secondary group-hover:shadow-[0_24px_40px_-18px_rgba(44,20,35,0.45)]">

                        <span
                            class="text-[clamp(2.5rem,1.6rem+1.5vw,3.21rem)] font-bold leading-[1.03] text-ink transition duration-500 group-hover:scale-110 group-hover:text-secondary-dark">
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </span>

                        <span class="block mb-0 mt-[31px] text-lg font-bold leading-[25px] text-ink 4xl:text-[19.34px]">
                            {{ $step['title'] }}
                        </span>

                        <p class="mb-0 mt-[21px] max-w-[255px] text-xs leading-[19px] text-ink 4xl:text-[11.78px]">
                            {{ $step['text'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
