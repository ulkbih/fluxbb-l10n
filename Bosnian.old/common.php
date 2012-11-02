<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'en',

// Number formatting
'lang_decimal_point'				=>	',',
'lang_thousands_sep'				=>	'.',

// Notices
'Bad request'						=>	'Loš zahtjev. Link koji ste otvorili je netačan ili zastarjeo.',
'No view'							=>	'Nemate dozvolu da pregledate ove forume.',
'No permission'						=>	'Nemate dozvolu da pristupite ovoj stranici.',
'Bad referrer'						=>	'Loš HTTP_REFERER. Preusmjereni ste na ovu stranicu od neovlaštenog izvora. Ukoliko problem ne nestane provjerite da li je \'Početni URL\' pravilno postavljen u Administracija/Opcije i da otvarate forum otvarajući dati URL. Više informacija o provjeri preusmjerenja možete naći u FluxBB dokumentaciji.',
'No cookie'							=>	'Izgleda da ste se uspješno prijavili no kolačić nije bio snimljen. Molimo provjerite vaše postavke i, ako moguće, omogućite kolačiće na ovoj stranici.',
'Pun include error'					=>	'Ne mogu procesuirati korisnički include %s iz šablona %s. Ne postoji takav fajl niti u direktoriju šablona niti u korisničkom include direktoriju.',

// Miscellaneous
'Announcement'						=>	'Obavijest',
'Options'							=>	'Opcije',
'Submit'							=>	'Pošalji', // "Name" of submit buttons
'Ban message'						=>	'Banovani ste sa ovog foruma.',
'Ban message 2'						=>	'Ban prestaje na kraju',
'Ban message 3'						=>	'Administrator ili moderator koji vas je banovao je ostavio sljedeću poruku:',
'Ban message 4'						=>	'Molimo šaljite bilo kakve upite administratoru na',
'Never'								=>	'Nikad',
'Today'								=>	'Danas',
'Yesterday'							=>	'Jučer',
'Info'								=>	'Info', // A common table header
'Go back'							=>	'Idi nazad',
'Maintenance'						=>	'Održavanje',
'Redirecting'						=>	'Preusmjeravam',
'Click redirect'					=>	'Kliknite ovdje ako ne želite čekati (ili Vas preglednik ne preusmjeri automatski)',
'on'								=>	'uključen', // As in "BBCode is on"
'off'								=>	'isključen',
'Invalid email'						=>	'Email adresa koju ste unijeli je neispravna.',
'Required'							=>	'(Obavezno)',
'required field'					=>	'je obavezno polje u ovom formularu.', // For javascript form validation
'Last post'							=>	'Zadnji odgovor',
'by'								=>	'od', // As in last post by someuser
'New posts'							=>	'Novi odgovori', // The link that leads to the first new post
'New posts info'					=>	'Idi na prvi novi odgovor u ovoj temi.', // The popup text for new posts links
'Username'							=>	'Korisničko ime',
'Password'							=>	'Lozinka',
'Email'								=>	'Email',
'Send email'						=>	'Šalji email',
'Moderated by'						=>	'Moderira',
'Registered'						=>	'Registrovan(a)',
'Subject'							=>	'Naslov',
'Message'							=>	'Poruka',
'Topic'								=>	'Tema',
'Forum'								=>	'Forum',
'Posts'								=>	'Poruka',
'Replies'							=>	'Odgovora',
'Pages'								=>	'Stranica:',
'Page'								=>	'Strana %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'img tag'							=>	'[img] tag:',
'Smilies'							=>	'Smajliji:',
'and'								=>	'i',
'Image link'						=>	'slika', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'je napisao/la:', // For [quote]'s
'Mailer'							=>	'Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Bitna informacija',
'Write message legend'				=>	'Napišite i pošaljite vašu poruku',
'Previous'							=>	'Prethodna',
'Next'								=>	'Sljedeća',
'Forum index'						=>	'Početna',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Naslov',
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
'BBCode code problem'				=>	'Ima grešaka sa vašim [code] tagovima',
'BBCode list size error'			=>	'Vaša lista je preduga za parsiranja, molimo skratite je!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Index',
'User list'							=>	'Lista korisnika',
'Rules'								=>	'Pravila',
'Search'							=>	'Pretraga',
'Register'							=>	'Registracija',
'Login'								=>	'Prijava',
'Not logged in'						=>	'Niste prijavljeni.',
'Profile'							=>	'Profil',
'Logout'							=>	'Odjava',
'Logged in as'						=>	'Prijavljen(a) kao',
'Admin'								=>	'Administracija',
'Last visit'						=>	'Zadnja posjeta: %s',
'Topic searches'					=>	'Teme:',
'New posts header'					=>	'Nove',
'Active topics'						=>	'Aktivne',
'Unanswered topics'					=>	'Neodgovorene',
'Posted topics'						=>	'Postavljeno',
'Show new posts'					=>	'Teme s novim odgovorima od zadnje posjete.',
'Show active topics'				=>	'Teme s nedavnim odgovorima.',
'Show unanswered topics'			=>	'Teme bez odgovora.',
'Show posted topics'				=>	'Teme u kojima sam postavio/la odgovor.',
'Mark all as read'					=>	'Označi sve kao pročitane',
'Mark forum read'					=>	'Označi ovaj forum kao pročitan',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Forum podnožje',
'Jump to'							=>	'Skoči na',
'Go'								=>	' Idi ', // Submit button in forum jump
'Moderate topic'					=>	'Moderiraj temu',
'Move topic'						=>	'Premjesti temu',
'Open topic'						=>	'Otvori temu',
'Close topic'						=>	'Zatvori temu',
'Unstick topic'						=>	'Odlijepi temu',
'Stick topic'						=>	'Zalijepi temu',
'Moderate forum'					=>	'Moderiraj forum forum',
'Powered by'						=>	'Powered by %s',

