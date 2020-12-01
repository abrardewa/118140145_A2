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
        		height: 300px;
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
				<form method="POST" action="<?= base_url('index.php/auth/tambahData');?>">
				<h2 class="text mb-5">Tambah Data</h2>
				<div class="form-group">
				<input type="text" class="form-control input-sm" placeholder="Article" name="article">
				<input type="text" class="form-control input-sm" placeholder="Judul" name="judul">

                <input type="hidden" name="role" value="admin">
			    </div>

				  <button type="submit" class="btn mt-3 form-control">Register</button>

				 
				  </form>
			</div>

			
		</div>
	</body>
</html>
