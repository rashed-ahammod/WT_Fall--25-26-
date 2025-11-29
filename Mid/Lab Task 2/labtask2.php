
<!doctype html>
<html>
    <head>
        <title>Registration Form</title>
        <style>
            body{
                font-family:Arial,sans-serif;
                padding:30px;
                background-color:#bfe0da;
            }
            form{
                background-color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                width: 300px;
                margin: 0 auto;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            input{
                width:100%;
            }
            button{
                cursor:pointer;
            }
            #output{
                color:#0b032e;
                font size:16px;
                margin-top:20px;
                text-align:center;
            }
            #error{
                
                margin-top:10px;
                text-align:center;
                color:red;

            }
            

            

        </style>
    </head>
    <body>
        <form onsubmit="return handleSubmit()">
            <center><h2>Participant Registration<h2></center>
            Full Name:<br>
            <input type="text" id="name"><br>
            Email:<br>
            <input type="text" id="email"><br>
            Phone Number:<br>
            <input type="text" id="number"><br>
            Password:<br>
            <input type="text" id="password"><br>
            Confirm Password:<br>
            <input type="text" id="confirm"><br><br>
            <button type="submit">Register</button>
                <br><br>
                </form>
            <div id ="output"></div>
                
            <div id="error"></div>

        
        <script>
            function handleSubmit(){

            var name=document.getElementById("name").value.trim();
             var email=document.getElementById("email").value.trim();
              var number=document.getElementById("number").value.trim();
               var password=document.getElementById("password").value.trim();
                var confirm=document.getElementById("confirm").value.trim();
            var errorDiv=document.getElementById("error");
            var outputDiv=document.getElementById("output");
            errorDiv.innerHTML="";
            outputDiv.innerHTML="";

            if(name==""||email===""||number===""||password===""||confirm===""){
                errorDiv.innerHTML="Please fill in all";
                return false;
            }
            if(!email.includes("@")){
                errorDiv.innerHTML="Provide valid Email";
                return false;
            }
            if(isNaN(number)){
                errorDiv.innerHTML="Number Invalid";
                 return false;
            }
            if(password !==confirm){
                errorDiv.innerHTML="Password Not Match";
                 return false;
            }
            outputDiv.innerHTML=`
            <strong>Registration Successfull</strong><br><br>
            Name:${name}<br>
            Email:${email}<br>
            Phone:${number}
            `;
            return false;
        }



     

        </script>

    </body>
</html>