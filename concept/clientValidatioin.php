<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" name="form" onsubmit="return validate()">
    Name<input type="text" name="name"><br> 
    <input type="submit" name="show"  >
    </form>
    <script>
        
        function validate(){
            var name = document.form.name.value;
            if(name==null || name==""){
                window.alert("  cant be blank");
            }
        }
    </script>
</body>
</html>
