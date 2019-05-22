<?php
    session_start();
    if(isset($_SESSION['user']['email'])){
        if(isset($_POST['code'])&&isset($_POST['lan'])){
            $code = $_POST['code'];
            $lan = $_POST['lan'];
            if(!empty($code)&&!empty($lan)){
                if($lan=='c'){
                    $myFile = fopen("code.c","w")   or die('unable to create file');
                    fwrite($myFile , $code);
                    shell_exec('gcc -o code code.c');
                    $output = shell_exec('code');
                    fclose($myFile);
                }else if($lan == 'c++'){
                    $myFile = fopen("code.cpp","w")   or die('unable to create file');
                    fwrite($myFile , $code);
                    shell_exec('g++ -o code code.cpp');
                    $output = shell_exec('code');
                    fclose($myFile);
                }else if($lan == 'java'){
                    $myFile = fopen("code.c","w")   or die('unable to create file');
                    fwrite($myFile , $code);
                    shell_exec('javac code.java');
                    $output = shell_exec('java A');
                    fclose($myFile);
                }
            }else{
                $output = '';
            }
        }else{

        }
    }else{
        header('Location: index.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">  
    <link rel="stylesheet" href="session.css">
    <title>Compiler</title>
</head>
<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="sessionhmtl.inc.php">onlineCompiler</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-tags"
                style="margin-right:10px;"></span>Recent codes</a></li>
                <li><a href="sign.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span>logout</a></li>
            </ul>
        </div>
        </nav> 
    <div id="page-wrapper">
        <div class="right-part">
                <form action="sessionhmtl.inc.php" method="POST"><h1 style="font-size:2em;">
                    <textarea name="code" cols="30" rows="10" method="POST" class="code-part"><?php echo 'Output :' . $output;?></textarea></h1>
            <div class="options">
                    <textarea name="input" cols="30" rows="10" method="POST"
                    ></textarea>
                    <button class="btn btn-primary form-control" method="POST" style="width:20%;">run</button>
                    <button class="btn btn-success form-control" style="width:20%;">open file</button>

                    <select name="lan" class="form-control" style="width:40%;">
                        <option value="c">c</option>
                        <option value="c++">c++</option>
                        <option value="java">java</option>
                    </select>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="text-center">
            <p>this page compiler is created by ©Akshay</p>
        </div>
    </footer>
</body>
</html>