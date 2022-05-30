INSERT INTO `utente` (`username`, `password`, `email`, `telefono`, `img`)VALUES
('propriolui', 'password', 'paicheo@email.it', '0000000073789', '0' ),
('pippo', 'password', 'pera12@live.it', '0000000023456', '0'),
('pluto', 'pass', 'pluto@live.it', '000000003123', '0'),
('paperino', 'word', 'paperino@live.it', '0000000023123', '0');


INSERT INTO `venditore` (`utente`, `indirizzo`, `P_IVA`, `descrizione`, `nome`)VALUES
('1', 'via martiri DUngheria 6', '1234567890123', 'non fa schifo', 'ReBurger');


INSERT INTO `rider` (`utente`,`venditore`,`mezzo`)VALUES
('3', '1', 'mezzo');


INSERT INTO `ordine` (`utente`, `stato`, `pagamento`)VALUES
('3', '3', '1');

INSERT INTO `categoria` (`nomecategoria`) VALUES
('Panini'),
('Fritti'),
('Bevande'),
('Dolci');

INSERT INTO `categoria` (`icona`) VALUES
('mt-3 fas fa-hamburger fa-bounce'),
('mt-3 fas fa-solid fa-bacon fa-bounce'),
('mt-3 fas fa-solid fa-champagne-glasses fa-bounce'),
('mt-3 fa-solid fa-cookie-bite fa-bounce');

INSERT INTO `prodotto` (`venditore`, `nome`, `descrizione`, `categoria`, `prezzo`, `img`) VALUES
('1', 'Hamburger', 'Soffici fette di pane farcite con delle svizzere di manzo, lattuga, salse, e pomodorini.', '1', '7.50', 'hamburger.png'),
('1', 'Cheeseburger', 'Soffici fette di pane farcite con delle svizzere di manzo,formaggio americano lattuga, salse, e pomodorini.', '1', '9.00', 'cheeseburger.png'),
('1', 'Baconcheeseburger', 'Soffici fette di pane farcite con delle svizzere di manzo, croccante bacon, formaggio americano lattuga, salse, e pomodorini.', '1', '12.50', 'baconcheese.png'),
('1', 'Patatine M', 'Patatine fritte, grandezza media', '2', '3.50', 'Patatine.png'),
('1', 'Patatine L', 'Patatine fritte, grandezza grnde', '2', '4.50', 'Patatine.png'),
('1', 'Zeppole S.Giuseppe', 'Ciambelle di pasta choux, farcite di crema pasticcera e dolci amarene sciroppate, coperte da una pioggia di zucchero a velo', '2', '3.50', 'zeppole.png'),
('1', 'Acqua Naturale 0.5L', 'Acqua minerale naturale in bottiglia di vetro da 0.5 litri', '3', '1.50', 'acqua.png'),
('1', 'Acqua Naturale 1L', 'Acqua minerale naturale in bottiglia di vetro da 1 litro', '3', '2.50', 'acqua.png'),
('1', 'Acqua Frizzante 0.5L', 'Acqua minerale frizzante in bottiglia di vetro da 0.5 litri', '3', '1.50', 'acqua.png'),
('1', 'Acqua Frizzante 1L', 'Acqua minerale frizzante in bottiglia di vetro da 1 litro', '3', '2.50', 'acqua.png'),
('1', 'Coca-Cola', 'Bevanda dissetante analcolica frizzante', '3', '2.50', 'Coca-Cola.png'),
('1', 'Fanta', 'Bevanda dissetante analcolica frizzante', '3', '2.50', 'fanta.png'),
('1', 'Sprite', 'Bevanda dissetante analcolica frizzante', '3', '2.50', 'sprite.png');


INSERT INTO `notizie` (`titolo`, `contenuto`, `immagine`)VALUES
('nuovo', 'prova qualcosa di nuovo', 'img/hamburger.png'),
('non troppo', 'mangiare fa diventare ciccione', 'img/hamburger.png');

INSERT INTO `carrello` (`prodotto`, `utente`, `quantita`)VALUES
('1', '1', '1'),
('2', '2', '1');

INSERT INTO `ordine` (`utente`)VALUES
('5'),
('7');

//INSERT INTO `spedizione` (`rider`, `cliente`, `ordine`, `venditore`, `stato`)
//VALUES ('rider', 'cliente', 'ordine', 'venditore', 'stato');

//INSERT INTO `venditore_crea_prodotto` (`prodotto`, `venditore`, `quantita`)
//VALUES ('prodotto', 'venditore', 'quantita');

