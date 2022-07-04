INSERT INTO `utente` (`username`, `password`, `email`, `telefono`, `img`)VALUES
('venditore', 'password', 'reburger@email.it', '3394839773', 'Reburger.png' ),
('prova', 'password', 'pera12@live.it', '33944262345', 'Reburger.png' );

INSERT INTO `categoria` (`nomecategoria`,`icona`) VALUES
('Panini', 'mt-3 fas fa-hamburger fa-bounce'),
('Fritti', 'mt-3 fas fa-solid fa-bacon fa-bounce'),
('Bevande', 'mt-3 fas fa-solid fa-champagne-glasses fa-bounce'),
('Dolci', 'mt-3 fa-solid fa-cookie-bite fa-bounce');

INSERT INTO `prodotto` (`venditore`, `nome`, `descrizione`, `categoria`, `prezzo`, `img`) VALUES
('1', 'Hamburger', 'Soffici fette di pane farcite con delle svizzere di manzo, lattuga, salse, e pomodorini.', 'Panini', '7.50', 'hamburger.png'),
('1', 'Cheeseburger', 'Soffici fette di pane farcite con delle svizzere di manzo,formaggio americano lattuga, salse, e pomodorini.', 'Panini', '9.00', 'cheeseburger.png'),
('1', 'Baconcheeseburger', 'Soffici fette di pane farcite con delle svizzere di manzo, croccante bacon, formaggio americano lattuga, salse, e pomodorini.', 'Panini', '12.50', 'baconcheese.png'),
('1', 'Patatine M', 'Patatine fritte, grandezza media', 'Fritti', '3.50', 'Patatine.png'),
('1', 'Patatine L', 'Patatine fritte, grandezza grande', 'Fritti', '4.50', 'Patatine.png'),
('1', 'Zeppole S.Giuseppe', 'Ciambelle di pasta choux, farcite di crema pasticcera e dolci amarene sciroppate, coperte da una pioggia di zucchero a velo', 'Dolci', '3.50', 'zeppole.png'),
('1', 'Acqua Naturale 0.5L', 'Acqua minerale naturale in bottiglia di vetro da 0.5 litri', 'Bevande', '1.50', 'acqua.png'),
('1', 'Acqua Naturale 1L', 'Acqua minerale naturale in bottiglia di vetro da 1 litro', 'Bevande', '2.50', 'acqua.png'),
('1', 'Acqua Frizzante 0.5L', 'Acqua minerale frizzante in bottiglia di vetro da 0.5 litri', 'Bevande', '1.50', 'acqua.png'),
('1', 'Acqua Frizzante 1L', 'Acqua minerale frizzante in bottiglia di vetro da 1 litro', 'Bevande', '2.50', 'acqua.png'),
('1', 'Coca-Cola', 'Bevanda dissetante analcolica frizzante', 'Bevande', '2.50', 'Coca-Cola.png'),
('1', 'Fanta', 'Bevanda dissetante analcolica frizzante', 'Bevande', '2.50', 'fanta.png'),
('1', 'Sprite', 'Bevanda dissetante analcolica frizzante', 'Bevande', '2.50', 'sprite.png');


INSERT INTO `notizie` (`titolo`, `contenuto`, `immagine`)VALUES
('nuovo', 'prova qualcosa di nuovo', 'hamburger.png'),
('non troppo', '', 'hamburger.png');

UPDATE `notizie` SET `titolo` = 'Inaugurazione 2022' WHERE `notizie`.`idnews` =1;
UPDATE `notizie` SET `contenuto` = '<b>9 Giugno 2022</b> Non perderti l’evento più atteso dell’anno! <br>
Inaugurazione del nostro nuovo ristorante in <b>via Martiri d&#180;Ungheria 6</b> a Cesena, tutti gli studenti riceveranno un gadget omaggio e un coupon utilizzabile per uno sconto sui loro primi 2 ordini.<br>
A tutti i professori e personale universitario abbiamo riservato una magnifica sorpresa, che verrà svelata il giorno stesso dell’inaugurazione, non perdete questa fantastica giornata, vi aspettiamo numerosi! ' WHERE `notizie`.`idnews` =1;
UPDATE `notizie` SET `immagine` = 'OpenBuffet.jpg' WHERE `notizie`.`idnews` = 1;

