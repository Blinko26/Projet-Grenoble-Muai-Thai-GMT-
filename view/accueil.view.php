<?php include '../view/header.view.php' ?>
<link rel="stylesheet" href="../framework/accueil.css">

<img src="../view/Images/backgroundAccueil.jpg" alt="Background">

</header>

<?php for ($i=1; $i < 3; $i++) { ?>
  <article class="article">
    <div class="">
      <div class="slideshow-container">

      <div class="mySlides<?= $i ?> fade">
        <img src="Images/ImageTest.jpg" alt = "ImageBoxThai" style="width:100%">
      </div>

      <div class="mySlides<?= $i ?> fade">
        <img src="Images/ImageTest2.jpg"  alt = "ImageBoxThai" style="width:100%">
      </div>

      <div class="mySlides<?= $i ?> fade">
        <img src="Images/ImageTest3.jpg"   alt = "ImageBoxThai" style="width:100%">
      </div>

      <a class="prev" onclick="plusSlides(-1,<?= $i-1 ?>)">&#10094;</a>
      <a class="next" onclick="plusSlides(1,<?= $i-1 ?>)">&#10095;</a>

      </div>
      <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1,<?= $i-1 ?>)"></span>
        <span class="dot" onclick="currentSlide(2,<?= $i-1 ?>)"></span>
        <span class="dot" onclick="currentSlide(3,<?= $i-1 ?>)"></span>
      </div>
    </div>
    <div class="description">
        <h3>Actualité <?= $i ?> :</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </article>
<?php } ?>

<script>
    var slideIndex = [
      <?php
            for ($i=1; $i < 3; $i++) {
            echo "1,";
            }
            echo "1";
    ?>];
    var slideId = [
    <?php
      for ($i=1; $i < 3; $i++) {
          echo "\"mySlides".$i."\",";
      }
      echo "\"mySlides".$i."\",";
    ?>]

    <?php
      for ($i=0; $i < 5; $i++) {
        ?>
        showSlides(1, <?=$i?>);
        <?php
      }

    ?>
    showSlides(1, 0);
    showSlides(1, 1);

    function plusSlides(n, no) {
      showSlides(slideIndex[no] += n, no);
    }

    function currentSlide(n,no) {
        showSlides(slideIndex[no] = n,no);
    }

    function showSlides(n, no) {
      var i;
      var x = document.getElementsByClassName(slideId[no]);
      if (n > x.length) {slideIndex[no] = 1}
      if (n < 1) {slideIndex[no] = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      x[slideIndex[no]-1].style.display = "block";
    }
</script>

<?php include '../view/footer.view.php' ?>
</body>
</html>
