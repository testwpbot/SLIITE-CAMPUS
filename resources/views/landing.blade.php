<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIITE CAMPUS — Synergy Institute of Information Technology</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Outfit:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: { DEFAULT: '#0F2D4D', 800: '#0A2342', 700: '#123259', 600: '#1A3A5F' },
                        teal: { DEFAULT: '#0E9F9C', light: '#14B8B0', 50: '#ECFEFF' },
                        gold: { DEFAULT: '#FFB703', light: '#FFC933', dark: '#E9A000' },
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'system-ui', 'sans-serif'],
                        display: ['Outfit', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        .glass { backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); }
        .hero-bg { background: radial-gradient(ellipse at 72% 18%, rgba(14,159,156,0.10) 0%, transparent 55%), radial-gradient(ellipse at 8% 85%, rgba(212,160,23,0.07) 0%, transparent 50%), linear-gradient(180deg, #F8FBFC 0%, #EEF4F6 100%); }
        .hero-card { background: linear-gradient(180deg, #020203 0%, #0A0A0A 50%, #111111 100%); box-shadow: 0 25px 80px -12px rgba(2,6,23,0.35), 0 0 0 1px rgba(255,255,255,0.06) inset; }
        .gold-ring { box-shadow: 0 0 0 1px rgba(212,160,23,0.25), 0 20px 60px rgba(2,6,23,0.15); }
    </style>
</head>
<body class="font-sans text-slate-800 antialiased bg-white">
    <!-- Top Bar -->
    <div class="hidden md:block bg-navy-800 text-white/80 text-xs">
        <div class="max-w-[1280px] mx-auto px-6 py-2.5 flex justify-between items-center">
            <div class="flex items-center gap-6">
                <span class="flex items-center gap-2"><i class="ri-phone-line text-teal-light"></i> +94 11 754 4801</span>
                <span class="flex items-center gap-2"><i class="ri-mail-line text-teal-light"></i> info@siite.lk</span>
                <span class="flex items-center gap-2"><i class="ri-map-pin-line text-teal-light"></i> Malabe, Colombo, Sri Lanka</span>
            </div>
            <div class="flex items-center gap-3">
                <span>Follow us:</span>
                <a href="#" class="w-6 h-6 rounded-full bg-white/10 grid place-items-center hover:bg-white/20"><i class="ri-facebook-fill"></i></a>
                <a href="#" class="w-6 h-6 rounded-full bg-white/10 grid place-items-center hover:bg-white/20"><i class="ri-linkedin-fill"></i></a>
                <a href="#" class="w-6 h-6 rounded-full bg-white/10 grid place-items-center hover:bg-white/20"><i class="ri-instagram-line"></i></a>
            </div>
        </div>
    </div>

    <!-- Navbar — FIXED alignment: logo | centered nav | actions -->
    <header class="sticky top-0 z-50 bg-white/90 glass border-b border-slate-200/60 shadow-[0_2px_24px_rgba(15,45,77,0.06)]">
        <div class="max-w-[1280px] mx-auto px-6 h-[72px] flex items-center">
            <a href="/" class="flex items-center shrink-0">
                <img src="/images/logo-removebg-preview.png" alt="SIITE Campus" class="h-[50px] w-auto object-contain">
            </a>
            <nav class="hidden lg:flex items-center gap-7 text-[14px] font-semibold text-slate-700 mx-auto">
                <a href="#" class="text-navy border-b-2 border-gold pb-1 leading-none">Home</a>
                <a href="#" class="hover:text-navy flex items-center gap-1 leading-none">Programs <i class="ri-arrow-down-s-line text-slate-400 text-[16px]"></i></a>
                <a href="#" class="hover:text-navy leading-none">About</a>
                <a href="#" class="hover:text-navy leading-none">LMS</a>
                <a href="#" class="hover:text-navy leading-none">Admissions</a>
                <a href="#" class="hover:text-navy leading-none">Contact</a>
            </nav>
            <div class="flex items-center gap-3 shrink-0">
                <a href="/login" class="hidden md:inline-flex items-center gap-1.5 text-sm font-bold text-navy hover:text-navy-600 leading-none"><i class="ri-user-3-line text-[16px]"></i> Student Login</a>
                <a href="/register" class="inline-flex items-center gap-1.5 bg-gold hover:bg-gold-dark text-navy font-extrabold text-sm px-6 h-10 rounded-full shadow-[0_8px_20px_rgba(255,183,3,0.35)] transition leading-none">
                    Apply Now <i class="ri-arrow-right-line"></i>
                </a>
                <button class="lg:hidden w-9 h-9 rounded-xl bg-slate-100 grid place-items-center"><i class="ri-menu-line text-xl"></i></button>
            </div>
        </div>
    </header>

    <!-- HERO — SkillCraft style: person floating, doodles, no dark card — POLISHED -->
    <section class="relative overflow-hidden bg-gradient-to-br from-[#F0FAF8] via-white to-[#FFF8F0]">
        <!-- Line-art doodles — slightly more visible -->
        <div class="absolute inset-0 z-0 pointer-events-none">
            <i class="ri-ruler-line absolute top-[12%] left-[2%] text-[28px] text-slate-500/20 rotate-12"></i>
            <i class="ri-global-line absolute bottom-[10%] left-[1.5%] text-[58px] text-slate-500/12"></i>
            <i class="ri-book-open-line absolute bottom-[38%] left-[38%] text-[36px] text-slate-400/12 rotate-12 hidden lg:block"></i>
            <i class="ri-compass-3-line absolute top-[45%] left-[44%] text-[22px] text-slate-400/15 rotate-12 hidden lg:block"></i>
        </div>

        <div class="relative z-10 max-w-[1280px] mx-auto px-6 pt-6 lg:pt-8 pb-0">
            <div class="grid lg:grid-cols-2 gap-8 items-start">
                <!-- Left — polished spacing -->
                <div class="pb-8 lg:pb-10 pt-2">
                    <h1 class="font-display font-extrabold text-[40px] sm:text-[48px] lg:text-[54px] leading-[0.98] tracking-[-0.03em] text-[#0F2D4D]">
                        Shape Your <span class="text-[#E8A500]">Future</span><br>
                        with <span class="text-[#0E9F9C]">SIITE CAMPUS</span>
                    </h1>
                    <p class="text-slate-500 text-[14.5px] leading-7 mt-5 max-w-[520px]">
                        Join thousands of learners and unlock success with expert-led programs at SIITE Campus. Learn at your pace and gain valuable skills for career growth!
                    </p>

                    <div class="mt-7 flex flex-wrap items-center gap-3">
                        <a href="#" class="inline-flex items-center justify-center bg-[#0E9F9C] hover:bg-[#0B8A87] text-white font-extrabold px-7 h-[46px] rounded-full text-sm shadow-[0_8px_20px_rgba(14,159,156,0.25)] transition">Get Started Now</a>
                        <a href="#" class="inline-flex items-center justify-center gap-2 bg-white border border-slate-200 text-navy font-bold pl-1.5 pr-5 h-[46px] rounded-full text-sm shadow-sm">
                            <span class="w-9 h-9 rounded-full bg-[#FFB703] text-white grid place-items-center shrink-0"><i class="ri-play-fill text-lg ml-0.5"></i></span>
                            How It Works
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="mt-8 flex gap-8">
                        <div><div class="text-[22px] font-extrabold text-navy">12K+</div><div class="text-xs text-slate-500 font-semibold">Success Stories</div></div>
                        <div><div class="text-[22px] font-extrabold text-navy">150+</div><div class="text-xs text-slate-500 font-semibold">Trendy Subjects</div></div>
                        <div><div class="text-[22px] font-extrabold text-navy">98%</div><div class="text-xs text-slate-500 font-semibold">Employability</div></div>
                    </div>

                    <div class="mt-6 inline-flex items-center gap-3 bg-white rounded-full px-3 py-2.5 shadow-sm border border-slate-100">
                        <span class="w-8 h-8 rounded-full bg-navy text-white grid place-items-center shrink-0"><i class="ri-star-fill text-gold text-sm"></i></span>
                        <span class="text-xs leading-tight"><b>One million students</b> have given a 5 star review to SIITE</span>
                    </div>
                </div>

                <!-- Right — Person POLISHED: not clipped, bigger icons, confetti off hair -->
                <div class="relative flex justify-center lg:justify-end items-end overflow-visible lg:h-[620px] h-[540px]">
                    <!-- subtle glow behind person -->
                    <div class="absolute bottom-12 left-1/2 -translate-x-1/2 w-[560px] h-[420px] bg-gradient-to-t from-teal/12 via-gold/6 to-transparent rounded-full blur-2xl"></div>

                    <!-- Floating icons — bigger (w-11) & tighter orbit -->
                    <div class="absolute top-[10%] right-[14%] w-11 h-11 bg-white rounded-xl shadow-[0_12px_24px_rgba(0,0,0,0.08)] grid place-items-center border border-slate-100 z-20"><i class="ri-graduation-cap-fill text-teal text-lg"></i></div>
                    <div class="absolute top-[20%] right-[4%] w-11 h-11 bg-white rounded-xl shadow-[0_12px_24px_rgba(0,0,0,0.08)] grid place-items-center border border-slate-100 z-20"><span class="text-xs font-extrabold text-blue-600">Ps</span></div>
                    <div class="absolute top-[38%] right-[0%] w-11 h-11 bg-white rounded-xl shadow-[0_12px_24px_rgba(0,0,0,0.08)] grid place-items-center border border-slate-100 z-20"><i class="ri-book-open-line text-amber-600 text-lg"></i></div>
                    <div class="absolute bottom-[22%] right-[7%] w-11 h-11 bg-white rounded-xl shadow-[0_12px_24px_rgba(0,0,0,0.08)] grid place-items-center border border-slate-100 z-20"><i class="ri-youtube-fill text-red-500 text-lg"></i></div>
                    <div class="absolute bottom-[38%] left-[2%] w-11 h-11 bg-white rounded-xl shadow-[0_12px_24px_rgba(0,0,0,0.08)] grid place-items-center border border-slate-100 z-20 hidden lg:grid"><i class="ri-code-s-slash-line text-navy text-lg"></i></div>
                    <div class="absolute top-[30%] left-[4%] w-11 h-11 bg-white rounded-xl shadow-[0_12px_24px_rgba(0,0,0,0.08)] grid place-items-center border border-slate-100 z-20"><i class="ri-quill-pen-line text-teal text-lg"></i></div>
                    <!-- confetti — FIXED off hair, now above head -->
                    <div class="absolute top-[6%] right-[20%] flex gap-1.5 z-20 rotate-12">
                        <span class="w-1.5 h-6 bg-red-400 rounded-full"></span>
                        <span class="w-1.5 h-6 bg-teal rounded-full"></span>
                        <span class="w-1.5 h-4 bg-gold rounded-full"></span>
                    </div>

                    <!-- Person — FIXED not clipped, scaled 440px so belt visible, bottom padding -->
                    <img src="/images/hero-image-remove-bg-io.png" alt="SIITE Campus Student" class="relative z-10 w-[360px] lg:w-[440px] h-auto object-contain object-bottom drop-shadow-[0_24px_48px_rgba(15,45,77,0.18)] translate-y-2">
                </div>
            </div>
        </div>
    </section>

    <!-- Logos / Trust -->
    <section class="border-y border-slate-100 bg-white">
        <div class="max-w-[1280px] mx-auto px-6 py-6 flex flex-wrap items-center justify-between gap-6 text-slate-400 text-xs font-bold tracking-widest">
            <span class="text-slate-500">RECOGNIZED BY</span>
            <span class="flex items-center gap-2"><i class="ri-government-fill text-lg"></i> UGC SRI LANKA</span>
            <span class="flex items-center gap-2"><i class="ri-global-fill text-lg"></i> WES RECOGNIZED</span>
            <span class="flex items-center gap-2"><i class="ri-verified-badge-fill text-lg"></i> ISO 9001:2015</span>
            <span class="flex items-center gap-2"><i class="ri-microsoft-fill text-lg"></i> MICROSOFT LEARN</span>
            <span class="flex items-center gap-2"><i class="ri-graduation-cap-fill text-lg"></i> UK PARTNERS</span>
        </div>
    </section>

    <!-- Programs -->
    <section class="py-14 bg-white">
        <div class="max-w-[1280px] mx-auto px-6">
            <div class="flex flex-wrap items-end justify-between gap-4">
                <div>
                    <div class="inline-flex items-center gap-2 text-teal font-extrabold text-xs tracking-widest"><span class="w-8 h-px bg-teal"></span> OUR PROGRAMS</div>
                    <h2 class="font-display font-extrabold text-[32px] leading-none text-navy mt-3">Industry Aligned<br><span class="text-slate-400">Degrees for the Future</span></h2>
                </div>
                <a href="#" class="inline-flex items-center gap-2 font-bold text-navy text-sm">View all programs <i class="ri-arrow-right-line bg-gold w-7 h-7 rounded-full grid place-items-center text-navy"></i></a>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
                @php $programs = $programs ?? []; @endphp
                @foreach([
                    ['title'=>'Computing & IT','icon'=>'ri-computer-line','color'=>'bg-teal','desc'=>'Software Engineering, Cyber Security, Data Science, AI'],
                    ['title'=>'Business Management','icon'=>'ri-line-chart-line','color'=>'bg-gold','desc'=>'Marketing, Finance, HR, Entrepreneurship & Logistics'],
                    ['title'=>'Engineering','icon'=>'ri-settings-3-line','color'=>'bg-navy','desc'=>'Civil, Mechanical, Electrical & Quantity Surveying'],
                    ['title'=>'Hospitality & Tourism','icon'=>'ri-plane-line','color'=>'bg-teal','desc'=>'Hotel Management, Event Management & Culinary Arts'],
                ] as $p)
                <div class="group bg-white rounded-[24px] border border-slate-100 p-6 shadow-[0_8px_30px_rgba(15,45,77,0.06)] hover:shadow-[0_16px_40px_rgba(15,45,77,0.10)] hover:-translate-y-1 transition">
                    <div class="w-12 h-12 rounded-2xl {{$p['color']}} text-white grid place-items-center text-xl"><i class="{{$p['icon']}}"></i></div>
                    <h3 class="font-extrabold text-navy mt-4 text-[17px]">{{$p['title']}}</h3>
                    <p class="text-slate-500 text-sm mt-2 leading-6">{{$p['desc']}}</p>
                    <div class="mt-5 flex items-center gap-2 text-sm font-bold text-navy group-hover:gap-3 transition-all">Learn more <i class="ri-arrow-right-line"></i></div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why SIITE -->
    <section class="bg-slate-50 py-14">
        <div class="max-w-[1280px] mx-auto px-6 grid lg:grid-cols-2 gap-10 items-center">
            <div class="relative">
                <div class="bg-navy rounded-[28px] p-8 text-white overflow-hidden relative">
                    <div class="absolute -right-10 -top-10 w-64 h-64 bg-teal/20 blur-3xl rounded-full"></div>
                    <div class="relative">
                        <div class="inline-flex items-center gap-2 bg-white/10 rounded-full px-3 py-1 text-xs font-bold tracking-widest">WHY SIITE CAMPUS</div>
                        <h3 class="font-display font-extrabold text-3xl leading-none mt-4">More than a<br>Degree.</h3>
                        <ul class="mt-6 space-y-4">
                            <li class="flex gap-3"><span class="w-8 h-8 rounded-full bg-teal grid place-items-center text-sm flex-shrink-0"><i class="ri-check-line"></i></span><div><div class="font-bold">Smart LMS 24/7 Access</div><div class="text-white/70 text-sm">Recorded lectures, assignments, quizzes & live classes on one platform.</div></div></li>
                            <li class="flex gap-3"><span class="w-8 h-8 rounded-full bg-gold text-navy grid place-items-center text-sm flex-shrink-0"><i class="ri-check-line"></i></span><div><div class="font-bold">Industrial Training & Placement</div><div class="text-white/70 text-sm">Guaranteed internships with top corporates in Colombo & abroad.</div></div></li>
                            <li class="flex gap-3"><span class="w-8 h-8 rounded-full bg-white/15 grid place-items-center text-sm flex-shrink-0"><i class="ri-check-line"></i></span><div><div class="font-bold">Global Transfer Options</div><div class="text-white/70 text-sm">UK / Australia pathway with partner universities.</div></div></li>
                        </ul>
                        <div class="mt-6 flex gap-3">
                            <a href="#" class="bg-white text-navy font-extrabold px-6 py-3 rounded-full text-sm">Take Virtual Tour</a>
                            <a href="#" class="border border-white/20 text-white font-bold px-6 py-3 rounded-full text-sm">Download Prospectus</a>
                        </div>
                    </div>
                </div>
                <!-- small stats -->
                <div class="absolute -bottom-6 -right-2 sm:right-6 bg-white rounded-2xl shadow-xl p-4 flex items-center gap-4 border border-slate-100">
                    <img src="https://i.pravatar.cc/100?img=15" class="w-12 h-12 rounded-full">
                    <div>
                        <div class="font-extrabold text-navy">Dr. Nimali Perera</div>
                        <div class="text-xs text-slate-500">Dean - Computing</div>
                        <div class="flex text-gold text-xs">★★★★★</div>
                    </div>
                </div>
            </div>
            <div class="grid sm:grid-cols-2 gap-5">
                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                    <div class="w-11 h-11 rounded-xl bg-teal-50 text-teal grid place-items-center text-xl"><i class="ri-laptop-line"></i></div>
                    <h4 class="font-extrabold text-navy mt-4">Modern LMS</h4>
                    <p class="text-slate-500 text-sm mt-2">Laravel powered, super fast, mobile friendly. Track GPA, attendance & certificates.</p>
                </div>
                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                    <div class="w-11 h-11 rounded-xl bg-amber-50 text-amber-500 grid place-items-center text-xl"><i class="ri-team-line"></i></div>
                    <h4 class="font-extrabold text-navy mt-4">Top Lecturers</h4>
                    <p class="text-slate-500 text-sm mt-2">PhD holders & industry experts from Sri Lanka & abroad.</p>
                </div>
                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                    <div class="w-11 h-11 rounded-xl bg-indigo-50 text-indigo-600 grid place-items-center text-xl"><i class="ri-briefcase-line"></i></div>
                    <h4 class="font-extrabold text-navy mt-4">Career Hub</h4>
                    <p class="text-slate-500 text-sm mt-2">CV clinics, mock interviews & direct employer connects.</p>
                </div>
                <div class="bg-gold rounded-3xl p-6 text-navy">
                    <div class="text-4xl font-extrabold">98%</div>
                    <div class="font-bold">Graduate Employability within 6 months</div>
                    <div class="text-sm mt-2 opacity-80">Highest in private higher education - 2024 survey.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="max-w-[1280px] mx-auto px-6 py-10">
        <div class="bg-navy rounded-[28px] p-8 sm:p-10 flex flex-col lg:flex-row items-center justify-between gap-6 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-teal/20 to-transparent"></div>
            <div class="relative">
                <h3 class="font-display font-extrabold text-white text-2xl sm:text-3xl">Ready to start your journey?</h3>
                <p class="text-white/70 text-sm mt-2">Apply online in 5 minutes. Scholarships up to 50% available.</p>
            </div>
            <div class="relative flex gap-3">
                <a href="#" class="bg-gold hover:bg-gold-light text-navy font-extrabold px-7 py-3.5 rounded-full">Apply Now</a>
                <a href="#" class="bg-white/10 hover:bg-white/15 border border-white/20 text-white font-bold px-7 py-3.5 rounded-full">Talk to Counselor</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#071A30] text-white/80">
        <div class="max-w-[1280px] mx-auto px-6 py-12 grid md:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center gap-3">
                    <img src="/images/logo-removebg-preview.png" class="h-12 w-auto object-contain bg-white rounded-xl p-1.5 shadow">
                </div>
                <p class="text-sm text-white/60 mt-4 leading-6">Empowering futures through world-class education & cutting-edge Learning Management System.</p>
            </div>
            <div>
                <div class="font-extrabold text-white">Quick Links</div>
                <ul class="mt-4 space-y-2 text-sm text-white/60"><li><a href="#" class="hover:text-white">Programs</a></li><li><a href="#" class="hover:text-white">Admissions</a></li><li><a href="#" class="hover:text-white">LMS Login</a></li><li><a href="#" class="hover:text-white">Student Life</a></li></ul>
            </div>
            <div>
                <div class="font-extrabold text-white">Contact</div>
                <ul class="mt-4 space-y-2 text-sm text-white/60"><li>New Kandy Road, Malabe</li><li>+94 11 754 4801</li><li>info@siite.lk</li></ul>
            </div>
            <div>
                <div class="font-extrabold text-white">Stay Updated</div>
                <div class="mt-4 flex bg-white/10 rounded-full p-1"><input placeholder="Your email" class="bg-transparent outline-none px-4 text-sm flex-1 placeholder:text-white/40"><button class="bg-gold text-navy font-extrabold px-5 py-2 rounded-full text-sm">Subscribe</button></div>
            </div>
        </div>
        <div class="border-t border-white/10 max-w-[1280px] mx-auto px-6 py-4 flex flex-wrap justify-between gap-4 text-xs text-white/50">
            <span>© 2026 SIITE CAMPUS. All rights reserved.</span>
            <span>Built with Laravel 11 • Crafted for Sri Lanka</span>
        </div>
    </footer>
</body>
</html>
