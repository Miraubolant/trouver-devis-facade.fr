<?php
/**
 * ============================================
 * ANNUAIRE-FACADE.FR - CONFIGURATION
 * ============================================
 */

define('SITE_NAME', 'trouver-devis-facade.fr');
define('SITE_DOMAIN', 'trouver-devis-facade.fr');
define('SITE_URL', 'https://trouver-devis-facade.fr');
define('SITE_EMAIL', 'contact@trouver-devis-facade.fr');
define('SITE_TAGLINE', "Façade & Ravalement Partout en France");
define('SITE_DESCRIPTION', "Trouvez un façadier pour le ravalement, le nettoyage ou l\'isolation par l\'extérieur de vos murs.");

define('SITE_LOGO_TEXT', 'TROUVER-DEVIS-FACADE');
define('SITE_LOGO_TLD', '.FR');

define('METIER', "façadier");
define('METIER_PLURAL', "façadiers");
define('METIER_TITLE', "Façadier");
define('METIER_ICON', "home");

define('VUD_PARTENAIRE_ID', '2372');
define('VUD_CATEGORIE_ID', '62');
define('VUD_IFRAME_URL', 'https://www.viteundevis.com/widget/devis.php');

define('SCRAPE_QUERY', "facadier ravalement isolation exterieur");
define('SCRAPE_API_KEY', '[CLE_API_SEMSCRAPER]');

define('ITEMS_PER_PAGE', 24);
define('NEARBY_CITIES_COUNT', 100);
define('NEARBY_DEPARTMENTS_COUNT', 6);
define('ARTISANS_PER_PAGE', 15);

define('DATA_PATH', __DIR__ . '/data/');
define('REGIONS_FILE', DATA_PATH . 'regions/regions.json');

define('MODELES', [
    ['slug' => 'ravalement-facade', 'nom' => 'Ravalement de Façade', 'emoji' => "🏠", 'vud_cat' => '62'],
    ['slug' => 'nettoyage-facade', 'nom' => 'Nettoyage Façade', 'emoji' => "🧽", 'vud_cat' => '62'],
    ['slug' => 'peinture-facade', 'nom' => 'Peinture Façade', 'emoji' => "🖌️", 'vud_cat' => '62'],
    ['slug' => 'crepis', 'nom' => 'Crépis et Enduits', 'emoji' => "🧱", 'vud_cat' => '62'],
    ['slug' => 'isolation-exterieur', 'nom' => 'Isolation par l\'Extérieur', 'emoji' => "🌡️", 'vud_cat' => '62'],
    ['slug' => 'traitement-hydrofuge', 'nom' => 'Traitement Hydrofuge', 'emoji' => "💧", 'vud_cat' => '62'],
    ['slug' => 'enduit-projete', 'nom' => 'Enduit Projeté', 'emoji' => "💨", 'vud_cat' => '62'],
    ['slug' => 'sablage-facade', 'nom' => 'Sablage Façade', 'emoji' => "⏳", 'vud_cat' => '62'],
    ['slug' => 'renovation-pierre', 'nom' => 'Rénovation Pierre', 'emoji' => "🪨", 'vud_cat' => '62'],
    ['slug' => 'bardage', 'nom' => 'Pose de Bardage', 'emoji' => "🪵", 'vud_cat' => '62'],
    ['slug' => 'traitement-anti-mousse', 'nom' => 'Traitement Anti-Mousse', 'emoji' => "🌿", 'vud_cat' => '62'],
    ['slug' => 'decapage-facade', 'nom' => 'Décapage Façade', 'emoji' => "🔥", 'vud_cat' => '62'],
    ['slug' => 'facade-ventilee', 'nom' => 'Façade Ventilée', 'emoji' => "🌬️", 'vud_cat' => '62'],
    ['slug' => 'remontees-capillaires', 'nom' => 'Remontées Capillaires', 'emoji' => "🚫", 'vud_cat' => '62'],
    ['slug' => 'reparation-fissures', 'nom' => 'Réparation Fissures', 'emoji' => "⚡", 'vud_cat' => '62'],
    ['slug' => 'jointoiement', 'nom' => 'Jointoiement Pierre', 'emoji' => "🧱", 'vud_cat' => '62'],
    ['slug' => 'hydrogommage', 'nom' => 'Hydrogommage', 'emoji' => "💦", 'vud_cat' => '62'],
    ['slug' => 'aerogommage', 'nom' => 'Aérogommage', 'emoji' => "💨", 'vud_cat' => '62'],
    ['slug' => 'pose-parement', 'nom' => 'Pose de Parement', 'emoji' => "🎨", 'vud_cat' => '62'],
    ['slug' => 'entretien-facade', 'nom' => 'Entretien Régulier', 'emoji' => "🛠️", 'vud_cat' => '62'],
    ['slug' => 'zinguerie-facade', 'nom' => 'Zinguerie en Façade', 'emoji' => "🔧", 'vud_cat' => '62'],
    ['slug' => 'protection-facade', 'nom' => 'Protection Façade', 'emoji' => "🛡️", 'vud_cat' => '62'],
    ['slug' => 'diagnostic-facade', 'nom' => 'Diagnostic Façade', 'emoji' => "🔍", 'vud_cat' => '62'],
    ['slug' => 'isolation-sous-enduit', 'nom' => 'Isolation sous Enduit', 'emoji' => "🧥", 'vud_cat' => '62'],
    ['slug' => 'peinture-minerale', 'nom' => 'Peinture Minérale', 'emoji' => "🎨", 'vud_cat' => '62'],
    ['slug' => 'nettoyage-haute-pression', 'nom' => 'Haute Pression', 'emoji' => "🔫", 'vud_cat' => '62'],
    ['slug' => 'renovation-briques', 'nom' => 'Rénovation Briques', 'emoji' => "🧱", 'vud_cat' => '62'],
    ['slug' => 'imitation-pierre', 'nom' => 'Enduit Imitation Pierre', 'emoji' => "🏰", 'vud_cat' => '62'],
    ['slug' => 'traitement-merules', 'nom' => 'Traitement Mérule', 'emoji' => "🍄", 'vud_cat' => '62'],
    ['slug' => 'conseil-facadier', 'nom' => 'Conseil Façadier', 'emoji' => "👷", 'vud_cat' => '62'],
]);

