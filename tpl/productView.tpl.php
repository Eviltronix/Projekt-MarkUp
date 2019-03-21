<div class="row">
<div id="colorWin"class="<?php  echo (isset($_POST['material']) && $_POST['material'] == 'leather') ? "hidden": ''; ?>" style="background-color: <?php echo (isset($product)) ? $product['color'] : ''; ?>">
    </div><div class="picture col-sm " style="padding: 2px;">
        <div id="viewText" class ="<?php  echo (isset($_POST['shape']) && $_POST['shape'] == 'star') ? "viewStar": 'viewText'; ?>">
            <p style="font-size: <?php echo (isset($product)) ? ($product['fSize'].'px;') : '16px;'; ?>; font-family: <?php echo (isset($product)) ? ($product['fFamily'].';') : 'Verdana;'; ?>;"><?php echo (isset($product)) ? $product['text'] : 'Hier erscheint dein Text'; ?></p>
        </div>
        <div id="viewIcon" class ="<?php  echo (isset($_POST['shape']) && $_POST['shape'] == 'circle') ? "vT1": ''; ?>">
            <p><?php echo (isset($product)) ? ('<i class="'.$product['icon'].'"></i>') : '<i class="fas fa-question"></i>';  ?></p>
        </div>
    </div>
    <div id="schablone">
        <img src="/MarkUp/img/<?php echo (isset($product)) ? ($_POST['shape']) : 'circle'; ?>.png" alt="" />   
    </div>


</div>
<div id="<?php  echo (isset($_POST['material']) && $_POST['material'] == 'leather') ? "leather": 'metal'; ?>">
</div>