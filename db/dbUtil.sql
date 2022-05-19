INSERT INTO `utente` (`username`, `password`, `email`, `telefono`, `img`, `pagamento`)VALUES
('propriolui', 'password', 'paicheo@email.it', '0000000073789', '0', '1'),
('pippo', 'password', 'pera12@live.it', '0000000023456', '0', '1'),
('pluto', 'pass', 'pluto@live.it', '000000003123', '0', '2'),
('paperino', 'word', 'paperino@live.it', '0000000023123', '0', '2');


INSERT INTO `venditore` (`utente`, `indirizzo`, `P_IVA`, `descrizione`, `nome`)VALUES
('1', 'via martiri DUngheria 6', '1234567890123', 'non fa schifo', 'ReBurger');

INSERT INTO `cliente` (`matricola`,`utente`)VALUES
('0000769222', '2');

INSERT INTO `rider` (`utente`,`venditore`,`mezzo`)VALUES
('3', '1', 'mezzo');


INSERT INTO `ordine` (`cliente`, `stato`, `pagamento`)VALUES
('3', '3', '1');

INSERT INTO `categoria` (`nomecategoria`) VALUES
('Panini'),
('Fritti'),
('Bevande'),
('Dolci');

INSERT INTO `prodotto` (`venditore`, `nome`, `descrizione`, `categoria`, `allergeni`, `prezzo`, `img`) VALUES
('1', 'Hamburger', 'Soffici fette di pane farcite con delle svizzere di manzo, lattuga, salse, e pomodorini.', '1', '1000', '7.50', ' '),
('1', 'Cheeseburger', 'Soffici fette di pane farcite con delle svizzere di manzo,formaggio americano lattuga, salse, e pomodorini.', '1', '1200', '9.00', ' '),
('1', 'Baconcheeseburger', 'Soffici fette di pane farcite con delle svizzere di manzo, croccante bacon, formaggio americano lattuga, salse, e pomodorini.', '1', '1200', '12.50', ' '),
('1', 'Patatine M', 'Patatine fritte, grandezza media', '2', '1200', '3.50', ' '),
('1', 'Patatine L', 'Patatine fritte, grandezza grnde', '2', '1200', '4.50', ' '),
('1', 'Zeppole S.Giuseppe', 'Ciambelle di pasta choux, farcite di crema pasticcera e dolci amarene sciroppate, coperte da una pioggia di zucchero a velo', '2', '1200', '3.50', ' '),
('1', 'Acqua Naturale 0.5L', 'Acqua minerale naturale in bottiglia di vetro da 0.5 litri', '3', '1200', '1.50', ' '),
('1', 'Acqua Naturale 1L', 'Acqua minerale naturale in bottiglia di vetro da 1 litro', '3', '1200', '2.50', ' '),
('1', 'Acqua Frizzante 0.5L', 'Acqua minerale frizzante in bottiglia di vetro da 0.5 litri', '3', '1200', '1.50', ' '),
('1', 'Acqua Naturale 1L', 'Acqua minerale frizzante in bottiglia di vetro da 1 litro', '3', '1200', '2.50', ' '),
('1', 'Coca-Cola', 'Bevanda dissetante analcolica frizzante', '3', '1200', '2.50', ' '),
('1', 'Fanta', 'Bevanda dissetante analcolica frizzante', '3', '1200', '2.50', ' '),
('1', 'Sprite', 'Bevanda dissetante analcolica frizzante', '3', '1200', '2.50', ' '),


INSERT INTO `notizie` (`titolo`, `contenuto`, `immagine`)VALUES
('nuovo', 'prova qualcosa di nuovo', 'img/hamburger.png'),
('non troppo', 'mangiare fa diventare ciccione', 'img/hamburger.png');

INSERT INTO `carrello` (`prodotto`, `utente`, `quantita`)VALUES
('1', '1', '1'),
('2', '2', '1');

INSERT INTO `ordine` (`cliente`, `stato`, `pagamento`, `descrizione`)VALUES
('1', '2', '3', 'descrizione'),
('1', '2', '1', 'descrizione');

//INSERT INTO `spedizione` (`rider`, `cliente`, `ordine`, `venditore`, `stato`)
//VALUES ('rider', 'cliente', 'ordine', 'venditore', 'stato');

//INSERT INTO `venditore_crea_prodotto` (`prodotto`, `venditore`, `quantita`)
//VALUES ('prodotto', 'venditore', 'quantita');

INSERT INTO `utente` (`idutente`, `username`, `password`, `email`, `telefono`, `img`, `pagamento`) VALUES
('5', 'jd678', 'password', 'lord@sir.it', '333444', NULL, '1'),
('6', 'fg1234', 'password', 'lord@gmail.it', '333445', NULL, '1');

INSERT INTO `referral` (`idreferral`, `idinvitato`, `idinvitante`, `matinvitato`, `matinvitante`) VALUES
(NULL, '4', '1', '0000756333', '0000756576'),
(NULL, '3', '1', '0000750000', '0000756576');


INSERT INTO `ordine` (`idordine`, `cliente`, `data_ordine`, `ora_ordine`, `stato`, `pagamento`) VALUES 
('4', '7', '2022-05-03', '15:24:23', '1', '1');


UPDATE `venditore` SET `descrizione` = 
'Ci hai sentito nominare? <br> \r\nSì, siamo noi quelli di cui senti parlare tra le aule della tua facoltà! <br>\r\nSiamo anche quelli della campagna con il burger con la coroncina sulla testa!<br> <br><br>\r\n\r\n\r\n <b>Cibo e impegno sociale </b> <br>\r\nNon è un caso se attiriamo e valorizziamo progetti con uno spessore e un’attenzione alla raccolta differenziata. Il km zero, il biologico, la microproduzione, l’ecosostenibilità sono i pilastri di una vita migliore. Gli studenti, le persone con poco tempo a disposizione, le persone disabili e i pendolari incarnano quella vita fatta di piccoli attimi,quei momenti rapidi composti da rapide pause, un pasto al volo, di corse per prendere una coincidenza alla fermata del bus;\r\nNoi siamo qui per fornire un servizio ottimale ed orientato al consumatore che vive la FAST LIFE.<br><br><br>\r\n\r\n <b>Ricerca incondizionata</b> <br>\r\nGli ingredienti scelti con cura, vengono quotidianamente recapitati a km zero, attraverso delle ditte limitrofe che aiutano la nostra ricerca selettiva del prodotto ottimale. Ci prendiamo cura di ogni nostro cliente, cercando sempre di fornirgli la giusta qualità prezzo.<br><br><br>\r\n\r\n\r\n <b>Sinceramente parlando</b><br>\r\nSiamo due studenti che nel tempo libero hanno deciso di intraprendere una carriera parallela a quella universitaria, aprendo così un’attività di food delivery; \r\nCi siamo presi qualche mese per effettuare una ricerca sulle migliori combinazioni per ogni nostro prodotto presente nel menù, cerchiamo ad oggi di portare un servizio che altri studenti come noi,ne usufruiscono quotidianamente.\r\nSappiamo benissimo la svogliatezza e la noncuranza che si hanno da fuorisede, quindi percependo questa necessità, perché non creare un qualcosa che favorisca il comfort adeguato?\r\nPotrai far affidamento su di noi, per tutte le tue voglie notturne; per le tue feste di laurea; per ogni evento in casa; siamo a completa disposizione, non esitare nell’ordinare! ( e se avanza invitateci pure ;) )\r\n' WHERE `venditore`.`idvenditore` = 1;