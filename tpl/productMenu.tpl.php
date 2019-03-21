<div class="col-sm"> 
    <div class="row">
        <div id="material" class="col form-group">
        <!--    <div class="form-control"> -->
            <h6>Material</h6>
            <label><input class="form-control-input" type="radio" checked="checked" name="material" value="metal" onclick="this.form.submit()"
                <?php  echo (isset($_POST['material']) && $_POST['material'] == 'metal') ? "checked": ''; ?>/>Metall</label><br />
            <label><input class="form-control-input" type="radio"  name="material" value="leather" onclick="this.form.submit()"                          
            <?php  echo (isset($_POST['material']) && $_POST['material'] == 'leather') ? "checked": ''; ?>/>Leder</label>        
        </div>
        <hr />  
        <div class="col form-group">
        <h6>Form</h6>
        <!--            <div class="form-group-sm">-->
        <label><input id="circle" class="form-control-input" type="radio" checked="checked" name="shape" value="circle" onclick="this.form.submit()"
            <?php  echo (isset($_POST['shape']) && $_POST['shape'] == 'circle') ? "checked": ''; ?>/>Kreis</label><br />
            <label><input id="star" class="form-control-input" type="radio"  name="shape" value="star" onclick="this.form.submit()"
            <?php  echo (isset($_POST['shape']) && $_POST['shape'] == 'star') ? "checked": ''; ?>/>Stern</label><br />
            <label><input id="heart" class="form-control-input" type="radio"  name="shape" value="heart" onclick="this.form.submit()"
            <?php  echo (isset($_POST['shape']) && $_POST['shape'] == 'heart') ? "checked": ''; ?>/>Herz</label>
        </div> 
    </div>
</div>
           
        

        




 
 

 