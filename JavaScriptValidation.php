<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="myform" action="#" method="get" onsubmit="return validateform()">
            Name<input type="text" name="name"><br> 
            Password<input type="password" name="password"><br>
            Number: <input type="text" name="num" id="num"><span id="numloc"></span><br/>
            Email<input type="text" name="email"><br>
            Pincode<input type="text" name="pincode" id="pincode" size="30"><br>
            
             <select name="City">
                <option value="-1" selected>select..</option>
                <option value="Surat">Surat</option>
                <option value="Bardoli">Bardoli</option>
                <option value="Baroda">Baroda</option>
                <option value="Rajkot">Rajkot</option>
             </select><br>
             <input type="radio" name="Gender" value="male" size="10">Male
             <input type="radio" name="Gender" value="Female" size="10">Female<br>
             <input type="submit" name="show"  >
        </form>
        <script>
            function validateform(){  
                var name=document.myform.name.value;  
                  
               
                if (name==null || name==""){  
                  alert("Name can't be blank");  
                  return false;  
                }
                var password=document.myform.password.value;
                if (password==null || password==""){  
                   alert("Password can't be blank");  
                   return false;  
                }else if(password.length<6){  
                   alert("Password must be at least 6 characters long.");  
                   return false;  
                   } 
                 var email=document.myform.email.value;
                if (email==null || email==""){  
                        alert("email can't be blank");  
                        return false;  
                    }
                else
                    {
                      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                        if(!myform.email.value.match(mailformat))
                        {
                         alert("You have entered an invalid email address!");
                        return false;
                        document.myform.email.focus();
                        }
                    }
                
                  var num=document.myform.num.value;
                  if (num==null || num==""){  
                    alert("Number can't be blank");  
                    return false;  
                  } 
                  else
                  {
                      if (isNaN(num)){
                        document.getElementById("num").innerHTML="Enter Numeric value only";
                        return false;
                      }else{
                        return true;
                      }
                   }
                   if ((myform.Gender[0].checked == false) && (myform.Gender[1].checked == false))
                    {
                        alert("Choose Your Gender: Male or Female");
                        return false;
                    }
                    if (myform.City.value == "-1")
                      {
                          alert("Enter Your City!");
                          myform.City.focus();
                          return;
                      }
                     if (myform.pincode.value == "" ||
                        isNaN(myform.pincode.value) ||
                        myform.pincode.value.length != 6)
                    {
                        alert("Enter your pincode in format ######.");
                        myform.pincode.focus();
                        return;
                    }
             
        }
            
        
         </script>

</body>
</html>
