<section class="header">
  <img src="../images/logo.svg" alt="Flancer logo" width="150">
</section>

<section class="details">
        <div class="job__card">
          <div class="flancer__data">
            <p class="flancer__type"><?php echo $job["jobname"] ?></p>
            <h2 class="flancer__name"><?php echo $job['price'] ?></h3>
            <p class="flancer__bio" ><?php echo $job["description"] ?></p>
          </div>
        </div>
      </a>

      <?php var_dump($job);?>
</section>
