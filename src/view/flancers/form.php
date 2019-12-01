<section class="header">
<a href="index.php?page=dashboard"><img src="../images/logo.svg" alt="Flancer logo" width="150"></a>
</section>

<section class="title__section padding--bottom">
    <h1 class="padding--bottom">Add a job</h1>
    <a href="index.php?page=job"><img src="../images/filter.svg" alt="view jobs" width="22">
</section>

<section>
<form action="index.php?page=form" method="POST" class="job__form">
    <input type="hidden" name="action" value="createjob" class=""/>
    <input type="hidden" name="page" value="added"/>
    <label for="form__jobname">Name of the job</label>
    <input class="form__jobname padding--bottom" type="text" name="jobname" required />
    <label for="form__textarea">Describe your job offer</label>
    <textarea class="form__textarea" type="text" name="description" rows = "10" cols="100" required></textarea>
    <label for="form__price" class=>Budget</label>
    <input class="form__price" type="number" name="price" min=0 required />
    <label for="form__duration">Duration in days</label>
    <input class="form__duration" type="number" name="duration" min=0 required />
    <label for="form__location">Location</label>
    <input class="form__location" type="text" name="location" required />
    <label for="form__skills">Required skills</label>
    <input class="form__skills" type="text" name="skills" required />
<<<<<<< HEAD
    <button href="index.php?page=job" type="submit" class="button-blue">Add job</button>
=======
    <?php
    if(empty($_POST)){
    echo '<button type="submit" class="button-blue">Next step</button>';
    }
    ?>


>>>>>>> 26f5ecea17dc7e8a8a7f3f29ebc316588ba2f7be
  </form>
</section>
<?php
if(!empty($_POST)){
?>
<<<<<<< HEAD
=======
<section class="padding--bottom">
    <a href="index.php?page=added" class="button-blue button-blue--form">Next</a>
</section>
>>>>>>> 26f5ecea17dc7e8a8a7f3f29ebc316588ba2f7be
<?php
}
?>
