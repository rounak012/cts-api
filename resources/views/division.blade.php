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
				background:#f1f1f1 ;
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
				margin-right:20px;

				font-size: -webkit-xxx-medium;
				 font-weight: 900;
			}
			.hh{
				text-align: center;
				background:#1C1C2E;
				padding:40px;
				margin-top: -135px;
				margin-left: -670px;
				margin-right: -670px;
				font-size: -webkit-xxx-large;
				border-radius:10px;
			}
			form{
				
				background:#f1f1f1 ;
				background-color: rgba(0 ,0 ,0 , 0.2);
				padding:6px;
				margin-left: -650px;
				margin-right: -640px;
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
		margin-right: -600px;
}
.l1{
	float:left;
	margin-top: -1px;
	margin-right: -860px;
	margin-left: -215px;
}
.l2{
	margin-top: -20px;
	margin-right: -163px;
	margin-left: -115px;
	float:right;
}
.l3{
	margin-top: -115px;
	margin-right: -60px;
	margin-left: -134px;
	float:left;
}
.l4{
	margin-top: -134px;
	margin-left: -60px;
	margin-right: -87px;
	float:left;
	float:right;
}
.l5{
	margin-top: -153px;
	margin-right: -6px;
	margin-left: -60px;
	
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
			<h1 class="hh" ><font color="white">Admin Pannel</font> </h1> 
			
			<form action="{{route('logout')}}" class="logout" method ="post" enctype="multipart/form-data">
	
				<input type ="Submit" value ="Logout" name ="show">
				</form>
			
<form action="{{route('divisionadd')}}" class="llogin" method ="post" enctype="multipart/form-data">
				<label ><font color="white">Division Name :</font></label><input type="text" name="dname">
				
				<input type ="submit" value ="Submit" name ="Submit"><br>
				</form>
				
			
				
				
			
			
			
            <form action="{{route('subdivadd')}}" class="llogin" method ="post" enctype="multipart/form-data">
				<label ><font color="white">Division Name :</font></label>
				<select name="did">
				@foreach($var as $key=>$vars)
				<option value ="{{$vars->div_id}}" >{{$vars->div_name}}</option>
				@endforeach
				</select>
								<label ><font color="white">Sub Division Name :</font></label><input type="text" name="sdname">
								
				<input type ="submit" value ="Submit" name ="Submit"><br>
				</form>    
				
				
<form action="{{route('catadd')}}" class="llogin" method ="post" enctype="multipart/form-data">
				
				
				<label ><font color="white">Sub Division Name :</font></label>
				<select name="sdid">
				@foreach($vvar as $key=>$vars)
				<option value ="{{$vars->subdiv_id}}" >{{$vars->subdiv_name}}</option>
				@endforeach
				</select>
								<label ><font color="white">Category :</font></label><input type="text" name="cat">
				<input type ="submit" value ="Submit" name ="Submit"><br>
				</form> 
				<br>
				
				
				<form action="{{route('index1')}}" class="l1" method ="post" enctype="multipart/form-data">
				<input type ="Submit" value ="Register" name ="show">
				</form>
				<br>
				
				<form action="{{route('enquiry')}}" class="l2" method ="post" enctype="multipart/form-data">
				<input type ="Submit" value ="Enquiry" name ="show">
				</form>
				<br><br><br><br><br>
				
				<form action="{{route('partner')}}" class="l3" method ="post" enctype="multipart/form-data">
				<input type ="Submit" value ="Partner" name ="show">
				</form>
				<br>	
				
				<form action="{{route('campus')}}" class="l4" method ="post" enctype="multipart/form-data">
				<input type ="Submit" value ="Campus" name ="show">
				</form>
				<br>
				
				
                 <form action="{{route('rockstar')}}" class="l5" method ="post" enctype="multipart/form-data">
				<input type ="Submit" value ="RockStar" name ="show">
				</form>
				<br>
				
            </div>
        </div>
    </body>
</html>