UPDATE `notizie` SET `titolo` = 'Panino del mese' WHERE `notizie`.`idnews` = 2;
UPDATE `notizie` SET `contenuto` = '<b>Giugno</b><br>\r\nPer questo mese abbiamo preparato per voi un nuovo squisito panino:<br>\r\n<center><cite><b>Ganimede</b> </cite></center><br>\r\n<cite>Partiamo con pane ricavato da zucca e grano duro con dei semi di papavero all &#180;interno, aggiungiamo una base di burrata e crema di pistacchio, mortadella IGP delle campagne bolognesi, condiamo con dei pinoli tostati ed infine del buonissimo miele d’acacia e pomodori secchi.</cite>' WHERE `notizie`.`idnews` = 2;
UPDATE `notizie` SET `immagine` = 'PDMGiugno.jpg' WHERE `notizie`.`idnews` = 2;


INSERT INTO `carte` (`titolare`, `numero`, `cvc`, `scadenza`)VALUES
('prova', '52', '000','2022-09'),
('lois', '1657', '000','2023-09'),
('peter', '952', '000','2023-09'),
('peppino', '121', '000','2023-02');

INSERT INTO `venditore` (`utente`, `indirizzo`, `P_IVA`, `descrizione`,`descrizione1`,`descrizione2`,`descrizione3`,`nome`)VALUES('1', 'via martiri DUngheria 6', '1234567890123', ' ', ' ', ' ', ' ', 'ReBurger');

UPDATE `venditore` SET `descrizione` = 'Ci hai sentito nominare? <br>\r\nSì, siamo noi quelli di cui senti parlare tra le aule della tua facoltà! <br>\r\nSiamo anche quelli della campagna con il burger con la coroncina sulla testa!<br>' WHERE `venditore`.`idvenditore` = 1;

UPDATE `venditore` SET `descrizione1` = 'Non è un caso se attiriamo e valorizziamo progetti con uno spessore e un’attenzione alla raccolta differenziata. Il km zero, il biologico, la microproduzione, l’ecosostenibilità sono i pilastri di una vita migliore. Gli studenti, le persone con poco tempo a disposizione, le persone disabili e i pendolari incarnano quella vita fatta di piccoli attimi,quei momenti rapidi composti da rapide pause, un pasto al volo, di corse per prendere una coincidenza alla fermata del bus; Noi siamo qui per fornire un servizio ottimale ed orientato al consumatore che vive la FAST LIFE.<br>' WHERE `venditore`.`idvenditore` = 1;

UPDATE `venditore` SET `descrizione2` = 'Gli ingredienti scelti con cura, vengono quotidianamente recapitati a km zero, attraverso delle ditte limitrofe che aiutano la nostra ricerca selettiva del prodotto ottimale. Ci prendiamo cura di ogni nostro cliente, cercando sempre di fornirgli la giusta qualità prezzo.<br>' WHERE `venditore`.`idvenditore` = 1;

UPDATE `venditore` SET `descrizione3` = 'Siamo due studenti che nel tempo libero hanno deciso di intraprendere una carriera parallela a quella universitaria, aprendo così un’attività di food delivery; Ci siamo presi qualche mese per effettuare una ricerca sulle migliori combinazioni per ogni nostro prodotto presente nel menù, cerchiamo ad oggi di portare un servizio che altri studenti come noi,ne usufruiscono quotidianamente.<br> Sappiamo benissimo la svogliatezza e la noncuranza che si hanno da fuorisede, quindi percependo questa necessità, perché non creare un qualcosa che favorisca il comfort adeguato? Potrai far affidamento su di noi, per tutte le tue voglie notturne; per le tue feste di laurea; per ogni evento in casa; siamo a completa disposizione, non esitare nell’ordinare! <br>( e se avanza invitateci pure ;) )' WHERE `venditore`.`idvenditore` = 1;

UPDATE `venditore` SET `img` = 'fotoLocale.jpg' WHERE `venditore`.`idvenditore` = 1;
UPDATE `venditore` SET `logo` = 'Logo2.png' WHERE `venditore`.`idvenditore` = 1;
