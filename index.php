<html>
    <head>
        <link rel="stylesheet"
            href="assets/css/bootstrap.min.css">
            <script src="assets/js/bootstrap.min.js"></script>
        <style>
            body {
                background-color:rgb(22, 39, 70);
                background-repeat : no-repeat;
            }

            #card {
                background: #b8c1ec;
                border-radius: 20px;
                box-shadow: 1px, 2px, 8px rgb(0, 0, 0, 0.70);
                height: 320px;
                margin: 9.5rem auto 8rem auto;
                width: 410px;
            }   

            #card-title{
                letter-spacing: 0px;
                padding:7px 50px;
                text-align: center;
                font-weight: bold;
            }
            h4{
                padding-top:42px;
                font-size:19px;
                
            }
            #card-content{
                padding:5px 50px;
            }

            a {
                text-decoration: none;
            }

            ::placeholder {
                font-size:13px;
            }
        </style>
    </head>
    <body>
        <div id="card">
            <div id="card-title">
                <h4> Selamat Datang, di Aplikasi Jurnal Guru SMKS Mutiara Ilmu!</h4>
            </div>
            <div id="card-content">
                <form action="ceklogin.php" method="post">
                    <div class="form-group">
                        <input type="email" name="txtEmail" class="form-control" 
                        placeholder="email" autofocus style="border-radius:15px">
                    </div>
                    <div class="form-group">
                        <input type="password" name="txtPass" class="form-control" 
                        placeholder="password" autofocus style="border-radius:15px;padding:10px 10px">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="kirim" class="btn btn-block" 
                        style="background-color:#339933;color:white;font-weight:bold;border-radius:15px"> Login </button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>