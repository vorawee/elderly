<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Kanit&subset=thai');
    *{
      font-family: 'Kanit', sans-serif;
    }
    </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
          <div class="col" style="margin-left:32px;">
            <img src="image/logo5.png" width="1000" alt="" style="padding:20px;">
          </div>
        </div>
          <div class="row">
            <div class="col-3">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"  style="background:white;padding:5px;border-radius:10px;">
                <a <?php if($_REQUEST['page']=='home'){echo 'class="nav-link active"';} ?> class="nav-link" href="index.php?page=home">หน้าแรก</a>
                <a <?php if($_REQUEST['page']=='register'){echo 'class="nav-link active"';} ?> class="nav-link" href="index.php?page=register">บันทึกข้อมูลทั่วไป</a>
                <a <?php if($_REQUEST['page']=='money_elderly'){echo 'class="nav-link active"';} ?> class="nav-link" id="v-pills-messages-tab" href="index.php?page=money_elderly" role="tab" aria-selected="false">ลงทะเบียนเบี้ยยังชีพผู้สูงอายุ</a>
                <a <?php if($_REQUEST['page']=='activity'){echo 'class="nav-link active"';} ?> class="nav-link" id="v-pills-settings-tab"  href="index.php?page=activity" role="tab" aria-selected="false">ลงทะเบียนกิจกรรม</a>
                <a <?php if($_REQUEST['page']=='disabled'){echo 'class="nav-link active"';} ?> class="nav-link" id="v-pills-settings-tab" href="index.php?page=disabled" role="tab" aria-selected="false">ลงทะเบียนข้อมูลผู้พิการ</a>
                <a <?php if($_REQUEST['page']=='money_disabled'){echo 'class="nav-link active"';} ?> class="nav-link" id="v-pills-settings-tab"  href="index.php?page=money_disabled" role="tab" aria-selected="false">ลงทะเบียนเงินเบี้ยความพิการ</a>
                <a <?php if($_REQUEST['page']=='health_elderly'){echo 'class="nav-link active"';} ?>class="nav-link" id="v-pills-settings-tab"  href="index.php?page=health_elderly" role="tab" aria-selected="false">ลงทะเบียนข้อมูลสุขภาพ</a>
                <a <?php if($_REQUEST['page']=='assessment_daily'){echo 'class="nav-link active"';} ?>class="nav-link" id="v-pills-settings-tab"  href="index.php?page=assessment_daily" role="tab" aria-selected="false">การประเมินความสามารถ</a>
              </div>
            </div>
            &nbsp;
            <div class="col" style="background:white;padding:5px;border-radius:10px;">
                  <?php

                  if(isset($_REQUEST['page'])){

                    //เพิ่มหน้าเพจ
                    if($_REQUEST['page']== 'home'){  // หน้าแรก
                            include 'home.php';
                    }
                    elseif($_REQUEST['page']=='register'){ // หน้าบันทึกข้อมูล
                            include 'register.php';
                    }
                    elseif($_REQUEST['page']=='money_elderly'){ // หน้าบันทึกข้อมูลgเบี้ยยังชีพ
                            include 'money_elderly.php';
                    }
                    elseif($_REQUEST['page']=='activity'){ // หน้าบันทึกข้อมูลgเบี้ยยังชีพ
                            include 'activity.php';
                    }
                    elseif($_REQUEST['page']=='disabled'){ // หน้าบันทึกข้อมูลgเบี้ยยังชีพ
                            include 'disabled.php';
                    }
                    elseif($_REQUEST['page']=='money_disabled'){ // หน้าบันทึกข้อมูลgเบี้ยยังชีพ
                            include 'money_disabled.php';
                    }
                    elseif($_REQUEST['page']=='health_elderly'){ // หน้าบันทึกข้อมูลgเบี้ยยังชีพ
                            include 'health_elderly.php';
                    }
                    elseif($_REQUEST['page']=='assessment_daily'){ // หน้าบันทึกข้อมูลgเบี้ยยังชีพ
                            include 'assessment_daily.php';
                    }

                  }else {
                      header('Location:index.php?page=home');
                    }

                     ?>
            </div>
          </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