define('STYLES', [
    ['slug' => 'ravalement-facade', 'nom' => 'Ravalement de Façade', 'emoji' => "🏠", 'desc' => 'Détails et installation'],
    ['slug' => 'nettoyage-facade', 'nom' => 'Nettoyage Façade', 'emoji' => "🧽", 'desc' => 'Détails et installation'],
    ['slug' => 'peinture-facade', 'nom' => 'Peinture Façade', 'emoji' => "🖌️", 'desc' => 'Détails et installation'],
    ['slug' => 'crepis', 'nom' => 'Crépis et Enduits', 'emoji' => "🧱", 'desc' => 'Détails et installation'],
    ['slug' => 'isolation-exterieur', 'nom' => 'Isolation par l\'Extérieur', 'emoji' => "🌡️", 'desc' => 'Détails et installation'],
    ['slug' => 'traitement-hydrofuge', 'nom' => 'Traitement Hydrofuge', 'emoji' => "💧", 'desc' => 'Détails et installation'],
    ['slug' => 'enduit-projete', 'nom' => 'Enduit Projeté', 'emoji' => "💨", 'desc' => 'Détails et installation'],
    ['slug' => 'sablage-facade', 'nom' => 'Sablage Façade', 'emoji' => "⏳", 'desc' => 'Détails et installation'],
    ['slug' => 'renovation-pierre', 'nom' => 'Rénovation Pierre', 'emoji' => "🪨", 'desc' => 'Détails et installation'],
    ['slug' => 'bardage', 'nom' => 'Pose de Bardage', 'emoji' => "🪵", 'desc' => 'Détails et installation'],
    ['slug' => 'traitement-anti-mousse', 'nom' => 'Traitement Anti-Mousse', 'emoji' => "🌿", 'desc' => 'Détails et installation'],
    ['slug' => 'decapage-facade', 'nom' => 'Décapage Façade', 'emoji' => "🔥", 'desc' => 'Détails et installation'],
    ['slug' => 'facade-ventilee', 'nom' => 'Façade Ventilée', 'emoji' => "🌬️", 'desc' => 'Détails et installation'],
    ['slug' => 'remontees-capillaires', 'nom' => 'Remontées Capillaires', 'emoji' => "🚫", 'desc' => 'Détails et installation'],
    ['slug' => 'reparation-fissures', 'nom' => 'Réparation Fissures', 'emoji' => "⚡", 'desc' => 'Détails et installation'],
    ['slug' => 'jointoiement', 'nom' => 'Jointoiement Pierre', 'emoji' => "🧱", 'desc' => 'Détails et installation'],
    ['slug' => 'hydrogommage', 'nom' => 'Hydrogommage', 'emoji' => "💦", 'desc' => 'Détails et installation'],
    ['slug' => 'aerogommage', 'nom' => 'Aérogommage', 'emoji' => "💨", 'desc' => 'Détails et installation'],
    ['slug' => 'pose-parement', 'nom' => 'Pose de Parement', 'emoji' => "🎨", 'desc' => 'Détails et installation'],
    ['slug' => 'entretien-facade', 'nom' => 'Entretien Régulier', 'emoji' => "🛠️", 'desc' => 'Détails et installation'],
    ['slug' => 'zinguerie-facade', 'nom' => 'Zinguerie en Façade', 'emoji' => "🔧", 'desc' => 'Détails et installation'],
    ['slug' => 'protection-facade', 'nom' => 'Protection Façade', 'emoji' => "🛡️", 'desc' => 'Détails et installation'],
    ['slug' => 'diagnostic-facade', 'nom' => 'Diagnostic Façade', 'emoji' => "🔍", 'desc' => 'Détails et installation'],
    ['slug' => 'isolation-sous-enduit', 'nom' => 'Isolation sous Enduit', 'emoji' => "🧥", 'desc' => 'Détails et installation'],
    ['slug' => 'peinture-minerale', 'nom' => 'Peinture Minérale', 'emoji' => "🎨", 'desc' => 'Détails et installation'],
    ['slug' => 'nettoyage-haute-pression', 'nom' => 'Haute Pression', 'emoji' => "🔫", 'desc' => 'Détails et installation'],
    ['slug' => 'renovation-briques', 'nom' => 'Rénovation Briques', 'emoji' => "🧱", 'desc' => 'Détails et installation'],
    ['slug' => 'imitation-pierre', 'nom' => 'Enduit Imitation Pierre', 'emoji' => "🏰", 'desc' => 'Détails et installation'],
    ['slug' => 'traitement-merules', 'nom' => 'Traitement Mérule', 'emoji' => "🍄", 'desc' => 'Détails et installation'],
    ['slug' => 'conseil-facadier', 'nom' => 'Conseil Façadier', 'emoji' => "👷", 'desc' => 'Détails et installation'],
]);

