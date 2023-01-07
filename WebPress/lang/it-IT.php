<?php
$lang = array(
'lang'=>array(
'en-US'=>'inglese',
'de-DE'=>'Tedesco',
'it-IT'=>'Italiano',
'fr-FR'=>'francese'
),
'sitemap.title'=>'WebPress-Sitemaps',
'index.authdown'=> 'Autorizzazione',
'index.registerbtn'=>'Creare un profilo <i class="fas fa-user"></i>',
'index.forumbtn'=>'Forum <i class="fa-duotone fa-comments"></i>',
'index.loginbtn'=>'Login <i class="fas fa-sign-in"></i>',
'index.dashboardbtn'=>'Pannello di controllo <i class="fas fa-tachometer"></i>',
'index.loginoutbtn'=>'Disconnettersi <i class="fas fa-sign-out"></i>',
'index.noScript'=>'Spiacente, Javascript non è attivato, per favore attivalo!',
'index.label.copyright'=>'Diritto d`autore',
'index.label.license'=>'e concesso in licenza da',
'quote_direct'=>'Fare clic per visualizzare l`originale',
'visible_for_logged'=>'Devi essere loggato',
'visible_for_staff'=>'Questo è solo per il personale',
'visible_for_specific_user'=>'Questo è solo per un utente specifico',
'hide_show_more'=>'Mostra altro...',
'plural'=>'s',
'posting_frame'=>'Devi postarlo sul forum',
# Registrati
'register.title'=>'Creare un profilo',
'register.name'=>'Il tuo nome',
'register.name.place'=>'Inserisci il nome completo',
'register.user'=>'Nome utente',
'register.user.place'=>'Inserire username',
'register.email'=>'Indirizzo e-mail',
'register.email.place'=>'Inserisci un indirizzo email valido',
'register.email.syntax'=>'Deve essere un indirizzo email valido',
'register.psw'=>'Inserire la password',
'register.psw.place'=>'Inserire la password',
'register.psw.repeat'=>'Reinserire la password',
'register.psw.repeat.place'=>'Reinserire la password',
'register.psw.syntax'=> 'Deve includere 1 maiuscolo, 1 minuscolo, 1 numero, 8 caratteri',
'register.ts' => 'Sono d`accordo con tutte le dichiarazioni in <a href="'.$conf['page']['termsandservice'].'" class="text-body"><u>Termini di servizio</u></a>',
'register.submit'=>'Iscrizione',
'register.back'=>'Di ritorno',
'register.login'=>'Login',
'register.err.exist'=>'Il nome utente esiste già',
'register.err.psw'=>'Devi avere 1 maiuscolo, 1 minuscolo, 1 numero e 8 caratteri',
'register.err.email'=>'Devi avere un indirizzo email valido',
'register.err.captcha'=>'CAPTCHA non valido',
'register.sucs.user'=>'Creato con successo: ',
#Accedere
'login.title'=>'Accedi all`account',
'login.submit'=>'Login',
'login.back'=>'Di ritorno',
'login.create'=>'Registrati',
'login.psw'=>'Inserire la password',
'login.err.user'=>'Il nome utente non esiste',
'login.err.psw'=>'La password non corrisponde',
'login.err.loggedin'=>'Nome utente già in uso.',
'login.user'=>'Inserire username',
'login.err.token'=>'gettone non valido <i>'.CSRF::check().'</i>',
'login.token'=>'Token privato',
'login.token.place'=>'Inserisci token privato',
#aut
'auth.logout'=>'Disconnessione',
'auth.logout.desc'=>'Reindirizzamento a casa',
#Pannello
'dashboard'=>'Pannello',
'dashboard.info.phpversion'=>'Versione PHP',
'dashboard.info.projectName'=>'Nome del progetto',
'dashboard.info.projectVersion'=>'Versione del progetto',
'dashboard.info.projectBuild'=>'Costruzione del progetto',
'dashboard.info.serverSoftware'=>'Server Software',
'dashboard.info.phpModules'=>'Moduli PHP',
'dashboard.info.memory'=>'Memoria',
'dashboard.info.diskSpace'=>'Spazio sul disco',
'dashboard.info.dataStorage'=>'Archiviazione <em>DATI</em>',
'dashboard.info.uploadSize'=>'Carica dimensione massima',
'dashboard.config.panel.logger'=>'Console di visualizzazione('.($conf['page']['panel']['console']!==(int)'-1' ? 'Top <a target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Visualizza tutti gli errori/avvisi nel testo non elaborato" href="../debug.log">'.$conf['page']['panel']['console'].'</a>' : '<span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-custom-class="custom-tooltip" title="Attenzione: questo potrebbe causare un ritardo nella pagina!"><span style="cursor:help;text-decoration:underline;color:blue;">Tutto</span></span>').')',
'dashboard.config.panel.catche'=>'Cancella cache',
'dashboard.config.panel.bgcolor'=>'Sfondo del pannello',
'dashboard.config.panel.color'=>'Colore pannello',
'dashboard.config.panel.email'=>'Dominio e-mail personalizzato',
'dashboard.config.panel.editor'=>'Editore',
'dashboard.config.panel.theme'=>'Temi',
'dashboard.config.panel.dateformat'=>'Formato data(<a href="https://www.php.net/manual/en/datetime.format.php" target="_blank">formato php datetime</a>)',
'dashboard.config.panel.emaildisabled'=>'Non puoi cambiarlo, aggiorna',
'dashboard.config.panel.emailHelp'=>'Inserisci il tuo dominio personalizzato per consentirlo',
'dashboard.config.timeZone.title'=>'<a href="https://www.php.net/manual/en/timezones.php" target="_blank">Fuso orario <i class="fa-solid fa-calendar-days"></i></a>',
'dashboard.config.panel.icons'=>'Logo del sito web',
'dashboard.userKey'=>'Chiave pubblica',
'dashboard.userKey.copy'=>'Copia chiave pubblica',
'dashboard.userPKey'=>'Chiave privata',
'dashboard.userPKey.copy'=>'Copia chiave privata',
'dashboard.hardwareid.copy'=>'Copia ID hardware',
'dashboard.title.phpinfo'=>'Pannello di controllo(Informazioni PHP)',
'dashboard.title.profile'=>'Pannello di controllo(Profilo)',
'dashboard.title.config'=>'Pannello di controllo(Configurazione)',
'dashboard.title.docs'=>'Pannello di controllo(Documenti)',
'dashboard.title.themes'=>'Pannello di controllo(Temi)',
'dashboard.title.plugins'=>'Pannello di controllo(Plugins)',
'dashboard.title.console'=>'Pannello di controllo(Consolle)',
'dashboard.title.editors'=>'Pannello di controllo(Editori)',
'dashboard.title.mail'=>'Pannello di controllo(Posta)',
'dashboard.title.assets'=>'Pannello di controllo(Risorse)',
'dashboard.title.ban'=>'Pannello di controllo(Elenco dei divieti)',
'dashboard.title.roles'=>'Pannello di controllo(Ruoli)',
'dashboard.title.files'=>'Pannello di controllo(Files)',
'dashboard.title.view'=>'Pannello di controllo(Visualizza il plugin)',
'dashboard.title.events'=>'Pannello di controllo(Eventi)',
'dashboard.title.pages'=>'Pannello di controllo(Pagine)',
'dashboard.title.notFound'=>'Pannello di controllo(Pagina non trovata)',
'dashboard.desc'=>'Benvenuto nel pannello WebPress! Qui è dove puoi configurare e modificare file/cartelle per la tua pagina web, plugin e temi attivi e disattivati. Divertiti!',
'dashboard.logout'=>'Disconnettersi',
'dashboard.redirect.logout.title'=>'Disconnessione',
'dashboard.redirect.logout.desc'=>'Reindirizzamento all`accesso',
'dashboard.side'=>'Menù WebPress',
'dashboard.side.welcome.morn'=>'<span style="color:#f7cd5d;">Buongiorno'.(isset($_SESSION['user']) ? ', '.$_SESSION['user'] : '').' <i class="fas fa-sunrise"></i></span>',
'dashboard.side.welcome.after'=>'<span style="color:#fce570;">Buon pomeriggio'.(isset($_SESSION['user']) ? ', '.$_SESSION['user'] : '').' <i class="fas fa-sun"></i></span>',
'dashboard.side.welcome.even'=>'<span style="color:#fad6a5;">buona serata'.(isset($_SESSION['user']) ? ', '.$_SESSION['user'] : '').' <i class="fas fa-sunset"></i></span>',
'dashboard.side.welcome.night'=>'<span style="color:#003833;">Buona notte'.(isset($_SESSION['user']) ? ', '.$_SESSION['user'] : '').' <i class="fas fa-moon"></i></span>',
'dashboard.side.weather'=>'Tempo atmosferico',
'dashboard.side.home'=>'Casa <i class="fas fa-house"></i>',
'dashboard.side.back'=>'Pannello di controllo <i class="fas fa-tachometer"></i>',
'dashboard.side.forum'=>'Forum <i class="fa-duotone fa-comments"></i>',
'dashboard.side.phpinfo'=>'Informazioni PHP <i class="fa-brands fa-php"></i>',
'dashboard.side.profile'=>'Profilo <i class="fas fa-user"></i>',
'dashboard.side.config'=>'Configurazione <i class="fas fa-sliders-h"></i>',
'dashboard.side.docs'=>'Documentazione <i class="fas fa-file-alt"></i>',
'dashboard.side.themes'=>'Temi <i class="fas fa-paint-brush"></i>',
'dashboard.side.plugins'=>'Plugins &nbsp;&nbsp;<i class="fas fa-plug" style="transform:rotate(-45deg);"></i>',
'dashboard.side.console'=>'Consolle <i class="fas fa-terminal"></i>',
'dashboard.side.editors'=>'Editori <i class="fas fa-pen-square"></i>',
'dashboard.side.assets'=>'Risorse <i class="fa-solid fa-books"></i>',
'dashboard.side.mail'=>'Posta <i class="fas fa-envelope"></i>',
'dashboard.side.ban'=>'Elenco dei divieti <i class="fa-solid fa-ban"></i>',
'dashboard.side.roles'=>'Ruoli <i class="fa-solid fa-user-plus"></i>',
'dashboard.side.files'=>'Files <i class="fa-solid fa-files"></i>',
'dashboard.side.events'=>'Eventi <i class="fa-regular fa-calendar-lines-pen"></i>',
'dashboard.side.pages'=>'Pagine <i class="fa-solid fa-page"></i>',
'dashboard.graph.user.label'=>'utenti',
'dashboard.graph.user.y'=>'utente registrato',
'dashboard.graph.subtitle'=>'Questo sarà chiaro su ',
'dashboard.graph.views.label'=>'visualizzazioni',
'dashboard.graph.views.unique'=>'unico',
'dashboard.graph.views.y'=>'Visualizzazioni sulla pagina web',
'dashboard.graph.forums.label'=>'Forums',
'dashboard.graph.forums.y'=>'Numero di argomenti/risposte',
'dashboard.graph.forums.topics'=>'Temi',
'dashboard.graph.forums.replies'=>'Risposte',
'dashboard.profile.title'=>'Informazioni sull`utente',
'dashboard.profile.hardwareID'=>'ID dell`hardware: ',
'dashboard.profile.about'=>'<b>Di: </b>',
'dashboard.profile.timezone'=>'<b>Fuso orario: </b>',
'dashboard.profile.ip'=>'<b>IP: </b>',
'dashboard.profile.location'=>'<b>Posizione: </b>',
'dashboard.profile.created'=>'<b>Creato: </b>',
'dashboard.profile.email'=>'<b>Email: </b>',
'dashboard.profile.name'=>'<b>Nome: </b>',
'dashboard.profile.topics'=>'<b class="text-secondary">Temi: </b>',
'dashboard.profile.replys'=>'<b class="text-secondary">Risposte: </b>',
'dashboard.profile.forums'=>'<b class="text-secondary">Forums: </b>',
'dashboard.pageLoaded'=>'<b class=\'text-secondary\'>Caricato: </b>',
'dashboard.profile.editbtn'=>'Modifica Profilo',
'dashboard.profile.addBan'=>'Escludi utente',
'dashboard.config.title'=>'Configurazione',
'dashboard.config.pageError.title'=>'Errori di pagina (HTML+MD è consentito):',
'dashboard.config.page.title'=>'Titolo pagina web',
'dashboard.config.lang.title'=>'Lingua',
'dashboard.config.400'=>'Brutta richiesta',
'dashboard.config.401'=>'Autorizzazione',
'dashboard.config.403'=>'Proibito',
'dashboard.config.404'=>'Pagina non trovata',
'dashboard.config.500'=>'Errore internazionale',
'dashboard.config.301.help'=>'Lascia vuoto per non includerlo',
'dashboard.config.debug.title'=>'Debug',
'dashboard.config.seo.title'=>'Strumenti SEO <i class="fas fa-tools"></i>',
'dashboard.config.description'=>'Inserisci la descrizione web <i class="fas fa-edit"></i>',
'dashboard.config.author'=>'Autore <i class="fas fa-at"></i>',
'dashboard.config.refresh'=>'Auto aggiornamento <i class="fas fa-sync"></i>',
'dashboard.config.refresh.help'=>'Impostare il valore su 0 per non utilizzare l`aggiornamento automatico',
'dashboard.config.keywords'=>'Inserisci Parole chiave <i class="fas fa-spell-check"></i>',
'dashboard.config.keywords.help'=>'Utilizzare le virgole (,) per utilizzare più parole chiave',
'dashboard.config.robotIndex.title'=>'Consentire ai robot di indicizzare il tuo sito web? <i class="fas fa-robot"></i>',
'dashboard.config.robotFollow.title'=>'Consentire ai robot di seguire tutti i collegamenti? <i class="fas fa-external-link"></i>',
'dashboard.config.rate.title'=>'Valutazione <i class="fas fa-star"></i>',
'dashboard.config.rate'=>array(
'null'=>'Non specificato',
'14_years'=>'14 anni',
'adult'=>'Adulto',
'general'=>'Generale',
'mature'=>'Maturo',
'restricted'=>'Limitato',
'safe_for_kids'=>'Sicuro per i bambini'
),
'dashboard.config.copyright'=>'Diritto d`autore <i class="fas fa-copyright"></i>',
'dashboard.config.distribution.title'=>'Distribuzione <i class="fas fa-chart-network"></i>',
'dashboard.config.distribution'=>array(
'Global'=>'Globale',
'Local'=>'Locale'
),
'dashboard.config.revisted.title'=>'Revisit-after <i class="fas fa-exchange"></i>',
'dashboard.config.revisted'=>array(
'1_Day'=>'1 Giorno',
'7_Days'=>'7 Giorni',
'31_Days'=>'31 Giorni',
'180_Days'=>'180 Giorni',
'360_Days'=>'360 Giorni'
),
'dashboard.config.charset.title'=>'Charset <i class="fas fa-file-times"></i>',
'dashboard.config.charset'=>array(
'GB2312'=>'GB2312',
'US-ASCII'=>'US-ASCII',
'ISO-8859-1'=>'ISO-8859-1',
'ISO-8859-2'=>'ISO-8859-2',
'ISO-8859-3'=>'ISO-8859-3',
'ISO-8859-4'=>'ISO-8859-4',
'ISO-8859-5'=>'ISO-8859-5',
'ISO-8859-6'=>'ISO-8859-6',
'ISO-8859-7'=>'ISO-8859-7',
'ISO-8859-8'=>'ISO-8859-8',
'ISO-8859-9'=>'ISO-8859-9',
'ISO-2022-JP'=>'ISO-2022-JP',
'ISO-2022-JP-2'=>'ISO-2022-JP-2',
'SHIFT_JIS'=>'SHIFT_JIS',
'EUC-KR'=>'EUC-KR',
'BIG5'=>'BIG5',
'KOI8-R'=>'KOI8-R',
'KSC_5601'=>'KSC_5601',
'HZ-GB-2312'=>'HZ-GB-2312',
'JIS_X0208'=>'JIS_X0208',
'UTF-8'=>'UTF-8 (Recommended)',
'other'=>'altro'
),
'dashboard.config.captch'=>'Captcha',
'dashboard.pageError'=>'Pagina non trovata!',
'dashboard.config.forum.title'=>'Forum <i class="fa-solid fa-comments"></i>',
'dashboard.config.forum.topic'=>'Visualizza importo argomento',
'dashboard.config.forum.reply'=>'Visualizza l`importo delle risposte',
# modale
'modal.profile'=>'Modifica Profilo',
'modal.profile.username'=>'Inserire username',
'modal.profile.name'=>'Inserisci il nome',
'modal.profile.oldpsw'=>'vecchia password',
'modal.profile.newpsw'=>'Inserire una nuova password',
'modal.profile.delete'=>'Eliminare l`account',
'modal.profile.newpsw.note'=>'Deve avere una vecchia password',
'modal.profile.about'=>'Su di te',
'modal.profile.upload'=>'Carica logo(solo file PNG)',
'modal.profile.err.user'=>'Il nome utente esiste già',
'modal.pedit.title'=>'Salvataggio dei dati',
'modal.failed.title'=>'Dati non riusciti',
'modal.pedit.desc'=>'Salvataggio dei dati modificati',
'modal.pedit.psw.format'=>'Devi avere 1 maiuscolo, 1 minuscolo, 1 numero e 8 caratteri',
'modal.pedit.psw.match'=>'La password non corrisponde',
'modal.pedit.psw.otn'=>'La vecchia password non corrisponde alla nuova password',
'modal.profile.removeAvatar'=>'Rimuovi l`avatar',

#config
'config'=>'Configurazione',
'config.label'=>'Configurazione',
'config.save'=>'Salva <i class="fas fa-save"></i>',
'config.failed'=>'Impossibile salvare i dati',
'config.success'=>'Dati salvati con successo',
'config.true'=>'SU',
'config.false'=>'Spento',
#bottoni
'btn.disabled'=>'Non puoi usare questa opzione',
'btn.drop.actions.title'=>'Azioni',
'btn.drop.copy.url'=>'Copia URL <i class="fas fa-link"></i>',
'btn.drop.copy.msg'=>'Copia messaggio <i class="fas fa-copy"></i>',
'btn.download'=>'Scarica <i class=\'fas fa-download\'></i>',
'btn.save'=>'Salvare le modifiche',
'btn.close'=>'Chiudere',
'btn.dismissed'=>'Congedare',
'btn.confirm'=>'Confermare',
'btn.quote'=>'<i class="fa-solid fa-comment-quote"></i> Citazione',
'btn.delete'=>'Rimuovere',
# Temi
'theme.active'=>'Attivato <i class="fas fa-check"></i>',
'theme.deactive'=>'Disattivato <i class="fas fa-times"></i>',
'theme.error.missingName'=>'Nome mancante',
'theme.error.missingDesc'=>'Descrizione mancante',
'theme.allow.lang'=>'Lingue consentite: ',
'theme.allow.lang.null'=>'Non definito',
'theme.missing'=>'File di configurazione del tema mancante!',
# Plugins
'plugin.active'=>'Attivato <i class="fas fa-check"></i>',
'plugin.deactive'=>'Disattivato <i class="fas fa-times"></i>',
'plugin.error.missingName'=>'Nome mancante',
'plugin.error.missingDesc'=>'Descrizione mancante',
'plugin.allow.lang'=>'Lingue consentite: ',
'plugin.allow.lang.null'=>'Non definito',
#Debug
'debug.off'=>'<a href="./configs">Debug</a> è disattivato, non è più possibile registrare errori di funzionalità.',
# contatto
'contact.title'=>'Contatto',
'contact.email'=>'<i class="fas fa-asterisk text-danger"></i> Email',
'contact.email.placeholder'=>'Inserisci il tuo indirizzo email',
'contact.emailto'=>'<i class="fas fa-asterisk text-danger"></i> Per:',
'contact.emailto.placeholder'=>'Inserisci l`indirizzo e-mail delle persone: (usa \',\' per separare)',
'contact.to.example'=>'Esempio: utente1:<{user1email}>, utente2:<{user2email}>...',
'contact.senderAs'=>'Invio come',
'contact.name'=>'<i class="fas fa-asterisk text-danger"></i> Nome',
'contact.name.placeholder'=>'Inserisci il nome completo',
'contact.subject'=>'<i class="fas fa-asterisk text-danger"></i> Materia',
'contact.subject.placeholder'=>'Inserisci oggetto',
'contact.msg'=>'<i class="fas fa-asterisk text-danger"></i> Messaggio',
'contact.msg.placeholder'=>'Inserisci il messaggio',
'contact.send'=>'Invia messaggio',
'contact.markasread'=>'Segna come letto',
'contact.markasunread'=>'Segna come non letto',
'contact.reply'=>'Rispondere',
'contact.readme'=>'Leggi',
'contact.hidden'=>'Questo è un messaggio nascosto solo per un utente specifico!',
'contact.option.all'=>'Tutto',
'contact.msg.exists'=>'Il messaggio esiste già',
'contact.report.prioiry'=>'<i class="fas fa-asterisk text-danger"></i> Priorato',
'contact.report'=>'Segnala utente',
'contact.report.label'=>'[Inserisci il ragionamento qui]',
# posta
'mail.success'=>'Posta inviata con successo a ',
'mail.failed'=>'Impossibile inviare la posta a ',
# notificare
'notify.clear'=>'Segna tutti come letti',
# form
'errLen' => 'Troppo corto/lungo',
'errNb' => 'Questo non è un numero intero positivo',
'ErrContentFilter' => 'Hai inserito almeno una parola censurata, per favore sii educato.',
'tableHeader'=>'Intestazioni',
'form_active'=>'SU/Spento',
# Risorse
'assets.title'=>'Risorse',
# lista di divieto
'ban.empty'=>'Nessun utente è bannato',
'ban.request'=>'Richiesta ricorso',
'ban.remove'=>'Rimuovere',
'ban.add'=>'Aggiungi utente',
'ban.table'=>array(
'username'=>'Nome utente',
'time'=>'Data di rilascio',
'duration'=>'Durata',
'reason'=>'Motivo',
'bannedBy'=>'Bandito da',
'actions'=>'Azioni'
),
'ban.list'=>array(
'1min'=>'+1 minuto',
'3min'=>'+3 minuti',
'5min'=>'+5 minuti',
'7min'=>'+7 minuti',
'9min'=>'+9 minuti',
'11min'=>'+11 minuti',
'13min'=>'+13 minuti',
'15min'=>'+15 minuti',
'17min'=>'+17 minuti',
'19min'=>'+19 minuti',
'21min'=>'+21 minuti',
'23min'=>'+23 minuti',
'25min'=>'+25 minuti',
'27min'=>'+27 minuti',
'29min'=>'+29 minuti',
'31min'=>'+31 minuti',
'33min'=>'+33 minuti',
'35min'=>'+35 minuti',
'37min'=>'+37 minuti',
'39min'=>'+39 minuti',
'41min'=>'+41 minuti',
'43min'=>'+43 minuti',
'45min'=>'+45 minuti',
'47min'=>'+47 minuti',
'49min'=>'+49 minuti',
'51min'=>'+51 minuti',
'53min'=>'+53 minuti',
'55min'=>'+55 minuti',
'57min'=>'+57 minuti',
'59min'=>'+59 minuti',
'1h'=>'+1 Ora',
'3h'=>'+3 Ore',
'5h'=>'+5 Ore',
'7h'=>'+7 Ore',
'9h'=>'+9 Ore',
'11h'=>'+11 Ore',
'13h'=>'+13 Ore',
'15h'=>'+15 Ore',
'17h'=>'+17 Ore',
'19h'=>'+19 Ore',
'21h'=>'+21 Ore',
'23h'=>'+23 Ore',
'1d'=>'+1 Giorno',
'3d'=>'+3 Giorni',
'5d'=>'+5 Giorni',
'1w'=>'+1 Settimana',
'3w'=>'+3 Settimane',
'1m'=>'+1 Mese',
'3m'=>'+3 Mesi',
'5m'=>'+5 Mesi',
'7m'=>'+7 Mesi',
'9m'=>'+9 Mesi',
'11m'=>'+11 Mesi',
'1y'=>'+1 Anno',
'3y'=>'+3 Anni',
'5y'=>'+5 Anni',
'7y'=>'+7 Anni',
'9y'=>'+9 Anni',
'11y'=>'+11 Anni',
'13y'=>'+13 Anni',
'15y'=>'+15 Anni',
'17y'=>'+17 Anni',
'19y'=>'+19 Anni',
'21y'=>'+21 Anni',
'23y'=>'+23 Anni',
'25y'=>'+25 Anni',
'27y'=>'+27 Anni',
'29y'=>'+29 Anni',
'31y'=>'+31 Anni',
'forever'=>'Per sempre'
),
'ban.byList'=>array(
'username'=>'Nome utente',
'ip'=>'IP',
'hardwareid'=>'ID dell`hardware'
),
'ban.forever'=>'Per sempre',
'ban.UI.title'=>'Ban User',
'ban.UI.username'=>'<i class="fa-solid fa-asterisk" style="color:red;"></i> Nome utente',
'ban.UI.time'=>'Volta',
'ban.UI.reason'=>'<i class="fa-solid fa-asterisk" style="color:red;"></i> Motivo',
'ban.UI.banBy'=>'Tipo di divieto',
'ban.UI.submit'=>'Escludi utente',
# caricamenti
'upload.failed.data'=>'Impossibile ricevere dati',
'upload.failed.large'=>'Spiacenti, il tuo file è troppo grande',
'upload.failed.extentions'=>'Spiacenti, il tuo file non è un`estensione valida',
'upload.failed.overrule'=>'Spiacenti, il tuo file esiste già',
'upload.failed'=>'Spiacenti, il tuo file non è stato caricato.',
'upload.failed.rename'=>'Impossibile rinominare',
'upload.success'=>array('Il file '.(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']=='on' ? 'https://':'http://').$_SERVER['HTTP_HOST'].'/'.explode('/',$_SERVER['REQUEST_URI'])[1].'/'.'uploads/', 'è stato caricato.', 'avatars/'),
# Ruoli
'roles.user'=>'Nome utente',
'roles.roleID'=>'Tipo di ruolo',
'roles.edit'=>'Modifica ruolo',
'roles.roleSelect'=>'Seleziona Ruolo',
'roles.createRole'=>'Crea ruolo',
'roles.input.name'=>'Nome ruolo',
'roles.input.desc'=>'Descrizione del ruolo',
'roles.input.canView'=>'Posso vedere',
'roles.input.canWrite'=>'Può scrivere',
'roles.input.canRead'=>'Può leggere',
'roles.input.canDelete'=>'Può eliminare',
'roles.input.canBan'=>'Può vietare',
'roles.input.canPost'=>'Può postare',
'roles.input.canReply'=>'Può rispondere',
'roles.input.canMsg'=>'Può messaggio',
'roles.input.plugins'=>'Può attivare i plugin',
'roles.input.themes'=>'Può attivare i temi',
'roles.input.config'=>'Può configurare',
'roles.input.canRole'=>'Può cambiare ruolo',
'roles.input.file'=>'Può usare il file manager',
'roles.input.profile'=>'Può cambiare profilo',
'roles.input.events'=>'Può visualizzare gli eventi',
'roles.input.pages'=>'Può modificare le pagine',
'roles.deleteRole'=>'Elimina ruolo',
'roles.removeItems'=>'Seleziona per rimuovere il ruolo',
# files
'file.locked.folder'=>'Questa cartella è bloccata',
'file.locked.file'=>'Questo file è bloccato',
'file.manager.title'=>'Gestore file',
'file.managerchmod.title'=>'Modifica autorizzazioni',
'file.managerchmod.u'=>'Diritti del proprietario',
'file.managerchmod.g'=>'Diritti di gruppo',
'file.managerchmod.o'=>'Altri diritti',
'file.managerchmod.read'=>'Leggi(4)',
'file.managerchmod.write'=>'Scrivere(2)',
'file.managerchmod.execute'=>'Eseguire(1)',
'files.delete'=>'Rimuovi il file',
'files.chmod'=>'Cambia i permessi dei file',
'files.rename'=>'Rinomina il file',
'files.remove.msg'=>'Vuoi rimuovere ',
'files.rename.msg'=>'Rinomina il file',
'file.rename.newName'=>'Nuovo nome:',
'file.rename.oldName'=>'Vecchio nome:',
'file.manager.createFile'=>'<i class="fa-solid fa-file-plus"></i> Crea file',
'file.manager.createFolder'=>'<i class="fa-solid fa-folder-plus"></i> Creare una cartella',
'file.manager.upload'=>'<i class="fa-solid fa-upload"></i> Caricamento',
'files.addFile.msg'=>'Aggiungi file',
'files.addFolder.msg'=>'Aggiungi cartella',
'files.download'=>'Download File',
'file.manager.fileUpload'=>'Carica i file qui: ',
'file.manager.folderUpload'=>'Carica le cartelle qui: ',
'files.uploadFiles.msg'=>'Caricare files',
'files.manager.saved'=>'File Salvato con successo, ricaricamento della pagina per aggiornare il file...',
'files.manager.error'=>'Errore: impossibile salvare il file, ricaricare la pagina per aggiornare il file...',
#aspettative
'expect.lang'=>'Tu devi avere '.$conf['lang'].'.php',
'expect.guest'=>'<i class="fa-solid fa-triangle-exclamation"></i> Sei in modalità ospite, non puoi fare altro che leggere/visualizzare/registrarti/accedere, per favore <a href="./auth.php/login">Accedere</a> o <a href="'.$BASEPATH.'/auth.php/register">Registrati</a> un account',
'expect.requiements'=>'Tutti gli elementi del modulo richiesti sono obbligatori!',
#forum
'forum.title'=>'Forum',
'forum.author'=>'Creato da: ',
'forum.sidebar'=>'Forums',
'forum.addForum'=>'Aggiungi Foro',
'forum.addTopic'=>'Aggiungi argomento',
'forum.editTopic'=>'Modifica argomento',
'forum.created'=>'Creato: ',
'forum.edited'=>'Ultima modifica: ',
'forum.search.failed'=>'Nessun risultato di ricerca trovato',
'forum.replys'=>'Rispondere&nbsp;&nbsp;<i class="fa-solid fa-reply fs-5 mt-1"></i>',
'forum.view'=>'Visualizzazione&nbsp;&nbsp;<i class="fa-solid fa-eye fs-5 mt-1"></i>',
'forum.replysNoIcon'=>'Risposte',
'forum.editBtn'=>'<i class="fa-solid fa-pen-to-square"></i> Modificare',
'forum.removeBtn'=>'<i class="fa-solid fa-trash-can"></i> Elimina',
'forum.anonumous'=>'Sistema',
'forum.inputForumName'=>'Nome del forum',
'forum.inputForumColor'=>'Inserisci Colore',
'forum.selectIcon'=>'Seleziona Icona',
'forum.inputTopicName'=>'Nome dell`argomento',
'forum.inputTopicCategory'=>'Seleziona Foro',
'forum.entermsg'=>'Inserisci Messaggio',
'forum.inputTopicAuthor'=>'Autore',
'forum.inputTopicTags'=>'Inserisci i tag (usa , per separare)',
'forum.deleteTopic'=>'Elimina argomento',
'forum.pinned'=>'Appuntato',
'forum.locked'=>'Bloccato',
'forum.toggleOpt'=>array(
	'false'=>'no',
	'true'=>'sì'
),
'fourm.guest'=>'Accedi per rispondere sul forum',
'forum.recent'=>'Attività recenti',
'forum.anchorID'=>'Copia ID risposta',
'forum.userStatus'=>'Stato',
'forum.sidebar.statistics'=>'Statistiche',
'forum.reply_drop'=>'Inviare una risposta',
'forum.noreply'=>'Non sei autorizzato a rispondere!',
'forum.home'=>'Casa',
'forum.category'=>'Forums',
'forum.shortSubmit'=>'Ordina articoli',
'forum.sort'=>'Ordina i tuoi forum <b><em>(non avere più argomenti hanno lo stesso numero)</em></b>',
'forum.sortUser'=>'Accedi come amministratore usa questa opzione',
# eventi
'events.ip'=>'IP',
'events.date'=>'Data',
'events.target'=>'Obbiettivo',
'events.stat'=>'Stato',
'events.action'=>'Azione',
#pages
'pages.form.notice'=>'Gli invii del modulo di ricezione non funzionano utilizzando i blocchi. Devi utilizzare l`attributo "Azione" per ricevere i dati. 5MB/pagina è massimo',
# blocchi
'blocks.title'=>'Trascina i blocchi per creare il sito web',
'blocks.jsonInfo'=>'Questo visualizzerà una build JSON, che può essere modificata in base alla struttura della tua pagina.',
'blocks.moveUp'=>'<i class="fa-solid fa-up"></i> Sposta in alto',
'blocks.moveDown'=>'<i class="fa-solid fa-down"></i> Sposta giù',
'blocks.remove'=>'<i class="fa-solid fa-trash-can"></i> Elimina',
'blocks.reload'=>'<i class="fa-solid fa-rotate-right"></i> Ricarica',
'blocks.id'=>'<i class="fa-solid fa-id-card"></i> ID',
'blocks.id.prompt'=>'Inserisci l`ID, digita &quote;annulla&quote; annullare, altrimenti rimuoverà l`ID',
'blocks.classes'=>'<i class="fa-solid fa-code-branch"></i> Classe',
'blocks.class.prompt'=>'Inserisci classe, digita &quote;cancel&quote; annullare, altrimenti rimuoverà la classe',
'blocks.href'=>'<i class="fa-solid fa-link"></i> Inserisci collegamento',
'blocks.href.prompt'=>'Inserisci link, digita &quote;cancel&quote; annullare, altrimenti rimuoverà Link',
'blocks.hrefTar.prompt'=>'Inserisci target:\n1. sé\n2. vuoto\n3. parnet\n4. superiore',
'blocks.RemHref'=>'<i class="fa-solid fa-link-slash"></i> Rimuovi collegamento',
'blocks.Bold'=>'<i class="fa-solid fa-bold"></i> Grassetto',
'blocks.Italic'=>'<i class="fa-solid fa-italic"></i> Corsivo',
'blocks.Strike'=>'<i class="fa-solid fa-strikethrough"></i> Barrato',
'blocks.style'=>'<i class="fa-solid fa-palette"></i> Stile',
'blocks.Underline'=>'<i class="fa-solid fa-underline"></i> Sottolineato',
'blocks.removeFormat'=>'<i class="fa-solid fa-text-slash"></i> Rimuovi formato',
'blocks.insert'=>'<i class="fa-solid fa-plus"></i> Inserisci',
'blocks.actions'=>'Azioni',
'blocks.blockAction'=>'Blocchi',
'blocks.wordActions'=>'Parole',
'blocks.removal'=>'Rimozione',
'blocks.page.title'=>'Aggiungi pagina',
'blocks.page.name'=>'Inserisci il nome della pagina',
'blocks.settings'=>'Impostazioni',
'blocks.settings.bg'=>'Sfondo',
'blocks.settings.solid.color'=>'Tinta unita',
'blocks.settings.bg.img'=>'Carica immagine',
'blocks.settings.custom.color'=>'Colore personalizzato',
'blocks.settings.bgBlock.body'=>'Corpo',
'blocks.settings.bgBlock.target'=>'Blocco selezionato',
'blocks.customcolor'=>'Colore personalizzato (ricontrolla a tinta unita da utilizzare)',
'blocks.bgImage'=>'Inserisci l`URL dell`immagine',
'blocks.settings.color'=>'Colore carattere',
'blocks.settings.align'=>'Allineamento testo',
'blocks.settings.padding'=>'Padding',
'blocks.settings.margin'=>'Margine',
'blocks.settings.display'=>'Visualizza',
'blocks.settings.flex'=>'Flex',
'blocks.settings.flexWrap'=>'Flex Wrap',
'blocks.settings.flexDir'=>'Direzione flessibile',
'blocks.settings.flexGrow'=>'Flex Grow',
'blocks.settings.flexShrink'=>'Flex Shrink',
'blocks.settings.flexBiases'=>'Flex Base',
'blocks.settings.fontSize'=>'Dimensione carattere',
'blocks.settings.border'=>'Bordo',
'blocks.settings.borderBLRadius'=>'Raggio in basso a sinistra',
'blocks.settings.borderBRRadius'=>'Raggio in basso a destra',
'blocks.settings.borderTLRadius'=>'Raggio in alto a sinistra',
'blocks.settings.borderTRRadius'=>'Raggio in alto a destra',
'blocks.settings.boxShadow'=>'Box ombra',
'blocks.settings.textShadow'=>'testo ombreggiato',
'blocks.settings.boxShadow.h'=>'H ombra',
'blocks.settings.boxShadow.v'=>'Ombra V',
'blocks.settings.boxShadow.blur'=>'Sfocatura',
'blocks.settings.boxShadow.spread'=>'Spread',
'blocks.settings.boxShadow.color'=>'Colore',
'blocks.settings.boxShadow.inset'=>'Inset',
'blocks.settings.animation'=>'Animazioni',
'blocks.settings.animation.list'=>'Seleziona animazione',
'blocks.settings.animation.timing'=>'Funzione di temporizzazione',
'blocks.settings.animation.direction'=>'Direzione',
'blocks.settings.animation.fillMode'=>'Modalità riempimento',
'blocks.settings.animation.duration'=>'Durata',
'blocks.settings.animation.delay'=>'Ritardo',
'blocks.settings.animation.count'=>'Conteggio iterazioni, (-1) - infinito',
'blocks.settings.blockWidth'=>'Larghezza blocco',
'blocks.settings.blockHeight'=>'Altezza blocco',
'blocks.settings.pos'=>'Posizione',
'blocks.settings.transform'=>'Trasforma',
'blocks.settings.textTransform'=>'Trasformazione testo',
'blocks.settings.textDirection'=>'Direzione testo',
'blocks.settings.top'=>'In alto',
'blocks.settings.right'=>'Destra',
'blocks.settings.bottom'=>'In basso',
'blocks.settings.left'=>'Sinistra',
'blocks.settings.none'=>'Nessuno',
'blocks.settings.scripts'=>'Script',
'blocks.settings.formConfig'=>'Form Config',
'blocks.settings.required'=>'Obbligatorio',
'blocks.settings.readOnly'=>'Sola lettura',
'blocks.settings.disabled'=>'Disabilitato',
'blocks.settings.regexp'=>'schema',
'blocks.usage'=>'Come usare:
<ul class="list-group list-group-numbered">
<li class="list-group-item">Fai clic con il pulsante destro del mouse sul blocco per utilizzare il menu contestuale.</li>
<li class="list-group-item"><em>Le azioni</em> possono influenzare l`ordine di blocco e la pagina.</li>
I <li class="list-group-item"><em>Blocchi</em> interessano l`intero blocco, con un clic</li>
Le <li class="list-group-item"><em>Parole</em> possono influenzare le parole/il blocco facendo <q>doppio clic/evidenziazione</q> su una parola nel blocco.</li>
<li class="list-group-item"><em>Rimuovi formato</em> Rimuove il livello superiore del blocco</li>
<li class="list-group-item"><em>Elimina</em> Rimuove l`intero blocco.</li>
</ul>',
#animazioni
'animate.blank.fast'=>'Vuoto(Veloce)',
'animate.blank.slow'=>'Vuoto(lento)',
'animate.bounce.top'=>'Bounce(Top)',
'animate.bounce.left'=>'Bounce(Left)',
'animate.bounce.right'=>'Rimbalzo(Destra)',
'animate.bounce.bottom'=>'Rimbalza(Bottom)',
'animate.jello.horizontal'=>'Jello(Orizzontale)',
'animate.jello.vertical'=>'Jello(Verticale)',
'animate.pulse.heartbeat'=>'Impulso(battito cardiaco)',
'animate.pulse.regular'=>'Impulso(Normale)',
'animate.pulse.ping'=>'Impulso(Ping)',
'animate.shake.horizontal'=>'Shake(Orizzontale)',
'animate.shake.vertical'=>'Shake(Vertical)',
'animate.shake.rotate'=>'Scuoti(Ruota)',
'animate.shake.bottom'=>'Shake(Bottom)',
'animate.shake.left'=>'Shake(Sinistra)',
'animate.shake.right'=>'Shake(Right)',
'animate.shake.top'=>'Shake(Top)',
'animate.scale.bottom'=>'Scala(Bottom)',
'animate.scale.center'=>'Scala(Centro)',
'animate.scale.left'=>'Scala(Sinistra)',
'animate.scale.right'=>'Scala(Destra)',
'animate.scale.top'=>'Scala(In alto)',
'animate.scale.horzcenter'=>'Scala(Centro Horz)',
'animate.scale.horzleft'=>'Scala(Horz sinistra)',
'animate.scale.horzright'=>'Scala(Horz destra)',
'animate.scale.vertbottom'=>'Scala(Vert Bottom)',
'animate.scale.vertcenter'=>'Scala(Vert Center)',
'animate.scale.verttop'=>'Scala(Vert Top)',
'animate.rotate.bottom'=>'Ruota (in basso)',
'animate.rotate.left'=>'Ruota (a sinistra)',
'animate.rotate.right'=>'Ruota(Destra)',
'animate.rotate.top'=>'Ruota (in alto)',
'animate.slide.bottom'=>'Slide(Bottom)',
'animate.slide.left'=>'Slide(Sinistra)',
'animate.slide.right'=>'Scorri(Destra)',
'animate.slide.top'=>'Diapositiva (in alto)',
'animate.swirl.bottom'=>'Swirl(Bottom)',
'animate.swirl.left'=>'Swirl(Sinistra)',
'animate.swirl.right'=>'Swirl(Destra)',
'animate.swirl.top'=>'Swirl(Top)'
);
?>