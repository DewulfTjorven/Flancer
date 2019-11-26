<section class="filter">
  <h2 class="hidden">Filter</h2>
  <form action="index.php?page=home" method="get" class="filter-form">
    <label for="roomtype">
      <span>Selecteer een kamertype</span>
      <select name="roomtype" id="roomtype" class="filter-roomtype">
        <option value="all">-- Alle kamertypes --</option>

        <?php foreach($roomtypes as $roomtype): ?>

          <option value="<?php echo $roomtype['roomtype']; ?>"

          <?php
            if(!empty($_GET['roomtype'])){
              if($_GET['roomtype'] == $roomtype['roomtype']){
                echo ' selected';
              }
            }
          ?>
          
          ><?php echo $roomtype['roomtype']; ?></option>
        <?php endforeach; ?>

       <!-- toon hier alle mogelijke kamertypes -->
       </select>
    </label>
    <input type="submit" value="Filter" class="filter-button">
  </form>
</section>
<section class="accommodations-overview">
  <h2 class="hidden">Accommodations</h2>
  <ul class="accommodations">
  <!-- toon een lijst met alle accommodaties -->
  <!-- 
     <li class="accommodations__accommodation">
        <a href="index.php?xxx" class="accommodation__link">
          <p>titel</p>
          <p>buurt</p>
        </a>
      </li>
  -->
  <?php foreach($accommodations as $accommodation): ?>
      <li class="accommodations__accommodation">
        <a class="accommodation__link" href="index.php?page=detail&amp;id=<?php echo $accommodation['id']; ?>">
          <p><?php echo $accommodation['title']?></p>
          <p class="<?php if($accommodation['neighbourhood'] == "Centrum-Oost"){
                echo "centrum";
          }?>"><?php echo $accommodation['neighbourhood']?></p>
        </a>
      </li>
  <?php endforeach;?>

  </ul>
</section>
