<section class="header">
  <img src="../images/logo.svg" alt="Flancer logo" width="150">
</section>

<section class="details">
            <div class="job__details">
              <h2 class="flancer__type"><?php echo $job["jobname"]; ?></h2>
              <p class="jobdetail__bio" ><?php echo $job["description"]; ?></p>
              <p class="flancer__info flancer__info__location"><?php echo $job["duration"] . ' days';?></p>
              <p class="flancer__info flancer__info__recommendations"><?php echo $job["location"]; ?></p>
              <p class="flancer__info flancer__info__recommendations"><?php echo $job["skills"]; ?></p>
              <h2 class="flancer__name"><?php echo "$" . $job['price'] ?></h3>
              <a href="index.php?page=dashboard" class="button-grey">change this job</a><br>
              <a href="index.php?page=dashboard" class="button-red">delete</a>

</section>
