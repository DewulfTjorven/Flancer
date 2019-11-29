<section class="header">
<a href="index.php?page=dashboard"><img src="../images/logo.svg" alt="Flancer logo" width="150"></a>
</section>
<section class="title__section">
  <div class="title">
    <h1 class="padding--bottom">Your jobs</h1>
    <p class="padding--bottom"><?php
    if (empty($data)) {
      echo 'You did not create a job yet';
  } else {
  }
    ?></p>

    <section>
    <a href="index.php?page=job" class="button-blue">Add a job</a>

    </section
  </div>


