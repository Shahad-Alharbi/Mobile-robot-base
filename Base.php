<!DOCTYPE html>
<html>
    <head>
        <title>Base</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style> 

            #text {
                font-size: 20px;
                font-style: oblique;  
                color: #d2d3d3;
                position: absolute;                
                bottom: 460px;
                right: 550px;
            }

            .RightButton {
                padding: 3px 16px;
                font-size: 15px;
                text-align: center;
                cursor: pointer;
                outline: none;
                color: rgb(28, 64, 78);
                background-color: #d2d3d3;;
                border: none;
                border-radius: 15px;
                box-shadow: 0 2px rgb(114, 114, 114);
                position: absolute;
                bottom: 360px;
                right: 690px;
            }

            .RightButton:hover {background-color: #cad2e257}

            .RightButton:active {
                background-color: #d2d3d36e;;
                box-shadow: 0 2px #666;
                transform: translateY(2px);
            }

            .LeftButton {
                padding: 3px 16px;
                font-size: 15px;
                text-align: center;
                cursor: pointer;
                outline: none;
                color: rgb(28, 64, 78);
                background-color: #d2d3d3;;
                border: none;
                border-radius: 15px;
                box-shadow: 0 2px rgb(114, 114, 114);
                position: absolute;
                bottom: 360px;
                right: 920px;
            }

            .LeftButton:hover {background-color: #cad2e257}

            .LeftButton:active {
                background-color: #d2d3d36e;;
                box-shadow: 0 2px #666;
                transform: translateY(2px);
            }

            .StopButton {
                padding: 3px 16px;
                font-size: 15px;
                text-align: center;
                cursor: pointer;
                outline: none;
                color: rgb(28, 64, 78);
                background-color: #d2d3d3;;
                border: none;
                border-radius: 15px;
                box-shadow: 0 2px rgb(114, 114, 114);
                position: absolute;
                bottom: 360px;
                right: 805px;
            }

            .StopButton:hover {background-color: #cad2e257}

            .StopButton:active {
                background-color: #d2d3d36e;;
                box-shadow: 0 2px #666;
                transform: translateY(2px);
            }

            .ForwardButton {
                padding: 3px 16px;
                font-size: 15px;
                text-align: center;
                cursor: pointer;
                outline: none;
                color: rgb(28, 64, 78);
                background-color: #d2d3d3;;
                border: none;
                border-radius: 15px;
                box-shadow: 0 2px rgb(114, 114, 114);
                position: absolute;
                bottom: 408px;
                right: 804px;
            }

            .ForwardButton:hover {background-color: #cad2e257}

            .ForwardButton:active {
                background-color: #d2d3d36e;;
                box-shadow: 0 2px #666;
                transform: translateY(2px);
            }


            .BackwardButton {
                padding: 3px 16px;
                font-size: 15px;
                text-align: center;
                cursor: pointer;
                outline: none;
                color: rgb(28, 64, 78);
                background-color: #d2d3d3;
                border: none;
                border-radius: 15px;
                box-shadow: 0 2px rgb(114, 114, 114);
                position: absolute;
                bottom: 320px;
                right: 800px;
            }

            .BackwardButton:hover {background-color: #cad2e257}

            .BackwardButton:active {
                background-color: #d2d3d36e;
                box-shadow: 0 2px #666;
                transform: translateY(2px);
            }

            .HomeButton {
                background-color: #d2d3d3;
                border: none;
                color: rgb(28, 64, 78);
                padding: 1px 5px;
                font-size: 16px;
                cursor: pointer;
                position: absolute;
                bottom: 540px;
                right: 1030px;
            }

            /* Darker background on mouse-over */
            .HomeButton:hover {
                background-color: #cad2e257;
            }
        </style>
    </head>


    <body>
        <form action="Base.php" method="post">    
            <div id="text"><h1><b>Mobile Robot Base Control Panel</b></h1></div>
            <div><button class="RightButton" name="Right"><b><sup>&nbsp;&nbsp;Right&nbsp;&nbsp;</sup></b><img src= "Right.png"></button></div>
            <div><button class="LeftButton" name="Left"><img src= "Left.png"><b><sup>&nbsp;&nbsp;Left&nbsp;&nbsp;</sup></b></button></div>
            <div><button class="StopButton" name="Stop"><b><sup>&nbsp;&nbsp;&nbsp;Stop&nbsp;&nbsp;</sup></b><img src= "stop.png"></button></div>
            <div><button class="ForwardButton" name="Forward"><b><sup>&nbsp;Forward </sup></b><img src= "Forward.png"></button></div> 
            <div><button class="BackwardButton" name="Backward"><b><sup>Backward </sup></b><img src= "Backward.png"></button></div> 

        </form>                         

        <form action="Menu_Robot.php" method="post">    
            <button class="HomeButton"><i class="fa fa-home"></i> Home</button>
        </form>   




        <style>
            body {
                background-image: url('Background.jpg');
                background-repeat: no-repeat;
                background-size: 100% 100%;
                Background-attachment: fixed;
                color: rgb(255,255,255);
            }

        </style>

        <?php
        // put your code here        
        //Server name, Username, Password, Database name
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $connection = new mysqli("localhost", "root", "fcit", "control");
        if (isset($_POST["Right"])) {
            $stmt = $connection->prepare("INSERT INTO `base`(`Right`, `Left`, `Forward`, `Backward`, `Stop`) VALUES ('Right','','','','');");
            $stmt->execute();
        }


        if (isset($_POST["Left"])) {
            $stmt = $connection->prepare("INSERT INTO `base`(`Right`, `Left`, `Forward`, `Backward`, `Stop`) VALUES ('','Left','','','');");
            $stmt->execute();
        }

        if (isset($_POST["Forward"])) {
            $stmt = $connection->prepare("INSERT INTO `base`(`Right`, `Left`, `Forward`, `Backward`, `Stop`) VALUES ('','','Forward','','');");
            $stmt->execute();
        }

        if (isset($_POST["Backward"])) {
            $stmt = $connection->prepare("INSERT INTO `base`(`Right`, `Left`, `Forward`, `Backward`, `Stop`) VALUES ('','','','Backward','');");
            $stmt->execute();
        }

        if (isset($_POST["Stop"])) {
            $stmt = $connection->prepare("INSERT INTO `base`(`Right`, `Left`, `Forward`, `Backward`, `Stop`) VALUES ('','','','','Stop');");
            $stmt->execute();
        }
        ?>   
    </body>
</html>
