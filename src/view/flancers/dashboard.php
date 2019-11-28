<section class="header">
  <img src="../images/logo.svg" alt="Flancer logo" width="150">
</section>
<section class="title__section">
  <div class="title">
    <h1>Available freelancers</h1>
  </div>
  <div class="nav">
    <a href="index.php?page=job"><img src="../images/filter.svg" alt="filter" width="25"></a>
  </div>
</section>
<section>
<p>filter by</p>

<section class="filter">
    <form action="index.php" method="get" id="flancerform">
    <input type="hidden" name="page" value="dashboard" />
    <input type="hidden" name="action" value="filter" />
      <select name="orderby" id="orderby">
       <option value="recommendations">recommendations</option>
       <option value="location">location</option>
       <option value="pricelow">pricelow</option>
      </select>
      <input type="submit" value="Filter" class="form__submit input input--button">
    </form>
  </section>

</section>
<section class="flancers__overview">
  <?php
  foreach($flancers as $flancer){
    ?>
  <a href ="index.php?page=detail&id=<?php echo $flancer['id']; ?>">
    <div class="flancer__card">
      <div class="img__div">
        <img class="flancer__image" src="../images/<?php echo $flancer["image"] ?>" width="104" alt="<?php echo $flancer["firstname"] ?>">
      </div>

      <div class="flancer__data">
        <p class="flancer__type"><?php echo $flancer["flancetype"] ?></p>
        <h2 class="flancer__name"><?php echo $flancer["firstname"] . ' ' . $flancer["lastname"] ?></h3>
        <p class="flancer__bio" ><?php echo $flancer["bio"] ?></p>
          <div class="flancer__info">
            <p class="flancer__info flancer__info__location"><?php echo $flancer["location"] ?></p>
            <p class="flancer__info flancer__info__recommendations"><?php echo $flancer["recommendations"] ?> recommendations</p>
          </div>
      </div>
    </div>
  </a>
    <?php
  }
?>
</section>



