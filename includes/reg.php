<?php ?>


<link rel ="stylesheet" href= "event-management-master\css\css\login.css?version=1">
</head>
<style>
    .hero{
    height: 100%;
    width: 100%;
    background-color: whitesmoke; 
    background-image: linear-gradient(to bottom right, white, lightgreen); 
    background-position: center;
    background: size 100%;
    position: absolute;
}

h1 {
    
    position: absolute;
    top: 10%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    text-align: center;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color:white;
    font-size: 60px;
}

.redpara {
    color:whitesmoke;
}

.form-box{
    top:20%;
    width: 380px;
    height: 480px;
    position: relative;
    margin: 6% auto;
    background:#fff;
    padding: 5px;
    overflow: hidden;
    font-family: 'Times New Roman', Times, serif;
}

.button-box {
    width: 220px;
    margin: 35px auto;
    position: relative;
    box-shadow: 0 0 5px 2px #03a9f4;  
    border-radius: 30px;
}

.toggle-btn {
    padding: 10px 30px;
    cursor: pointer;
    background:transparent;
    border:0;
    outline: none;
    position: relative;
}

#btn {
    top: 0;
    left: 0;
    position: absolute;
    width: 110px;
    height: 100%;
    background: #03a9f4;
    border-radius: 30px;
    transition: 0.5s;
}


.input-group {
    top: 180px;
    position: absolute;
    width: 280px;
    transition: 0.5s;
}

.input-field {
    width: 100%;
    padding: 10px 0;
    margin: 5px 0;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 1px solid #999;
    outline:none;
    background: transparent;
}

.submit-btn {
    width: 85%;
    padding: 10px 20px;
    cursor: pointer;
    display: block;
    margin: 20px auto;
    background: #03a9f4;
    border: 0;
    outline: none;
    border-radius: 30px;
}

#login {
    left: 50px;
}

#register {
    left: 450px;
}

    .img {
        position: absolute;
    }
</style>
<body>    
        <div class = "hero">
                <h1>Login</h1>
        <div class = "form-box"> 
               <div class = "button-box"> 
                        <div id = "btn"></div>
                        <button type="button" class="toggle-btn" onclick="log()">Login</button>
                       <button type="button" class="toggle-btn" onclick="reg()">Register</button> 
                </div>
                    <form id="login" class="input-group" action="auth" method="POST">
                        <input value = "" type="text" name = "username" class = "input-field" placeholder= "Username" >
                        <input value = "" type="password" name = "password" class = "input-field" placeholder= "Password" >
                        <button type="submit" class = "submit-btn">Login</button>
                          
                            <p class="text-center text-danger"></p>
                        
                    </form>
                        <p class="text-center text-danger"></p>
                    <form id="register" class="input-group" action="reg" method="POST">
                        <input type="text" name = "username" class = "input-field" placeholder= "Username" required>
                        <input type="password" name = "password" class = "input-field" placeholder= "Password" required>
                        <input type="text" name = "name" class = "input-field" placeholder= "Name" required>
                        <input type="text" name = "dept" class = "input-field" placeholder= "Department" required>
                        <button type="submit" class = "submit-btn">Sign Up</button>
                    
                          
                            <style>
                                #login {
                                    left:-400px;
                                }

                                #register {
                                    left: 50px;
                                }

                                #btn {
                                    left: 110px;
                                }
                            </style>
                          
                    </form>
            </div>
        </div> 
        <script>
                var login = document.getElementById("login");
                var register = document.getElementById("register");
                var btn = document.getElementById("btn");

                function reg() {
                    login.style.left = "-400px";
                    register.style.left = "50px";
                    btn.style.left = "110px";
                }

                function log() {
                    login.style.left = "50px";
                    register.style.left = "450px";
                    btn.style.left = "0px";
                }
        </script>
</body>
</html>