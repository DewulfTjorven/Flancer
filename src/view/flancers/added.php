<section class="header">
<a href="index.php?page=dashboard"><img src="../images/logo.svg" alt="Flancer logo" width="150"></a>
</section>
<section class="title__section">
  <div class="title">
    <h1 class="padding--bottom">This the job you added.</h1>
    <article class="lastjob">
    <h2><?php echo $lastjob['jobname']?></h2>
    <h2><?php echo $lastjob['skills']?></h2>
    <h2><?php echo $lastjob['location']?></h2>
    <h2><?php echo $lastjob['price']?></h2>
    <h2><?php echo $lastjob['duration']?></h2>
    <h2><?php echo $lastjob['description']?></h2>
    </article>
  </div>
</section>


  <section class="padding--bottom">
  <a href="index.php?page=job" class="button-blue">Other Jobs</a>
  </section>
