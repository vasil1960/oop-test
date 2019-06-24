<!-- Includs header -->
<?php include_once 'partials/header.inc.php' ;?>
    
<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h4 class="display-4"><?= $data['jumbotronTitle'] ;?></h4>
      <p><?= $data['jumbotronSubTitle'] ;?></p>
    </div>
  </div>

  <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Описание на сигнала:</th>
      <th scope="col">Регистриран на:</th>
      <th scope="col">Предприети действия:</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($signali as $signal) : ?>
        <tr>
            <td><?= $signal->id; ?></td>
            <td><?= $signal->opisanie; ?></td>
            <td><?= date('d.m.Y H:m:s' , strtotime($signal->signaldate)); ?></td>
            <td><?= $signal->deistvie; ?></td>
        </tr>
     <?php endforeach; ?>
  </tbody>
</table>
    <hr>

  </div> <!-- /container -->

</main>

<!-- Includs footer -->
 <?php include_once 'partials/footer.inc.php' ;?>