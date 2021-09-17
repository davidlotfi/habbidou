<?php  include_once('controleur/login_post.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- icon logo styles css -->
    <link rel="icon" href="images/unnamed.png">
    <link rel="stylesheet" href="css/login.css">
    <title>habbidou.com</title>
  </head>
<style media="screen">
  body{
    background-color:#F9F9F9;
  }
    .btng{
      margin-top: 100px;
      text-align:center;
      width: 50%;
      height:40px;
      font-size: 15px;
      font-weight: 600;

      background-color: #28a745;
      background-image: linear-gradient(-180deg,#34d058,#28a745 90%);
      color: #fff;
      border: 1px solid rgba(27,31,35,.2);
      border-radius: .25em;
      cursor: pointer;
      margin-left:200px;
    }
    .auth-form-body{
      background-color: #fff;
      border: 1px solid #d8dee2;
      font-size: 14px;
      padding: 20px;
      margin-top: 16px!important;
      border-radius: 5px;
      border-top: 1px solid #d8dee2;
      display: block;
    }
    .d{
      width: 350px;
     }
    h1{
      font-size: 24px;
      font-weight: 300;
      letter-spacing: -.5px;
      margin: .67em 0;
      text-align: center;
      }
     .pxx-3{
       padding-left:16px!important
       padding-right:16px!important
     }
     .btn{
       margin-top: 30px;
     }
     .auth-form{margin:0 auto;width:340px}
     .flash{

       border-radius: 5px;
       border-style: solid;
       border-width: 1px;
       font-size: 13px;
       margin: 0 auto 10px;
       padding: 15px 20px;
       background-color: #ffdce0;
       color: #86181d;
       border-color: rgba(27,31,35,.15);
     }
    .ppp{
      border:1px solid #d8dee2;
      border-radius:5px;
      padding:15px 20px;
      text-align:center
    }
    .label-link{float:right;font-size:12px}
</style>
  <body>
       <h1> habbidou.com تسجيل الدخول إلى</h1>
       <div class="auth-form pxx-3">
         <div class="<?php echo $message_class; ?>" role="alert"><?php echo $message_erro;?></div>

         <div class="d auth-form-body">
           <form class="" action="login.php" method="post">
             <label for="login_field">  اسم المستخدم أو البريد الالكتروني</label>
             <input type="text" name="user" id="" class="form-control input-block" required>
             <label for="password">  كلمة السر  <a href="#" class="label-link"> نسيت كلمة السر؟</a></label>
             <input type="password" name="password" id="" class="form-control input-block" required>
             <input type="submit" name="commit" value="سجل الدخول" class="btn btn-primary btn-block">
           </form>
         </div>
         <p class="ppp mt-3">ليس لديك حساب ؟ <a href="inscrir.php">إفتح حساب</a></p>
       </div>
  </body>
</html>
