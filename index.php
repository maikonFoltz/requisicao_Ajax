<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .div {
            width: 200px;
            height: 170px;
            background-color: #EEE;
        }
    </style>
</head>

<body>
    <form action="" method="post" id="form">
        Nome: <br>
        <input type="text" name="n1" id="n1"> <br><br>
        Sobrenome: <br>
        <input type="text" name="n2" id="n2"> <br><br>
        <input type="submit" value="Acessar">
    </form>
    <div class="div">
    </div>
    
    <script src="jquery.min.js"></script>
    <script>
        $(function() {
            $('#form').bind('submit',function(e){
                e.preventDefault();

                var txt = $(this).serialize();
                
                $.ajax({
                    type:'POST',
                    url:'ajax.php',
                    data:txt,
                    dataType: 'json',
                    success:function(json){
                        console.log(json);
                    },
                    
                })
            })


            $('button').bind('click', function() {
              
                $('.div').load('teste.html');  
            })
        })
    </script>

</body>

</html>