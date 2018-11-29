<!DOCTYPE html>
<html>
 <head>
   <title>Microservices Log-In</title>
   <meta charset='utf-8'/>
   <style type="text/css">
    body
    {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 20px;
        background-image: url('https://images.unsplash.com/photo-1540205082-e56e180508e6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7cc8260f6b8370c4e32ab6bfc1034254&w=1000&q=80');
        background-repeat: no-repeat;
        background-size: cover;
    }
    #masterbox, #masterform
    {
        position: absolute;
        width: auto;
        height: auto;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        padding: 20px;
        
    }
    #masterbox
    {
        width: 17%;
        height: 17.5%;
        border: 1px solid #dfdfdf;
        border-radius: 10px;
        background-color: white;
        opacity: 0.6;
    }
    td
    {
        text-align: left;
    }
    .textbox
    {
        border-radius: 5px;
        width: 98%;
        border: 2px solid lightblue;
    }
    button
    {
        width: 48%;
        height: 40px;
        border: none;
        background-color:green;
        color: white;
        border-radius: 6px;
    }
   </style>
 </head>
 <body>
     <?php
        $uName = $_GET["uName"];
     ?>
     <div id="dragDiv">
        <div id="masterbox"></div>
        <table>
                <tr>
                    <td><h1><?php echo $uName?></h1></td>
                </tr>
                <tr>
                    <td><button onClick="alert('Redirecting you to Hook.io...'); document.location.href='http://hook.io\';">Go To Hook.io</button></td>
                </tr>
            </table>
     </div>
 </body>
</html>