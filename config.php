<?
session_start(); //vaqtinchali xotira malumotni saqlab turadi
if (empty($_SESSION['sms'])) { //malumot bosh bolsa uni saqlamaydi degan shart ostida 
    $_SESSION['sms'] = []; //massiv korinishida oladi
}


if (isset($_POST['submit'])) { //submit tugmasi bosilganda formmadagi malumotlar yuborilishi yoki url orqali kirsa unga javob beradi

    if (isset($_POST['username']) && isset($_POST['password'])) { // shunday o'zgaruvchilar bormi yoki yoqmi yoq bolsa error chiqsin

        if ($_POST['username'] != '' && $_POST['password'] != '') { //o'zgaruvchilarda malumot bor yoki yoqni biladi yoq bolsa unga malumotni kiriting degan yozuv chiqadi

            array_push($_SESSION['sms'], [ // bu yerda kelgan malumotlarni olib vaqtinchalik xotiraga saqlab qoyadi va main.php  faylga yuborishni bildiradi
                'username' => $_POST['username'],
                'password' => $_POST['password']
            ]);
            header('location:main.php?success=true');
        } else {
            // echo "! Ma'lumotlarini to'liq kiriting?";
            header('location:login.php?error=fill');
        }
    } else {
        // echo "Error 404";
        header('location:404.php');
    }
} else {
    echo "URL orqali kelish Blocklangan !!! ";
}
