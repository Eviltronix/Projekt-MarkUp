<?php include './tpl/head.tpl.php';?>
<body>
<div class="container frame col-sm-9 shadow p-3 mb-5 bg-white rounded">
<!-- ++++++++++++++++++++++++++++++ CONTENT ROW ANFANG +++++++++++++++++++++++++ -->   
<form action="<?= BASE_DIR ?>/product/preview"  method="post">
    <div id="allBtn" class="row">
<!-- ++++++++++++++++++++++++++++++ Menue Spalte +++++++++++++++++++++++++++++++ -->  
    <div class="col-sm-3">
       <div class="row line"><div class="col-sm"><h5>Produkt</h5></div></div>
        <?php if($tpl) { include $tpl;} else{ include "./tpl/productMenu.tpl.php"; } ?>
        <hr />
       <?php if($tpl) { include $tpl;} else{ include "./tpl/productIcon.tpl.php"; } ?>
        <hr />
   </div>
<!-- ++++++++++++++++++++++++++++++ Menue Spalte ENDE +++++++++++++++++++++++++++ -->  
<!-- ++++++++++++++++++++++++++++++ Content Spalte ++++++++++++++++++++++++++++++ -->     
    <div class="col-sm-3 ">
<!-- ++++++++++++++++++++++++++++++ tpl ProductView +++++++++++++++++++++++++++++ -->
        <?php if($tpl) { include $tpl;} else{ include "./tpl/productView.tpl.php"; } ?>
        <!-- +++++++++++++++++++++++++++ tpl farbwahl +++++++++++++++++++++++++++ -->
        <?php if($tpl) { include $tpl; } else{ include "./tpl/farbwahl.tpl.php"; } ?>
    </div>
<!-- ++++++++++++++++++++++++++++++ Edit Spalte +++++++++++++++++++++++++++++++++ -->
    <div class="col-sm-3">
        <div class="row line"><div class="col-sm"><h5>Bearbeiten</h5></div></div>
        <div  id="edit" class="row">
        <?php if($tpl) { include $tpl; } else{ include "./tpl/productEdit.tpl.php"; } ?>
        </div> 
    </div> 
</form>
<!-- ++++++++++++++++++++++++++++++ Ausgabe Array +++++++++++++++++++++++++++++++ -->
    <div class="col-sm-3 frame">
        <div class="row line"><div class="col-sm"><h5>Ausgabe</h5></div></div>
        <div class="col-sm">
        <?php if($tpl) { include $tpl; } else{ include "./tpl/productUpload.tpl.php"; } ?>
        </div> 
    </div> 
    </div> 
 </div>  <!-- Container -->
<!-- ++++++++++++++++++++++++++++ CONTENT ROW ENDE +++++++++++++++++++++++++++++++ -->
<!-- ++++++++++++++++++++++++++++ DB ANZEIGE +++++++++++++++++++++++++++++++++++++ -->
<div class="container frame col-sm-8 shadow p-3 mb-5 bg-white rounded">
<?php if($tpl) { include $tpl; } else{ include "./tpl/productDB.tpl.php"; } ?>  
</div>
<!-- ++++++++++++++++++++++++++++++ FOOTER ++++++++++++++++++++++++++++++++++++++++ -->    
</body>
</html>
