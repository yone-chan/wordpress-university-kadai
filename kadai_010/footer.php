<!-- footer.php ここから -->
<footer class="footer">
      <div class="row footer_row">
        <div class="col">
          <div class="footer_content">
            <div class="row">
              <div class="col-lg-4 footer_col">
                <div class="footer_section footer_about">
                  <div class="footer_logo_container">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo_big.png" alt="" />
                    <a href="">
                      <div class="footer_logo_text">Samurai University</div>
                    </a>
                  </div>
                  <div class="footer_contact_info">
                    <div>〒150-0043</div>
                    <div>東京都渋谷区道玄坂2丁目11-1 Gスクエア渋谷道玄坂4F</div>
                    <ul>
                      <li><span>TEL: </span>03-2222-11</li>
                      <li><span>MAIL: </span>: sample@sejuku.net</li>
                    </ul>
                  </div>
                  <div class="footer_social">
                    <ul>
                      <li>
                        <a href="https://twitter.com/samuraijuku"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="https://www.facebook.com/sejuku2013/"><i class="fa fa-facebook"
                            aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 footer_col">
                <div class="footer_section footer_links">
                  <div class="footer_links_container">
                    <ul>
                      <li><a href="<?php echo home_url(); ?>/category/news">ニュース</a></li>
                      <li><a href="<?php echo home_url(); ?>/category/event">イベント</a></li>
                      <li><a href="<?php echo home_url(); ?>/course">コース</a></li>
                      <li><a href="<?php echo home_url(); ?>/about">侍大学について</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 footer_col clearfix">
                <a class="twitter-timeline" data-height="265"
                  href="https://twitter.com/samuraijuku?ref_src=twsrc%5Etfw">Tweets by samuraijuku</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row copyright_row">
        <div class="col">
          <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
            <div class="cr_text">
              Copyright &copy; Samurai University All Rights Reserved.
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!--jQuery-->
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/styles/bootstrap4/popper.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/styles/bootstrap4/bootstrap.min.js"></script>

  <script type="text/javascript">
    $(".carousel").carousel();
  </script>

  <?php wp_footer(); ?>
</body>

</html>
<!-- footer.php ここまで -->