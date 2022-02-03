<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //assign vars 

  $name =  filter_var($_POST['name'], FILTER_SANITIZE_STRING);  //filtring user input to include only strings 
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); //filtring email input to include only email 
  $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT); //filtring phone input to include only phone 
  $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING); //filtring message input to include only message 
  // array of errors 

  $formErrors = array();
  if (strlen($name) <= 3) {
    $formErrors[] = 'Name Must be More Than 3 Characters ';
  }
  if (strlen($message) < 10) {
    $formErrors[] = 'Message  Must be More Than 10 Characters ';
  }

  $headers = 'From : ' . $email;
  $myEmail = 'mahmoudelkhateb18@gmail.com';
  $subject = 'Contact Form';
  if (empty($formErrors)) {
    mail($myEmail, $subject, $message, $headers);
    $name = '';
    $email = '';
    $phone = '';
    $message = '';
    $success = '<div class="success-msg alert alert-success"> 
            <h5> Thanks For Your Message  </h5>
            <p> We Will Back For You Soon  </p>
        </div>';
  }
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body dir="rtl">
  <!-- Upper Nav -->

  <div class="upperNav">
    <div class="container">
      <div class="content d-flex justify-content-between">
        <div class="left-contact d-flex">
          <p>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <circle cx="12" cy="11" r="3" />
              <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
            </svg>
            <span>مدينة الرياض حي الملقا طريق انس بن مالك</span>
          </p>
          <a href="mailto:vctung@outlook.com">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-forward" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M12 18h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5" />
              <path d="M3 6l9 6l9 -6" />
              <path d="M15 18h6" />
              <path d="M18 15l3 3l-3 3" />
            </svg>
            <span>vctung@outlook.com</span>
          </a>
        </div>
        <div class="social">
          <a href="https://www.facebook.com/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
            </svg>
          </a>
          <a href="https://www.instagram.com/">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <rect x="4" y="4" width="16" height="16" rx="4" />
              <circle cx="12" cy="12" r="3" />
              <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
            </svg>
          </a>
          <a href="https://www.twitter.com/">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- ::/End Upper Nav  -->

  <!-- Nav Bar  -->

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="imgs/logo.jpg" width="250" alt="" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">الرئيسية
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">نبذة عنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="issues.html">خدماتنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">اٍتصل بنا </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ::/End Navbar -->

  <div class="contact-us">
    <div class="container">
      <h2 class="contact-head">
        تواصل معنا
      </h2>
      <p class="contact-desc">
        ابق على تواصل
      </p>

      <form class="send-message myForm" action=" <?php echo $_SERVER['PHP_SELF'] ?> " method="POST">
        <!-- server side validation  -->
        <?php if (!empty($formErrors)) { ?>
          <div class="alert alert-danger">
            <?php
            foreach ($formErrors as $error) {
              echo $error . '<br/>';
            }

            ?>

          </div>
        <?php } ?>

        <?php if (isset($success)) {
          echo $success;
        } ?>
        <div class="d-flex  inputs-holder">
          <div class="form-group">
            <input class="form-control userName" name="name" type="text" value="<?php if (isset($name)) {
                                                                                  echo $name;
                                                                                } ?>" placeholder="الاسم " />

            <div class="alert alert-danger my-alert">
              يجب أن يكون الاسم 3 حروف فأكثر
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <circle cx="12" cy="7" r="4" />
              <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
          </div>
          <div class="form-group">
            <input class="form-control myMail" name="email" type="email" value="<?php if (isset($email)) {
                                                                                  echo $email;
                                                                                } ?>" placeholder="البريد " />

            <div class="alert alert-danger my-alert">
              حقل البريد مطلوب
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-at" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <circle cx="12" cy="12" r="4" />
              <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28" />
            </svg>


          </div>
          <div class="form-group">
            <input class="form-control" name="phone" type="number" value="<?php if (isset($phone)) {
                                                                            echo $phone;
                                                                          } ?>" placeholder="الهاتف" />
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-mobile" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <rect x="7" y="4" width="10" height="16" rx="1" />
              <line x1="11" y1="5" x2="13" y2="5" />
              <line x1="12" y1="17" x2="12" y2="17.01" />
            </svg>
          </div>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="عنوان الرسالة " />
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
              <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
              <line x1="16" y1="5" x2="19" y2="8" />
            </svg>
          </div>
          <div class="form-group  the-message-holder">
            <textarea class="form-control myMsg" rows="3" name="message" type="text" placeholder="الرسالة "></textarea>
            <div class="alert alert-danger my-alert">
              يجب أن يكون محتوى الرسالة اكبر من 10 أحرف
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-forward" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M12 18h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5" />
              <path d="M3 6l9 6l9 -6" />
              <path d="M15 18h6" />
              <path d="M18 15l3 3l-3 3" />
            </svg>
          </div>
          <div class="form-group m-0">
            <button class="btn btn-primary"> ارسال </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-mg-12 footer-about">
            <h3 class="text-uppercase">نبذة عنا</h3>
            <p class="first">
              شركة الإتجاهات الأربعة للمحاماة من شركات المحاماة المهنية الرائدة
              في مهنة المحاماة بالمملكة العربية السعودية
            </p>
            <p class="second">
              وأحد الشركات الساعية والمساندة لتحقيق رؤية المملكة العربية السعودية 2030 
            </p>
          </div>
          <div class="col-lg-4 col-md-12 left-footer">
            <h3 class="text-uppercase">معلومات التواصل</h3>
            <ul class="list-unstyled">
              <li class="d-flex">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-map-pin"
                  width="16"
                  height="16"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="#ffffff"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <circle cx="12" cy="11" r="3" />
                  <path
                    d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"
                  />
                </svg>
                <span>
                  شركة الإتجاهات الأربعة للمحاماة والإستشارات القانونية <br />
                  مدينة الرياض حي الملقا طريق انس بن مالك
                </span>
              </li>
              <li class="d-flex">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-mail-opened"
                  width="16"
                  height="16"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="#ffffff"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <polyline points="3 9 12 15 21 9 12 3 3 9" />
                  <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                  <line x1="3" y1="19" x2="9" y2="13" />
                  <line x1="15" y1="13" x2="21" y2="19" />
                </svg>
                <span> vctung@outlook.com </span>
              </li>
              <li class="d-flex">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-phone-incoming"
                  width="16"
                  height="16"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="#ffffff"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path
                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"
                  />
                  <line x1="15" y1="9" x2="20" y2="4" />
                  <polyline points="15 5 15 9 19 9" />
                </svg>
                <span> 1-800-800-2299 (Support) </span>
              </li>
            </ul>
          </div>
          <div
            class="col-lg-4 col-md-12 right-footer d-flex justify-content-between"
          >
            <div class="links-holder">
              <h3 class="text-uppercase">روابط التصفح</h3>
              <ul class="list-unstyled">
                <li><a href="index.html">الرئيسية</a></li>
                <li><a href="about.html">نبذة عنا</a></li>
                <li><a href="issues.html">خدماتنا</a></li>
                <li><a href="contact.php">تواصل معنا </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div
        class="copyRights container position-absolute d-flex justify-content-between align-items-center"
      >
        <span
          >جميع الحقوق محفوظة &copy; لشركة الإتجاهات الأربعة للمحاماة
          والإستشارات القانونية
        </span>
        <div class="social">
          <a href="">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="icon icon-tabler icon-tabler-brand-facebook"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="#ffffff"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"
              />
            </svg>
          </a>
          <a href="">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="icon icon-tabler icon-tabler-brand-instagram"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="#ffffff"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <rect x="4" y="4" width="16" height="16" rx="4" />
              <circle cx="12" cy="12" r="3" />
              <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
            </svg>
          </a>
          <a href="">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="icon icon-tabler icon-tabler-brand-twitter"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="#ffffff"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z"
              />
            </svg>
          </a>
        </div>
      </div>
    </footer>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>