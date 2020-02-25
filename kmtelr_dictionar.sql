-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 27, 2012 at 11:34 AM
-- Server version: 5.5.24
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kmtelr_dictionar`
--

-- --------------------------------------------------------

--
-- Table structure for table `bibliografie`
--

CREATE TABLE IF NOT EXISTS `bibliografie` (
  `uid` int(10) NOT NULL,
  `link` varchar(255) NOT NULL,
  `title` varchar(120) NOT NULL,
  `content` text NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bibliografie`
--

INSERT INTO `bibliografie` (`uid`, `link`, `title`, `content`, `data_crearii`, `data_modificarii`) VALUES
(1, 'http://www.google.com', '', 'Google', '2012-06-10 13:51:28', NULL),
(3, 'http://www.google.com', 'Google', 'Imprimante', '2012-06-10 13:57:23', NULL),
(3, 'http://www.youtube.com', 'Youtube', 'Despre Imprimante', '2012-06-10 13:57:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `definitii_de`
--

CREATE TABLE IF NOT EXISTS `definitii_de` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `denumire` text NOT NULL,
  `sumar` text NOT NULL,
  `definitie` text NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `definitii_de`
--

INSERT INTO `definitii_de` (`uid`, `denumire`, `sumar`, `definitie`, `data_crearii`, `data_modificarii`) VALUES
(1, 'HTML', 'HyperText Markup Language (HTML) ist das wichtigste Markup-Sprache fÃ¼r Web-Seiten. HTML-Elemente sind die grundlegenden Bausteine â€‹â€‹von Webseiten.\r\n', 'HyperText Markup Language (HTML) ist das wichtigste Markup-Sprache fÃ¼r Web-Seiten. HTML-Elemente sind die grundlegenden Bausteine â€‹â€‹von Webseiten.\r\n\r\nHTML wird in Form von HTML-Elementen, bestehend aus Tags in spitzen Klammern (wie <html>), innerhalb der Webseiten-Inhalte geschrieben. HTML-Tags am hÃ¤ufigsten in Paaren wie <h1> und </ h1> kommen, auch wenn einige Tags, als leere Elemente bekannt, ungepaarten sind zum Beispiel <img>. Der erste Tag in einem Paar ist das Start-Tag, ist der zweite Tag der End-Tag (sie sind auch als Start-Tags und dem schlieÃŸenden Tag). Zwischen diesen Tags Web-Designer kÃ¶nnen Text, Tags, Kommentare und andere Arten von textbasierten Inhalten.\r\n\r\nDer Zweck eines Web-Browsers ist es, HTML-Dokumente lesen und verfassen sie in sichtbare oder hÃ¶rbare Webseiten. Der Browser zeigt nicht die HTML-Tags, sondern verwendet die Tags, um den Inhalt der Seite zu interpretieren.\r\n\r\nHTML-Elemente bilden die Bausteine â€‹â€‹aller Websites. HTML erlaubt es, Bilder und Objekte eingebettet werden und kann verwendet werden, um interaktive Formulare zu erstellen. Es bietet eine MÃ¶glichkeit, um strukturierte Dokumente bezeichnet durch strukturelle Semantik fÃ¼r Text wie Ãœberschriften, AbsÃ¤tze, Listen, Links, Zitate und andere GegenstÃ¤nde zu erstellen. Es kÃ¶nnen Skripts in Sprachen wie JavaScript, die das Verhalten von HTML-Seiten einbetten beeinflussen.', '2012-04-20 11:30:21', '2012-06-10 13:51:28'),
(2, 'CSS (Cascading Style Sheets)', 'CSS (Cascading Style Sheets) ist ein Standard fÃ¼r die Formatierung von Elementen eines HTML-Dokuments.', 'CSS (Cascading Style Sheets) ist ein Standard fÃ¼r die Formatierung von Elementen eines HTML-Dokuments.\r\n\r\nStile kÃ¶nnen durch HTML-Elementen oder externen Dateien in dem Dokument, das Element <style> und / oder style-Attribut angehÃ¤ngt werden. CSS kann fÃ¼r die Formatierung von Elementen XHTML, XML und SVGL verwendet werden.', '2012-04-27 03:47:28', '2012-06-10 13:55:40'),
(3, 'Drucker', 'Der Drucker ist Teil der outputasdsad PeripheriegerÃ¤te, die fÃ¼r die Umsetzung der Computer Informationen Papier (ein Dokument, ein Bild oder eine andere Grafik-Datei, eine E-Mail, Artikel, etc..) Verwendet wird.', 'Drucker gereiht nach verschiedenen Kriterien, zB. nach dem Zweck (Drucken / Drucken) und schnell, der Prozess, die maximale GrÃ¶ÃŸe des Papiers, Drucke und mehr.\r\n[Bearbeiten] Arten von Druckern\r\n\r\n     Matrix (oder "Nadel", niedrige QualitÃ¤t) - verwendet fÃ¼r niedrige QualitÃ¤t BlÃ¤tter, Rechnungen, etc.. (Generally Dokument-Typ), nur der Drucker Modell, das gleichzeitige Drucken von zwei oder drei Kopien erlaubt, mit Selbstdurchschreibepapier.\r\n     Inkjet - in Richtung hÃ¶herer durchschnittlicher QualitÃ¤t - Durchschnittliche Geschwindigkeit - fÃ¼r Dokumente und Fotos oder Grafikdateien)\r\n     Laser (high speed / high quality) - verwendet einen speziellen Toner\r\n     mit Thermodruck auf speziellem Papier - fÃ¼r Karten, Karten etc..\r\n\r\nDrucker finden Sie auf Papierformate von DIN A0 drucken - nur Plotter (Drucker grÃ¶ÃŸeren Unternehmen im Allgemeinen fÃ¼r CAD-, Plakate usw. verwendet), um den UmschlÃ¤gen, Fotos.', '2012-05-21 13:46:35', '2012-06-10 13:57:23');

-- --------------------------------------------------------

--
-- Table structure for table `definitii_en`
--

CREATE TABLE IF NOT EXISTS `definitii_en` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `denumire` text NOT NULL,
  `sumar` text NOT NULL,
  `definitie` text NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `definitii_en`
--

INSERT INTO `definitii_en` (`uid`, `denumire`, `sumar`, `definitie`, `data_crearii`, `data_modificarii`) VALUES
(1, 'HTML', 'HyperText Markup Language (HTML) is the main markup language for web pages. HTML elements are the basic building-blocks of webpages.', 'HyperText Markup Language (HTML) is the main markup language for web pages. HTML elements are the basic building-blocks of webpages.\r\n\r\nHTML is written in the form of HTML elements consisting of tags enclosed in angle brackets (like <html>), within the web page content. HTML tags most commonly come in pairs like <h1> and </h1>, although some tags, known as empty elements, are unpaired, for example <img>. The first tag in a pair is the start tag, the second tag is the end tag (they are also called opening tags and closing tags). In between these tags web designers can add text, tags, comments and other types of text-based content.\r\n\r\nThe purpose of a web browser is to read HTML documents and compose them into visible or audible web pages. The browser does not display the HTML tags, but uses the tags to interpret the content of the page.\r\n\r\nHTML elements form the building blocks of all websites. HTML allows images and objects to be embedded and can be used to create interactive forms. It provides a means to create structured documents by denoting structural semantics for text such as headings, paragraphs, lists, links, quotes and other items. It can embed scripts in languages such as JavaScript which affect the behavior of HTML webpages.', '2012-04-20 11:30:21', '2012-06-10 13:51:28'),
(2, 'CSS (Cascading Style Sheets)', 'CSS (Cascading Style Sheets) ist ein Standard fÃ¼r die Formatierung von Elementen eines HTML-Dokuments.', 'CSS (Cascading Style Sheets) ist ein Standard fÃ¼r die Formatierung von Elementen eines HTML-Dokuments.\r\n\r\nStile kÃ¶nnen durch HTML-Elementen oder externen Dateien in dem Dokument, das Element <style> und / oder style-Attribut angehÃ¤ngt werden. CSS kann fÃ¼r die Formatierung von Elementen XHTML, XML und SVGL verwendet werden.', '2012-04-26 21:34:46', '2012-06-10 13:55:40'),
(3, 'Printer', 'Printer is part of the outputasdsad peripherals, which is used for implementation of computer information paper (a document, a picture or any other graphic file, an e-mail, article, etc..).', 'Printers ranked according to several criteria, eg. by purpose (printing / printing) and fast, the process, the maximum size of paper that prints and more.\r\nTypes of printers\r\n\r\n     matrix (or "needle", low quality) - used for low quality sheets, invoices, etc.. (generally document type), only the printer model that allows simultaneous printing of two or three copies, using carbonless paper.\r\n     Inkjet - towards higher average quality - average speed - for documents and photos or graphic files)\r\n     laser (high speed / high quality) - uses a special toner\r\n     with thermal printing on special paper - for cards, cards etc..\r\n\r\nPrinters can print on paper sizes from A0 - only plotters (printers larger firms generally used for CAD, posters, etc.) to the envelopes, photos.', '2012-04-27 03:04:36', '2012-06-10 13:57:23');

-- --------------------------------------------------------

--
-- Table structure for table `definitii_fr`
--

CREATE TABLE IF NOT EXISTS `definitii_fr` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `denumire` text NOT NULL,
  `sumar` text NOT NULL,
  `definitie` text NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `definitii_fr`
--

INSERT INTO `definitii_fr` (`uid`, `denumire`, `sumar`, `definitie`, `data_crearii`, `data_modificarii`) VALUES
(1, 'HTML', 'HyperText Markup Language (HTML) est le principal langage de balisage pour les pages web. Les Ã©lÃ©ments HTML sont des blocs de construction de base de pages Web.', 'HyperText Markup Language (HTML) est le principal langage de balisage pour les pages web. Les Ã©lÃ©ments HTML sont des blocs de construction de base de pages Web.\r\n\r\nHTML est Ã©crit sous la forme d''Ã©lÃ©ments HTML constituÃ©s de balises entre crochets angulaires (comme <html>), dans le contenu de la page Web. Les balises HTML les plus couramment viennent en paires comme <h1> et </ h1>, bien que certains tags, connus comme des Ã©lÃ©ments vides, ne sont pas appariÃ©s, pour <img> exemple. La premiÃ¨re balise dans une paire est la balise de dÃ©but, la deuxiÃ¨me balise est la balise de fin (ils sont aussi appelÃ©s balises d''ouverture et de fermeture des balises). Entre ces balises concepteurs de sites Web peut ajouter du texte, tags, commentaires et autres types de contenu textuel.\r\n\r\nLe but d''un navigateur Web est de lire les documents HTML et les composer dans des pages web visibles ou audibles. Le navigateur n''affiche pas les balises HTML, mais utilise les balises pour interprÃ©ter le contenu de la page.\r\n\r\nÃ‰lÃ©ments HTML former les blocs de construction de tous les sites Web. HTML permet des images et des objets Ã  Ãªtre intÃ©grÃ© et peut Ãªtre utilisÃ© pour crÃ©er des formulaires interactifs. Il fournit un moyen de crÃ©er des documents structurÃ©s en dÃ©signant la sÃ©mantique structurale pour le texte comme les titres, paragraphes, listes, liens, citations et autres Ã©lÃ©ments. Il peut intÃ©grer des scripts dans des langages tels que JavaScript qui affectent le comportement des pages Web HTML.', '2012-04-20 11:30:21', '2012-06-10 13:51:28'),
(2, 'CSS (Cascading Style Sheets)', 'CSS (Cascading Style Sheets) est un standard pour la mise en forme des Ã©lÃ©ments d''un document HTML.', 'CSS (Cascading Style Sheets) est un standard pour la mise en forme des Ã©lÃ©ments d''un document HTML.\r\n\r\nLes styles peuvent Ãªtre fixÃ©s par des Ã©lÃ©ments HTML ou des fichiers externes dans le document, le <style> Ã©lÃ©ment et / ou de l''attribut style. CSS peut Ãªtre utilisÃ© pour formater des Ã©lÃ©ments XHTML, XML et SVGL.', '2012-04-20 11:38:18', '2012-06-10 13:55:40'),
(3, 'Imprimeur', 'L''imprimante est une partie des pÃ©riphÃ©riques de sortie, qui est utilisÃ© pour la mise en Å“uvre du document d''information informatique (un document, une photo ou tout autre fichier graphique, un e-mail, article, etc.).', 'Imprimantes classÃ©s en fonction de plusieurs critÃ¨res, par exemple. par objet (impression / impression) et rapide, le processus, la taille maximale de papier que les impressions et plus.\r\n[Modifier] les types d''imprimantes\r\n\r\n     matrice (ou Â«l''aiguilleÂ», de faible qualitÃ©) - utilisÃ© pour les feuilles de faible qualitÃ©, factures, etc. (type de document en gÃ©nÃ©ral), seul le modÃ¨le de l''imprimante qui permet l''impression simultanÃ©e de deux ou trois exemplaires, en utilisant du papier autocopiant.\r\n     Jet d''encre - vers une meilleure qualitÃ© moyenne - vitesse moyenne - pour les documents et des photos ou des fichiers graphiques)\r\n     laser (haute vitesse / qualitÃ©) - utilise un toner spÃ©cial\r\n     avec impression thermique sur du papier spÃ©cial - pour les cartes, cartes, etc.\r\n\r\nLes imprimantes peuvent imprimer sur des formats de papier de A0 - traceurs seulement (les entreprises plus grandes imprimantes gÃ©nÃ©ralement utilisÃ© pour la CAO, des affiches, etc) Ã  des enveloppes, des photos.', '2012-05-21 13:46:35', '2012-06-10 13:57:23');

-- --------------------------------------------------------

--
-- Table structure for table `definitii_ro`
--

CREATE TABLE IF NOT EXISTS `definitii_ro` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `denumire` text NOT NULL,
  `sumar` text NOT NULL,
  `definitie` text NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `definitii_ro`
--

INSERT INTO `definitii_ro` (`uid`, `denumire`, `sumar`, `definitie`, `data_crearii`, `data_modificarii`) VALUES
(1, 'HTML', 'HyperText Markup Language (HTML) este principalul limbaj de marcare pentru paginile web. Elementele HTML sunt de construcÅ£ie de bazÄƒ de blocuri de pagini Web.', 'HyperText Markup Language (HTML) este principalul limbaj de marcare pentru paginile web. Elementele HTML sunt de construcÅ£ie de bazÄƒ de blocuri de pagini Web.\r\n\r\nHTML este scris Ã®n formÄƒ de elemente HTML constituite de etichete Ã®ntre paranteze unghiulare (cum ar fi <html>), Ã®n conÅ£inutul paginii web. Tag-uri HTML cel mai frecvent vin Ã®n perechi, cum ar fi <h1> ÅŸi </ h1>, deÅŸi unele etichete, cunoscute ca elemente goale, sunt pereche, de exemplu, <img>. Tag prima dintr-o pereche este tag-ul de start, tag-ul al doilea este tag-ul final (acestea sunt, de asemenea, numit de deschidere ÅŸi de Ã®nchidere etichete tag-uri). ÃŽn Ã®ntre aceste tag-uri web designeri pot adÄƒuga text, tag-uri, comentarii ÅŸi alte tipuri de conÅ£inut bazate pe text.\r\n\r\nScopul unui browser web este de a citi documente HTML ÅŸi le compune Ã®n pagini web vizibile sau acustic. Browser-ul nu afiÅŸeazÄƒ etichetele HTML, dar utilizeazÄƒ etichetele pentru a interpreta conÅ£inutul paginii.\r\n\r\nElemente HTML forma de blocuri de construcÅ£ie ale tuturor site-uri web. HTML permite imagini ÅŸi obiecte sÄƒ fie Ã®ncorporate ÅŸi pot fi folosite pentru a crea formulare interactive. Acesta oferÄƒ un mijloc de a crea documente structurate prin care indicÄƒ semantica structurale pentru text, cum ar fi titluri, paragrafe, liste, linkuri, citate ÅŸi alte elemente. Se poate incorpora script-uri Ã®n limbi, cum ar fi JavaScript, care afecteazÄƒ comportamentul de pagini Web HTML.', '2012-04-20 11:30:21', '2012-06-10 13:51:28'),
(2, 'CSS', 'CSS (Cascading Style Sheets) este un standard pentru formatarea elementelor unui document HTML.', 'CSS (Cascading Style Sheets) este un standard pentru formatarea elementelor unui document HTML. \r\n\r\nStilurile se pot ataÈ™a elementelor HTML prin intermediul unor fiÈ™iere externe sau Ã®n cadrul documentului, prin elementul <style> È™i/sau atributul style. CSS se poate utiliza È™i pentru formatarea elementelor XHTML, XML È™i SVGL.', '2012-04-20 11:38:18', '2012-06-10 13:55:40'),
(3, 'Imprimanta', 'Imprimanta face parte din categoria perifericelor de ieÈ™ire, aceasta fiind utilizatÄƒ pentru transpunerea informaÈ›iei din calculator pe hÃ¢rtie (un document, o pozÄƒ sau orice altfel de fiÈ™ier grafic, un e-mail, un articol etc.).', 'Imprimantele se claseazÄƒ dupÄƒ mai multe criterii, de ex. Ã®n funcÈ›ie de scop (imprimare/tipÄƒrire) È™i de rapiditate, de procedeu, de dimensiunile maxime ale hÃ¢rtiei pe care se imprimÄƒ È™i altele.\r\n[modificare] Tipuri de imprimante\r\n\r\n    matriceale (sau â€žcu aceâ€, calitate scÄƒzutÄƒ) - folositÄƒ pentru foi de calitate scÄƒzutÄƒ, facturi fiscale etc. (Ã®n general documente tip), singurul model de imprimantÄƒ care permite imprimarea simultanÄƒ a 2 sau 3 exemplare, folosind hÃ¢rtie autocopiativÄƒ.\r\n    cu jet de cernealÄƒ - calitate medie Ã®nspre ridicatÄƒ - vitezÄƒ medie - pentru documente È™i poze sau fiÈ™iere grafice)\r\n    laser (vitezÄƒ Ã®naltÄƒ / calitate ridicatÄƒ) - foloseÈ™te un toner special\r\n    cu imprimare termicÄƒ, pe hÃ¢rtie specialÄƒ - pentru legitimaÈ›ii, carduri etc.\r\n\r\nImprimantele pot imprima pe hÃ¢rtie de dimensiuni diferite, de la A0 - numai plottere (imprimante de dimensiuni mai mari folosite Ã®n general de firme pentru scheme CAD, afiÈ™e etc) È™i pÃ¢nÄƒ la plicuri, fotografii etc.', '2012-04-20 12:05:49', '2012-06-10 13:57:23');

-- --------------------------------------------------------

--
-- Table structure for table `documentatie`
--

CREATE TABLE IF NOT EXISTS `documentatie` (
  `uid` int(10) NOT NULL,
  `link` varchar(255) NOT NULL,
  `title` varchar(120) NOT NULL,
  `content` text NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `documentatie`
--

INSERT INTO `documentatie` (`uid`, `link`, `title`, `content`, `data_crearii`, `data_modificarii`) VALUES
(1, 'http://www.w3schools.com/html/default.asp', '', 'W3Schools HTML', '2012-06-10 13:51:28', NULL),
(1, 'http://ro.wikipedia.org/wiki/HyperText_Markup_Language', '', 'HyperText Markup Language', '2012-06-10 13:51:28', NULL),
(1, 'http://en.wikipedia.org/wiki/HTML', '', 'HTML English', '2012-06-10 13:51:28', NULL),
(3, 'http://www.wikpedia.org', 'Wikipedia', 'Wikipedia', '2012-06-10 13:57:23', NULL),
(3, 'http://www.wikpedia.org', 'ROMANIA wiki', 'ROMANIA wiki', '2012-06-10 13:57:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `imagini`
--

CREATE TABLE IF NOT EXISTS `imagini` (
  `uid` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imagini`
--

INSERT INTO `imagini` (`uid`, `img`, `data_crearii`, `data_modificarii`) VALUES
(3, 'imprimanta.JPG', '2012-06-06 22:49:24', NULL),
(1, 'cool-html-codes.jpg', '2012-06-10 13:51:28', NULL),
(1, 'html.jpg', '2012-06-10 13:51:28', NULL),
(1, 'html-tags.jpeg', '2012-06-10 13:51:28', NULL),
(2, 'CSS-Editor-full.gif', '2012-06-10 13:55:40', NULL),
(2, 'Css.png', '2012-06-10 13:55:40', NULL),
(2, 'CSS_Scrollbar_Color_Designer_6634.jpg', '2012-06-10 13:55:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `uid` int(10) NOT NULL,
  `embed` varchar(255) NOT NULL,
  `tip_film` varchar(255) NOT NULL,
  `titlu` text NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`uid`, `embed`, `tip_film`, `titlu`, `data_crearii`, `data_modificarii`) VALUES
(1, 'GwQMnpUsj8I', 'youtube', 'Learn HTML and CSS Tutorial. Howto make website from scratch ', '2012-06-10 13:51:28', NULL),
(1, 'GOfhmzNLWzY', 'youtube', 'HTML Tutorial 1 - Designing A Website In Notepad - Basics and Beginnings ', '2012-06-10 13:51:28', NULL),
(1, 'YV3gxkXpkno', 'youtube', 'Beginning HTML (XHTML) Tutorial ', '2012-06-10 13:51:28', NULL),
(2, 'Wz2klMXDqF4', 'youtube', 'CSS Tutorial for Beginners - part 1 of 4 - Applying Styles ', '2012-06-10 13:55:40', NULL),
(3, 'is-HVxmUELQ', 'youtube', 'Printer Jam', '2012-06-10 13:57:23', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
