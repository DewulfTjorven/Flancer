<section class="header">
<a href="index.php?page=dashboard"><img src="../images/logo.svg" alt="Flancer logo" width="150"></a>
</section>

<section class="title__section padding--bottom">
  <div class="title">
    <h1 class="padding--bottom">Add a job</h1>
    <p>please fill in the form</p>
  </div>
</section>

<section>
<form action="index.php?page=form" method="POST">
    <input type="hidden" name="action" value="createjob"/>
    <input type="hidden" name="page" value="job"/>
    <input type="text" name="jobname"/>
    <input type="text" name="description"/>
    <input type="number" name="price"/>
    <input type="number" name="duration"/>
    <input type="text" name="location"/>
    <input type="text" name="skills"/>
    <button type="submit" class="button button--orange">Place Order</button>
  </form>
</section>
