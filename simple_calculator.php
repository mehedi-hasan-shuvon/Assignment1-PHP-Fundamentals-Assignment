<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
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
                <h1 style="border-bottom: 1px solid black">Simple Calculator</h1>
                <form method="POST" action="" id="converterForm">
					<div class="mb-3">
						
						<input style="width: 400px" type="number" name="num1" class="form-control" id="num1" placeholder="Enter 1st Number"
							required>
					</div>

					<div class="mb-3">
					
						<input style="width: 400px" type="number" name="num2" class="form-control" id="num2" placeholder="Enter 2nd Number"
							required>
					</div>

                    <select class="form-select form-select-md mb-3" aria-label="Large select example" required name="operation" id="operation">
						<option value="+">+</option>
						<option value="-">-</option>
						<option value="*">*</option>
						<option value="/">/</option>
						<option value="%">%</option>
						<option value="**">**</option>
						<option value="sqrt">sqrt</option>
						<option value="binary">binary conversion</option>
						<option value="octal">octal conversion</option>
						<option value="hexadecimal">hexadecimal conversion</option>
                    </select>
                    <button style="width: 400px" type="submit" class="btn btn-outline-primary" name="submit" id="submit">Submit</button>
                </form>

       
                <div  style="width: 400px" class=" output-class alert alert-info mt-3" role="alert">
						<?php
							$num1 =0;
							$num2 =0;
							$operation='';
							if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
						
								if(isset($_POST['num1'])){
									$num1 = $_POST['num1'];
								}

								if(isset($_POST['num2'])){
									$num2 = $_POST['num2'];
								}

								if(isset($_POST['operation'])){
									$operation = $_POST['operation'];
								}

								if ($operation == '/' && $num2 == 0) {
									$result = "Division by zero is not allowed.";
									echo $result;
									exit;
								}

								switch ($operation) {
									case '+':
										$result = $num1 + $num2;
										break;
									case '-':
										$result = $num1 - $num2;
										break;
									case '*':
										$result = $num1 * $num2;
										break;
									case '/':
										$result = $num1 / $num2;
										break;
									case '%':
										$result = $num1 % $num2;
										break;
									case '**':
										$result = $num1 ** $num2;
										break;
									case 'sqrt':
										$result = sqrt($num1);
										break;
									case 'binary':
										$result = decbin($num1);
										break;
									case 'octal':
										$result = decoct($num1);
										break;
									case 'hexadecimal':
										$result = dechex($num1);
										break;
									default:
										$result = "Invalid operation.";
								}

								if(is_float($result)){
									$result = number_format($result, 2);
								}

								echo "Result is: {$result}";
								
							}
								
						?>
                    </div>
               
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

   

	<script>
		const operationSelect = document.getElementById('operation');
    	const num2Input = document.getElementById('num2');

		operationSelect.addEventListener('change', function () {

			const selectedOperation = operationSelect.value;

			if (selectedOperation === 'binary' || selectedOperation === 'octal' || selectedOperation === 'hexadecimal' || selectedOperation === 'sqrt') {
				num2Input.disabled = true;
				num2Input.value = 0; 
			} else {
				num2Input.disabled = false;
			}
					
		});
	</script>

</body>
</html>



