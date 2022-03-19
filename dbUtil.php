<?php

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

INSERT INTO `ordine` (`cliente`, `ora_ordine`, `stato`, `pagamento`)VALUES
('1', '16:00:00', '2', '1');

INSERT INTO `categoria` (`nomecategoria`) VALUES
('panini'),
('fritti'),
('bevande');

INSERT INTO `prodotto` (`venditore`, `nome`, `descrizione`, `categoria`, `allergeni`, `prezzo`, `img`) VALUES
('1', 'hamburger', 'non fa schifo', '1', '1000', '10', ' '),
('1', 'cheeseburger', 'na roba giusta', '1', '1200', '11', ' '),
('1', 'baconcheeseburger', 'spacca', '1', '1200', '13', ' ');

//INSERT INTO `carrello` (`prodotto`, `ordine`, `quantita`)
//VALUES ('prodotto', 'ordine', 'quantita');

//INSERT INTO `spedizione` (`rider`, `cliente`, `ordine`, `venditore`, `stato`)
//VALUES ('rider', 'cliente', 'ordine', 'venditore', 'stato');

//INSERT INTO `venditore_crea_prodotto` (`prodotto`, `venditore`, `quantita`)
//VALUES ('prodotto', 'venditore', 'quantita');

?>
