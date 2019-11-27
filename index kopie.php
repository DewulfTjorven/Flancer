<a href="" id="myBtn">To top</a>
<header>
  <div class="container">
    <nav class="navigation">
      <div>
        <a href="index.php?page=tickets" class="button button--orange">Tickets</a>
      </div>
      <div class="navigation--items">
        <ul>
          <li><a href="">We Gotcha</a></li>
          <li><a href="">Agenda</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Where to find us</a></li>
        </ul>
      </div>
    </nav>
    <div class="header--content">
      <h1>Feeling Lonely?<br> We Gotcha.</h1>
    <p>We know that you feel lonely sometimes, and we do too. Social interactions make us feel good again and that is why we would be happy if you'd join us.</p>
    <a href="index.php" class="button button--white">Agenda</a>
    </div>
  </div>
</header>
<section class="content">
  <div class="container">
    <article class="container--flex--left">
      <h2 class="details--quote">
        "We Gotcha is a fun and close community! I highly recommend joining if you'd like to increase your social activity or if you are feeling lonely!"
      </h2>
      <p class="details--text">At we Gotcha, our members are working hard to increase their social skills and overal contact. We like to do this trough our favourite game: Gotcha! Gotcha is an assasination game, every member of our association gets a description of another member. Trough activities you will have to find clues by engaging social contact and ask questions, make connections or even friends. Eleminate your target and get theirs as your new target, and so the game goes on.</p>
    </article>
  </div>
</section>
<main class="content">
  <div class="container">
    <article class="container--flex--between padding--bottom--fix">


     <div class="filter">
         <form method="post" action="index.php" >
          <select class="select" name="difficulty">
            <option value="Starter">Starter</option>
            <option value="Experienced members">Experienced</option>
            <option value="Extrovert">Extrovert</option>
            <option value="All members">All members</option>
          </select>
          <input type="submit" value="Filter" name="Filter">
         </form>
       </span>
     </div>


      <h2 class="agenda--title">
         Still lonely in 2020? <br> Here's our agenda.
      </h2>
    </article>
    <section class="container--flex container--border">

      <?php foreach($activities as $activity): ?>

      <div class="agenda--item">
        <div class="item--date">
        <h3> <?php echo $activity['date']; ?> </h3>
        </div>
        <div class="item--text">
          <h4> <?php echo $activity['activity']; ?> </h4>
          <p> <?php echo $activity['description']; ?> </p>
          <p><span class="diff--span"><?php echo $activity['difficulty']; ?> </span></p>
        </div>
      </div>

      <?php endforeach; ?>

    </section>
  </div>
</main>
<section class="annual">
  <div class="container">
      <div class="annual--content">
        <h1>Our Annual<br> Camping Trip</h1>
        <p>Our annual event is back! A fun camping trip with all members of our community. A weekend full of eating, drinking, activities and of course: Gotcha! Tickets are limited so make sure to get them now.</p>
      <a href="index.php" class="button button--white">Get Tickets</a>
      </div>
  </div>
</section>
<section class="content">
  <div class="container">
    <article class="container--flex--left">
      <div>
        <h2>About Gotcha</h2>
      </div>
      <div>
      <p class="about--text">Our annual event is back! A fun camping trip with all members of our community. A weekend full of eating, drinking, activities and of course: Gotcha! Tickets are limited so make sure to get them now.</p>
      <a href="https://nl.wikipedia.org/wiki/Gotcha_(spel)" class="about--link">Want some more info?</a>
      </div>
    </article>
  </div>
</section>
<section class="maps">
<div class="mapouter"><div class="gmap_canvas"><iframe width="1920" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Kortrijk%20Leiaarde%2028&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:1920px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1920px;}</style></div>
</section>