--INSERT INTO `utente` (`idutente`, `username`, `password`, `email`, `telefono`, `img`, `pagamento`) VALUES
--('5', 'jd678', 'password', 'lord@sir.it', '333444', NULL, '1'),
--('6', 'fg1234', 'password', 'lord@gmail.it', '333445', NULL, '1');

INSERT INTO `referral` (`idreferral`, `idinvitato`, `idinvitante`, `matinvitato`, `matinvitante`) VALUES
(NULL, '4', '1', '0000756333', '0000756576'),
(NULL, '3', '1', '0000750000', '0000756576');


INSERT INTO `ordine` (`idordine`, `utente`, `data_ordine`, `ora_ordine`, `stato`, `pagamento`) VALUES
('4', '7', '2022-05-03', '15:24:23', '1', '1');

INSERT INTO `carte` (`nome`, `numero`, `cvc`)VALUES
('pippo', '52', '000'),
('lois', '1657', '000'),
('peter', '952', '000'),
('peppino', '121', '000');


UPDATE `venditore` SET `descrizione` =
'Ci hai sentito nominare? <br> \r\nSì, siamo noi quelli di cui senti parlare tra le aule della tua facoltà! <br>\r\nSiamo anche quelli della campagna con il burger con la coroncina sulla testa!<br> <br><br>\r\n\r\n\r\n <b>Cibo e impegno sociale </b> <br>\r\nNon è un caso se attiriamo e valorizziamo progetti con uno spessore e un’attenzione alla raccolta differenziata. Il km zero, il biologico, la microproduzione, l’ecosostenibilità sono i pilastri di una vita migliore. Gli studenti, le persone con poco tempo a disposizione, le persone disabili e i pendolari incarnano quella vita fatta di piccoli attimi,quei momenti rapidi composti da rapide pause, un pasto al volo, di corse per prendere una coincidenza alla fermata del bus;\r\nNoi siamo qui per fornire un servizio ottimale ed orientato al consumatore che vive la FAST LIFE.<br><br><br>\r\n\r\n <b>Ricerca incondizionata</b> <br>\r\nGli ingredienti scelti con cura, vengono quotidianamente recapitati a km zero, attraverso delle ditte limitrofe che aiutano la nostra ricerca selettiva del prodotto ottimale. Ci prendiamo cura di ogni nostro cliente, cercando sempre di fornirgli la giusta qualità prezzo.<br><br><br>\r\n\r\n\r\n <b>Sinceramente parlando</b><br>\r\nSiamo due studenti che nel tempo libero hanno deciso di intraprendere una carriera parallela a quella universitaria, aprendo così un’attività di food delivery; \r\nCi siamo presi qualche mese per effettuare una ricerca sulle migliori combinazioni per ogni nostro prodotto presente nel menù, cerchiamo ad oggi di portare un servizio che altri studenti come noi,ne usufruiscono quotidianamente.\r\nSappiamo benissimo la svogliatezza e la noncuranza che si hanno da fuorisede, quindi percependo questa necessità, perché non creare un qualcosa che favorisca il comfort adeguato?\r\nPotrai far affidamento su di noi, per tutte le tue voglie notturne; per le tue feste di laurea; per ogni evento in casa; siamo a completa disposizione, non esitare nell’ordinare! ( e se avanza invitateci pure ;) )\r\n' WHERE `venditore`.`idvenditore` = 1;


