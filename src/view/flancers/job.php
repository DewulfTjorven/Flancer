<section class="header">
<a href="index.php?page=dashboard"><img src="../images/logo.svg" alt="Flancer logo" width="150"></a>
</section>



<section class="title__section">
  <div class="title">
    <h1 class="padding--bottom">Your jobs</h1>
    <p class="padding--bottom">
    <?php
    if(!empty($jobs)){
        foreach($jobs as $job) {
          echo '<p>' . $job['jobname'] . '</p>' ;
          echo '<p>' . $job['description'] . '</p>' ;
          echo '<p>' . $job['duration'] . '</p>' ;
          echo '<p>' . $job['location'] . '</p>' ;
          echo '<p>' . $job['skills'] . '</p>' ;
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


