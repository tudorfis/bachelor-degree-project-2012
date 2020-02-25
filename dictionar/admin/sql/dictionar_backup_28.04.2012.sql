-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Gazda: localhost
-- Timp de generare: 28 Apr 2012 la 14:47
-- Versiune server: 5.5.16
-- Versiune PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza de date: `dictionar`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `bibliografie`
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
-- Salvarea datelor din tabel `bibliografie`
--

INSERT INTO `bibliografie` (`uid`, `link`, `title`, `content`, `data_crearii`, `data_modificarii`) VALUES
(1, 'ggg', 'adad', 'gasdasd', '2012-04-27 04:14:26', NULL),
(3, 'http://www.google.com', 'Google', 'The hit on Tucker Hannon ', '2012-04-28 09:24:52', NULL),
(3, 'http://www.youtube.com', 'Youtube', 'Visualtraveling - Kim Il', '2012-04-28 09:24:52', NULL);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `definitii_de`
--

CREATE TABLE IF NOT EXISTS `definitii_de` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `denumire` text NOT NULL,
  `sumar` text NOT NULL,
  `definitie` text NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Salvarea datelor din tabel `definitii_de`
--

INSERT INTO `definitii_de` (`uid`, `denumire`, `sumar`, `definitie`, `data_crearii`, `data_modificarii`) VALUES
(1, 'HTML', 'HyperText Markup Language (HTML) ist das wichtigste Markup-Sprache fÃ¼r Web-Seiten. HTML-Elemente sind die grundlegenden Bausteine â€‹â€‹von Webseiten.\r\n', 'HyperText Markup Language (HTML) ist das wichtigste Markup-Sprache fÃ¼r Web-Seiten. HTML-Elemente sind die grundlegenden Bausteine â€‹â€‹von Webseiten.\r\n\r\nHTML wird in Form von HTML-Elementen, bestehend aus Tags in spitzen Klammern (wie <html>), innerhalb der Webseiten-Inhalte geschrieben. HTML-Tags am hÃ¤ufigsten in Paaren wie <h1> und </ h1> kommen, auch wenn einige Tags, als leere Elemente bekannt, ungepaarten sind zum Beispiel <img>. Der erste Tag in einem Paar ist das Start-Tag, ist der zweite Tag der End-Tag (sie sind auch als Start-Tags und dem schlieÃŸenden Tag). Zwischen diesen Tags Web-Designer kÃ¶nnen Text, Tags, Kommentare und andere Arten von textbasierten Inhalten.\r\n\r\nDer Zweck eines Web-Browsers ist es, HTML-Dokumente lesen und verfassen sie in sichtbare oder hÃ¶rbare Webseiten. Der Browser zeigt nicht die HTML-Tags, sondern verwendet die Tags, um den Inhalt der Seite zu interpretieren.\r\n\r\nHTML-Elemente bilden die Bausteine â€‹â€‹aller Websites. HTML erlaubt es, Bilder und Objekte eingebettet werden und kann verwendet werden, um interaktive Formulare zu erstellen. Es bietet eine MÃ¶glichkeit, um strukturierte Dokumente bezeichnet durch strukturelle Semantik fÃ¼r Text wie Ãœberschriften, AbsÃ¤tze, Listen, Links, Zitate und andere GegenstÃ¤nde zu erstellen. Es kÃ¶nnen Skripts in Sprachen wie JavaScript, die das Verhalten von HTML-Seiten einbetten beeinflussen.', '2012-04-20 11:30:21', '2012-04-27 04:14:26'),
(2, 'CSS (Cascading Style Sheets)', 'CSS (Cascading Style Sheets) ist ein Standard fÃ¼r die Formatierung von Elementen eines HTML-Dokuments.', 'CSS (Cascading Style Sheets) ist ein Standard fÃ¼r die Formatierung von Elementen eines HTML-Dokuments.\r\n\r\nStile kÃ¶nnen durch HTML-Elementen oder externen Dateien in dem Dokument, das Element <style> und / oder style-Attribut angehÃ¤ngt werden. CSS kann fÃ¼r die Formatierung von Elementen XHTML, XML und SVGL verwendet werden.', '2012-04-27 03:47:28', '2012-04-26 21:35:14');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `definitii_en`
--

CREATE TABLE IF NOT EXISTS `definitii_en` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `denumire` text NOT NULL,
  `sumar` text NOT NULL,
  `definitie` text NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Salvarea datelor din tabel `definitii_en`