define('SERVICES', [
    [
        'titre' => "Ravalement Complet",
        'icon' => "🏠",
        'desc' => "Remise à neuf de vos murs extérieurs : nettoyage, réparation des fissures, et pose de nouveaux enduits ou crépis.",
        'points' => ["Artisans façadiers expérimentés", "Respect des réglementations locales (PLU)", "Garantie décennale sur travaux"]
    ],
    [
        'titre' => "Nettoyage & Traitement",
        'icon' => "🧽",
        'desc' => "Élimination des mousses, lichens, et pollutions avec des traitements hydrofuges pour une protection longue durée.",
        'points' => ["Démoussage basse pression", "Traitement hydrofuge et algicide", "Prévention des infiltrations"]
    ],
    [
        'titre' => "Isolation (ITE)",
        'icon' => "🌡️",
        'desc' => "Améliorez l'efficacité énergétique de votre logement par l'extérieur tout en rénovant votre devanture.",
        'points' => ["Excellentes performances thermiques", "Démarches pour aides de l'État (MaPrimeRénov')", "Suppression des ponts thermiques"]
    ],
]);

define('FAQ_ACCUEIL', [
    [
        'question' => "Le ravalement de façade est-il obligatoire ?",
        'reponse' => "En France, la loi impose en théorie un ravalement de façade tous les 10 ans dans certaines communes visées par arrêté préfectoral (notamment Paris). Ailleurs, il est exigé de maintenir sa façade en bon état de propreté et de solidité."
    ],
    [
        'question' => "Faut-il une autorisation en mairie pour faire un ravalement ?",
        'reponse' => "Oui, le ravalement modifiant l'aspect extérieur de votre maison, il est impératif de déposer une Déclaration Préalable de travaux en mairie. Vous devrez notamment respecter les teintes autorisées par le Plan Local d'Urbanisme (PLU)."
    ],
    [
        'question' => "Qu'est-ce que l'Isolation Thermique par l'Extérieur (ITE) ?",
        'reponse' => "L\'ITE consiste à envelopper votre maison d'un manteau isolant. Elle est idéale lors d'un ravalement de façade car elle fait 'd'une pierre deux coups' : vous refaites le crépis extérieur tout en supprimant les ponts thermiques et en gardant la chaleur l'hiver."
    ],
    [
        'question' => "Combien de temps durent les travaux de ravalement ?",
        'reponse' => "Tout dépend de la taille de votre logement et de son état initial. Généralement, pour une maison individuelle standard, les travaux s'étendent sur 1 à 3 semaines (montage de l'échafaudage, nettoyage, séchages, enduits)."
    ],
    [
        'question' => "Combien coûte un ravalement de façade au mètre carré ?",
        'reponse' => "Un simple nettoyage ou une remise en peinture coûte entre 30€ et 60€/m². Si la façade est très abîmée (piquage, nouvel enduit) comptez entre 60€ et 120€/m². Avec isolation par l'extérieur (ITE), le prix oscille entre 120€ et 200€/m² avant primes."
    ]
]);