// Debug information
'Debug table'						=>	'Debug informacije',
'Querytime'							=>	'Generisano u %1$s sekunde, %2$s upita izvršeno',
'Memory usage'						=>	'Iskorištenost memorije: %1$s',
'Peak usage'						=>	'(Vrh: %1$s)',
'Query times'						=>	'Vrijeme',
'Query'								=>	'Upit',
'Total query time'					=>	'Ukupno vrijeme upita: %s',

// Email related notifications
'New user notification'				=>	'Upozorenje - Nova registracija',
'New user message'					=>	'Korisnik \'%s\' se registrovao u forumima na %s',
'Banned email notification'			=>	'Upozorenje - Banovan email detektovan',
'Banned email register message'		=>	'Korisnik \'%s\' se registrovao sa banovanom email adresom: %s',
'Banned email change message'		=>	'Korisnik \'%s\' je promijenio email na banovanu email adresu: %s',
'Banned email post message'			=>	'Korisnik \'%s\' je postavio poruku sa banovanom email adresom: %s',
'Duplicate email notification'		=>	'Upozorenje - Dupliciran email detektovan',
'Duplicate email register message'	=>	'Korisnik \'%s\' se registrovao sa email adresom koja također pripada korisniku: %s',
'Duplicate email change message'	=>	'Korisnik \'%s\' je promijenio email adresu na adresu koja također pripada korisniku: %s',
'Report notification'				=>	'Prijava(%d) - \'%s\'',
'Report message 1'					=>	'Korisnik \'%s\' je prijavio ovu poruku: %s',
'Report message 2'					=>	'Razlog: %s',

'User profile'						=>	'Profil korisnika: %s',
'Post URL'							=>	'Post URL: %s',
'Email signature'					=>	'Forum Mailer'."\n".'(Nemojte odgovarati na ovu poruku)',

// For extern.php RSS feed
'RSS description'					=>	'Zadnje teme na %s.',
'RSS description topic'				=>	'Zadnji odgovori u %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS feed aktivnih tema',
'Atom active topics feed'			=>	'Atom feed aktivnih tema',
'RSS forum feed'					=>	'RSS feed foruma',
'Atom forum feed'					=>	'Atom feed foruma',
'RSS topic feed'					=>	'RSS feed tema',
'Atom topic feed'					=>	'Atom feed tema',

// Admin related stuff in the header
'New reports'						=>	'Imaju novi izvještaji',
'Maintenance mode enabled'			=>	'Mod održavanja je uključen!',

);
