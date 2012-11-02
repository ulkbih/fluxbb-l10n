<?php

// Language definitions used in db_update.php

$lang_update = array(

'Update'						=>	'Ažuriraj FluxBB',
'Update message'				=>	'Vaša FluxBB baza podataka je zastarjela i mora biti ažurirana da nastavite. Ako ste vi administrator foruma, molimo pratite upute niže da izvršite nadogradnju.',
'Note'							=>	'Napomena:',
'Members message'				=>	'Ovaj proces je samo za administratore. Ako ste član nemate razloga za brigu - forumi će biti ubrzo opet dostupni!',
'Administrator only'			=>	'Ovaj korak je samo za administratora foruma!',
'Database password info'		=>	'Da izvršite ažuriranje baze podataka unesite lozinku baze s kojom je FluxBB instaliran. Ako se ne sjećate, snimljena je u \'config.php\' fajlu.',
'Database password note'		=>	'Ako koristite SQLite (te samim time nemate lozinke) unesite naziv fajla baze umjesto lozinke. Ovo se mora poklapati sa nazivom fajla u konfiguracijskom fajlu.',
'Database password'				=>	'Lozinka baze',
'Next'							=>	'Sljedeći',

'You are running error'			=>	'Vi pokrećete %1$s verziju %2$s. FluxBB %3$s zahtjeva minimalno %1$s %4$s da bi radio pravilno. Morate ažurirati vašu %1$s instalaciju prije nastavite.',
'Version mismatch error'		=>	'Različite verzije. Baza \'%s\' ne pokreće FluxBB šemu koja je podržana ovom skriptom.',
'Invalid file error'			=>	'Neispravno ime fajla baze. Kada koristite SQLite ime fajla baze mora biti unešeno tačno kao u vašem \'%s\'',
'Invalid password error'		=>	'Pogrešna lozinka baze. Da ažurirate FluxBB morate unijeti lozinku tačno kako je u vašem  \'%s\'',
'No password error'				=>	'Niste unijeli lozinku za bazu',
'Script runs error'				=>	'Izgleda da je neko već pokrenuo ovu skriptu. Ako ovo nije slučaj, obrišite \'%s\' i pokušajte opet',
'No update error'				=>	'Vaš forum je ažuriran do nivoa do kojeg ga ova skripta može ažurirati',

'Intro 1'						=>	'Ova skripta će ažurirate bazu vašeg foruma. Procedura može trajati od nekoliko sekundi da nekoliko sati ovisno o brzini vašeg servera i veličini baze foruma. Nemojte zaboraviti napraviti sigurnosnu kopiju prije nego nastavite.',
'Intro 2'						=>	'Jeste li pročitali upute za ažuriranje u dokumentaciji? Ako ne, počnite tu.',
'No charset conversion'			=>	'<strong>VAŽNO!</strong> FluxBB je detektovao da ovo PHP okruženje nema podršku za encoding mehanizme potrebne za UTF-8 konverziju iz karakter setova drukčijih nego ISO-8859-1. Ovo znači da, ukoliko trenutni set karaktera nije ISO-8859-1, FluxBB neće moći konvertovati vašu bazu u UTF-8 i morati ćete ovo uraditi ručno. Uputstva za koverziju karaktera su u uputama za ažuriranje.',
'Enable conversion'				=>	'<strong>Upali konverziju:</strong> Kada omogućeno ova skripta će, nakon svih strukturalnih izmjena na bazi, konvertovati sav tekst u bazi sa trenutnog seta karaktera na UTF-8. Ova konverzija je obavezna ako ažurirate sa verzije 1.2.',
'Current character set'			=>	'<strong>Trenutni set karaktera:</strong> Ako je glavni jezik foruma engleski možete ostaviti početnu vrijednost. Ako forum nije na engleskom, trebate unijeti set karaktera primarnog jezičkog paketa koji se koristi na forumu. <em>Ako unesete pogrešnu vrijednost možete ugroziti vašu bazu zato nemojte pogađati!</em> Napomena: Ovo je obavezno čak iako je stara baza UTF-8.',
'Charset conversion'			=>	'Konverzija seta karaktera',
'Enable conversion label'		=>	'<strong>Upali konverziju</strong> (radi konverziju seta karaktera baze).',
'Current character set label'	=>	'Trenutni set karaktera',
'Current character set info'	=>	'Prihvati početnu za engleske forume inače set karaktera glavnom jezičkog paketa.',
'Start update'					=>	'Započni ažuriranje',
'Error converting users'		=>	'Greška pri konvertovanju korisnika',
'Error info 1'					=>	'Došlo je do greške pri konverzovanju nekih korisnika. Ovo se može desiti kad konvertujete sa FluxBB v1.2 ako više registrovanih korisnika ima slična imena, npr. "bob" i "böb".',
'Error info 2'					=>	'Niže je lista korisnika koji nisu konvertovani. Molimo izaberite novo korisničko ime za svakog korisnika. Korisnici koji budu preimenovani će primiti mail sa naznakom o promjeni.',
'New username'					=>	'Novo korisničko ime',
'Required'						=>	'(Obavezno)',
'Correct errors'				=>	'Sljedeće greške moraju biti popravljene:',
'Rename users'					=>	'Preimenuj korisnike',
'Successfully updated'			=>	'Baza foruma uspješno ažurirana. Možete sada %s.',
'go to index'					=>	'ići na početnu foruma',

'Unable to lock error'			=>	'Nemoguće zaključati bazu. Provjerite da li PHP ima pristup za pisanje u direktorij \'%s\' i niko drugo nije pokrenuo ovu skriptu.',

'Converting'					=>	'Konvertujem %s …',
'Converting item'				=>	'Konvertujem %1$s %2$s …',
'Preparsing item'				=>	'Preparsiran %1$s %2$s …',
'Rebuilding index item'			=>	'Gradim index za %1$s %2$s',

'ban'							=>	'banuj',
'categories'					=>	'kategorije',
'censor words'					=>	'cenzuriši riječi',
'configuration'					=>	'konfiguracija',
'forums'						=>	'forumi',
'groups'						=>	'grupe',
'post'							=>	'odgovor',
'ranks'							=>	'činovi',
'report'						=>	'izvještaj',
'topic'							=>	'tema',
'user'							=>	'korisnik',
'signature'						=>	'potpis',

'Username too short error'		=>	'Korisnička imena moraju biti barem 2 karaktera. Molimo izaberite drugo (duže) ime.',
'Username too long error'		=>	'Korisnička imena moraju biti kraća od 25 karaktera. Molimo izaberite drugo (kraće) ime.',
'Username Guest reserved error'	=>	'Korisničko ime gost je rezervisano. Molimo izaberite drugo.',
'Username IP format error'		=>	'Korisnička imena ne smiju biti u obliku IP adrese. Molimo izaberite drugo ime.',
'Username bad characters error'	=>	'Korisnička imena ne smiju sadržavati sve karaktere \', " i [ ili ] odjednom. Molimo izaberite drugo ime.',
'Username BBCode error'			=>	'Korisnička imena ne smiju sadržavati tagove (BBCode) koje forum koristi. Molimo izaberite drugo ime.',
'Username duplicate error'		=>	'Neko je već registrovan sa %s. Korisničko ime koje ste unijeli je previše slično. Korisničko ime se mora razlikovati bar po jednom alfanumeričkom karakteru (a-z or 0-9). Molimo izaberite drugo korisničko ime.',

'JavaScript disabled'			=>	'JavaScript izgleda da je isključen. %s.',
'Click here to continue'		=>	'Kliknite ovdje da nastavite',
'Required field'				=>	'je obavezno polje u ovom formularu.'

);
