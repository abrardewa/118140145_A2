<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <style type="text/css">

        	body{
        		margin: 0;
        		padding: 0;
        	}

        	.text{
        		font-weight: bold;
        		font-size: 30px;
        		font-family: sans-serif;

        	}
        	.Main{
        		width: 100%;
        		height: 100%;
        		position: fixed;
        		background: rgb(246, 245, 243);

        	}

        	.head{
        		position: relative;
        		border-radius: 20px;
        		margin: 85px auto ;
        		width: 500px;
        		padding: 30px;
        		height: 500px;
        		background: white;
        		
        	}

        	.head h2{
        		opacity: 0.6 ;
        		text-align: center;

        	}

        	
        	.form-control{
        		border:none;
        		border-bottom: 1px solid #bbb9ba ;
        		outline-color: white;
        	}

         .input-sm:focus{
         	transition: 0.7s;
         	border-bottom: 2.5px solid #00ff99;
         	box-shadow: 0 0 0 white;

         }
        	.btn{
        		border-radius: 10px;
        		background: #00ff99;
        		color: white;
        		font-size: 18px;
        		font-weight: bold;
        	}
        	.btn:hover{
        		box-shadow: 2px 2px 10px grey;
        	}

        	.head a{
        		text-align: center;
        	}
        	.foot{
        		margin-top: 20px;
        		
        	}

        	.foot a{
        		color: black;
        		opacity: 0.8;
        	}
        	.left{
        		float: left;
        	}
           .right{
           	float: right;
           }

           @media screen and (max-width: 600px){

           	.Main{
           		background: white;
           	}
           }

        </style>
	</head>
	<body>
		<div class="Main">
			<div class="head">
				<form method="POST" action="<?= base_url('index.php/auth/registration');?>">
				<h2 class="text mb-5">Register</h2>
				<div class="form-group">
				<input type="text" class="form-control input-sm" placeholder="Username" name="username">
			    </div>

			    <div class="form-group mt-4 mb-3">
				<input type="Password" class="form-control input-sm" placeholder="Password" name="pwd">
			    </div>

                 <div class="form-group mb-5">
                    <select name="role" class="form-control input-sm">
                        <option value="admin" selected>Admin</option>
                        <option value="user1" >User 1</option>
                        <option value="user2">User 2</option>
                    </select>
                </div>

				  <div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				    
				  </label>
				  </div>

				  <button type="submit" class="btn mt-3 form-control">Register</button>

				  <div class="foot">
				  	<a class="left" href="{{ route('password.request') }}" class=""><small>Forgot your password? Click to reset </small></a>
				  	<a class="right"href=""><small>Don't have an account</small></a>
				  </div>
				  </form>
			</div>

			
		</div>
	</body>
</html>
