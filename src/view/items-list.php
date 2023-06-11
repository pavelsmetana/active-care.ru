<?php
echo renderHtml("menu");
?> <div class="grid-container"> <?php
foreach ($data as $item) {


    ?>
    <div class="product-tile">
        <a href="item/<?php echo ($item['id'])?>"><img src="upload/<?php echo($item['image']);?>" class="product-thumb">
            <div class="product-info">
                <h3> <?php echo($item['name']);?></h3>
                <p class="tile-desc"><?php echo($item['short_desc']);?></p>
            </div>
        </a>
    </div>
<?php }

    ?> </div>