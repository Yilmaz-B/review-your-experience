-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 jan 2023 om 12:02
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snel_weg`
--
CREATE DATABASE IF NOT EXISTS `snel_weg` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `snel_weg`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `car`
--

CREATE TABLE `car` (
  `id` int(9) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `car`
--

INSERT INTO `car` (`id`, `picture`, `model`, `description`, `category_id`) VALUES
(1, 'cars/gti.png', 'Golf GTI TCR', 'De Volkswagen Golf GTI TCR is een sportief uitgevoerde versie van de populaire Volkswagen Golf GTI. De TCR staat voor \"Touring Car Racing\" en is geïnspireerd op de raceversie van de auto die wordt gebruikt in de TCR-klasse van tourenwagenraces. De auto is voorzien van een 2.0-liter TSI-motor die vermogen levert van 286 pk en 370 Nm koppel. Dit maakt de TCR in staat om van 0-100 km/u te accelereren in 5,6 seconden en een topsnelheid te bereiken van 250 km/u (elektronisch begrensd). Andere kenmerken zijn onder andere een sportonderstel, grotere remmen en aerodynamische verbeteringen.', 3),
(2, 'cars/8r.png', 'Golf 8-R', 'De Volkswagen Golf R is de meest krachtige versie van de Volkswagen Golf en de 8e generatie van de R-serie. Het wordt aangedreven door een 2.0-liter turbocharged viercilinder motor die vermogen levert van 316 pk en 400 Nm koppel. Dit maakt de Golf R in staat om van 0-100 km/u te accelereren in 4,7 seconden en een topsnelheid te bereiken van 250 km/u (elektronisch begrensd). De auto is standaard uitgerust met een 4MOTION-vierwielaandrijving en een 7-traps DSG-transmissie. Andere kenmerken zijn onder andere sportonderstel, grotere remmen, aerodynamische verbeteringen, en R-specifieke interieur- en exterieurdetails. De Golf R is een zeer capabele en sportieve auto met een uitstekende wegligging en prestaties.', 3),
(3, 'cars/GTE.png', 'Golf GTE', 'De Volkswagen Golf GTE is een hybride versie van de Volkswagen Golf. Het wordt aangedreven door een combinatie van een 1.4-liter turbocharged benzinemotor en een elektromotor die samen vermogen leveren van 245 pk en 400 Nm koppel. Dit maakt de Golf GTE in staat om van 0-100 km/u te accelereren in 7,6 seconden en een topsnelheid te bereiken van 222 km/u. De auto is voorzien van een 6-traps DSG-transmissie en een 14.1 kWh lithium-ion batterij, die het mogelijk maakt om de auto elektrisch te rijden met een bereik van tot wel 80 km.\r\n\r\nDe GTE heeft diverse rijmodi waaronder een \"GTE\" modus, waarbij de auto optimaal gebruik maakt van de elektromotor en benzinemotor voor een sportieve rijervaring. Het interieur is specifiek voor GTE en heeft veel technologieën zoals Adaptive Cruise Control, Lane Assist, Traffic Jam Assist, park assist en een head-up display. De GTE is een zuinige en milieuvriendelijke auto die zowel comfortabel als sportief is.', 3),
(4, 'cars/polo.png', 'Polo', 'De Volkswagen Polo is een compacte middenklasser die wordt geproduceerd door Volkswagen. Het is een populaire keuze voor mensen die op zoek zijn naar een kleine, praktische en betrouwbare auto. Het model is beschikbaar als hatchback en sedan.\r\n\r\nDe Polo is voorzien van een scala aan motoren, waaronder benzinemotoren met vermogens variërend van 60 pk tot 150 pk, en dieselmotoren met vermogens variërend van 75 pk tot 110 pk. Er is ook een hybride variant beschikbaar genaamd Polo eTSI.\r\n\r\nHet interieur van de Polo is modern en comfortabel, met veel technologieën zoals een touchscreen-infotainmentsysteem, digitale cockpit, en een aantal veiligheidsvoorzieningen zoals automatische noodrem en lane assist.\r\n\r\nDe Polo is ook beschikbaar in sportievere uitvoeringen zoals de Polo GTI en Polo R-Line, die zijn voorzien van extra vermogen en sportieve afwerking.\r\n\r\nIn algemene zin, is de Volkswagen Polo een compacte auto met een goede balans tussen prestaties, comfort, veiligheid en efficiëntie. Het is een populaire keuze onder consumenten die op zoek zijn naar een compacte, betrouwbare en veelzijdige auto.', 3),
(5, 'cars/troc.png', 'T-Roc', 'De Volkswagen T-Roc is een compacte SUV (Sport Utility Vehicle) die wordt geproduceerd door Volkswagen. Het is een crossover model dat is ontworpen om te concurreren met andere compacte SUV\'s zoals de Audi Q2, BMW X2 en Mercedes GLA.\r\n\r\nDe T-Roc is voorzien van een scala aan motoren, waaronder benzinemotoren met vermogens variërend van 115 pk tot 190 pk en dieselmotoren met vermogens variërend van 115 pk tot 150 pk. De auto is standaard uitgerust met een 6-traps handgeschakelde transmissie, maar er is ook een 7-traps DSG-automaat beschikbaar.\r\n\r\nHet interieur van de T-Roc is modern en comfortabel, met veel technologieën zoals een touchscreen-infotainmentsysteem, digitale cockpit, en een aantal veiligheidsvoorzieningen zoals automatische noodrem en lane assist. De auto is ook beschikbaar met een aantal opties zoals een panoramisch schuif-/kanteldak, een verwarmd stuurwiel en stoelen en een achteruitrijcamera.\r\n\r\nDe T-Roc is een stijlvolle en veelzijdige auto met een goede balans tussen prestaties, comfort, veiligheid en efficiëntie. Het is een goede keuze voor consumenten die op zoek zijn naar een compacte SUV met een sportieve uitstraling en een hoog niveau van technologie en luxe.', 3),
(6, 'cars/5serie.png', 'BMW 5 Series Touring', 'Een meester in zijn klasse: De BMW 5 Serie Touring brengt de buitengewone functionaliteit en het comfort op lange ritten van een BMW Touring samen met het iconische uiterlijk en de dynamiek van de BMW 5 Serie. Het exterieur ziet er zelfverzekerder en moderner uit dan ooit, dankzij de bijzonder grote wielbasis, heldere oppervlakken en bijzondere designhighlights. Een elegant en uiterst veelzijdig interieur biedt vooral dankzij de flexibele bagageruimte royale opbergmogelijkheden. In combinatie met indrukwekkende rijdynamiek en innovatieve technologieën zet de BMW 5 Serie Touring nieuwe maatstaven op gebied van comfort en flexibiliteit.\r\n\r\nDe BMW 5 Serie Touring zet nieuwe maatstaven voor functionele sportiviteit. De grote wielbasis en de langgerekte motorkap onderstrepen zijn zelfverzekerdheid, terwijl precieze contouren en grote oppervlakken voor een moderne uitstraling zorgen. Vooral de BMW nierengrille en het BMW Laserlight geven de voorzijde een dynamisch en innovatief karakter. De koplampen zijn naadloos met de BMW nierengrille verbonden, wat de breedte van de auto extra benadrukt. Het totaalbeeld is een sportieve elegantie en bijzondere aanwezigheid, die is terug te zien in de vrij gevormde uitlaateindpijpen aan de achterzijde.', 2),
(7, 'cars/m2.png', 'BMW M2 Coupé M', 'De nieuwe BMW M2 biedt het kenmerkende prestatieniveau van M, maar dan in een van zijn puurste vormen. Met zijn 338 kW (460 pk) sterke 6-cilinder-in-lijn benzinemotor, (optionele) handgeschakelde zesversnellingsbak en achterwielaandrijving belooft de tweede generatie van de compacte high-performance sportauto onvervalst rijplezier. ', 2),
(8, 'cars/i7.png', 'BMW i7 Sedan', 'In de nieuwe BMW i7 ervaart u rijplezier van de volgende generatie:\r\n\r\nMaar liefst 400 kW* (544 pk*) vermogen\r\nTot wel 745 Nm* koppel voor optimale dynamiek\r\nIn slechts 4,7 seconden* van 0 naar 100 km/h\r\nDankzij innovatief aandrijfconcept eDrive vrijwel geluidloos en lokaal emissievrij rijden\r\n\r\n625 km* elektrische actieradius voldoende voor elk dagelijks reisdoel\r\nGering energieverbruik van slechts 18,4–19,6 kWh/100 km* dankzij technologieën als terugwinning van energie bij remmen\r\nMaximale efficiency dankzij lichtgewicht constructie en aerodynamisch design', 2),
(9, 'cars/m440i.png', 'BMW M440i xDrive Gran Coupé', 'Power, precisie en pure schoonheid. Het hart van de BMW M440i xDrive Gran Coupé is een 275 kW (374 pk) sterke BMW M TwinPower Turbo 6-cilinder-in-lijn benzinemotor. Door het samenspel met perfect op elkaar afgestemde M specifieke onderstelcomponenten ontstaat een sportieve rijdynamiek die de BMW M440i xDrive Gran Coupé ook optisch tot uitdrukking brengt – zowel in het progressief vormgegeven exterieur met M specifieke designelementen als in het sportief-moderne, royale interieur. De 5-deurs Gran Coupé biedt een fascinerende mix van prestaties, comfort en gebruiksvriendelijkheid.\r\n\r\nBMW M440i xDRIVE GRAN COUPÉ – HIGHLIGHTS.\r\n\r\nRijdynamiek en designuitrustingen van de BMW M440i xDrive Gran Coupé.\r\nSportief tot in het kleinste detail: de indrukwekkende prestaties van de BMW M440i xDrive Gran Coupé zijn mogelijk dankzij de verfijnde aandrijftechnologieën en de specifiek voor dit model ontwikkelde onderstelinstellingen. De krachtige en toerengewillige BMW M TwinPower Turbo motor, de directe besturing en de nauwkeurige handling versterken het voor M kenmerkende rijgevoel. De M specifieke designdetails in Ceriumgrau en specifieke interieur-highlights benadrukken het atletische karakter van deze auto.', 2),
(10, 'cars/x1.png', 'BWM X1', 'De nieuwe BMW X1 overtuigt door zijn uitgebreide veelzijdigheid en functionaliteiten: \r\n\r\n\r\nEen exterieur met een heldere designtaal voor een sportieve, zelfverzekerde uitstraling\r\nLeverbaar met verbrandingsmotor, als Plug-in Hybride en volledig elektrisch\r\nHet moderne interieur is afgewerkt met hoogwaardige materialen en voorzien van innovaties zoals het BMW Curved Display\r\nOptioneel leverbaar met elektrisch wegklapbare trekhaak', 2),
(11, 'cars/xm.png', 'BMW XM', 'Exclusief, expressief en geëlektrificeerd. De BMW XM combineert zijn indrukwekkende aanwezigheid met de topprestaties van BMW M en de krachtige Plug-in Hybride technologie van de nieuwste generatie.', 2),
(12, 'cars/a7.png', 'Audi A7 Sportback TFSI', 'Elegant en efficiënt\r\nDe Audi A7 Sportback TFSI e is een fraai gelijnd coupémodel uit het hogere segment met een innovatieve plug-in hybrideaandrijving.\r\n\r\nEen innovatieve aandrijving\r\nIn de Audi A7 Sportback TFSI e draait het om efficiëntie, mogelijk door de vooruitstrevende combinatie van een 2.0 TFSI-motor en elektrokracht. Er zijn twee versies: de 220 kW/299 pk sterke 50 TFSI e quattro en de 270 kW/367 pk sterke 55 TFSI e quattro.\r\n\r\n', 1),
(13, 'cars/q8.png', 'Audi SQ8 TFSI', 'Een dynamische rijbeleving\r\nDoor innovatieve ondersteltechnieken ligt de Audi SQ8 TFSI sportief en stevig op de weg en is hij tegelijkertijd heel comfortabel. Elektronisch geregelde luchtvering met een sportieve afstemming is standaard. Dat geldt ook voor vierwielbesturing; voor extra gemakkelijk draaien en keren op lagere snelheid en sportief en stabiel sturen op hogere snelheid. Optioneel zijn er de actieve rolstabilisatie om overhellen terug te dringen en keramische remmen om nog beter te vertragen en het onafgeveerde gewicht te verlagen.\r\n\r\nEen sportief design\r\nDe indrukwekkende voorkant heeft een speciale S-bumper die volledig in carrosseriekleur is gespoten. De progressief gevormde roosters van de luchtinlaten zijn in mat titaanzwart. In de achthoekige singleframe-grille vallen de rechtopstaande dubbele spijlen op. Aan de achterkant bepalen de doorlopende verlichtingsstrook, de S-diffusor en vier functionele uitlaten het beeld.\r\n\r\nRuim, elegant en sportief\r\nStandaard zijn sportstoelen met S-logo’s en contrasterende stiksels. Op de optielijst kunt u terecht voor S-sportstoelen met geïntegreerde hoofdsteunen, hogere wangen alsmede ventilatie, verwarming en massage.\r\n\r\nMMI touch response aan boord. Vanaf het bovenste scherm gebruikt u alle infotainmentfuncties. De bediening werkt heel vanzelfsprekend, ook omdat de schermknoppen een klikgeluid produceren en lichte weerstand geven. Om het u nog gemakkelijker te maken reageren de toepassingen ook op gesproken instructies. Bij MMI navigatie plus hoort ook de Audi connect1 dataverbinding, waardoor de navigatiekaart te vervangen is door Google-Earth™ en realtime verkeersinformatie binnenkomt. Het onderste scherm is er voornamelijk voor de klimaatregeling en andere comfortfuncties.\r\n\r\nEen verfijnde ambiance en veel ruimte\r\nStandaard zijn onder meer edelstalen afwerking van pedalen en voetsteun, een driespaaks lederen stuur met veel bedieningsknoppen en multicolour ambient lighting. De forse carrosserie belooft een grote bagageruimte. Handige features vergroten het gebruiksgemak, zoals de verschuifbare achterbank en het optionele railsysteem met vastzetogen, spanband en telescoopstang.', 1),
(14, 'cars/rs6.png', 'Audi RS 6 Avant performance', 'Prestaties op afroep\r\nVoel en hoor wat het betekent als we er nog een schepje bovenop doen. Met de krachtigste RS 6-motor ooit. De nieuwe Audi RS 6 Avant performance. Performance is an attitude.\r\n\r\nDuidelijk nauwkeurig\r\nDe volledig digitale Audi virtual cockpit plus met drie speciale RS-weergaven is naar eigen behoefte in te stellen. Innovatief.\r\n\r\nBaas boven baas\r\nDit houdt u alert: een vierliter V8-twinturbo TFSI-motor die 463 kW (630 pk) levert. Goed voor een acceleratie van 0 naar 100 km/h in 3,4 seconden.\r\n\r\nAdembenemende prestaties\r\nDe Audi RS 6 Avant performance voegt indrukwekkende dynamiek toe aan uw dagelijks leven. Het optionele RS-sportonderstel plus met Dynamic Ride Control (DRC) en het optionele RS-dynamiekpakket plus met tot 305 km/h verhoogde topsnelheid garanderen gecontroleerd rijplezier.\r\n\r\nRS in topvorm\r\nDe krachtige performance-versie van de Audi RS 6 Avant toont de wereld met exclusieve designkenmerken wat hij in huis heeft. Het optionele designpakket in mat carbon met bijpassende spiegelkappen en de nieuwe 22 inch lichtmetalen velgen maken zijn prestatiepotentieel aan iedereen duidelijk.', 1),
(15, 'cars/rs3.png', 'Audi RS 3 Limousine', 'Het rijden staat centraal\r\nWeergave en bediening in de Audi RS 3 Limousine zijn volledig op de bestuurder gericht. Voor optimale controle over de prestaties.\r\n\r\nRazendsnelle krachtverdeling\r\nVoor rijdynamiek op afroep distribueert de RS torque splitter het aandrijfkoppel over de vooras en afzonderlijke achterwielen.', 1),
(16, 'cars/etron.png', 'Audi E-Tron', 'Virtuele buitenspiegels\r\nEen lagere luchtweerstand en een fraai staaltje digitalisering.\r\n\r\nActieradius\r\nDe Audi e-tron heeft een vermogen van maximaal 300 kW (408 pk) en een actieradius van maximaal 437 kilometer.\r\n\r\nMet zijn maximale actieradius van 437 kilometer is de Audi e-tron ideaal voor lange afstanden, bijvoorbeeld tijdens een weekendje weg of in de vakantie. De grote accu en zijn gunstige laadcurve maken reizen gemakkelijk.\r\n\r\nDe Audi e-tron verwelkomt u met een ruim interieur en veel comfort; precies zoals u dat van een Audi in deze prijsklasse mag verwachten. Kwaliteitsmaterialen en een feilloze afwerking zijn vanzelfsprekend.', 1),
(17, 'cars/a45amg.png', 'AMG A 45 S 4MATIC+', 'Zodra de handgebouwde en 421 pk sterke motor tot leven komt, weet je direct dat je in een zeer bijzondere auto bent aangeland. De diepdonkere grom die deze Nachtzwarte en praktisch nieuwe Mercedes-AMG A45 S 4Matic+ ten gehore brengt, brengt je direct in de stemming. Mercedes-AMG heeft werkelijk niets aan het toeval overgelaten om op alle vlakken het maximale uit deze bijzonder A-Klasse te halen. Dat start uiteraard met de bloedstollende prestaties. Een topsnelheid van 270 km/u en een acceleratie van 0 naar 100 km/u in 3,9 seconden vertellen in dat opzicht al een groot deel van het verhaal. Maar ook de indrukwekkende tussenacceleraties zijn onvergetelijk. De fraaie AMG-sound verhoogt de feestvreugde nog eens aanmerkelijk. Maar ook de aankleding van juist dit exemplaar doet de liefhebber watertanden. Mooie opties zoals Performance-stoelen, panoramadak en het Driver’s Package zijn de kroon op een toch al zo bijzondere presentatie. Met deze auto gaat u elke kilometer genieten van onvervalst rijplezier!', 4),
(18, 'cars/gt63se.png', 'GT 63 S E Performance', 'De Mercedes-AMG GT 63 S E PERFORMANCE is een pionier voor de volgende generatie ultieme high performance vierdeurs modellen. De performancegerichte en uiterst efficiënte AMG Hybride-technologie ontmoet de nieuwste AMG-technologie. Zo bereikt \"Performance Luxury\" een ongekend niveau.', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

CREATE TABLE `category` (
  `id` int(9) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `category`
--

INSERT INTO `category` (`id`, `picture`, `name`, `description`) VALUES
(1, 'categories/audi.jpg', 'Audi', 'Bekijk al onze Audi\'s'),
(2, 'categories/bmw.jpg', 'BMW', 'Bekijk al onze BMW\'s!'),
(3, 'categories/golfgti.jpg', 'Volkswagen', 'Bekijk al onze Volkswagens!'),
(4, 'categories/merrie.jpg', 'Mercedes-Benz', 'Bekijk al onze Mercedes-Benz\'s!');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `stars` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `review`
--

INSERT INTO `review` (`id`, `date`, `description`, `stars`, `product_id`, `user_id`) VALUES
(1, '2023-01-16', 'leuke auto', 5, 17, 2),
(2, '2023-01-16', 'de kleur van de auto is echt mooie', 4, 7, 2),
(3, '2023-01-16', 'de auto de interior is heel erg  mooie', 5, 18, 2),
(4, '2023-01-16', 'fdsfsdfds', 4, 7, 2),
(5, '2023-01-24', 'heel moooie beschrijving', 5, 2, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `role` enum('admin','member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `first_name`, `last_name`, `role`) VALUES
(1, 'Berdanyilmaz2004@gmail.com', 'Admin123', 'Berdan', 'Yilmaz', 'admin'),
(2, 'safa23safatas@hotmail.com', 'Safa123', 'Safa', 'Tas', 'admin'),
(3, 'riffi@gmail.com', 'qwerty', 'Riffi', 'Bechan', 'member');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id_fk` (`category_id`);

--
-- Indexen voor tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `car`
--
ALTER TABLE `car`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT voor een tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `category_id_fk` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Beperkingen voor tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `car` (`id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
