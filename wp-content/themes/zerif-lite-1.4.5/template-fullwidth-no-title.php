<?php
/**
 * Template Name: Full width with no title template
 */
get_header(); ?>
<style>
.crunchify-social {
	
}
.benifit {
    float:left;
    padding: 60px 30px 50px 30px;
    display: inline;
    width:100%;
}
.benifit-box {
    text-align:left;
    width:21%;
    display: inline;
    float:left;
    margin: 0 0 40px 9%;
    line-height:25px;
}
.benifit-box > h3 {
    font-weight:500px;
    line-height:30px;
}
.func-container {
    float:left;
    width:100%;
    padding:60px 20px 40px 110px;
}
.func-box {
    float:left;
    padding:100px 20px 0 0px;
}
.func-content {
   width:250px;
   margin-left:20px;
   padding:10px 0 10px 0;
}
.func-img {
    text-align:center;
    float:right;
    padding: 0 100px 30px 20px;
}
.zb {
   background:#fbb860;
   margin:0;
   padding: 5px 5px 5px 5px;
}
.zb:hover {
	background: #f99b1f;
}
.func-content > p {
   margin-bottom:5px;
}
.intro-footer {
   padding:100px;
   padding-bottom:0;
   font-style:italic;
}
.left-arrow {
   float:left;
}
.right-arrow {
   float:right;
}
.description {
  background: #2fa3c3;
  width:100%;
  float:left;
  line-height:30px;
  padding:0 100px 0 100px;
  color: #ffffff;
  /*text-shadow: -1px 0 #888888, 0 1px #888888, 1px 0 #888888, 0 -1px #888888;*/
}
.sharelinks {
  float:left;
  padding:5px 5px 0 100px;
  font-weight:bold;
  font-style:italic;
}
@media (max-width: 1200px) {
    .func-container {
        padding:60px 20px 40px 50px;
    }
    .func-box {
        width:50%;
        padding:0 20px 0 20px;
    }
    .func-content {
        width:100%;
    }
}
@media (max-width: 992px) {
    .func-container {
        padding:60px 20px 40px 20px;
    }
    .func-box {
        
    }
    .func-img {
        width:100%;
    }
}
@media (max-width: 900px) {
    .func-container {
        padding:60px 20px 40px 40px;
    }
    .func-box {
        
    }

}
@media (max-width: 767px) {
  .benifit {
    text-align: center;
    padding: 60px 10px 50px 10px;
  }
  .benifit-box {
    float:left;
    width:25%;
    margin:0 0 0 6.5%;
  }  
  .func-container {
        padding:50px 20px 40px 10px;
  }
  .func-box {
      
  }
  .func-content {
      
  }
  .description {
    padding:0 10px 20px 10px;
  }
}
@media (max-width: 560px) {4
  .benifit {
    padding: 60px 2px 50px 2px;
  }
  .func-container {
        padding:50px 20px 40px 20px;
  }
  .func-box {
      width:100%;
  }
  .func-content {
      margin-left:0;
  }
}
@media (max-width: 480px) {
  .benifit {
    text-align: center;
  }
  .benifit-box {
    width:90%;
    display: inline;
    float:left;
    margin: 20px 20px 20px 20px;
  }  
  .intro-footer {
    padding:20px;
  }
  .sharelinks {
    padding-left:20px;
  }
  .description > p {
    margin-top:0;
  }
}

</style>

<div class="header-pages">  
    <div class="header-content-wrap">
	<div style="padding-bottom:15px;" class="header-post-title"> <?php the_title(); ?> </div>	
	<div style="color:#ffffff;font-size:22px;font-weight:bold italic;">Tôn chỉ hoạt động : “<p style="color:#2fa3c3;font-size:22px;font-weight:bold;font-style:italic;display:inline;">Connect for better life</p>” – Kết nối cho cuộc sống tốt đẹp hơn</div>
    </div>
</div>
<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->
<?php zerif_after_header_trigger(); ?>
<style>
.entry-content {
	margin-top:0;
}
</style>
<div id="content" class="site-content">

					<?php 
						while ( have_posts() ) : the_post(); 
						
							get_template_part( 'content', 'page-no-title' );
							
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() ) :
								comments_template();
							endif;
							
						endwhile;
					?>

				

</div>

<?php get_footer(); ?>