INSERT INTO `venditore` (`utente`, `indirizzo`, `P_IVA`, `descrizione`,`descrizione1`,`descrizione2`,`descrizione3`,`nome`)VALUES('1', 'via martiri DUngheria 6', '1234567890123', 'Ci hai sentito nominare? <br> \r\nSì, siamo noi quelli di cui senti parlare tra le aule della tua facoltà! <br>\r\nSiamo anche quelli della campagna con il burger con la coroncina sulla testa!<br>','<b>Cibo e impegno sociale </b> <br>\r\nNon è un caso se attiriamo e valorizziamo progetti con uno spessore e un’attenzione alla raccolta differenziata. Il km zero, il biologico, la microproduzione, l’ecosostenibilità sono i pilastri di una vita migliore. Gli studenti, le persone con poco tempo a disposizione, le persone disabili e i pendolari incarnano quella vita fatta di piccoli attimi,quei momenti rapidi composti da rapide pause, un pasto al volo, di corse per prendere una coincidenza alla fermata del bus;\r\nNoi siamo qui per fornire un servizio ottimale ed orientato al consumatore che vive la FAST LIFE.<br>','<b>Ricerca incondizionata</b> <br>\r\nGli ingredienti scelti con cura, vengono quotidianamente recapitati a km zero, attraverso delle ditte limitrofe che aiutano la nostra ricerca selettiva del prodotto ottimale. Ci prendiamo cura di ogni nostro cliente, cercando sempre di fornirgli la giusta qualità prezzo.<br>','<b>Sinceramente parlando</b><br>\r\nSiamo due studenti che nel tempo libero hanno deciso di intraprendere una carriera parallela a quella universitaria, aprendo così un’attività di food delivery; \r\nCi siamo presi qualche mese per effettuare una ricerca sulle migliori combinazioni per ogni nostro prodotto presente nel menù, cerchiamo ad oggi di portare un servizio che altri studenti come noi,ne usufruiscono quotidianamente.\r\nSappiamo benissimo la svogliatezza e la noncuranza che si hanno da fuorisede, quindi percependo questa necessità, perché non creare un qualcosa che favorisca il comfort adeguato?\r\nPotrai far affidamento su di noi, per tutte le tue voglie notturne; per le tue feste di laurea; per ogni evento in casa; siamo a completa disposizione, non esitare nell’ordinare! ( e se avanza invitateci pure ;) )', 'ReBurger')

-- descrizione 1 --
"Ci hai sentito nominare? <br>
Sì, siamo noi quelli di cui senti parlare tra le aule della tua facoltà! <br>
Siamo anche quelli della campagna con il burger con la coroncina sulla testa!<br>"

UPDATE `venditore` SET `descrizione` = '\"Ci hai sentito nominare? <br>\r\nSì, siamo noi quelli di cui senti parlare tra le aule della tua facoltà! <br>\r\nSiamo anche quelli della campagna con il burger con la coroncina sulla testa!<br>\"' WHERE `venditore`.`idvenditore` = 1;


-- descrizione 2--
"Non è un caso se attiriamo e valorizziamo progetti con uno spessore e un’attenzione alla raccolta differenziata. Il km zero, il biologico, la microproduzione, l’ecosostenibilità sono i pilastri di una vita migliore. Gli studenti, le persone con poco tempo a disposizione, le persone disabili e i pendolari incarnano quella vita fatta di piccoli attimi,quei momenti rapidi composti da rapide pause, un pasto al volo, di corse per prendere una coincidenza alla fermata del bus;
Noi siamo qui per fornire un servizio ottimale ed orientato al consumatore che vive la FAST LIFE.<br>"

UPDATE `venditore` SET `descrizione1` = '\"Non è un caso se attiriamo e valorizziamo progetti con uno spessore e un’attenzione alla raccolta differenziata. Il km zero, il biologico, la microproduzione, l’ecosostenibilità sono i pilastri di una vita migliore. Gli studenti, le persone con poco tempo a disposizione, le persone disabili e i pendolari incarnano quella vita fatta di piccoli attimi,quei momenti rapidi composti da rapide pause, un pasto al volo, di corse per prendere una coincidenza alla fermata del bus; Noi siamo qui per fornire un servizio ottimale ed orientato al consumatore che vive la FAST LIFE.<br>\"' WHERE `venditore`.`idvenditore` = 1;


-- descrizione 3--
"Gli ingredienti scelti con cura, vengono quotidianamente recapitati a km zero, attraverso delle ditte limitrofe che aiutano la nostra ricerca selettiva del prodotto ottimale. Ci prendiamo cura di ogni nostro cliente, cercando sempre di fornirgli la giusta qualità prezzo.<br>"

UPDATE `venditore` SET `descrizione2` = '\"Gli ingredienti scelti con cura, vengono quotidianamente recapitati a km zero, attraverso delle ditte limitrofe che aiutano la nostra ricerca selettiva del prodotto ottimale. Ci prendiamo cura di ogni nostro cliente, cercando sempre di fornirgli la giusta qualità prezzo.<br>\"' WHERE `venditore`.`idvenditore` = 1;

