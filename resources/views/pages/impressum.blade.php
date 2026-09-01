@extends('layouts.app')

@section('title', 'Impressum - ' . config('app.name', 'FestgeldFinder24'))
@section('meta_description', 'Rechtliche Informationen und Anbieterkennzeichnung gemäß § 5 DDG.')

@section('content')

<div class="bg-slate-900 text-white py-12 border-b border-slate-800 shadow-md">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="bg-emerald-500/20 text-emerald-300 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider border border-emerald-500/30">
            Rechtliche Anbieterkennzeichnung
        </span>
        <h1 class="text-3xl sm:text-4xl font-black">Impressum</h1>
        <p class="text-slate-300 text-sm leading-relaxed">
            Angaben gemäß § 5 Digitale-Dienste-Gesetz (DDG) und § 18 MStV.
        </p>
    </div>
</div>

<div class="py-12 bg-slate-50 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-white p-8 sm:p-12 rounded-2xl border border-slate-200 shadow-xl space-y-8 text-slate-800 leading-relaxed">
            
            <!-- Provider & Business Description -->
            <div>
                <h2 class="text-xl font-bold text-slate-900 border-b border-slate-200 pb-2 mb-4 flex items-center">
                    <svg class="w-5 h-5 text-indigo-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    Betreiber & Anbieter der Website
                </h2>
                <div class="space-y-2 text-base">
                    <p class="font-bold text-slate-900 text-xl">L&P Kapitalverwaltungs GmbH</p>
                    <p class="text-slate-700">Diese Internetpräsenz (festgeldfinder24.com) wird im Auftrag und unter eigener Regie der L&P Kapitalverwaltungs GmbH betrieben.</p>
                    <p class="text-slate-700"><strong>Anschrift:</strong> Grosse Bleichen 34, 20354 Hamburg, Deutschland</p>
                    <p class="text-slate-700"><strong>Geschäftsführer:</strong> Oskar Ehrenfried Heinrich, Sebastian Hartrott</p>
                </div>
            </div>

            <!-- Regulatory & BaFin Scope Section -->
            <div class="p-6 bg-slate-100 rounded-xl border border-slate-300 space-y-3">
                <h3 class="text-sm font-extrabold text-slate-900 uppercase tracking-wider flex items-center">
                    <svg class="w-5 h-5 text-emerald-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    Aufsichtsbehörde & Regulierungsstatus (BaFin)
                </h3>
                <p class="text-sm text-slate-800 leading-relaxed">
                    Die <strong>L&P Kapitalverwaltungs GmbH</strong> ist eine von der Bundesanstalt für Finanzdienstleistungsaufsicht (BaFin) zugelassene und beaufsichtigte Finanzdienstleistungseinrichtung / Kapitalverwaltungsgesellschaft.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs font-semibold bg-white p-4 rounded-lg border border-slate-200">
                    <div>
                        <span class="text-slate-500 block uppercase">BaFin-ID</span>
                        <span class="text-slate-900 font-bold text-sm">10161369</span>
                    </div>
                    <div>
                        <span class="text-slate-500 block uppercase">Bak-Nummer</span>
                        <span class="text-slate-900 font-bold text-sm">161369</span>
                    </div>
                </div>
                <div class="text-xs text-slate-700 space-y-1">
                    <p class="font-bold text-slate-900">Umfang der BaFin-genehmigten Finanzdienstleistungen & Produkte:</p>
                    <ul class="list-disc list-inside space-y-1 text-slate-700">
                        <li>Erbringung von Finanzdienstleistungen im Rahmen der Erlaubnis nach KWG / KAGB (Kapitalverwaltung, Anlagevermittlung & Vermögensverwaltung).</li>
                        <li>Bereitstellung unabhängiger Produkt- & Zinsinformationen zu Festgeld-, Festzins- und Festgeldanlagen europäischer Partnerbanken.</li>
                    </ul>
                </div>
            </div>

            <!-- Representative & Contact -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 pt-4 border-t border-slate-200">
                <div class="bg-slate-50 p-5 rounded-xl border border-slate-200">
                    <h3 class="text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Vertreten durch</h3>
                    <p class="text-base font-bold text-slate-900">Oskar Ehrenfried Heinrich, Sebastian Hartrott</p>
                    <p class="text-xs font-semibold text-slate-700 mt-1">Geschäftsführer, L&P Kapitalverwaltungs GmbH</p>
                </div>

                <div class="bg-slate-50 p-5 rounded-xl border border-slate-200">
                    <h3 class="text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Registrierung & Aufsicht</h3>
                    <p class="text-sm font-bold text-slate-900">BaFin-ID: 10161369</p>
                    <p class="text-sm font-bold text-slate-900">Bak Nr.: 161369</p>
                    <p class="text-xs text-slate-600 mt-1">Aufsichtsbehörde: BaFin</p>
                </div>

                <div class="bg-slate-50 p-5 rounded-xl border border-slate-200">
                    <h3 class="text-xs font-extrabold text-slate-500 uppercase tracking-wider mb-2">Kontakt</h3>
                    <p class="text-sm font-semibold text-slate-800">Telefon: <a href="tel:+49040256877" class="text-indigo-600 hover:underline">+49 040256877</a></p>
                    <p class="text-sm font-semibold text-slate-800">E-Mail: <a href="mailto:info@festgeldfinder24.com" class="text-indigo-600 hover:underline">info@festgeldfinder24.com</a></p>
                    <p class="text-sm font-semibold text-slate-800">Web: <a href="{{ url('/') }}" class="text-indigo-600 hover:underline">{{ request()->getHost() }}</a></p>
                </div>
            </div>

            <!-- Content Responsibility -->
            <div class="p-6 bg-slate-900 text-white rounded-xl border border-slate-800 space-y-2">
                <h3 class="text-xs font-bold text-amber-400 uppercase tracking-wider">Verantwortlich für den Inhalt nach § 18 Abs. 2 MStV</h3>
                <p class="text-base font-bold text-white">Oskar Ehrenfried Heinrich, Sebastian Hartrott Geschäftsführer</p>
                <p class="text-sm font-semibold text-slate-200">L&P Kapitalverwaltungs GmbH</p>
                <p class="text-sm text-slate-300">Grosse Bleichen 34</p>
                <p class="text-sm text-slate-300">20354 Hamburg, Deutschland</p>
            </div>

            <!-- Legal Disclaimers -->
            <div class="space-y-6 pt-6 border-t border-slate-200 text-xs text-slate-600">
                <div>
                    <h3 class="font-bold text-slate-900 text-sm mb-1">Haftung für Inhalte</h3>
                    <p>
                        Als Diensteanbieter sind wir gemäß § 7 Abs.1 DDG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 DDG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen.
                    </p>
                </div>

                <div>
                    <h3 class="font-bold text-slate-900 text-sm mb-1">Haftung für Links</h3>
                    <p>
                        Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich.
                    </p>
                </div>

                <div>
                    <h3 class="font-bold text-slate-900 text-sm mb-1">Urheberrecht</h3>
                    <p>
                        Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers.
                    </p>
                </div>

                <div>
                    <h3 class="font-bold text-slate-900 text-sm mb-1">EU-Streitschlichtung</h3>
                    <p>
                        Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit: 
                        <a href="https://ec.europa.eu/consumers/odr" target="_blank" rel="noopener noreferrer" class="text-indigo-600 underline">https://ec.europa.eu/consumers/odr</a>. 
                        Unsere E-Mail-Adresse finden Sie im Kontaktabschnitt dieses Impressums.
                    </p>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection
