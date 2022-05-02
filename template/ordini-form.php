<div class="container-lg my-5">
  <div class="row mx-4 p-4 pb-auto pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-white">
    <table>
      <tr><td>Utente</td><td>Data</td><td>Ora</td><td>stato</td><td>pagamento</td></tr>
      <?php foreach ($templateParams["ordine"] as $ordine):?>
        <tr><td><?php echo $ordine["cliente"] ?></td><td><?php echo $ordine["data_ordine"] ?></td><td><?php echo $ordine["ora_ordine"] ?></td><td><?php echo $ordine["stato"] ?></td><td><?php echo $ordine["pagamento"] ?></td></tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>
