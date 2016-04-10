<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
				background:#f1f1f1;
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
				margin-right:20px;

				font-size: -webkit-xxx-medium;
				 font-weight: 900;
			}
			.hh{
				
				background:#1C1C2E;
				padding:50px;
				margin-top: -620px;
				margin-left: -1280px;
				margin-right: -682px;
				
				border-radius:10px;
			}
			table, tr, td {
    border: 1px solid black;
	color:black;
}
th {
    border: 1px solid black;
	color: red;
	
	
}
			form{
				
				background:#f1f1f1 ;
				background-color: rgba(0 ,0 ,0 , 0.2);
				padding:6px;
				margin-left: -650px;
				margin-right: -340px;
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
	
				
		float:center;
				margin-top: 0px;
				margin-left: -1px;
				margin-right: 0px;
				 	
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

    <table>
  <tr>
    <th>Name  </th>
    <th>Email </th>
    <th>Contact number </th>
    <th>Designation  </th>
    <th>Organization </th>
    <th>Enter your message</th>
   </tr>
 
 
 
 
  @foreach($user as $key=>$blogs)
  <tr>
    <td>{{$blogs->name}} </td>
    <td>{{$blogs->email}} </td>
    <td>{{$blogs->mobile}} </td>
    <td>{{$blogs->designation}} </td>
    <td>{{$blogs->organization}} </td>
    <td>{{$blogs->message}} </td>
  </tr>  
@endforeach
</table>

			
           
    </body>
</html>