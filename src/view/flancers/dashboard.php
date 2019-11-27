<section class="header">
  <img src="../images/logo.svg" alt="Flancer logo" width="150">
</section>
<section class="title--section">
  <h1>Available freelancers</h1>

  <a href="index.php?page=job"><img src="../images/filter.svg" alt="filter" width="25"></a>
</section>
  <?php
  foreach($flancers as $flancer){
    ?>
  <div class="flancer__card">
    <div><img src="" alt=""></div>
    <div class="flancer__data">
      <p class="flancer__type"><?php echo $flancer["flancetype"] ?></p>
      <h2 class="flancer__name"><?php echo $flancer["firstname"] . ' ' . $flancer["lastname"] ?></h3>
      <p class="flancer__bio" ><?php echo $flancer["bio"] ?></p>
        <div>
          <p class="flancer__location"><?php echo $flancer["location"] ?></p>
          <p class="flancer__recommendations"><?php echo $flancer["recommendations"] ?> recommendations</p>
        </div>
    </div>

  </div>
    <?php
  }
?>


