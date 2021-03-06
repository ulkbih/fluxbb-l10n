<?php

// Language definitions used in admin_maintenance.php
$lang_admin_maintenance = array(

'Maintenance head'				=>	'Održavanje foruma',
'Rebuild index subhead'			=>	'Osvježi indeks pretrage',
'Rebuild index info'			=>	'Ako ste dodali, izmijenili ili obrisali poruke ručno u bazi ili imate problema sa pretragom, trebate osvježiti indeks pretrage. Za najbolje performanse, postavite forum u %s tokom osvježavanja. <strong>Osvježavanje indeksa pretrage može trajati dugo vremena i povećati će opterećenje servera tokom procedure!</strong>',
'Posts per cycle label'			=>	'Poruka po krugu',
'Posts per cycle help'			=>	'Broj poruka za procesuiranje po pregledu. Npr. ako unesete 300, tri stotine poruka će biti procesirano i onda će se osvježiti stranica. Ovo je zbog sprječavanja time outa skripte tokom procesa.',
'Starting post label'			=>	'ID početne poruke',
'Starting post help'			=>	'ID poruke od koje će osvježavanje početi. Početna vrijednost je prvi dostupni ID u bazi. Obično ne trebate ovo mijenjati.',
'Empty index label'				=>	'Prazan indeks',
'Empty index help'				=>	'Izaberite ovo ako želite da indeks pretrage bude ispražnjen prije osvježavanja (vidite niže).',
'Rebuild completed info'		=>	'Kada proces završi bićete preusmjereni nazad na ovu stranu. Vrlo je preporučeno da imate JavaScript uključen u pregledniku tokom osvježavanja (zbog automatskih preusmjeravanja kada jedan krug završi). Ako morate zaustaviti proces, zabilježite zadnji procesirani ID i unesite taj ID+1 u "ID početne poruke" kada/ako želite nastaviti ("Prazan index" mora biti isključeno).',
'Rebuild index'					=>	'Osvježi indeks',
'Rebuilding search index'		=>	'Osvježavam indeks pretrage',
'Rebuilding index info'			=>	'Osvježavam indeks. Ovo bi bilo dobro vrijeme da pristavite malo kafe :-)',
'Processing post'				=>	'Procesiram poruku <strong>%s</strong> …',
'Click here'					=>	'Kliknite ovdje',
'Javascript redirect failed'	=>	'JavaScript preusmjeravanju neuspješno. %s da nastavite …',
'Posts must be integer message'	=>	'Poruka po krugu mora biti prirodan broj.',
'Days must be integer message'	=>	'Dana za sabijanje mora biti prirodan broj.',
'No old topics message'			=>	'Nema poruka starih %s dana. Molimo smanjite vrijednost "Stare dana" i pokušajte opet.',
'Posts pruned redirect'			=>	'Poruke sabijene. Preusmjeravam …',
'Prune head'					=>	'Sabij',
'Prune subhead'					=>	'Sabij stare poruke',
'Days old label'				=>	'Stare dana',
'Days old help'					=>	'Broj koliko dana poruka mora biti stara da bi bila sabijena. Npr. ako unesete 30, sve teme koje ne sadržavaju odgovor mlađi od 30 dana će biti obrisane.',
'Prune sticky label'			=>	'Sabij zalijepljene teme',
'Prune sticky help'				=>	'Kada omogućeno, zalijepljene teme će biti sabijene.',
'Prune from label'				=>	'Sabij ovaj forum',
'All forums'					=>	'Svi forumi',
'Prune from help'				=>	'Forum iz kog želite sabiti poruke.',
'Prune info'					=>	'Pažljivo s ovim. <strong>Sabijene poruke ne mogu biti vraćene.</strong> Za najbolje performanse, postavite forum u %s tokom sabijanja.',
'Confirm prune subhead'			=>	'Potvrdi sabijanje poruka',
'Confirm prune info'			=>	'Jeste li sigurni da želite sabiti sve poruke starije od %s dana iz %s (%s tema).',
'Confirm prune warn'			=>	'UPOZORENJE! Sabijanje poruka ih nepovratno briše.',

);
