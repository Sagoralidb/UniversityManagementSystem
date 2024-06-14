<div class="col-sm-4" style="background-color:lavenderblush;">
  <div class="sidebar-inner">
    <div class="sidebar-main-title">
      <h4 class="sidebar-title"><img src="images/news.gif" width="50px" height="25px"> &amp; Events</h4>
      <hr>
    </div>

    <!-- Let write some php code to display teacher's post -->
    <?php 
    include "connect.php"; // database connection
    $sql = "SELECT * FROM user_post";
    $result = mysqli_query($data, $sql);
    ?>
    
    <div class="sidebar-inner" style="background-color:#E9E9E9; padding-left:20px; padding-right:10px; border-radius: 3px 3px 3px 3px;">
      <marquee behavior="scroll" direction="down" onmouseover="this.setAttribute('scrollamount', 0, 0);this.stop();" onmouseout="this.setAttribute('scrollamount', 2, 0);this.start();" height="200px" scrollamount="2"> <!-- Start marquee -->
        <div class="sidebar-list-post clearfix">
          <?php 
          while ($info = $result->fetch_assoc()) {
          ?>
          <div class="sidebar-list-post clearfix">
            <div class="sidebar-list-details">
              <h5 class="sidebar-list-title">
                <?php echo "<a target='_blank' href='view_post.php?post_id={$info['post_id']} '>{$info['post_title']}</a>"; ?>
              </h5>
              <time class="date-time">Post Date:
                <?php
                $desiredDateFormat = 'Y-m-d';
                $timestamp = strtotime($info['post_time']);
                echo date($desiredDateFormat, $timestamp);
                ?>
              </time>
            </div>
          </div>
          <?php } $data->close(); ?>
        </div>
      </marquee> <!-- End marquee -->

      <div class="sidebar-list-post clearfix">
        <div class="sidebar-list-details">
          <h5 class="sidebar-list-title">
            <a href="allpost_for_public.php" style="color:red;">More News &amp; events</a>
          </h5>
        </div>
      </div>
    </div>

    <div class="second-sider">
      <h4>NOTICE</h4>
      <hr>
      <div class="sidebar-inner" style="background-color:#E9E9E9; padding-left:20px; padding-right:10px; border-radius: 3px 3px 3px 3px;">
        <marquee behavior="scroll" direction="up" onmouseover="this.setAttribute('scrollamount', 0, 0);this.stop();" onmouseout="this.setAttribute('scrollamount', 2, 0);this.start();" height="100px" scrollamount="2"> <!-- Start marquee -->
          <div class="sidebar-list-post clearfix">
            <div class="sidebar-list-details">
              <h6 class="sidebar-list-title text-justify">
                <?php 
                include "connect.php";
                $sql = "SELECT * FROM notice ORDER BY notice_id DESC";
                $result = mysqli_query($data, $sql);
                while ($info = $result->fetch_assoc()) {
                ?>
                <p class="text-justify">
                  <?php echo "<a target='_blank' href='view_notice.php?notice_id={$info['notice_id']} '>{$info['notice']}</a>"; ?>
                  <i style="color:black;">
                    <?php echo "<h6>{$info['username']}</h6>"; ?>
                  </i>
                </h6>
                <time class="date-time">
                  <?php
                  $desiredDateFormat = 'Y-m-d';
                  $timestamp = strtotime($info['notice_time']);
                  echo date($desiredDateFormat, $timestamp);
                  ?>
                </time>
              </div>
              <?php } $data->close();  ?>
            </div>
        </marquee>	  
        <a href="all_notice.php" class="btn">See all</a>
      </div>
    </div>

    <h4>download</h4>
    <hr>
    <div class="third-bar">
      <div class="sidebar-inner" style="background-color:#E9E9E9; padding-left:20px; padding-right:10px; border-radius: 3px 3px 3px 3px;">
        <div class="sidebar-list-details">
          <h5 class="sidebar-list-title">
            <a href="../upload/notice/nbiu tuition fee payment rocket app.png" target="_blank">রকেট অ্যাপ-এ টিউশন ফি পেমেন্ট</a>
          </h5>
        </div>
        <div class="sidebar-list-details">
          <h5 class="sidebar-list-title">
            <a href="../upload/notice/nbiu tuition fee payment rocket dial.png" target="_blank">*৩২২# ডায়াল করে টিউশন ফি পেমেন্ট</a>
          </h5>
        </div>
        <div class="sidebar-list-details">
          <h5 class="sidebar-list-title">
            <a href="../upload/download/RetakeExaminationForm.pdf" target="_blank">Retake Examination Form</a>
          </h5>
        </div>
        <div class="sidebar-list-details">
          <h5 class="sidebar-list-title">
            <a href="../upload/download/GradeImprovementForm.pdf" target="_blank">Improvement Examination Form</a>
          </h5>
        </div>
        <div class="sidebar-list-details">
          <h5 class="sidebar-list-title">
            <a href="../upload/download/Leave Application Form NBIU.pdf" target="_blank">Leave Application Form</a>
          </h5>
        </div>
      </div>
    </div>
  </div>
</div>
