<?php include 'header.php'?>

    <style>
        body{
            background-color: #2574A9;
        }
    </style>

<div class="text-center text-success mt-5">
    <h1>Welcome To the Ecc Station</h1>
</div>
<div class="row align-content-center justify-content-center no-gutters mt-5 ">
    <div class="col-sm-5">
      <div class="text-center">
          <img src="img/logo.png" alt="">
      </div>
    </div>
    <div class="col-sm-4">
        <div class="card mt-5">
            <div class="card-body text-center">
                <div class="text-center text-success">
                    <h3>  Ecc Station</h3>
                </div>
                <div class="text-center text-primary">
                    LogIn
                </div>
                <input class="form-control my-2" type="text" name="id" id="LogID" placeholder="login id">
                <input class="form-control my-2" type="password" name="password" id="password" placeholder="password">

                <button class="btn btn-primary " onclick="newlog()">Log In</button>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'?>
<script>
    function newlog() {
        var L = document.getElementById('LogID').value;
        var p = document.getElementById('password').value;
        var a = "admin";
        var b = "password";
        if (L === a && p === b){
            window.location.replace("index.php");
            console.log('pass')
        } else {
           alert('your given id and password is incorrect')
        }

    }
</script>