--

INSERT INTO `definitii_en` (`uid`, `denumire`, `sumar`, `definitie`, `data_crearii`, `data_modificarii`) VALUES
(1, 'HTML', 'HyperText Markup Language (HTML) is the main markup language for web pages. HTML elements are the basic building-blocks of webpages.', 'HyperText Markup Language (HTML) is the main markup language for web pages. HTML elements are the basic building-blocks of webpages.\r\n\r\nHTML is written in the form of HTML elements consisting of tags enclosed in angle brackets (like <html>), within the web page content. HTML tags most commonly come in pairs like <h1> and </h1>, although some tags, known as empty elements, are unpaired, for example <img>. The first tag in a pair is the start tag, the second tag is the end tag (they are also called opening tags and closing tags). In between these tags web designers can add text, tags, comments and other types of text-based content.\r\n\r\nThe purpose of a web browser is to read HTML documents and compose them into visible or audible web pages. The browser does not display the HTML tags, but uses the tags to interpret the content of the page.\r\n\r\nHTML elements form the building blocks of all websites. HTML allows images and objects to be embedded and can be used to create interactive forms. It provides a means to create structured documents by denoting structural semantics for text such as headings, paragraphs, lists, links, quotes and other items. It can embed scripts in languages such as JavaScript which affect the behavior of HTML webpages.', '2012-04-20 11:30:21', '2012-04-27 04:14:26'),
(2, 'CSS (Cascading Style Sheets)', 'CSS (Cascading Style Sheets) ist ein Standard fÃ¼r die Formatierung von Elementen eines HTML-Dokuments.', 'CSS (Cascading Style Sheets) ist ein Standard fÃ¼r die Formatierung von Elementen eines HTML-Dokuments.\r\n\r\nStile kÃ¶nnen durch HTML-Elementen oder externen Dateien in dem Dokument, das Element <style> und / oder style-Attribut angehÃ¤ngt werden. CSS kann fÃ¼r die Formatierung von Elementen XHTML, XML und SVGL verwendet werden.', '2012-04-26 21:34:46', '2012-04-26 21:35:14'),
(3, 'Printer serlorem ipsum claudia are dinti frumosi', 'Printer is part of the outputasdsad peripherals, which is used for implementation of computer information paper (a document, a picture or any other graphic file, an e-mail, article, etc..).', 'Printers ranked according to several criteria, eg. by purpose (printing / printing) and fast, the process, the maximum size of paper that prints and more.\r\nTypes of printers\r\n\r\n     matrix (or "needle", low quality) - used for low quality sheets, invoices, etc.. (generally document type), only the printer model that allows simultaneous printing of two or three copies, using carbonless paper.\r\n     Inkjet - towards higher average quality - average speed - for documents and photos or graphic files)\r\n     laser (high speed / high quality) - uses a special toner\r\n     with thermal printing on special paper - for cards, cards etc..\r\n\r\nPrinters can print on paper sizes from A0 - only plotters (printers larger firms generally used for CAD, posters, etc.) to the envelopes, photos.', '2012-04-27 03:04:36', '2012-04-28 09:24:52');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `definitii_fr`
--

CREATE TABLE IF NOT EXISTS `definitii_fr` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `denumire` text NOT NULL,
  `sumar` text NOT NULL,
  `definitie` text NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Salvarea datelor din tabel `definitii_fr`
--

