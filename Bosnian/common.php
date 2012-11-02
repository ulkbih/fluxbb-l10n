<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'bs',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'Bad request. Link koji ste otvorili nije tačan ili je zastario.',
'No view'							=>	'Nemate dozvolu za pregled ovog foruma.',
'No permission'						=>	'Nemate dozvolu za pristup ovoj stranici.',
'Bad referrer'						=>	'Bad HTTP_REFERER. Usmjereni ste na ovaj forum sa neovlaštene stranice. Ukoliko se problem bude ponavljao, molimo provjerite da li admin opcija \'Base URL\' ima korektnu vrijednost i da posjećujete forum koristeći taj URL. Više informacija možete naći u FluxBB dokumentaciji',
'No cookie'							=>	'Uspješno ste se prijavili, ali nije bilo moguće postaviti kolačić (cookie). Molimo provjerite vaše postavke i uključite podršku za kolačiće na ovoj stranici.',
'Pun include error'					=>	'Ne mogu procesirati korisnički include %s iz šablona %s. Navedena datoteka ne postoji u direktoriju sa šablonima ili u korisničkom include direktoriju.',

// Miscellaneous
'Announcement'						=>	'Obavijest',
'Options'							=>	'Opcije',
'Submit'							=>	'Snimi', // "Name" of submit buttons
'Ban message'						=>	'Banovani ste sa ovog foruma',
'Ban message 2'						=>	'Ban prestaje na kraju',
'Ban message 3'						=>	'Administrator ili moderator koji vas je banovao ostavio je sljedeću poruku:',
'Ban message 4'						=>	'Molimo šaljite upite administratoru na',
'Never'								=>	'Nikad',
'Today'								=>	'Danas',
'Yesterday'							=>	'Jučer',
'Info'								=>	'Info', // A common table header
'Go back'							=>	'Idi nazad',
'Maintenance'						=>	'Održavanje',
'Redirecting'						=>	'Preusmjeravam',
'Click redirect'					=>	'Kliknite ovdje ako ne želite čekati (ili vas vaš web browser ne preusmjerava)',
'on'								=>	'uključen', // As in "BBCode is on"
'off'								=>	'isključen',
'Invalid email'						=>	'Navedena email adresa  nije ispravna',
'Required'							=>	'(Obavezno)',
'required field'					=>	'je obavezno polje u ovom formularu.', // For javascript form validation
'Last post'							=>	'Posljednji odgovor',
'by'								=>	'od', // As in last post by someuser
'New posts'							=>	'Novi odgovori', // The link that leads to the first new post
'New posts info'					=>	'Idi na početak teme.', // The popup text for new posts links
'Username'							=>	'Korisničko ime',
'Password'							=>	'Šifra',
'Email'								=>	'Email',
'Send email'						=>	'Pošalji email',
'Moderated by'						=>	'Moderira',
'Registered'						=>	'Registrovan(a)',
'Subject'							=>	'Naslov',
'Message'							=>	'Poruka',
'Topic'								=>	'Tema',
'Forum'								=>	'Forum',
'Posts'								=>	'Poruke',
'Replies'							=>	'Odgovora',
'Pages'								=>	'Stranica:',
'Page'								=>	'Stranica %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'url tag'							=>	'[url] tag:',
'img tag'							=>	'[img] tag:',
'Smilies'							=>	'Smajliji:',
'and'								=>	'i',
'Image link'						=>	'slika', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'napisao/la:', // For [quote]'s
'Mailer'							=>	'%s Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Važna informacija',
'Write message legend'				=>	'Napišite i pošaljite vašu poruku',
'Previous'							=>	'Prethodna',
'Next'								=>	'Sljedeća',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Titula',
'Member'							=>	'Član', // Default title
'Moderator'							=>	'Moderator',
'Administrator'						=>	'Administrator',
'Banned'							=>	'Banovan',
'Guest'								=>	'Gost',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] je nađen bez odgovarajućeg [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] je otvoren unutar [%2$s], ovo nije dozvoljeno',
'BBCode error invalid self-nesting'	=>	'[%s] je otvoren unutar sebe, ovo nije dozvoljeno',
'BBCode error no closing tag'		=>	'[%1$s] je nađen bez odgovarajućeg [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] tag nema postavljenih atributa',
'BBCode error tag not allowed'		=>	'Nije vam dozvoljeno korištenje [%s] tagova',
'BBCode error tag url not allowed'	=>	'Ne možete postavljati linkove',
'BBCode code problem'				=>	'Ima grešaka sa vašim [code] tagovima',
'BBCode list size error'			=>	'Vaša lista je preduga za parsiranje, molimo skratite je!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Početna stranica',
'User list'							=>	'Lista korisnika',
'Rules'								=>	'Pravila',
'Search'							=>	'Pretraga',
'Register'							=>	'Registracija',
'Login'								=>	'Prijava',
'Not logged in'						=>	'Niste prijavljeni.',
'Profile'							=>	'Profil',
'Logout'							=>	'Odjava',
'Logged in as'						=>	'Prijavljeni ste kao',
'Admin'								=>	'Administracija',
'Last visit'						=>	'Posljednja posjeta: %s',
'Topic searches'					=>	'Teme:',
'New posts header'					=>	'Nove',
'Active topics'						=>	'Aktivne',
'Unanswered topics'					=>	'Neodgovorene',
'Posted topics'						=>	'Moje',
'Show new posts'					=>	'Teme sa novim porukama od posljednje posjete.',
'Show active topics'				=>	'Aktivne teme.',
'Show unanswered topics'			=>	'Teme bez odgovora.',
'Show posted topics'				=>	'Teme sa mojim odgovorima',
'Mark all as read'					=>	'Označi sve teme kao pročitane',
'Mark forum read'					=>	'Označi ovaj forum kao pročitan',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Board footer',
'Jump to'							=>	'Idi na',
'Go'								=>	' OK ', // Submit button in forum jump
'Moderate topic'					=>	'Moderacija teme',
'Move topic'						=>	'Pomjeri temu',
'Open topic'						=>	'Otvori temu',
'Close topic'						=>	'Zatvori temu',
'Unstick topic'						=>	'Obična tema',
'Stick topic'						=>	'Važna tema',
'Moderate forum'					=>	'Moderacija foruma',
'Powered by'						=>	'Powered by %s',

// Debug information
'Debug table'						=>	'Debug informacije',
'Querytime'							=>	'Generisano u %1$s sekundi, izvršeno %2$ upita',
'Memory usage'						=>	'Potrošnja memorije: %1$s',
'Peak usage'						=>	'(Najveća potrošnja: %1$s)',
'Query times'						=>	'Vrijeme upita',
'Query'								=>	'Upit',
'Total query time'					=>	'Ukupno vrijeme upita: %s',

// For extern.php RSS feed
'RSS description'					=>	'Posljednje teme %s.',
'RSS description topic'				=>	'Posljednje poruke %s.',
'RSS reply'							=>	'Odgovor: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS feed - aktivne teme',
'Atom active topics feed'			=>	'Atom feed - aktivne teme',
'RSS forum feed'					=>	'RSS feed - forum',
'Atom forum feed'					=>	'Atom feed - forum',
'RSS topic feed'					=>	'RSS feed - teme',
'Atom topic feed'					=>	'Atom feed - teme',

// Admin related stuff in the header
'New reports'						=>	'Nove prijave',
'Maintenance mode enabled'			=>	'U toku je održavanje foruma!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
