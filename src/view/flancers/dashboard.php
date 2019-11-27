<section class="header">
  <img src="../images/logo.svg" alt="Flancer logo" width="150">
</section>
<section class="title--section">
  <h1>Available freelancers</h1>
  <?php
  foreach($flancers as $flancer){
    ?>
    <li class='flancer'>
      <span class='flancer__firstname'><?php echo $flancer["firstname"];?></span>
    </li>
    <?php
  }
?>
  <a href=""><img src="../images/filter.svg" alt="filter" width="25"></a>
</section>
<section class="dashboard--content">
  <article class="dashboard--item">

  </article>
</section>



