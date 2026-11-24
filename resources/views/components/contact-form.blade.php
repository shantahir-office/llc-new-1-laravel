@props([
    'title' => 'Book a Free Consultation',
    'description' => 'Receive an initial case assessment within 4 business hours from a partner-level attorney.',
    'services' => [
        [
            'title' => 'Legal Disputes',
            'route' => 'legal-disputes',
            'image' => 'assets/images/home/service-1.webp',
            'description' =>
                'Strategic trial representation for business disputes, contract breaches and complex claims.',
        ],
        [
            'title' => 'Commercial Law',
            'route' => 'commercial-law',
            'image' => 'assets/images/home/service-2.webp',
            'description' =>
                'Legal support for contracts, transactions, partnerships and everyday commercial decisions.',
        ],
        [
            'title' => 'Enterprise Law',
            'route' => 'enterprise-law',
            'image' => 'assets/images/home/service-3.webp',
            'description' =>
                'Guidance on governance, boardroom fiduciary standards, restructuring and shareholder matters.',
        ],
        [
            'title' => 'Intellectual Property Rights',
            'route' => 'intellectual-property-rights',
            'image' => 'assets/images/home/service-4.webp',
            'description' =>
                'Trademark, copyright and patent protection through registration, licensing and enforcement.',
        ],
        [
            'title' => 'Labor & Employment Law',
            'route' => 'labor-employment-law',
            'image' => 'assets/images/home/service-5.webp',
            'description' =>
                'Workplace policies, executive retention, compliance and dispute resolution for employers.',
        ],
        [
            'title' => 'Immigration Law',
            'route' => 'immigration-law',
            'image' => 'assets/images/home/service-6.webp',
            'description' =>
                'Guidance for individuals and global enterprises navigating visas, residency and cross-border mobility.',
        ],
    ],
])

<img src="{{ asset('assets/images/icons/statue2.webp') }}" alt="statue 2" aria-hidden="true" loading="lazy" decoding="async"
    width="458" height="930"
    class="pointer-events-none absolute left-0 bottom-0 hidden w-[clamp(200px,23.9vw,458px)]  lg:block h-auto">

<div class="container relative">
    <div
        class="mx-auto grid max-w-[1244px] overflow-hidden rounded-3xl border border-secondary/20 bg-primary-light shadow-[0_25px_50px_-12px_rgba(0,0,0,0.25)] lg:grid-cols-[minmax(0,517px)_minmax(0,1fr)] 4xl:-mx-1.5">

        {{-- Left visual --}}
        <div class="relative flex items-end p-5 pt-[200px] sm:p-8 sm:pt-[260px] lg:pt-8">
            <img src="{{ asset('assets/images/contact-left.webp') }}" alt="law firm" aria-hidden="true" loading="lazy"
                decoding="async" width="517" height="560" class="absolute inset-0 size-full object-cover">
            <div
                class="relative flex w-full flex-col gap-[6.6px] rounded-2xl border border-white/10 bg-primary/80 px-6 pb-6 pt-[30px] backdrop-blur-[6px]">
                <span
                    class="text-xs font-semibold uppercase leading-4 tracking-[1.2px] text-secondary 4xl:text-[12.12px]">Priority
                    Retainer Desk</span>
                <h3 class="mb-0 text-lg font-bold leading-7 text-white 4xl:text-[18.18px]">Immediate Partner
                    Consultation</h3>
                <p class="mb-0 pt-[1.5px] text-xs leading-5 text-muted 4xl:text-[12.12px]">
                    All preliminary inquiries are strictly protected under attorney-client privilege protocols.
                </p>
            </div>
        </div>

        {{-- Right form --}}
        <div class="flex flex-col gap-6 p-6 sm:p-10 4xl:p-[56.57px]">
            <div class="flex flex-col gap-2">
                <span
                    class="sub-title text-secondary">
                    <span class="w-6 border-t border-secondary"></span>Get In Touch
                </span>
                <h2 class="mb-0 section-title 4xl:text-[36px] 4xl:leading-10 text-white">{{ $title }}
                </h2>
                <p class="mb-0 text-sm leading-5 text-muted 4xl:text-[14.14px]">{{ $description }}</p>
            </div>

            <form class="flex flex-col gap-4" novalidate>
                <div class="grid gap-4 sm:grid-cols-2">
                    <div>
                        <label for="cf_name" class="form-label">Full Legal Name</label>
                        <input id="cf_name" type="text" class="form-control name" placeholder="Enter Your Name"
                            required>
                    </div>
                    <div>
                        <label for="cf_phone" class="form-label">Phone Number</label>
                        <input id="cf_phone" type="tel" class="form-control phone" placeholder="Enter Your Phone Number">
                    </div>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <div>
                        <label for="cf_email" class="form-label">Corporate Email</label>
                        <input id="cf_email" type="email" class="form-control email"
                            placeholder="Enter Your Email Address">
                    </div>
                    <div>
                        <span class="form-label">Practice Area</span>

                        <div class="relative" data-twe-dropdown-ref>
                            <button type="button" id="practiceDropdown" data-twe-dropdown-toggle-ref
                                aria-expanded="false"
                                class="form-control flex items-center justify-between gap-3 text-left">
                                <span class="truncate" data-practice-label>{{ $services[0]['title'] }}</span>
                                <x-svgs.chevron width="14" height="14" class="shrink-0" />
                            </button>
                            <input type="hidden" class="practice-area" value="{{ $services[0]['title'] }}"
                                data-practice-input>

                            <ul class="absolute z-[1000] m-0 hidden w-full list-none overflow-hidden rounded-2xl bg-white py-2 shadow-lg data-[twe-dropdown-show]:block"
                                aria-labelledby="practiceDropdown" data-twe-dropdown-menu-ref>
                                @foreach ($services as $service)
                                    <li>
                                        <a href="#" data-twe-dropdown-item-ref data-practice-item
                                            class="block px-5 py-2.5 text-sm font-medium text-primary hover:bg-cream">
                                            {{ $service['title'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="pb-1.5">
                    <label for="cf_message" class="form-label">Brief Description of Matter</label>
                    <textarea id="cf_message" rows="3" class="form-control message resize-none rounded-2xl p-4"
                        placeholder="Enter Your Message" required></textarea>
                </div>

                <p id="errormsg" class="mb-0 hidden text-sm text-red-400"></p>

                <div class="pt-2">
                    <x-banner-btn btnClass="contactformsubmit" text="Book Appointment" type="button" />
                </div>
            </form>
        </div>
    </div>
</div>
