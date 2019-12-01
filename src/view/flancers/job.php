<section class="header">
<a href="index.php?page=dashboard"><img src="../images/logo.svg" alt="Flancer logo" width="150"></a>
</section>



<section class="title__section">
  <div class="title">
    <h1 class="padding--bottom">Your jobs</h1>
    <p class="padding--bottom">
    <?php
    if(!empty($jobs)){
      foreach($jobs as $job){
        ?>
      <a href ="index.php?page=jobdetail&id=<?php echo $job['id']; ?>">
        <div class="job__card">
          <div class="flancer__data">
            <p class="flancer__type"><?php echo $job["jobname"] ?></p>
            <h2 class="flancer__name"><?php echo $job['price'] ?></h3>
            <p class="flancer__bio" ><?php echo $job["description"] ?></p>
              <div class="flancer__info">
                <p class="flancer__info flancer__info__location"><?php echo '<' . $job["location"] . ' km '?></p>
                <p class="flancer__info flancer__info__recommendations"><?php echo $job["skills"] ?></p>
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


