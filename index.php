<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
        html body{
            position:relative;
            margin: 0;
            padding: 0;
        }
        form{
            position: absolute;
            top: 50px;
            padding-top: 20px; 
            padding-left: 20px;
            height :40vh;
            width:30vw;
            background-color: beige;
            left:30%;
        }
        
        form>button{
            height:20px;
            width: 80px
        }
    </style>
        
    <body>
        <form action="" method="POST">

            <label> Employee id: </label>       
            <input type="text" name="id"/> 
            <br> 
            <br>
            <label> Name: </label>   
            <input type="text" name="name" /> 
            <br> 
            <br>
            <label> Designation: </label>       
            <input type="text" name="desig"/> 
            <br>
            <br>
            <label> Experience : </label>       
            <input type="text" name="expr"/>
            <br> 
            <br>

            <label> 
                Qualification :
            </label> 
            <select name="Qname">
                <option>Select qualification</option>
                <?php
                foreach ($options as $option) {
                    ?>
                    <option><?php echo $option['Qname']; ?> </option>
                    <?php
                }
                ?>
            </select>
            <br>
            <br>
            <label> 
                Salary :
            </label>
            <input type="text" name="country code"  value="+91" size="2"/> 
            <input type="text" name="phone" size="10"/>
            <br>
            <br>
            <button type="submit" value="SUBMIT" > SUBMIT </button>
                
        </form>
        <?php
            include './code.php';
            include './fetch.php';
        ?>
        
    </body>
</html>
