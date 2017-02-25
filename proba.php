<html>
<head>
  <title></title>
</head>
<body>
<form id="fileupload" class="form-horizontal" method="POST" action="phpscripts/test.php" enctype="multipart/form-data"> 

    <div class="control-group "> <!-- start of image -->
          <label class="control-label">Avatar</label>
      <div class="controls">
          <div class="input-prepend">
        <span class="add-on"><i class="icon-camera"></i></span>

          <!-- file upload-->
            <div class="fileupload fileupload-new" data-provides="fileupload">

              <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image"/></div>
            <div>
        <span class="btn btn-file"><span class="fileupload-new">Select image</span>
        <span class="fileupload-exists">Change</span> 
        <input type="hidden" name="MAX_FILE_SIZE" value="204800" />
        <input type="file" name="image" /></span>
          <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
          </div>
            </div>
          <!--end of file upload -->

        </div>
      </div>
    </div><!-- end of image -->

  <div class="control-group"> <!-- start of buttons -->
    <label class="control-label"></label>
        <div class="controls">
         <button type="submit" class="btn btn-primary" >Upload</button>

        </div>

  </div> <!-- end of buttons -->

</form> 
</body>
</html>