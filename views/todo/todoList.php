<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo List</title>
    <link rel="stylesheet" type="text/css" href="assets/css/todos.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <style>
        body{
            font-family: 'Roboto', sans-serif;
            background: #59C173;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #5D26C1, #a17fe0, #59C173);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #5D26C1, #a17fe0, #59C173); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        h1{
            background: #2980b9;
            color: #ffffff;
            margin: 0;
            padding: 10px 20px;
            font-size: 24px;
            font-weight: normal;
        }

        input{
            font-size: 18px;
            background-color: #f7f7f7;
            width: 100%;
            padding: 13px 13px 13px 20px;
            box-sizing: border-box;
            color: #2980b9;
            border-width:0px;
            border:none;
        }


        ul{
            list-style: none;
            margin: 0;
            padding: 0;
        }

        li{
            background: #ffffff;
            height: 40px;
            line-height: 40px;
            color: #666;
        }

        span{
            background-color: #e74c3c;
            height: 40px;
            margin-right: 20px;
            text-align: center;
            color: white;
            width: 0;
            display: inline-block;
            transition: 0.2s linear;
            opacity: 0;
        }



        input:focus{
            background: #fff;
            border: 3px solid #2980b9;
            outline: none;
        }


        .completed{
            color: rgb(128, 128, 128);
            text-decoration: line-through;
        }
        .fa-plus{
            float: right;
        }

        li:hover span{
            width: 40px;
            opacity: 1.0
        }

        li:nth-child(2n){
            background: #f7f7f7;
        }

        #container{
            width:360px;
            margin: 100px auto;
            box-shadow: 0 0 3px rgba(0,0,0, 0.1);
            background: #f7f7f7;
        }
    </style>
</head>
<body>

<div id="container">
    <h1>TO-DO LIST <i class="fas fa-plus"></i></h1>
    <input type="text" name="todos" placeholder="Add new Todo" maxlength="20">
    <ul>
        <?php foreach ($tasks as $task): ?>
        <li><span><i class="fas fa-trash-alt"></i></span><?= $task?></li>
        <?php endforeach ?>
    </ul>
</div>

<script type="text/javascript" src="assets/js/lib/jquery-3.5.1.min.js"></script>

</body>
</html>