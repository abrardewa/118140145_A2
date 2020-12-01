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
        		background: rgb(146, 145, 143);

        	}

        	.head{
        		position: relative;
        		border-radius: 20px;
        		margin: 85px auto ;
        		width: 500px;
        		padding: 30px;
        		height: 500px;
        		background: #00ff99;

        	}

        	.head h2{
        		opacity: 0.6 ;
        		text-align: center;

        	}


        	.form-control{
        		border:none;
        		border-bottom: 1px solid blueviolet ;
        		outline-color: white;
        	}

         .input-sm:focus{
         	transition: 0.7s;
         	border-bottom: 2.5px solid blueviolet;
         	box-shadow: 0 0 0 white;

         }
        	.btn{
        		border-radius: 10px;
        		background: white;
        		color: green;
        		font-size: 18px;
        		font-weight: bold;
        	}
        	.btn:hover{
        		box-shadow: 2px 2px 10px blue;
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
				<form method="POST" action="<?= base_url('index.php/auth/loginProcess');?>">
				<h2 class="text mb-5">LOGIN</h2>
				<div class="form-group">
				<input type="text" class="form-control input-sm" placeholder="Username" name="username">
			    </div>

			    <div class="form-group mt-4 mb-5">
				<input type="Password" class="form-control input-sm" placeholder="Password" name="password">
			    </div>

				  <div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				    Ingat Saya
				  </label>
				  </div>

				  <button type="submit" class="btn mt-3 form-control">Masuk</button>

				  <div class="foot">
				  	<a class="left" href="{{ route('password.request') }}" class=""><small>Lupa Password </small></a>
				  	<a class="right"href=""><small>Belum Punya Akun</small></a>
				  </div>
				  </form>
			</div>


		</div>
	</body>
</html>