-- descrizione 4--
"Siamo due studenti che nel tempo libero hanno deciso di intraprendere una carriera parallela a quella universitaria, aprendo così un’attività di food delivery;
Ci siamo presi qualche mese per effettuare una ricerca sulle migliori combinazioni per ogni nostro prodotto presente nel menù, cerchiamo ad oggi di portare un servizio che altri studenti come noi,ne usufruiscono quotidianamente.<br>
Sappiamo benissimo la svogliatezza e la noncuranza che si hanno da fuorisede, quindi percependo questa necessità, perché non creare un qualcosa che favorisca il comfort adeguato?
Potrai far affidamento su di noi, per tutte le tue voglie notturne; per le tue feste di laurea; per ogni evento in casa; siamo a completa disposizione, non esitare nell’ordinare! <br>( e se avanza invitateci pure ;) )"

UPDATE `venditore` SET `descrizione3` = '\"Siamo due studenti che nel tempo libero hanno deciso di intraprendere una carriera parallela a quella universitaria, aprendo così un’attività di food delivery; Ci siamo presi qualche mese per effettuare una ricerca sulle migliori combinazioni per ogni nostro prodotto presente nel menù, cerchiamo ad oggi di portare un servizio che altri studenti come noi,ne usufruiscono quotidianamente.<br> Sappiamo benissimo la svogliatezza e la noncuranza che si hanno da fuorisede, quindi percependo questa necessità, perché non creare un qualcosa che favorisca il comfort adeguato? Potrai far affidamento su di noi, per tutte le tue voglie notturne; per le tue feste di laurea; per ogni evento in casa; siamo a completa disposizione, non esitare nell’ordinare! <br>( e se avanza invitateci pure ;) )\"' WHERE `venditore`.`idvenditore` = 1;


--logo e immagini del venditore--
UPDATE `venditore` SET `img` = 'fotoLocale.jpg' WHERE `venditore`.`idvenditore` = 1;
UPDATE `venditore` SET `logo` = 'Logo2.png' WHERE `venditore`.`idvenditore` = 1;




--aggiornamento notizie--

UPDATE `notizie` SET `titolo` = 'Inaugurazione 2022' WHERE `notizie`.`idnews` =1;
ALTER TABLE `notizie` CHANGE `contenuto` `contenuto` VARCHAR(2048) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL; -- cambio grandezza contenuto--
UPDATE `notizie` SET `contenuto` = '<b>9 Giugno 2022</b> Non perderti l’evento più atteso dell’anno! <br>
Inaugurazione del nostro nuovo ristorante in <b>via Martiri d&#180;Ungheria 6</b> a Cesena, tutti gli studenti riceveranno un gadget omaggio e un coupon utilizzabile per uno sconto sui loro primi 2 ordini.<br>
A tutti i professori e personale universitario abbiamo riservato una magnifica sorpresa, che verrà svelata il giorno stesso dell’inaugurazione, non perdete questa fantastica giornata, vi aspettiamo numerosi! ' WHERE `notizie`.`idnews` =1;
UPDATE `notizie` SET `immagine` = 'img/OpenBuffet.jpg' WHERE `notizie`.`idnews` = 1;

UPDATE `notizie` SET `titolo` = 'Panino del mese' WHERE `notizie`.`idnews` = 2;
UPDATE `notizie` SET `contenuto` = '<b>Giugno</b><br>\r\nPer questo mese abbiamo preparato per voi un nuovo squisito panino:<br>\r\n<center><cite><b>Ganimede</b> </cite></center><br>\r\n<cite>Partiamo con pane ricavato da zucca e grano duro con dei semi di papavero all &#180;interno, aggiungiamo una base di burrata e crema di pistacchio, mortadella IGP delle campagne bolognesi, condiamo con dei pinoli tostati ed infine del buonissimo miele d’acacia e pomodori secchi.</cite>' WHERE `notizie`.`idnews` = 2;
UPDATE `notizie` SET `immagine` = 'img/PDMGiugno.jpg' WHERE `notizie`.`idnews` = 2;


--categorie--

UPDATE `categoria` SET `icona` = 'mt-3 fas fa-hamburger fa-bounce' WHERE `categoria`.`idcategoria` = 1;
UPDATE `categoria` SET `icona` = 'mt-3 fas fa-solid fa-bacon fa-bounce' WHERE `categoria`.`idcategoria` = 2;
UPDATE `categoria` SET `icona` = 'mt-3 fas fa-solid fa-champagne-glasses fa-bounce' WHERE `categoria`.`idcategoria` = 3;
UPDATE `categoria` SET `icona` = 'mt-3 fa-solid fa-cookie-bite fa-bounce' WHERE `categoria`.`idcategoria` = 4;

-- modifiche prodotti
UPDATE `prodotto` SET `descrizione` = 'Patatine fritte, grandezza grande' WHERE `prodotto`.`idprodotto` = 18;
