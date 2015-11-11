<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <!-- BEGIN LEVEL STYLESHEET-->

        <link href="<?php echo base_url().'assets/global/css/form_bs.css';?>" rel="stylesheet">

        <!-- FAVICON -->
        <link rel="icon" type="image/png" href="" sizes="32x32">

        <!-- FORM TYPE EXAMPLE -->
        <div class="col-md-6">
        	<form class="form-horizontal">
			  <fieldset>
			    <legend>FORM TEST</legend>
			    <div class="form-group">
			      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
			      <div class="col-lg-10">
			        <input class="form-control" id="inputEmail" placeholder="Email" type="text">
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
			      <div class="col-lg-10">
			        <input class="form-control" id="inputPassword" placeholder="Password" type="password">
			        <div class="checkbox">
			          <label>
			            <input type="checkbox"> Checkbox
			          </label>
			        </div>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="textArea" class="col-lg-2 control-label">Textarea</label>
			      <div class="col-lg-10">
			        <textarea class="form-control" rows="3" id="textArea"></textarea>
			        <span class="help-block">Help block line.</span>
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="col-lg-2 control-label">Radio Button</label>
			      <div class="col-lg-10">
			        <div class="radio">
			          <label>
			            <input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
			            Option
			          </label>
			        </div>
			        <div class="radio">
			          <label>
			            <input name="optionsRadios" id="optionsRadios2" value="option2" type="radio">
			            Option  lagi
			          </label>
			        </div>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="select" class="col-lg-2 control-label">Select</label>
			      <div class="col-lg-10">
			        <select class="form-control" id="select">
			          <option>1</option>
			          <option>2</option>
			          <option>3</option>
			          <option>4</option>
			          <option>5</option>
			        </select>
			        <br>
			        <select multiple="" class="form-control">
			          <option>1</option>
			          <option>2</option>
			          <option>3</option>
			          <option>4</option>
			          <option>5</option>
			        </select>
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-lg-10 col-lg-offset-2">
			        <button type="reset" class="btn btn-default">Gagal</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			        <button type="submit" class="btn btn-success">Submit</button>
			        <button type="submit" class="btn btn-warning">Submit</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
        </div>

        <!-- INPUT TYPE EXAMPLE -->
        <div class="col-md-6">
        <legend>Input Status</legend>
        	<div class="form-group">
        	  <label class="control-label" for="focusedInput">Fokus</label>
        	  <input class="form-control" id="focusedInput" value=".." type="text">
        	</div>

        	<div class="form-group">
        	  <label class="control-label" for="disabledInput">Disabled input</label>
        	  <input class="form-control" id="disabledInput" placeholder=".." disabled="" type="text">
        	</div>

        	<div class="form-group has-warning">
        	  <label class="control-label" for="inputWarning">Warning</label>
        	  <input class="form-control" id="inputWarning" type="text">
        	</div>

        	<div class="form-group has-error">
        	  <label class="control-label" for="inputError">Error</label>
        	  <input class="form-control" id="inputError" type="text">
        	</div>

        	<div class="form-group has-success">
        	  <label class="control-label" for="inputSuccess">Success</label>
        	  <input class="form-control" id="inputSuccess" type="text">
        	</div>

        	<div class="form-group">
        	  <label class="control-label" for="inputLarge">Input Large Bootstrap</label>
        	  <input class="form-control input-lg" id="inputLarge" type="text">
        	</div>

        	<div class="form-group">
        	  <label class="control-label" for="inputDefault">Defaut</label>
        	  <input class="form-control" id="inputDefault" type="text">
        	</div>

        	<div class="form-group">
        	  <label class="control-label" for="inputSmall">Input Small Bootstrap</label>
        	  <input class="form-control input-sm" id="inputSmall" type="text">
        	</div>

        	<div class="form-group">
        	  <label class="control-label">Button Side</label>
        	  <div class="input-group">
        	    <span class="input-group-addon">Button</span>
        	    <input class="form-control" type="text">
        	    <span class="input-group-btn">
        	      <button class="btn btn-default" type="button">Button</button>
        	    </span>
        	  </div>
        	</div>
        </div>

        <!-- BEGIN PAGE JAVASCRIPT-->
        <script src="<?php echo base_url().'assets/plugins/jquery-2.1.4.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/plugins/bootstrap/bootstrap.min.js';?>" type="text/javascript"></script>

        <!-- END OF JAVASCRIPT -->

    </body>
</html>
