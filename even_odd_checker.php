<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        @media only screen and (max-width: 720px){
            .container-class{
              
                width: 100% !important;
                margin-left:2px !important;
            }

            input, select , button, .output-class{
                width: 100% !important;
            }

        }

        body{
            background: #EEEEEE;
            display : flex;;
        }

        .container-class{
            background: #8ECDDD;
            
        }


    </style>



</head>
<body>
    <div class="w-50 mt-5 mx-auto container-class">
        <div class="text-center border border-1 rounded border-black p-3">
            <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; ">
                <h1 style="border-bottom: 1px solid black">Even or Odd Checker</h1>
                <form method="POST" action="" id="converterForm">
                    <div class="mb-3">
                    
                        <input style="width: 400px" type="number" name="num" class="form-control" id="num" placeholder="Enter Number"
							required>
                    </div>

                    <button style="width: 400px" type="submit" class="btn btn-outline-primary" name="submit" id="submit">Submit</button>
                </form>

       
                <div  style="width: 400px" class=" output-class alert alert-info mt-3" role="alert">
						<?php
							$number =0;
							if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
						
								// check if temperature is set
								if(isset($_POST['num'])){
									$number = $_POST['num'];
								}

								if($number % 2 == 0){
									echo "{$number} is an even number";
								}else{
									echo "{$number} is an odd number";
								}

							}
								
						?>
                    </div>
               
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

   

</body>
</html>