INSERT INTO `definitii_fr` (`uid`, `denumire`, `sumar`, `definitie`, `data_crearii`, `data_modificarii`) VALUES
(1, 'HTML', 'HyperText Markup Language (HTML) est le principal langage de balisage pour les pages web. Les Ã©lÃ©ments HTML sont des blocs de construction de base de pages Web.', 'HyperText Markup Language (HTML) est le principal langage de balisage pour les pages web. Les Ã©lÃ©ments HTML sont des blocs de construction de base de pages Web.\r\n\r\nHTML est Ã©crit sous la forme d''Ã©lÃ©ments HTML constituÃ©s de balises entre crochets angulaires (comme <html>), dans le contenu de la page Web. Les balises HTML les plus couramment viennent en paires comme <h1> et </ h1>, bien que certains tags, connus comme des Ã©lÃ©ments vides, ne sont pas appariÃ©s, pour <img> exemple. La premiÃ¨re balise dans une paire est la balise de dÃ©but, la deuxiÃ¨me balise est la balise de fin (ils sont aussi appelÃ©s balises d''ouverture et de fermeture des balises). Entre ces balises concepteurs de sites Web peut ajouter du texte, tags, commentaires et autres types de contenu textuel.\r\n\r\nLe but d''un navigateur Web est de lire les documents HTML et les composer dans des pages web visibles ou audibles. Le navigateur n''affiche pas les balises HTML, mais utilise les balises pour interprÃ©ter le contenu de la page.\r\n\r\nÃ‰lÃ©ments HTML former les blocs de construction de tous les sites Web. HTML permet des images et des objets Ã  Ãªtre intÃ©grÃ© et peut Ãªtre utilisÃ© pour crÃ©er des formulaires interactifs. Il fournit un moyen de crÃ©er des documents structurÃ©s en dÃ©signant la sÃ©mantique structurale pour le texte comme les titres, paragraphes, listes, liens, citations et autres Ã©lÃ©ments. Il peut intÃ©grer des scripts dans des langages tels que JavaScript qui affectent le comportement des pages Web HTML.', '2012-04-20 11:30:21', '2012-04-27 04:14:26'),
(2, 'CSS (Cascading Style Sheets)', 'CSS (Cascading Style Sheets) est un standard pour la mise en forme des Ã©lÃ©ments d''un document HTML.', 'CSS (Cascading Style Sheets) est un standard pour la mise en forme des Ã©lÃ©ments d''un document HTML.\r\n\r\nLes styles peuvent Ãªtre fixÃ©s par des Ã©lÃ©ments HTML ou des fichiers externes dans le document, le <style> Ã©lÃ©ment et / ou de l''attribut style. CSS peut Ãªtre utilisÃ© pour formater des Ã©lÃ©ments XHTML, XML et SVGL.', '2012-04-20 11:38:18', '2012-04-26 21:35:14');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `definitii_ro`
--

CREATE TABLE IF NOT EXISTS `definitii_ro` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `denumire` text NOT NULL,
  `sumar` text NOT NULL,
  `definitie` text NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Salvarea datelor din tabel `definitii_ro`
--

