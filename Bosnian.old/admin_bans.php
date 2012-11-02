<?php

// Language definitions used in admin_bans.php
$lang_admin_bans = array(

'No user message'			=>	'Ne postoji korisnik sa tim korisničkim imenom. Ako želite banovati korisnika bez određenog korisničkog imena, ostavite polje korisničko ime prazno',
'No user ID message'		=>	'Korisnik sa tim korisničkim imenom nije registrovan.',
'User is admin message'		=>	'Korisnik %s je administrator i ne može biti banovan. Ako želite banovati administratora, morate ga/je prvo degradirati.',
'User is mod message'		=>	'Korisnik %s je moderator i ne može biti banovan. Ako želite banovati moderatora, morate ga/je prvo degradirati.',
'Must enter message'		=>	'Morate unijeti ili korisničko ime, ili IP adresu ili email adresu (najmanje).',
'Cannot ban guest message'	=>	'Gost korisnik ne može biti banovan.',
'Invalid IP message'		=>	'Unijeli ste nevažeću IP adresu/IP opseg.',
'Invalid e-mail message'	=>	'Email adresa (npr. korisnik@domena.com) ili djelimična domena email adrese (npr. domena.com) koju ste unijeli je nevažeća.',
'Invalid date message'		=>	'Unijeli ste nevažeći datum isteka.',
'Invalid date reasons'		=>	'Format bi trebao biti GGG-MM-DD i datum mora biti barem jedan dan u budućnosti.',
'Ban added redirect'		=>	'Ban dodan. Preusmijeravam …' ,
'Ban edited redirect'		=>	'Ban izmijenjen. Preusmijeravam …',
'Ban removed redirect'		=>	'Ban skinut. Preusmijeravam …',

'New ban head'				=>	'Novi ban',
'Add ban subhead'			=>	'Dodaj ban',
'Username label'			=>	'Korisničko ime',
'Username help'				=>	'Korisničko ime za banovati (neosjetljivo na vrstu slova).',
'Username advanced help'	=>	'Korisničko ime za banovati (neosjetljivo na vrstu slova). Slijedeća stranica će vam omogućiti da unesete proizvoljnu IP adresu i email. Ako želite banovati specifičnu IP adresu/IP opseg ili email ostavite polje prazno.',

'Ban search head'			=>	'Banuj pretragu',
'Ban search subhead'		=>	'Unesite kriterij za pretragu',
'Ban search info'			=>	'Pretraži bazu podataka za banove. Možete unijeti jedan ili više pojmova za pretragu. Višeznačnici u formi zvijezdice (*) su prihvatljivi. Da prikažete sve banove, ostavite sva polja prazna.',
'Date help'					=>	'(gggg-mm-dd)',
'Message label'				=>	'Poruka',
'Expire after label'		=>	'Ističe nakon',
'Expire before label'		=>	'Ističe prije',
'Order by label'			=>	'Sortiraj prema',
'Order by username'			=>	'Korisnočko ime',
'Order by ip'				=>	'IP adresa',
'Order by e-mail'			=>	'Email',
'Order by expire'			=>	'Datum isteka',
'Ascending'					=>	'Uzlazno',
'Descending'				=>	'Silazno',
'Submit search'				=>	'Pretraži',

'E-mail label'				=>	'Email',
'E-mail help'				=>	'Email adresa ili email domena koju želite banovati (npr. neko@negdje.com ili negdje.com). Za više informacija pogledati "Dozvoli banovane email adrese" u Dozvolama.',
'IP label'					=>	'IP adresa/IP-opseg',
'IP help'					=>	'IP adresa ili IP opseg koji želite banovati (npr. 150.11.110.1 ili 150.11.110). Odvojite adrese sa razmacima. Ako je IP adresa već unesena onda je to posljednja poznata IP adresa korisnika u bazi podataka.',
'IP help link'				=>	'Kliknite %s da vidite IP statistiku za ovog korisnika.',
'Ban advanced head'			=>	'Napredne postavke za banovanje',
'Ban advanced subhead'		=>	'Proširi ban sa IP adresom i email adresom',
'Ban message label'			=>	'Banuj poruku',
'Ban message help'			=>	'Poruka koja će biti prikazana banovanom korisniku kada on/ona posjeti forum.',
'Message expiry subhead'	=>	'Poruka i istek bana',
'Ban IP range info'			=>	'Prilikom banovanja IP opsega, trebali obratite posebnu pažnju zbog mogućnosti da više korisnika dijeli istu djelimičnu IP adresu.',
'Expire date label'			=>	'Datum isteka',
'Expire date help'			=>	'Datum kada bi ovaj ban trebao biti automatski skinut (format: gggg-mm-dd). Ostavite prazno za ručno skidanje.',

'Results head'				=>	'Rezultati pretrage',
'Results username head'		=>	'Korisničko ime',
'Results e-mail head'		=>	'Email adresa',
'Results IP address head'	=>	'IP adresa/IP-opseg',
'Results expire head'		=>	'Ističe',
'Results message head'		=>	'Poruka',
'Results banned by head'	=>	'Banovan od',
'Results actions head'		=>	'Akcije',
'No match'					=>	'Nema rezultata',
'Unknown'					=>	'Nepoznato',

);
