<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
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
                <h1 style="border-bottom: 1px solid black">Grade Calculator</h1>
                <form method="POST" action="" id="gradeForm">
                    <div class="mb-3">
                        <input style="width: 400px" type="number" name="score1" class="form-control" id="exampleFormControlInput1" placeholder="Enter 1st test score" min=0 max=100
							required >
                    </div>

					<div class="mb-3">
                    
						<input style="width: 400px" type="number" name="score2" class="form-control" id="score2" placeholder="Enter 2nd test score" min=0 max=100
						required >
					</div>

					<div class="mb-3">
                    
						<input style="width: 400px" type="number" name="score3" class="form-control" id="score3" placeholder="Enter 3rd test score" min=0 max=100
						required >
					</div>

    
                    <button style="width: 400px" type="submit" class="btn btn-outline-primary" name="submit" id="submit">Submit</button>
                </form>

       
                <div  style="width: 400px" class=" output-class alert alert-info mt-3" role="alert">
						<?php
							$score1=0;
							$score2=0;
							$score3=0;
							if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
						

								if(isset($_POST['score1']) && isset($_POST['score2']) && isset($_POST['score3'])){
									$score1 = $_POST ['score1'];
									$score2 = $_POST ['score2'];
									$score3 = $_POST ['score3'];
									if($score1<50 || $score2<50 || $score3<50){
										echo "Grade: F (Failed in at least 1 test.)";
										exit;
									}

								}

								$avg = ($score1 + $score2 + $score3) / 3;
								$avg=number_format($avg, 2);
								$grade="F";

								if ($avg >= 90 && $avg <= 100) {
										$grade = "A";
								} elseif ($avg >= 80 && $avg < 90) {
										$grade = "B";
								}else if ($avg >= 70 && $avg < 80) {
										$grade = "C";
								}else if ($avg >= 60 && $avg < 70) {
										$grade = "D";
								}else if ($avg >= 50 && $avg < 60) {
										$grade = "E";
								}else{
									$grade = "F";
								}

								echo "Grade: {$grade} (Average: {$avg})";
	
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



