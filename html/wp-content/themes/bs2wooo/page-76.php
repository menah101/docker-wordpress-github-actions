<?php get_header(); ?>

<div class="slidehome">
      <div
        id="slidetrangchu"
        class="carousel slide"
        data-ride="carousel"
        data-interval="0"
      >
        <div class="carousel-inner" role="listbox">

          <?php
            $lay_du_lieu = new WP_Query(array('post_type' => 'slide_quang_cao'));
            $dem_so_slide = 0;
            while($lay_du_lieu->have_posts()) 
            {
              $lay_du_lieu->the_post();
              $dem_so_slide++;
              $anh_slide = get_field('anh_slide_qc');
              $ndslide = get_field('noi_dung_quang_cao');
              $tennut = get_field('tieu_de_nut');
              $linknut = get_field('link_cua_slide_quang_cao');
          ?>

          <div class="carousel-item <?php if($dem_so_slide == 1) {echo 'active';} ?> ">
            <div class="motslide container">
              <img src="<?php echo $anh_slide['url']; ?>" alt="" class="anhsl img-fluid" />
              <div class="container2">
                <div class="row">
                  <div class="col-sm-7 push-sm-5">
                    <h2><?php the_title(); ?></h2>
                    <div class="desc">
                      <?php echo $ndslide; ?>
                    </div>
                    <?php
                      if($tennut == '') {}
                      else {
                    ?>
                    <a href="<?php echo $linknut['url'];?>" class="nutslide btn btn-outline-secondary" target="_blank">
                      <?php echo $tennut; ?>
                      <i class="fa fa-long-arrow-right"></i>
                    </a>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- het motslide -->
          </div>

          <?php 
            }
            wp_reset_query(); // cắt đứt vòng lặp, sẽ không ảnh hưởng tới những đoạn mã khác  
          ?>

          
          
        </div>
        <a
          class="left carousel-control"
          href="#slidetrangchu"
          role="button"
          data-slide="prev"
        >
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="right carousel-control"
          href="#slidetrangchu"
          role="button"
          data-slide="next"
        >
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- HET SLIDEHOME -->
  
    <?php 
      // cho khối dịch vụ 1
      $td1 = get_field('tieu_de_dich_vu_1');
      $link1 = get_field('link_dich_vu_1');
      $anh_1 = get_field('upload_anh_1');

      // cho khối dịch vụ 2
      $td2 = get_field('tieu_de_dich_vu_2');
      $link2 = get_field('link_dich_vu_2');
      $anh_2 = get_field('upload_anh_2');
      
      // cho khối dịch vụ 3
      $td3 = get_field('tieu_de_dich_vu_3');
      $link3 = get_field('link_dich_vu_3');
      $anh_3 = get_field('upload_anh_3');

    ?>

    <div class="badichvu">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="divdichvu" style="background-image:url(<?php echo $anh_1; ?>)">
              <h2><a href="<?php echo $link1; ?>"> <?php echo $td1; ?> </a></h2>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="divdichvu" style="background-image:url(<?php echo $anh_2; ?>)">
              <h2><a href="<?php echo $link2; ?>"> <?php echo $td2; ?> </a></h2>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="divdichvu" style="background-image:url(<?php echo $anh_3; ?>)">
              <h2><a href="<?php echo $link3; ?>"> <?php echo $td3; ?> </a></h2>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- HET BADICHVU -->

    <!-- Khối sản phẩm nổi bật -->
    <?php 
      // Tiêu đề khối lớn
      $tieudeto = get_field('tieu_de_khoi_san_pham_noi_bat');
      $tichdan = get_field('mo_ta_khoi_san_pham_noi_bat');

      // cho khối sp nổi bật 1
      $anh_khoi_1 = get_field('anh_khoi_1');
      $tieu_de_khoi_1 = get_field('tieu_de_khoi_1');
      $tieu_de_nut_1 = get_field('tieu_de_nut_1');
      $link_nut_1 = get_field('link_nut_1');

      // cho khối sp nổi bật 2
      $anh_khoi_2 = get_field('anh_khoi_2');
      $tieu_de_khoi_2 = get_field('tieu_de_khoi_2');
      $tieu_de_nut_2 = get_field('tieu_de_nut_2');
      $link_nut_2 = get_field('link_nut_2');

      // cho khối sp nổi bật 3
      $anh_khoi_3 = get_field('anh_khoi_3');
      $tieu_de_khoi_3 = get_field('tieu_de_khoi_3');
      $tieu_de_nut_3 = get_field('tieu_de_nut_3');
      $link_nut_3 = get_field('link_nut_3');

      // cho khối sp nổi bật 4
      $anh_khoi_4 = get_field('anh_khoi_4');
      $tieu_de_khoi_4 = get_field('tieu_de_khoi_4');
      $tieu_de_nut_4 = get_field('tieu_de_nut_4');
      $link_nut_4 = get_field('link_nut_4');

    ?>

    <div class="spnoibat">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 push-sm-2 text-xs-center">
            <h2 class="kieuchuto"><?php echo $tieudeto; ?></h2>
            <p class="mota"><?php echo $tichdan; ?></p>
          </div>
        </div>
        <div class="row gutter10">
          <div class="col-sm-6">
            <a href="<?php echo $link_nut_1; ?>" class="kngan" style="background-image:url(<?php echo $anh_khoi_1['url']; ?>)">
              <h4><?php echo $tieu_de_khoi_1; ?></h4>
              <b class="view"
                ><?php echo $tieu_de_nut_1; ?> <i class="fa fa-long-arrow-right"></i
              ></b>
            </a>
            <a href="<?php echo $link_nut_2; ?>" class="kngan kdai" style="background-image:url(<?php echo $anh_khoi_2['url']; ?>)">
              <h4><?php echo $tieu_de_khoi_2; ?></h4>
              <b class="view"
                ><?php echo $tieu_de_nut_2; ?> <i class="fa fa-long-arrow-right"></i
              ></b>
            </a>
          </div>
          <div class="col-sm-6">
            <a href="<?php echo $link_nut_3; ?>" class="kngan kdai" style="background-image:url(<?php echo $anh_khoi_3['url']; ?>)">
              <h4><?php echo $tieu_de_khoi_3; ?></h4>
              <b class="view"
                ><?php echo $tieu_de_nut_3; ?> <i class="fa fa-long-arrow-right"></i
              ></b>
            </a>
            <a href="<?php echo $link_nut_4; ?>" class="kngan" style="background-image:url(<?php echo $anh_khoi_4['url']; ?>)">
              <h4><?php echo $tieu_de_khoi_4; ?></h4>
              <b class="view"
                ><?php echo $tieu_de_nut_4; ?> <i class="fa fa-long-arrow-right"></i
              ></b>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- HET SAN PHAM NOI BAT  -->

    <?php 
      // Tiêu đề khối lớn
      $tieudeqc = get_field('tieu_de_khoi_qc');
      $tichdanqc = get_field('tich_dan_qc');
      $uploadanhqc = get_field('anh_khoi_qc');
      $tieudenutqc = get_field('tieu_de_nut_qc');
      $linknutqc = get_field('link_nut_qc');
    ?>
    <div class="quangcao1home" style="background-image:url(<?php echo $uploadanhqc; ?>)">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="qchome text-xs-center">
              <h2><?php echo $tieudeqc; ?></h2>
              <p><?php echo $tichdanqc; ?></p>
              <a href="<?php echo $linknutqc; ?>" class="nutslide btn btn-outline-secondary">
              <?php echo $tieudenutqc; ?> <i class="fa fa-long-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  HET QUANG CAO TRANG HOME -->


    <?php 
      // Tiêu đề Tab
      $tieudetab = get_field('tieu_de_tab');
      $tichdantab = get_field('trich_dan_tab');

      // Phần 4 tab sản phẩm
      $tieudekhoitab1 = get_field('tieu_de_khoi_tab_1');
      $tieudekhoitab2 = get_field('tieu_de_khoi_tab_2');
      $tieudekhoitab3 = get_field('tieu_de_khoi_tab_3');
      $tieudekhoitab4 = get_field('tieu_de_khoi_tab_4');
      $soluongsanphamtab = get_field('so_luong_san_pham_cho_moi_tab');

      // Phân nút view all products
      $tennutviewall = get_field('name_button_view_all');
      $linknutviewall = get_field('link_button_view_all');
      
    ?>

    <div class="sanphamhome">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 push-sm-2">
            <div class="text-xs-center">
              <h2 class="kieuchuto"><?php echo $tieudetab; ?></h2>
              <p class="mota">
              <?php echo $tichdantab; ?>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="tabsanpham">
        <div class="tren">
          <ul class="tdtab">
            <li><b> <?php echo $tieudekhoitab1; ?> </b></li>
            <li><b class="active"> <?php echo $tieudekhoitab2; ?> </b></li>
            <li><b> <?php echo $tieudekhoitab3; ?> </b></li>
            <li><b> <?php echo $tieudekhoitab4; ?> </b></li>
          </ul>
        </div>
        <!-- HET TREN -->
        <div class="duoi">
          <div class="container">
            <ul class="ndtab">
              <li>
                <div class="divsanpham">
                  <div class="row">
                    <?php echo do_shortcode('[featured_products per_page="'.$soluongsanphamtab.'"]'); ?>
                  </div>
                  <!-- het row -->
                </div>
              </li>

              <li>
                <div class="divsanpham xuathien">
                  <div class="row">
                    <?php echo do_shortcode('[recent_products per_page="'.$soluongsanphamtab.'"]'); ?>
                  </div>
                  <!-- het row -->
                </div>
              </li>

              <li>
                <div class="divsanpham">
                  <div class="row">
                    <?php echo do_shortcode('[product_category category="nam" per_page="'.$soluongsanphamtab.'"]'); ?>
                  </div>
                  <!-- het row -->
                </div>
              </li>

              <li>
                <div class="divsanpham">
                  <div class="row">
                  <?php echo do_shortcode('[product_category category="nữ" per_page="'.$soluongsanphamtab.'"]'); ?>
                  </div>
                  <!-- het row -->
                </div>
              </li>
            </ul>
          </div>
          <!-- HET CONTAINER -->
        </div>
        <!-- HET DUOI -->
      </div>
      <!-- het tab san pham   -->
      <div class="divnutviewall">
        <a href="<?php echo $linknutviewall; ?>" class="nutslide btn btn-outline-secondary">
          <?php echo $tennutviewall; ?> <i class="fa fa-long-arrow-right"></i>
        </a>
      </div>
    </div>
    <!-- HET SANPHAM HOME  -->

<?php get_footer(); ?>