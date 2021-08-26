
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        #container{
            width: 900px;
            position: relative;
            top:0;
            left: 300px;
            background-color: #810c0c;
            height: 600px;
        }
        .header{
            color: white;
            position: relative;
            left: 350px;
        }
        .slots{
            width: 800px;
            position: relative;
            left: 53px;
            height: 200px;
            margin-top: 50px;
            background: #1b4b72;
            display: flex;
            justify-content: space-between;
        }
        .slot1{
            width: 280px;
            background: red;
        }
        .slot2{
            width: 280px;
            background: green;
        }
        .slot3{
            width: 280px;
            background: blue;
        }
        .slots span{
            display: flex;
            justify-content: center;
            align-content: center;
            font-size: 120px;
        }
        #button{
            background: #810c0c;
            position: relative;
            left:42%;
            width: 150px;
            height:50px;
            margin-top: 30px;
        }
        #p1 {
            font-size: 20px;
            color: white;

        }
        #feedback{
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-content: center;
            width: 100%;
            height: 50px;
            background: #2fa360;
        }



    </style>
</head>
<body>

<div id="container">
    <img src="" alt="">
    <div class="game">
    <div class="header">
        <h1>SLOT GAME</h1>
        <h2 id="curr"></h2>
        <div id="dashboard">

        </div>
        <div id="result"></div>

    </div>
    <div class="slots">
        <div class="slot1"><img src="" alt=""><span id="result1"></span></div>
        <div class="slot2"><img src="" alt=""><span id="result2"></span></div>
        <div class="slot3"><img src="" alt=""><span id="result3"></span></div>
    </div>
        <div id="feedback">
        <p id="p1"></p>
        </div>
        <button id="button"></button>
    </div>
</div>

</body>
<script>
    let currentcredit = 200;
    let bid = 5;

    let result1 = Math.floor(Math.random() * 10);
    let result2 = Math.floor(Math.random() * 10);
    let result3= Math.floor(Math.random() * 10);
    let bigWin = currentcredit + 200;
    let win = currentcredit +100;
    let smallWin = currentcredit + 20;
    let lost = currentcredit - bid;

    const dashboard = document.getElementById('dashboard');

    document.getElementById('button').addEventListener("click",function play(){
        document.getElementById("result1").innerHTML = result1.toString();
        document.getElementById("result2").innerHTML = result2.toString();
        document.getElementById("result3").innerHTML = result3.toString();

            if (result1 === result2&&result1===result3){
                document.getElementById("p1").innerHTML = "You won the big prize : 200. Your current balance is: "+ bigWin;
                document.getElementById("curr").innerHTML = "Current Balance: " +bigWin.toString();
            }else if(result1===result2 || result1 === result3){
            document.getElementById("p1").innerHTML = "You won the small prize: 20. Your current balance is: "+ smallWin;
                document.getElementById("curr").innerHTML = "Current Balance: " +smallWin.toString();
            }else{
            document.getElementById("p1").innerHTML = "Try again. Your current balance is "+ lost;
                document.getElementById("curr").innerHTML = "Current Balance: " +lost.toString();
            }



    });


</script>

</html>

