
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
  <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="Bootstrap/css/Style.css" rel="stylesheet">
   <script type="text/javascript" src="js/jquery.min.js"></script>
    <title>PERSONAL DETAILS</title>  
</head>  
<style>  

    .login-panel {  
        margin-top: 50px;  
  }
</style>
<body>  
  
<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->  
    <div class="row"><!-- row class is used for grid system in Bootstrap-->  
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">PERSONAL DETAILS</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="registration.php" id="registrationform" >  
                        <fieldset> 

                        <label>Name*
                            </label>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Name" name="name" type="text" autofocus>  
                            </div>  
                            <label>Phone Number*
                            </label> 
                            <div class="form-group">  
                                <input class="form-control" placeholder="Phone number" name="email" type="Phone number" autofocus>  
                            </div>
                            <label>Address*
                            </label>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Address"value="">  
                            </div> 
                         <div class="form-group">
                        <label for="sel1">State:</label>
                        <select class="form-control" id="State">
                        <option value="0">Select State</option>
                        <option value="1">Abia</option>
                        <option value="2">Adamawa</option>
                        <option value="3">Akwa Ibom</option>
                        <option value="4">Anambra</option>
                        <option value="5">Bauchi</option>
                        <option value="6">Bayelsa</option>
                        <option value="7">Benue</option>
                        <option value="8">Borno</option>
                        <option value="9">Cross River</option>
                        <option value="10">Delta</option>
                        <option value="11">Ebonyi</option>
                        <option value="12">Edo</option>
                        <option value="13">Ekiti</option>
                        <option value="14">Enugu</option>
                        <option value="15">Gombe</option>
                        <option value="16">Imo</option>
                        <option value="17">Jigawa</option>
                        <option value="18">Kaduna</option>
                        <option value="19">Kano</option>
                        <option value="20">Katsina</option>
                        <option value="21">Kebbi</option>
                        <option value="22">Kogi</option>
                        <option value="23">Kwara</option>
                        <option value="24">Lagos</option>
                        <option value="25">Nassarawa</option>
                        <option value="26">Niger</option>
                        <option value="27">Ogun</option>
                        <option value="28">Ondo</option>
                        <option value="29">Osun</option>
                        <option value="30">Oyo</option>
                        <option value="31">Plateau</option>
                        <option value="32">Rivers</option>
                        <option value="33">Sokoto</option>
                        <option value="34">Taraba</option>
                        <option value="35">Yobe</option>
                        <option value="36">Zamfara</option>
                         <option value="37">FCT</option>
                            </select>
                            </div>
                               <div>
                               <div class="form-group">
                               <label for="sel1">LGA:</label>
                               <select class="form-control" id="State">
                               </select>
                               </div>
                             

                            <div>
                                <label>DOB</label>
                                <div class="input-group date">
                                <input type="text" class="form-control" value="01-01-1900">
                                <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                                </div>
                               </div>
                               </div>

                             <div class="form-group">
                                <label>Gender</label>
                                <div class="radio">
                              <label class="radio-inline"><input type="radio" value="">Male</label>
                              <label class="radio-inline"><input type="radio" value="">Female</label>
                             </div>
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                           <span class="btn-file"><span class="fileupload-new">Upload your resume</span>      
                           <input type="file" />
                          <span class="fileupload-preview"></span>
                         <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                         </div>
                         <input class="btn btn-lg btn-success btn-block" type="submit" id="formsubmit">  
                        </fieldset>  
                    </form>    
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
</body>  
  
</html>  
  
