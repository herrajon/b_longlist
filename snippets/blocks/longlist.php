<?php

/*

---

b_longlist

D863

Dependencies
: TirCSS


---

*/

?>


	<?php
	/* 
	for ($x = 1; $x <= 117; $x++) {
	echo "<div>The number is: $x </div>";
	}
	*/

	// $kverie = $site->index()->filterBy('ranking', 'in', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0']);
	$kverie = $site->index()->listed();

	//$kverie = 
	//$site
	//->index()
	//->filterBy('tags', 'Flaggatimest', ',')
	//->filterBy('tags', 'Strategy', ',');


  // $entriesno = $kveries->count(); 
	?>

<div>
  <a href="/">Heim</a>
</div>

<h2>b_longlist</h2>


<div class="eherm-container longlist">
  <div class="content">

    <?php
    foreach ($kverie as $entriii):
    $opacnumber = $entriii->ranking();
    if($opacnumber == ""):
    $opacnumber = 1;
    endif;?>

      <div class="element">
      <a 
      href="<?=$entriii->url() ?>" 
      target="_self" 
      style="
      opacity: <?=$opacnumber ?>;
      opacity: 1; 
      padding-left: <?= $entriii->depth()?>rem ;
      "
      title="Level: <?=$entriii->depth() ?>"
      
      class="
      block
      text-decoration-none
      border-bottom-text-1 
      <?= $entriii->depth() == 1 ? 'font-weight-600' : '' ?> 
      <?= $entriii->depth() == 3 ? 'color-text-7' : '' ?> 
      white-space-nowrap 
      overflow-hidden
      text-overflow-ellipsis 
      font-size-5 


      <?php e($entriii->isActive(), ' current ') ?>


      ">

        <?=$entriii->title() ?><?= $entriii->hasChildren() ? '*' : '' ?>

      </a>
      </div>
      
    <?php endforeach; ?>
  </div>
</div>