INSERT INTO `definitii_ro` (`uid`, `denumire`, `sumar`, `definitie`, `data_crearii`, `data_modificarii`) VALUES
(1, 'HTML', 'HyperText Markup Language (HTML) este principalul limbaj de marcare pentru paginile web. Elementele HTML sunt de construcÅ£ie de bazÄƒ de blocuri de pagini Web.', 'HyperText Markup Language (HTML) este principalul limbaj de marcare pentru paginile web. Elementele HTML sunt de construcÅ£ie de bazÄƒ de blocuri de pagini Web.\r\n\r\nHTML este scris Ã®n formÄƒ de elemente HTML constituite de etichete Ã®ntre paranteze unghiulare (cum ar fi <html>), Ã®n conÅ£inutul paginii web. Tag-uri HTML cel mai frecvent vin Ã®n perechi, cum ar fi <h1> ÅŸi </ h1>, deÅŸi unele etichete, cunoscute ca elemente goale, sunt pereche, de exemplu, <img>. Tag prima dintr-o pereche este tag-ul de start, tag-ul al doilea este tag-ul final (acestea sunt, de asemenea, numit de deschidere ÅŸi de Ã®nchidere etichete tag-uri). ÃŽn Ã®ntre aceste tag-uri web designeri pot adÄƒuga text, tag-uri, comentarii ÅŸi alte tipuri de conÅ£inut bazate pe text.\r\n\r\nScopul unui browser web este de a citi documente HTML ÅŸi le compune Ã®n pagini web vizibile sau acustic. Browser-ul nu afiÅŸeazÄƒ etichetele HTML, dar utilizeazÄƒ etichetele pentru a interpreta conÅ£inutul paginii.\r\n\r\nElemente HTML forma de blocuri de construcÅ£ie ale tuturor site-uri web. HTML permite imagini ÅŸi obiecte sÄƒ fie Ã®ncorporate ÅŸi pot fi folosite pentru a crea formulare interactive. Acesta oferÄƒ un mijloc de a crea documente structurate prin care indicÄƒ semantica structurale pentru text, cum ar fi titluri, paragrafe, liste, linkuri, citate ÅŸi alte elemente. Se poate incorpora script-uri Ã®n limbi, cum ar fi JavaScript, care afecteazÄƒ comportamentul de pagini Web HTML.', '2012-04-20 11:30:21', '2012-04-27 04:14:26'),
(2, 'CSS', 'CSS (Cascading Style Sheets) este un standard pentru formatarea elementelor unui document HTML.', 'CSS (Cascading Style Sheets) este un standard pentru formatarea elementelor unui document HTML. \r\n\r\nStilurile se pot ataÈ™a elementelor HTML prin intermediul unor fiÈ™iere externe sau Ã®n cadrul documentului, prin elementul <style> È™i/sau atributul style. CSS se poate utiliza È™i pentru formatarea elementelor XHTML, XML È™i SVGL.', '2012-04-20 11:38:18', '2012-04-26 21:35:14'),
(3, 'Imprimanta', 'Imprimanta face parte din categoria perifericelor de ieÈ™ire, aceasta fiind utilizatÄƒ pentru transpunerea informaÈ›iei din calculator pe hÃ¢rtie (un document, o pozÄƒ sau orice altfel de fiÈ™ier grafic, un e-mail, un articol etc.).', 'Imprimantele se claseazÄƒ dupÄƒ mai multe criterii, de ex. Ã®n funcÈ›ie de scop (imprimare/tipÄƒrire) È™i de rapiditate, de procedeu, de dimensiunile maxime ale hÃ¢rtiei pe care se imprimÄƒ È™i altele.\r\n[modificare] Tipuri de imprimante\r\n\r\n    matriceale (sau â€žcu aceâ€, calitate scÄƒzutÄƒ) - folositÄƒ pentru foi de calitate scÄƒzutÄƒ, facturi fiscale etc. (Ã®n general documente tip), singurul model de imprimantÄƒ care permite imprimarea simultanÄƒ a 2 sau 3 exemplare, folosind hÃ¢rtie autocopiativÄƒ.\r\n    cu jet de cernealÄƒ - calitate medie Ã®nspre ridicatÄƒ - vitezÄƒ medie - pentru documente È™i poze sau fiÈ™iere grafice)\r\n    laser (vitezÄƒ Ã®naltÄƒ / calitate ridicatÄƒ) - foloseÈ™te un toner special\r\n    cu imprimare termicÄƒ, pe hÃ¢rtie specialÄƒ - pentru legitimaÈ›ii, carduri etc.\r\n\r\nImprimantele pot imprima pe hÃ¢rtie de dimensiuni diferite, de la A0 - numai plottere (imprimante de dimensiuni mai mari folosite Ã®n general de firme pentru scheme CAD, afiÈ™e etc) È™i pÃ¢nÄƒ la plicuri, fotografii etc.', '2012-04-20 12:05:49', '2012-04-28 09:24:52');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `documentatie`
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
-- Salvarea datelor din tabel `documentatie`
--

INSERT INTO `documentatie` (`uid`, `link`, `title`, `content`, `data_crearii`, `data_modificarii`) VALUES
(3, 'http://www.wikpedia.org', 'Wikipedia', 'Wikipedia', '2012-04-28 09:24:52', NULL),
(3, 'http://www.wikpedia.org', 'ROMANIA wiki', 'ROMANIA wiki', '2012-04-28 09:24:52', NULL);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `imagini`
--

CREATE TABLE IF NOT EXISTS `imagini` (
  `uid` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `imagini`
--

INSERT INTO `imagini` (`uid`, `img`, `data_crearii`, `data_modificarii`) VALUES
(3, 'furatul_interzis.jpg', '2012-04-26 21:33:50', NULL),
(3, 'la_multi_ani_lsua20ani.png', '2012-04-26 21:33:50', NULL),
(3, 'paste_fericit.jpg', '2012-04-26 21:33:50', NULL),
(3, 'sa_moara_mata.jpg', '2012-04-26 21:33:50', NULL);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `video`
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
-- Salvarea datelor din tabel `video`
--

INSERT INTO `video` (`uid`, `embed`, `tip_film`, `titlu`, `data_crearii`, `data_modificarii`) VALUES
(1, 'aaaaaaaaa', 'youtube', 'aaaaaaaaa', '2012-04-27 04:14:26', NULL),
(1, 'bbbbbbbb', 'youtube', 'bbbbbbbbbbbbbb', '2012-04-27 04:14:26', NULL),
(3, 'pTWRjZ_nP1M', 'youtube', 'The hit on Tucker Hannon ', '2012-04-28 09:24:52', NULL),
(3, '41074044', 'vimeo', 'Visualtraveling - Kim Il', '2012-04-28 09:24:52', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
