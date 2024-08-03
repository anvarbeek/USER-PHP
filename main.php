<? include 'header.php'; session_start(); ?>
<div class="conteiner">

    <div class="row">

        <div class="col-6 offset-3">
            <table class="table">
                <thead>
                    <tr>
                        <th class="col-sm">Username</th>
                        <th class="col-sm">Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?
                    // config.php fayldan kelgan malumotni qabul qiladi va foreach orqali ozgaruvchiga ajratib beradi 
                     foreach($_SESSION['sms'] as $mss){
                        ?>
                    <tr>
                        <th class="col-sm"><?= $mss['username']; //ajratilgan ozgaruvchilar ekranga chiqadi?></th> 
                        <th class="col-sm"><?= $mss['password'];?></th>
                    </tr>

                        <?
                    }
                    ?>
                </tbody>

            </table>
            <a href="index.php" class="btn btn-outline-info">Exit</a>
        </div>
    </div>

</div>




<? include 'footer.php'; ?>