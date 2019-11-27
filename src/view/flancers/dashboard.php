<section class="header">
  <img src="../images/logo.svg" alt="Flancer logo" width="150">
</section>
<section class="title--section">
  <h1>Available freelancers</h1>
  <?php
  foreach($flancers as $flancer){
    ?>
  <div>
  <div><img src="" alt=""></div>
  <h3 class="flancer__name"><?php echo $flancer["firstname"] . ' ' . $flancer["lastname"] ?></h3>
  </div>
    <?php
  }
?>
  <a href=""><img src="../images/filter.svg" alt="filter" width="25"></a>
</section>



