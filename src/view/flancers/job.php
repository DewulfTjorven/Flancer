<section class="header">
<a href="index.php?page=dashboard"><img src="../images/logo.svg" alt="Flancer logo" width="150"></a>
</section>



<section class="title__section">
  <div class="title">
    <h1 class="padding--bottom">Your jobs</h1>
    <p class="padding--bottom">
    <?php
    if(!empty($jobs)){
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
                <p class="flancer__info flancer__info__location"><?php echo '<' . $flancer["location"] . ' km '?></p>
                <p class="flancer__info flancer__info__recommendations"><?php echo $flancer["recommendations"] ?> recommendations</p>
              </div>
          </div>
        </div>
      </a>
        <?php
      }

    }else{
      echo '<p>er zijn nog geen jobs aangemaakt</p>';
    }
    ?>
    </p>
  </div>
</section>


  <section class="padding--bottom">
  <a href="index.php?page=form" class="button-blue">Add a job</a>
  </section>


