<div class="col-sm">  
    <div class="form-group">
    <h6>Text bearbeiten</h6>
    <textarea class="form-control" id="text" rows="3" name="text" placeholder="<?php echo (isset($product)) ? $product['text'] : 'Hier bitte den Text eingeben'; ?>" onblur="this.form.submit()"><?php echo (isset($product)) ? $product['text'] : 'Hier bitte den Text eingeben'; ?></textarea>
    </div>
    <div class="row">
    <div class="col form-group">
        <h6>Schriftart:</h6>
        <label><input class="form-control-input" type="radio" checked="checked" name="fFamily" value="Arial Black" onclick="this.form.submit()"
        <?php  echo (isset($_POST['fFamily']) && $_POST['fFamily'] == 'Arial Black') ? "checked": ''; ?>/>Arial Black</label><br />
        <label><input class="form-control-input" type="radio"  name="fFamily" value="Comic Sans MS" onclick="this.form.submit()"
        <?php  echo (isset($_POST['fFamily']) && $_POST['fFamily'] == 'Comic Sans MS') ? "checked": ''; ?>/>Comic Sans MS</label><br />
        <label><input class="form-control-input" type="radio"  name="fFamily" value="Impact" onclick="this.form.submit()"
        <?php  echo (isset($_POST['fFamily']) && $_POST['fFamily'] == 'Impact') ? "checked": ''; ?>/>Impact</label>
        
        
    </div>
    <div class="col form-group">
        <h6>Schriftgröße:</h6>
        <label><input class="form-control-input" type="radio" checked="checked" name="fSize" value="20" onclick="this.form.submit()"
        <?php  echo (isset($_POST['fSize']) && $_POST['fSize'] == '20') ? "checked": ''; ?>/>20 px</label><br />
        <label><input class="form-control-input" type="radio"  name="fSize" value="24" onclick="this.form.submit()"
        <?php  echo (isset($_POST['fSize']) && $_POST['fSize'] == '24') ? "checked": ''; ?>/>24 px</label><br />
        <label><input class="form-control-input" type="radio"  name="fSize" value="32" onclick="this.form.submit()"
        <?php  echo (isset($_POST['fSize']) && $_POST['fSize'] == '32') ? "checked": ''; ?>/>32 px</label>
    </div>
    </div>
 </div>


     

