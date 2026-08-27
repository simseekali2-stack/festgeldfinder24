<!DOCTYPE html>
<html lang="de" class="h-full bg-slate-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FestgeldFinder24 - Zeitung für Finanzen, Wirtschaft & Zinsen')</title>
    <meta name="description" content="@yield('meta_description', 'Deutschlands unabhängiges Finanznachrichten-Portal. Aktuelle Berichte zu EZB, Wirtschaft, Börse, Märkten und Geldanlage.')">
    
    <!-- Google Fonts Inter & Merriweather for classic news typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Merriweather:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Merriweather', 'Georgia', 'serif'],
                    },
                    colors: {
                        news: {
                            red: '#DC2626',
                            dark: '#0F172A',
                            emerald: '#059669',
                            gold: '#F59E0B',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen bg-slate-100 text-slate-900 font-sans antialiased selection:bg-red-600 selection:text-white">

    <!-- Top Newspaper Header Info Bar (Mobile-Friendly Responsive) -->
    <div class="bg-slate-950 text-slate-300 text-[11px] border-b border-slate-800 py-1.5 px-4">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <!-- Left Date & Status -->
            <div class="flex items-center space-x-3 text-xs">
                <span class="font-bold text-slate-200">27.08.2026</span>
                <span class="text-slate-700 hidden sm:inline">|</span>
                <span class="text-slate-400 hidden sm:inline">Ausgabe Deutschland & EU</span>
                <span class="text-slate-700">|</span>
                <span class="text-emerald-400 font-bold flex items-center text-[11px]">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 mr-1.5 animate-pulse"></span>
                    <span>Live Redaktion</span>
                </span>
            </div>
            
            <!-- Right Quick Links -->
            <div class="flex items-center space-x-3 text-[11px]">
                <a href="{{ route('news.index') }}" class="hover:text-white transition-colors hidden xs:inline">Archiv</a>
                <span class="text-slate-700 hidden xs:inline">•</span>
                <a href="{{ route('impressum') }}" class="text-amber-400 hover:text-amber-300 font-bold underline transition-colors">Impressum</a>
            </div>
        </div>
    </div>

    <!-- Live Financial Market Ticker Bar -->
    <div class="bg-slate-900 text-white text-xs py-2 border-b border-slate-800 overflow-x-auto no-scrollbar shadow-inner">
        <div class="max-w-7xl mx-auto px-4 flex items-center space-x-6 whitespace-nowrap">
            <span class="bg-news-red text-white text-[10px] font-extrabold px-2 py-0.5 rounded uppercase tracking-wider flex items-center flex-shrink-0 shadow">
                <span class="w-1.5 h-1.5 rounded-full bg-white animate-ping mr-1.5"></span>
                Börse & Märkte
            </span>

            <div class="flex items-center space-x-2">
                <span class="text-slate-400">DAX:</span>
                <span class="font-bold text-emerald-400">18.420,50 ▲ (+0,42%)</span>
            </div>
            <span class="text-slate-700">|</span>

            <div class="flex items-center space-x-2">
                <span class="text-slate-400">EZB Leitzins:</span>
                <span class="font-bold text-white">3,75%</span>
            </div>
            <span class="text-slate-700">|</span>

            <div class="flex items-center space-x-2">
                <span class="text-slate-400">EUR/USD:</span>
                <span class="font-bold text-slate-200">1,0912 ▲</span>
            </div>
            <span class="text-slate-700">|</span>

            <div class="flex items-center space-x-2">
                <span class="text-slate-400">Gold (Unze):</span>
                <span class="font-bold text-amber-400">$ 2.510,40 ▲</span>
            </div>
        </div>
    </div>

    <!-- Main Newspaper Masthead Header -->
    <header class="bg-white border-b border-slate-300 shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 sm:py-4">
            <div class="flex items-center justify-between">
                
                <!-- Left Edition Badge (Desktop) -->
                <div class="hidden lg:block text-xs text-slate-500 space-y-0.5 border-l-2 border-emerald-600 pl-3">
                    <div class="font-bold text-slate-900 uppercase tracking-wider">Finanz- & WIRTSCHAFTSZEITUNG</div>
                    <div>Unabhängig • Objektiv • Geprüft</div>
                    <div class="text-[10px] text-slate-400">Geprüft von BaFin-ID: 10161369</div>
                </div>

                <!-- Center Main Newspaper Logo -->
                <a href="{{ route('home') }}" class="flex flex-col items-center group text-center">
                    <img src="/images/logo.svg" alt="FestgeldFinder24" class="h-10 sm:h-14 w-auto transition-transform group-hover:scale-102">
                    <span class="text-[9px] sm:text-[10px] font-bold text-slate-500 tracking-[0.2em] uppercase mt-1">DEUTSCHLANDS UNABHÄNGIGES FINANZ- PORTAL</span>
                </a>

                <!-- Mobile Menu Button & Action Button -->
                <div class="flex items-center space-x-2">
                    <a href="{{ route('news.index') }}" class="hidden sm:inline-flex px-4 py-2 bg-emerald-700 hover:bg-emerald-800 text-white font-extrabold text-xs rounded-lg shadow-sm transition-all">
                        Nachrichten Lesen
                    </a>

                    <!-- Hamburger Button for Mobile -->
                    <button id="mobile-toggle-btn" type="button" class="p-2 rounded-lg text-slate-700 hover:bg-slate-100 focus:outline-none border border-slate-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- Navigation Bar (Single-Row Horizontal Scroll on Mobile, Full Row on Desktop) -->
        <div class="bg-slate-950 text-white border-t border-b border-slate-900">
            <div class="max-w-7xl mx-auto px-4">
                <nav class="flex items-center space-x-1 overflow-x-auto py-1.5 no-scrollbar text-xs font-bold uppercase tracking-wider whitespace-nowrap">
                    <a href="{{ route('home') }}" class="px-3 py-2 rounded hover:bg-slate-800 transition-colors {{ request()->routeIs('home') ? 'bg-emerald-700 text-white' : 'text-slate-300' }}">
                        Startseite
                    </a>
                    <a href="{{ route('news.index', ['category' => 'Politik & EZB']) }}" class="px-3 py-2 rounded hover:bg-slate-800 text-slate-300 hover:text-white transition-colors">
                        Politik & EZB
                    </a>
                    <a href="{{ route('news.index', ['category' => 'Wirtschaft & Konjunktur']) }}" class="px-3 py-2 rounded hover:bg-slate-800 text-slate-300 hover:text-white transition-colors">
                        Wirtschaft & Konjunktur
                    </a>
                    <a href="{{ route('news.index', ['category' => 'Börse & Märkte']) }}" class="px-3 py-2 rounded hover:bg-slate-800 text-slate-300 hover:text-white transition-colors">
                        Börse & Märkte
                    </a>
                    <a href="{{ route('news.index', ['category' => 'Immobilien & Zinsen']) }}" class="px-3 py-2 rounded hover:bg-slate-800 text-slate-300 hover:text-white transition-colors">
                        Immobilien & Zinsen
                    </a>
                    <a href="{{ route('news.index', ['category' => 'Ratgeber']) }}" class="px-3 py-2 rounded hover:bg-slate-800 text-slate-300 hover:text-white transition-colors">
                        Ratgeber & Recht
                    </a>
                    <a href="{{ route('impressum') }}" class="px-3 py-2 rounded hover:bg-slate-800 text-amber-400 hover:text-amber-300 transition-colors">
                        Impressum
                    </a>
                </nav>
            </div>
        </div>

        <!-- Mobile Drawer Menu (Hidden by Default) -->
        <div id="mobile-menu-drawer" class="hidden bg-slate-900 text-white border-b border-slate-800 px-4 py-4 space-y-3">
            <div class="font-bold text-xs text-amber-400 uppercase tracking-wider mb-2 border-b border-slate-800 pb-1">Kategorien & Rubriken</div>
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded text-sm font-bold bg-slate-800 text-white">Startseite</a>
            <a href="{{ route('news.index', ['category' => 'Politik & EZB']) }}" class="block px-3 py-2 rounded text-sm font-medium text-slate-200 hover:bg-slate-800">Politik & EZB</a>
            <a href="{{ route('news.index', ['category' => 'Wirtschaft & Konjunktur']) }}" class="block px-3 py-2 rounded text-sm font-medium text-slate-200 hover:bg-slate-800">Wirtschaft & Konjunktur</a>
            <a href="{{ route('news.index', ['category' => 'Börse & Märkte']) }}" class="block px-3 py-2 rounded text-sm font-medium text-slate-200 hover:bg-slate-800">Börse & Märkte</a>
            <a href="{{ route('news.index', ['category' => 'Immobilien & Zinsen']) }}" class="block px-3 py-2 rounded text-sm font-medium text-slate-200 hover:bg-slate-800">Immobilien & Zinsen</a>
            <a href="{{ route('news.index', ['category' => 'Ratgeber']) }}" class="block px-3 py-2 rounded text-sm font-medium text-slate-200 hover:bg-slate-800">Ratgeber & Recht</a>
            <a href="{{ route('impressum') }}" class="block px-3 py-2 rounded text-sm font-bold text-amber-400 bg-slate-800/80">Impressum Angaben (L&P GmbH)</a>
        </div>
    </header>

    <!-- Main Content Container -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Classic News Portal Footer -->
    <footer class="bg-slate-950 text-slate-400 text-xs border-t-4 border-emerald-600 pt-12 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Redaktion Info -->
                <div class="space-y-3">
                    <img src="/images/logo.svg" alt="FestgeldFinder24" class="h-10 w-auto">
                    <p class="text-slate-400 leading-relaxed text-xs font-serif">
                        FestgeldFinder24 ist das unabhängige Finanzmedien-Portal der L&P Kapitalverwaltungs GmbH. Wir berichten täglich aktuell über Zinsen, Geldanlage und Wirtschaftspolitik.
                    </p>
                </div>

                <!-- Rubriken -->
                <div>
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-3 border-b border-slate-800 pb-1">Rubriken</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('news.index', ['category' => 'Wirtschaft & Konjunktur']) }}" class="hover:text-emerald-400">Wirtschaft & Konjunktur</a></li>
                        <li><a href="{{ route('news.index', ['category' => 'Börse & Märkte']) }}" class="hover:text-emerald-400">Börse & Märkte</a></li>
                        <li><a href="{{ route('news.index', ['category' => 'Immobilien & Zinsen']) }}" class="hover:text-emerald-400">Immobilienmarkt</a></li>
                        <li><a href="{{ route('news.index') }}" class="hover:text-emerald-400">Finanznachrichten Archiv</a></li>
                    </ul>
                </div>

                <!-- Themen -->
                <div>
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-3 border-b border-slate-800 pb-1">Schwerpunkte</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('news.index', ['category' => 'Politik & EZB']) }}" class="hover:text-emerald-400">EZB Leitzins-Entscheidungen</a></li>
                        <li><a href="{{ route('news.index', ['category' => 'Anlagestrategien']) }}" class="hover:text-emerald-400">Festgeldtreppe Strategie</a></li>
                        <li><a href="{{ route('news.index', ['category' => 'Sicherheit & Recht']) }}" class="hover:text-emerald-400">Einlagensicherung EU</a></li>
                        <li><a href="{{ route('news.index', ['category' => 'Ratgeber']) }}" class="hover:text-emerald-400">Sparer-Pauschbetrag</a></li>
                    </ul>
                </div>

                <!-- Offizielles Impressum Angaben Box -->
                <div class="bg-slate-900 p-4 rounded-xl border border-slate-800 space-y-2">
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider text-amber-400 flex items-center">
                        <svg class="w-4 h-4 mr-1 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        Impressum Angaben
                    </h4>
                    <p class="font-bold text-slate-200">L&P Kapitalverwaltungs GmbH</p>
                    <p>Grosse Bleichen 34, 20354 Hamburg</p>
                    <p class="pt-1 text-slate-400"><strong>BaFin-ID:</strong> 10161369</p>
                    <p class="text-slate-400"><strong>Bak Nr.:</strong> 161369</p>
                    <a href="{{ route('impressum') }}" class="inline-block mt-2 text-emerald-400 font-bold hover:underline">Vollständiges Impressum &rarr;</a>
                </div>
            </div>

            <div class="border-t border-slate-900 pt-6 text-center text-slate-400 text-[11px] flex flex-col md:flex-row justify-between items-center space-y-2 md:space-y-0">
                <p>&copy; 2026 FestgeldFinder24. Alle Rechte vorbehalten. Herausgegeben von L&P Kapitalverwaltungs GmbH.</p>
                <div class="space-x-4">
                    <a href="{{ route('impressum') }}" class="hover:text-white">Impressum</a>
                    <a href="{{ route('datenschutz') }}" class="hover:text-white">Datenschutz</a>
                    <a href="{{ route('news.index') }}" class="hover:text-white">Nachrichten-Archiv</a>
                </div>
            </div>

        </div>
    </footer>

    <script>
        document.getElementById('mobile-toggle-btn')?.addEventListener('click', function() {
            const drawer = document.getElementById('mobile-menu-drawer');
            drawer?.classList.toggle('hidden');
        });
    </script>

</body>
</html>
