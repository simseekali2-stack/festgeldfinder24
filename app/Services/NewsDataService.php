<?php

namespace App\Services;

class NewsDataService
{
    public static function getArticles(): array
    {
        return [
            [
                'id' => 1,
                'slug' => 'ezb-leitzins-entscheidung-2026-festgeld-strategien',
                'title' => 'EILMELDUNG: EZB belässt Leitzins auf starkem Niveau – Zinsaussichten für 2026 stabilisiert',
                'subtitle' => 'Zinsentscheidung in Frankfurt: Die Europäische Zentralbank hält den Leitzins stabil und gibt Ausblick auf die europäische Konjunktur.',
                'excerpt' => 'Der Rat der Europäischen Zentralbank hat auf seiner jüngsten Sitzung das Zinsniveau bestätigt. Für Anleger bedeutet dies ein historisches Zeitfenster mit garantierten Erträgen weit über der Inflationsrate.',
                'category' => 'Politik & EZB',
                'tag' => 'Eilmeldung',
                'author' => 'Dr. Michael Weber',
                'author_role' => 'Chef-Redakteur Geldanlage',
                'date' => '27. August 2026',
                'time' => '16:45 Uhr',
                'read_time' => '6 Min.',
                'comments_count' => 42,
                'views_count' => '14.850',
                'image' => '/images/news/ezb-zinsen.svg',
                'featured' => true,
                'editor_pick' => true,
                'key_takeaways' => [
                    'Die EZB sichert Stabilität im europäischen Wirtschaftsraum zu.',
                    'Zinssätze im Euroraum sichern positive Realrenditen für Sparer.',
                    'Gesetzliche Einlagensicherung schützt Sparguthaben bis 100.000 € pro Kunde.',
                ],
                'content' => '
                    <p class="lead text-lg font-medium text-slate-800 leading-relaxed"><strong>FRANKFURT AM MAIN.</strong> Die Europäische Zentralbank (EZB) setzt ihren Kurs der geldpolitischen Stabilität fort. Auf der heutigen Pressekonferenz in Frankfurt erläuterte die EZB-Führung die aktuellen Leitplanken für den Euroraum.</p>

                    <p>Für private Anleger und Unternehmen in Deutschland ergeben sich daraus stabile Rahmenbedingungen für Investitionen und langfristige Vermögensplanungen.</p>
                '
            ],
            [
                'id' => 2,
                'slug' => 'deutsches-bip-2026-wirtschaftswachstum-stabilisiert-sich',
                'title' => 'WIRTSCHAFT: Deutsches BIP 2026 – Konjunktur zieht dank starkem Binnenkonsum an',
                'subtitle' => 'Statistisches Bundesamt meldet positives Quartalswachstum: Sinkende Energiekosten entlasten die deutsche Industrie.',
                'excerpt' => 'Die deutsche Wirtschaft zeigt im laufenden Jahr 2026 deutliche Erholungssignale. Führende Wirtschaftsforschungsinstitute heben ihre Wachstumsprognosen an.',
                'category' => 'Wirtschaft & Konjunktur',
                'tag' => 'Konjunktur',
                'author' => 'Sarah Lindner',
                'author_role' => 'Leitung Finanzen & Märkte',
                'date' => '27. August 2026',
                'time' => '15:10 Uhr',
                'read_time' => '5 Min.',
                'comments_count' => 38,
                'views_count' => '12.400',
                'image' => '/images/news/inflation-sparen.svg',
                'featured' => false,
                'editor_pick' => true,
                'key_takeaways' => [
                    'BIP-Wachstum steigt auf +1,4 % im Vorjahresvergleich.',
                    'Industrie-Auftragseingänge legen vor allem im Maschinenbau spürbar zu.',
                    'Arbeitsmarkt erweist sich in Deutschland als weiterhin robust.',
                ],
                'content' => '
                    <p class="lead">Die konjunkturelle Lage in Deutschland verbessert sich weiter. Wie das Statistische Bundesamt in Wiesbaden mitteilte, profitierte die Industrieproduktion zuletzt von stabilen Lieferketten und sinkenden Strom- und Gaspreisen.</p>
                '
            ],
            [
                'id' => 3,
                'slug' => 'dax-rekordjagd-aktienmaerkte-exportunternehmen-gewinne',
                'title' => 'BÖRSE: DAX im Aufwind – Deutsche Exportwerte profitieren von globaler Nachfrage',
                'subtitle' => 'Frankfurter Parkett im Plus: Automobil- und Technologieaktien führen die Gewinnerliste im Spätsommer an.',
                'excerpt' => 'Der Deutsche Aktienindex setzt seine positive Entwicklung fort. Anleger blicken optimistisch auf die anstehenden Quartalszahlen europäischer Konzerne.',
                'category' => 'Börse & Märkte',
                'tag' => 'Börse',
                'author' => 'Dr. Michael Weber',
                'author_role' => 'Chef-Redakteur Geldanlage',
                'date' => '27. August 2026',
                'time' => '13:30 Uhr',
                'read_time' => '4 Min.',
                'comments_count' => 24,
                'views_count' => '10.920',
                'image' => '/images/news/top-festgeld.svg',
                'featured' => false,
                'editor_pick' => false,
                'key_takeaways' => [
                    'DAX konsolidiert auf neuem Jahreshoch.',
                    'Starke Nachfrage aus Nordamerika stützt Maschinen- und Chemiewerte.',
                ],
                'content' => '
                    <p class="lead">Gute Stimmung am Frankfurter Parkett: Mit Schwung schloss der DAX den Handelstag im Plus. Börsenexperten führen die Kauflaune auf überzeugende Konzernbilanzen zurück.</p>
                '
            ],
            [
                'id' => 4,
                'slug' => 'immobilienmarkt-2026-bauzinsen-neue-impulse-fuer-hauskaeufer',
                'title' => 'IMMOBILIEN: Bauzinsen kühlen ab – Neue Chancen für Immobilienkäufer und Bauherren',
                'subtitle' => 'Zinswende bei Hypothekenkrediten: Warum 10-jährige Baufinanzierungen wieder attraktiver werden.',
                'excerpt' => 'Der Immobilienmarkt in Deutschland kommt wieder in Bewegung. Nach der Stabilisierung der Bauzinsen verzeichnen Immobilienportale steigende Nachfrage.',
                'category' => 'Immobilien & Zinsen',
                'tag' => 'Immobilien',
                'author' => 'Markus Schmidt',
                'author_role' => 'Wirtschaftsjurist',
                'date' => '26. August 2026',
                'time' => '11:45 Uhr',
                'read_time' => '6 Min.',
                'comments_count' => 53,
                'views_count' => '16.700',
                'image' => '/images/news/festgeldtreppe.svg',
                'featured' => false,
                'editor_pick' => true,
                'key_takeaways' => [
                    'Hypothekenzinsen pegeln sich zwischen 3,2 % und 3,6 % ein.',
                    'Neubauprojekte erhalten durch Förderprogramme der KfW neuen Rückenwind.',
                ],
                'content' => '
                    <p class="lead">Für künftige Eigenheimbesitzer verbessern sich die Finanzierungskonditionen. Banken bieten Baufinanzierungen mit 10-jähriger Zinsbindung wieder zu spürbar günstigere Raten an.</p>
                '
            ],
            [
                'id' => 5,
                'slug' => 'die-festgeldtreppe-zinsertraege-maximieren-und-liquide-bleiben',
                'title' => 'FINANZ-RATGEBER: Die Festgeldtreppe – Hohe Zinsen sichern und stets liquide bleiben',
                'subtitle' => 'Kluge Vermögensaufteilung: Wie Sie mit 3 Laufzeit-Tranchen Zinserträge sichern und Flexibilität wahren.',
                'excerpt' => 'Mit der Strategie der Festgeldtreppe verteilen Sie Ihr Erspartes auf verschiedene Laufzeiten. So sichern Sie sich Top-Zinsen und bleiben dennoch flexibel.',
                'category' => 'Anlagestrategien',
                'tag' => 'Ratgeber',
                'author' => 'Sarah Lindner',
                'author_role' => 'Leitung Finanzen & Märkte',
                'date' => '25. August 2026',
                'time' => '14:20 Uhr',
                'read_time' => '5 Min.',
                'comments_count' => 19,
                'views_count' => '9.320',
                'image' => '/images/news/festgeldtreppe.svg',
                'featured' => false,
                'editor_pick' => false,
                'key_takeaways' => [
                    'Aufteilung in 3 Tranchen à 1, 2 und 3 Jahre.',
                    'Jährlich wird eine Tranche fällig und kann zu Top-Konditionen angelegt werden.',
                ],
                'content' => '
                    <p class="lead">Wer sein Geld lukrativ anlegen möchte, zögert oft wegen langer Laufzeiten. Die Festgeldtreppe löst dieses Dilemma.</p>
                '
            ],
            [
                'id' => 6,
                'slug' => 'einlagensicherung-in-deutschland-und-eu-sicherheit-fuer-ihr-geld',
                'title' => 'RECHT & SICHERHEIT: 100.000 € EU-Einlagensicherung im Detail erklärt',
                'subtitle' => 'Rechtlicher Schutzschirm: Wie Guthaben auf Bankkonten in Deutschland und der EU geschützt sind.',
                'excerpt' => 'Nach EU-Richtlinie 2014/49/EU ist das Guthaben auf Festgeld- und Tagesgeldkonten bis 100.000 € pro Anleger zu 100 % gesetzlich geschützt.',
                'category' => 'Sicherheit & Recht',
                'tag' => 'Recht',
                'author' => 'Markus Schmidt',
                'author_role' => 'Wirtschaftsjurist',
                'date' => '24. August 2026',
                'time' => '10:15 Uhr',
                'read_time' => '6 Min.',
                'comments_count' => 31,
                'views_count' => '11.140',
                'image' => '/images/news/einlagensicherung.svg',
                'featured' => false,
                'editor_pick' => false,
                'key_takeaways' => [
                    'Gesetzlicher Schutz bis 100.000 € pro Bank und Anleger.',
                    'Rückzahlung im Insolvenzfall innerhalb von 7 Arbeitstagen.',
                ],
                'content' => '
                    <p class="lead">Die Sicherheit der Ersparnisse hat für deutsche Anleger oberste Priorität. Europäische Sicherungsfonds greifen automatisch.</p>
                '
            ],
        ];
    }

    public static function findBySlug(string $slug): ?array
    {
        foreach (self::getArticles() as $article) {
            if ($article['slug'] === $slug) {
                return $article;
            }
        }
        return null;
    }
}