define('TOP_VILLES', [
    ['nom' => 'Paris', 'slug' => 'paris', 'cp' => '75000', 'region' => 'ile-de-france', 'dept' => 'paris'],
    ['nom' => 'Marseille', 'slug' => 'marseille', 'cp' => '13000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'bouches-du-rhone'],
    ['nom' => 'Lyon', 'slug' => 'lyon', 'cp' => '69000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'rhone'],
    ['nom' => 'Toulouse', 'slug' => 'toulouse', 'cp' => '31100', 'region' => 'occitanie', 'dept' => 'haute-garonne'],
    ['nom' => 'Nice', 'slug' => 'nice', 'cp' => '06000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'alpes-maritimes'],
    ['nom' => 'Nantes', 'slug' => 'nantes', 'cp' => '44200', 'region' => 'pays-de-la-loire', 'dept' => 'loire-atlantique'],
    ['nom' => 'Montpellier', 'slug' => 'montpellier', 'cp' => '34080', 'region' => 'occitanie', 'dept' => 'herault'],
    ['nom' => 'Bordeaux', 'slug' => 'bordeaux', 'cp' => '33300', 'region' => 'nouvelle-aquitaine', 'dept' => 'gironde'],
    ['nom' => 'Lille', 'slug' => 'lille', 'cp' => '59260', 'region' => 'hauts-de-france', 'dept' => 'nord'],
    ['nom' => 'Strasbourg', 'slug' => 'strasbourg', 'cp' => '67000', 'region' => 'grand-est', 'dept' => 'bas-rhin'],
    ['nom' => 'Rennes', 'slug' => 'rennes', 'cp' => '35700', 'region' => 'bretagne', 'dept' => 'ille-et-vilaine'],
    ['nom' => 'Toulon', 'slug' => 'toulon', 'cp' => '83000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'var'],
    ['nom' => 'Grenoble', 'slug' => 'grenoble', 'cp' => '38000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'isere'],
    ['nom' => 'Dijon', 'slug' => 'dijon', 'cp' => '21000', 'region' => 'bourgogne-franche-comte', 'dept' => 'cote-d-or'],
    ['nom' => 'Angers', 'slug' => 'angers', 'cp' => '49000', 'region' => 'pays-de-la-loire', 'dept' => 'maine-et-loire'],
    ['nom' => 'Nimes', 'slug' => 'nimes', 'cp' => '30000', 'region' => 'occitanie', 'dept' => 'gard'],
    ['nom' => 'Clermont-Ferrand', 'slug' => 'clermont-ferrand', 'cp' => '63000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'puy-de-dome'],
    ['nom' => 'Le Havre', 'slug' => 'le-havre', 'cp' => '76600', 'region' => 'normandie', 'dept' => 'seine-maritime'],
]);

define('AVANTAGES', [
    ['titre' => 'Réseau National', 'desc' => 'Des milliers de professionnels référencés dans toute la France.', 'icon' => "🗺️"],
    ['titre' => 'Partenaires Expérimentés', 'desc' => 'Trouvez le bon interlocuteur pour la réussite de votre projet', 'icon' => "✅"],
    ['titre' => 'Mise en Relation Rapide', 'desc' => 'Obtenez gratuitement des devis adaptés à vos besoins.', 'icon' => "💰"],
]);

define('HERO_IMAGE', 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=1920&q=80&auto=format&fit=crop');
define('MODELE_IMAGE', 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1920&q=80&auto=format&fit=crop');


function getModeleBySlug($slug)
{
    foreach (MODELES as $modele) {
        if ($modele['slug'] === $slug) {
            return $modele;
        }
    }
    return null;
}

function getAllModeles()
{
    return MODELES;
}

function getVudUrl($modele = null)
{
    $catId = VUD_CATEGORIE_ID;
    if ($modele && isset($modele['vud_cat'])) {
        $catId = $modele['vud_cat'];
    }
    return 'https://www.viteundevis.com/in/?pid=' . VUD_PARTENAIRE_ID . '&c=' . $catId;
}

function getVudCatForModele($modele = null)
{
    if ($modele && isset($modele['vud_cat'])) {
        return $modele['vud_cat'];
    }
    return VUD_CATEGORIE_ID;
}
