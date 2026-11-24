@props([
    'subtitle' => 'Knowledge Base',
    'title' => 'Frequently Asked Questions',
    'faqs' => [
        [
            'question' => 'What is trademark registration, and why do I need it?',
            'answer' => 'A trademark is used to identify your goods and services from others. If your trademark is confusingly similar to an existing mark or pending registration application, you may not be authorized to register it. For more information, please feel free to contact us.',
        ],
        [
            'question' => 'How long does the trademark registration process take?',
            'answer' => 'Timelines depend on the examining office\'s workload and whether any objections are raised. Our team keeps you updated at every stage, from filing through examination to final registration.',
        ],
        [
            'question' => 'What assets can I register as a trademark?',
            'answer' => 'Brand names, logos, slogans and other distinctive identifiers that distinguish your goods or services can generally be protected. We review each asset to confirm it is eligible before filing.',
        ],
        [
            'question' => 'Why should I conduct a clearance search before filing?',
            'answer' => 'A clearance search uncovers conflicting marks early, reducing the risk of refusal, opposition or costly rebranding after you have already invested in your brand.',
        ],
        [
            'question' => 'What happens if my trademark application is opposed?',
            'answer' => 'If a third party files an opposition, our attorneys assess the claim, prepare your response and represent you throughout the proceeding, including settlement discussions where appropriate.',
        ],
    ],
])


    <img src="{{ asset('assets/images/icons/vector1.webp') }}" alt="vector 1" aria-hidden="true" loading="lazy"
        decoding="async" width="477" height="637"
        class="pointer-events-none absolute right-0 bottom-0 hidden lg:block">

    <div class="container relative">
        <span class="sub-title text-primary">{{ $subtitle }}</span>
        <h2 class="mb-0 mt-1.5 section-title">{{ $title }}</h2>

        <div id="faqAccordion" class="mt-[clamp(24px,2.1vw,41px)] flex flex-col gap-[10px] lg:gap-[25px]">
            @foreach ($faqs as $faq)
                @php $id = 'faq-' . $loop->iteration; @endphp

                <div>
                    <button type="button"
                        class="flex w-full max-w-[678px] items-center justify-between gap-6 rounded-[10px] bg-primary px-5 py-4 sm:p-[25.43px] text-left text-sm md:text-lg 4xl:text-[21.19px] leading-[23px] lg:leading-[30px] font-semibold text-white shadow-[0_1px_2px_rgba(0,0,0,0.05)] transition-colors duration-300 hover:bg-primary-light group"
                        data-twe-collapse-init data-twe-target="#{{ $id }}"
                        aria-controls="{{ $id }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                        @unless ($loop->first) data-twe-collapse-collapsed @endunless>
                        <span>{{ $faq['question'] }}</span>
                        <x-svgs.chevron width="16" height="16"
                            class="shrink-0 rotate-180 transition-transform duration-300 group-data-[twe-collapse-collapsed]:rotate-0" />
                    </button>

                    <div id="{{ $id }}" data-twe-collapse-item data-twe-parent="#faqAccordion"
                        class="visible! {{ $loop->first ? '' : 'hidden' }}"
                        @if ($loop->first) data-twe-collapse-show @endif>
                        <div class="pt-4">
                            <div
                                class="max-w-[1196px] rounded-[10px] border-[1.5px] border-primary bg-white px-5 py-5 sm:px-[27px] sm:py-[23px] lg:ml-[25px]">
                                <p
                                    class="mb-0 text-[13px] md:text-[15px] leading-[23px] lg:leading-[30px] text-primary 4xl:text-[15.91px]">
                                    {{ $faq['answer'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

