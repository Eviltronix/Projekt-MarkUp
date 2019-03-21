<form action="<?= BASE_DIR ?>/product/save"  method="post" >  
    <table>
        <tr <?php echo (!isset($product)) ? 'style="display: hidden;"' : ''; ?>>
            <td>Material:</td><td><input type="text" name="material" value="<?php echo (isset($product)) ? $product['material'] : ''; ?>" readonly /></td></tr>
        
        <tr <?php echo (!isset($product)) ? 'style="display: hidden;"' : ''; ?>>
            <td>Form:</td><td><input type="text" name="shape" value="<?php echo (isset($product)) ? $product['shape'] : ''; ?>" readonly /></td></tr>
        
        <tr <?php echo (isset($product)) ? 'style="display: hidden;"' : ''; ?>>
            <td>Farbe:</td><td><input type="text" name="color" value="<?php echo (isset($product)) ? $product['color'] : 'rgba(0,0,0,0)'; ?>" readonly /></td></tr>
        
        <tr <?php echo (!isset($product)) ? 'style="display: hidden;"' : ''; ?>>
            <td>Text:</td><td><input type="text" name="text" value="<?php echo (isset($product)) ? $product['text'] : ''; ?>" readonly /></td></tr>
        
        <tr <?php echo (!isset($product)) ? 'style="display: hidden;"' : ''; ?>>
            <td>Icon:</td><td><input type="text" name="icon" value="<?php echo (isset($product)) ? $product['icon'] : ''; ?>" readonly /></td></tr>
        
        <tr <?php echo (!isset($product)) ? 'style="display: hidden;"' : ''; ?>>
            <td>Schriftart:</td><td><input type="text" name="fFamily" value="<?php echo (isset($product)) ? $product['fFamily'] : ''; ?>" readonly /></td></tr>
        
        <tr <?php echo (!isset($product)) ? 'style="display: hidden;"' : ''; ?>>
            <td>Schriftgröße:</td><td><input type="text" name="fSize" value="<?php echo (isset($product)) ? $product['fSize'] : ''; ?>" readonly /></td></tr>
    </table>
    
   
    <button type="submit" class="col-sm-12 btn btn-primary">Hochladen</button>
</form>