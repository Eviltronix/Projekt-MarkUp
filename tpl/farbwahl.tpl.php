<div  id="farbwahl" class="row <?php  echo (isset($_POST['material']) && $_POST['material'] == 'leather') ? "hidden": ''; ?>">
    <div class="col-sm " style="padding: 2px;"><h6>Farbauswahl</h6>
        <div class="form-group-sm">
            
            <div class="btn-group-sm btn-group-toggle " data-toggle="buttons">
                <label class="btn btn-circle" style="background: maroon;">
                    <input class="form-control-input" type="radio" name="color" id="red" value="maroon" onclick="this.form.submit()"
                <?php  echo (isset($_POST['color']) && $_POST['color'] == 'maroon') ? "checked": ''; ?>> 
                </label>
                <label class="btn  btn-circle" style="background: #006600;">
                  <input class="form-control-input" type="radio" name="color" id="green" value="#006600" onclick="this.form.submit()"
                <?php  echo (isset($_POST['color']) && $_POST['color'] == '#006600') ? "checked": ''; ?>> 
                </label>
                <label class="btn btn-circle" style="background: #006699;">
                  <input class="form-control-input" type="radio" name="color" id="blue" value="#006699" onclick="this.form.submit()"
                <?php  echo (isset($_POST['color']) && $_POST['color'] == '#006699') ? "checked": ''; ?>> 
                </label>
                <label class="btn btn-circle" style="background: #ff9900;">
                  <input class="form-control-input" type="radio" name="color" id="orange" value="#ff9900" onclick="this.form.submit()"
                <?php  echo (isset($_POST['color']) && $_POST['color'] == '#ff9900') ? "checked": ''; ?>> 
                </label>
                <label class="btn btn-circle" style="background: #99003d;">
                  <input class="form-control-input" type="radio" name="color" id="magenta" value="#99003d" onclick="this.form.submit()"
                <?php  echo (isset($_POST['color']) && $_POST['color'] == '#99003d') ? "checked": ''; ?>> 
                </label>
                <label class="btn btn-circle" style="background: goldenrod;">
                  <input class="form-control-input" type="radio" name="color" id="goldenrod" value="goldenrod" onclick="this.form.submit()"
                <?php  echo (isset($_POST['color']) && $_POST['color'] == 'goldenrod') ? "checked": ''; ?>> 
                </label>
                <label class="btn btn-circle" style="background: silver;">
                  <input class="form-control-input" type="radio" name="color" id="silver" value="silver" onclick="this.form.submit()"
                <?php  echo (isset($_POST['color']) && $_POST['color'] == 'silver') ? "checked": ''; ?>> 
                </label>
                
              </div>  
            </div>  
    </div> 
</div> 
