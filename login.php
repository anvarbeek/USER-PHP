<?php include 'header.php'; ?>
<div class="conteiner ">
<h1  class="justify-content-center row mt-5 mb-5">Sign-in</h1>
    <div class="row">
        <div class="col-6 offset-3">
            <form action="config.php" method="post" style="margin:5% 20%;" >
                <div class="m-3 col-sm ">
                    <label for="op">Username:</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="m-3 col-sm">
                    <label for="op">Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" >
                </div>
                <div class="m-3">
                    <input type="submit" name="submit" class="btn btn-success ">
                </div>
                
            </form>
                
        </div>
    </div>
</div>




<?php include 'footer.php'; ?>