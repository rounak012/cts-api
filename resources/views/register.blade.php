<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
			.quote{
				font-size: 24px;
			}
			label{
				display: inline-block; 
    width: 250px;
    text-align: left;
	margin-left: -280px;
	font-weight: 900;
			}
			.hh{
				
				background:#1C1C2E;
				padding:20px;
				margin-top: -5px;
				margin-left: -800px;
				margin-right: -672px;
				font-size: -webkit-xxx-large;
				border-radius:10px;
			}
			form{
				
				 background:#f1f1f1 ;
				background-color: rgba(0 ,0 ,0 , 0.2);
				padding:6px;
				margin-left: -690px;
				margin-right: -673px;
				  background-size:cover;
				
				
			}
			.delete{
				
				
				background:#f1f1f1 ;
				background-color: rgba(0 ,0 ,0 , 0.2);
				padding:20px;
				margin-left: -650px;
				margin-right: 150px;
				  background-size:cover;
				
				
			}
			.show{
				
				
				background:#f1f1f1 ;
				background-color: rgba(0 ,0 ,0 , 0.2);
				padding:20px;
				margin-top: -133px;
				margin-left: -148px;
				margin-right: -340px;
				  background-size:cover;
				
				
			
			}
			.all{
               
				background:#f1f1f1 ;
				background-color: rgba(0 ,0 ,0 , 0.2);
				padding:20px;
				margin-top: -5px;
				margin-left: -650px;
				margin-right: -340px;
				  background-size:cover;
				border-radius:5px;
				
			}
			input[type="submit"]{
				background:#C72E00;
				border:0px;
				border-radius:5px;
				colour:#fff;
				padding:10px;
				color: white;
				margin:20px auto;
			}
			
			input[type="text"]{
				
				border-radius:5px;
				
			}
			div {

    background-repeat:no-repeat;
    background-size:cover;
}
.login{
float:right;	
				
				background:transparent;
				margin-top: -121px;
				margin-left: -1px;
				margin-right: -650px;
				 	
}
#wrapper:hover .logo{
    color:#DCDCDC;
    background-color:#0d2a4d;
    text-decoration:none;background-position:0 -15px;-webkit-transition:background-position 0.1s linear;-moz-transition:background-position 0.1s linear;
    -o-transition:background-position 0.1s linear;transition:background-position 0.1s linear;
}
.logo{
float:left;	
				display:block;
    width:65px;
    height:65px;
    line-height:50px;
    border: 2px solid #f5f5f5;
    border-radius: 50%;
    color:#f5f5f5;
    text-align:center;
	margin-top: -107px;
				margin-left: -620px;
				margin-right: -650px;
    text-decoration:none;
    background: #1C1C2E;
    box-shadow: 0 0 3px gray;
    font-size:20px;
    font-weight:bold;

				 	
}
.register{
float:right;	
				
				background:#1C1C2E;
				margin-top: 10px;
				margin-left: -30px;
				margin-right: -600px;
				padding:20px;
                border-radius:5px;	

			
}
.sub{	
				
				background:#C32A77;
				
				padding:20px;
                border-radius:5px;				 	
}
.img{	
				
				background:transparent;
				
				padding:20px;
                border-radius:5px;				 	
}
.label1{
	
				
				background:transparent;
				padding:0px;
				 margin-bottom: 0cm;
				margin-left: -300px;
				margin-right: -50px;
				  background-size:cover;
				border-radius:5px;
	
}
.logout{
	float:right;
	margin-top: -140px;
		margin-right: -550px;
}
.label2{				
				background:transparent;
				
				padding:0px;
				 margin-bottom: 0cm;
				margin-left: -0px;
				margin-right: -550px;
				  background-size:cover;
				border-radius:5px;
	
}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
			<h1 class="hh" ><font color="white">Register For Workshop</font> </h1>     
				<form action="{{route('logout')}}" class="logout" method ="post" enctype="multipart/form-data">
	
				<input type ="Submit" value ="Logout" name ="show">
				</form>
				
<form action="{{route('apiregister')}}" class="llogin" method ="post" enctype="multipart/form-data">
				<label ><font color="white">workshop :</font></label>
				<select name="sdname">
				
				@foreach($vvar as $key=>$vars)
				<option value ="{{$vars->subdiv_name}}" >{{$vars->subdiv_name}}</option>
				@endforeach
				</select><br><br>
				<label ><font color="white">Select Course :</font></label>
				<select name="cname">
				@foreach($vvvar as $key=>$vars)
				<option value ="{{$vars->cat_name}}" >{{$vars->cat_name}}</option>
				@endforeach
				</select>
				<br><br>
		 <label ><font color="white">Workshop Date :</font></label><input type="date" name="date"><br><br>
		 <label ><font color="white">Full Name :</font></label><input type="text" class="box" name="name"><br><br>
		 <label ><font color="white">Branch :</font></label><input type="text" name="branch"><br><br>
		 <label ><font color="white">Semester :</font></label>
		 <select name ="sem">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  
</select><br><br>
		 <label ><font color="white">College Name :</font></label><input type="text" name="college"><br><br>
		 <label ><font color="white">City Name :</font></label><input type="text" name="city"><br><br>
		 <label ><font color="white">Email :</font></label><input type="text" name="email"><br><br>
		 <label ><font color="white">Mobile Number :</font></label><input type="text" name="mobile"><br><br>
		 <label ><font color="white">State :</font></label><input type="text" name="state"><br><br>
		 <label ><font color="white">How you got to know about CTS IT Academy: :</font></label>
		 <select name="know">
  <option value="Search Engine">Search Engine</option>
  <option value="Reffered By Friend">Reffered By Friend</option>
  <option value="Workshop/Training">Workshop/Training</option>
  <option value="SMS/Mail">SMS/Mail</option>
  <option value="Facebook/Youtube">Facebook/Youtube</option>
  <option value="Blogs/Forum">Blogs/Forum</option>
  <option value="Posters/Ads">Posters/Ads</option>
  <option value="Newspaper">Newspaper</option>
  <option value="Other">Other</option>
 
</select>
				<input type ="submit" value ="Submit" name ="Submit">
				</form> 

					<form action="{{route('show')}}" class="llogin" method ="post" enctype="multipart/form-data">
	
				<input type ="Submit" value ="Show" name ="show">
				</form>	
					
            </div>
        </div>
    </body>
</html>