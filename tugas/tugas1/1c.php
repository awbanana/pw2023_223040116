<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1c</title>
    <style type="text/css">
        .container {
            display: flex;
        }

        .box {
            width: 80px;
            height: 80px;
            border: 1px solid black;
            position: relative;
            background-color: #FFAACF;
        }

        .text-box {
           position: absolute;
           font-size: 20px;
           top: 50%;
           left: 50%;
           transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="text-box">1</div>
        </div>
    </div>
    

    <div class="container">
        <div class="box">
            <div class="text-box">2</div>
        </div>
        <div class="box">
            <div class="text-box">2</div>
        </div>
    </div>
    
    <div class="container">
        <div class="box">
            <div class="text-box">3</div>
        </div>
        <div class="box">
            <div class="text-box">3</div>
        </div>
        <div class="box">
            <div class="text-box">3</div>
        </div>
    </div>
</body>
</html>