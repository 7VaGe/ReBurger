# ReBurger
 Progetto di Tecnologie web, anno 2021-2022.
Nicholas Ciarafoni - Giovanni Perini.

Per la parte di progettazione abbiamo utilizzato un'architettura a solution stack WAMP in questo modo:
- Lato server 
   - XAMPP versione 3.2.5  APACHE + MySQL
   - PHP
- Lato client
   - HTML
   - CSS
   - JavaScript
   - AJAX
   - jQuery
- Framework
   - Bootstrap

- Link esterni & librerie
   - Google api
   - Font Awesome - icone e effetti
   - PHP Mailer
    

!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! IMPORTANTE !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
Su file "inviaEmail.php" a riga 9-10 si trovano le variabili session:

-  S_SESSION["emailsmtp"] = //Email d'invio di una casella di posta elettronica REALE.
-  S_SESSION["passwordsmtp"] = // Password della stessa casella di posta elettronica REALE.

In cui vanno rispettivamente inserite Email e Password per l'invio delle email di notifica e newsletter.
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
   
Abbiamo eseguito del Focus Group, sia in fase di progettazione che in fase di design, aiutandoci con dei mockup, riuscendo far capire subito ai nostri colleghi e amici quello che volevamo sviluppare, in un primo momento è stata fornita a loro una versione base dei mockup che comprendeva delle sezioni abbastanza sommarie, le quali davano un'idea grossolana di cosa ci sarebbe stato aggiunto in seguito e in che posizione, seguendo i pareri e confrontandoci siamo giunti alla creazione di una prima pagina con uno stile che poi si è verificato ottimale dai responsi ricevuti.
Lato design non appena erano pronte alcune delle prime pagine abbiamo valutato la user experience, facendo eseguire delle prove e cambiando le parti che risultavano non ottimali e meno intuitive. Partendo dallo sviluppo mobile first, parallelamente è stato gestito anche il lato desktop e facendo uso dei fogli di stile e il framework Bootstrap abbiamo impostato delle regole tramite l'ausilio delle media query, creando così un buon rapporto responsive su ogni pagina.
Una volta centrato il design finale, abbimmo apportato delle modifiche puramente estetiche utilizzando il kit font Awesome che gestisce tutte le icone presenti nel nostro sito, senza l'utilizzo del kit, avremmo dovuto creare o utilizzare delle immagini lasciando così l'opportunità degli effetti.

Nella cartella db sono presenti due file per la creazione e il popolamento del database rispettivamente:
- db.sql // CREAZIONE
- dbUtil.sql // POPOLAMENTO
Mentre il dbHelper raggruppa per tabella influenzata tutte le funzioni necessarie alla comunicazione tra sito e database in PHP.
