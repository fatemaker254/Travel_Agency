<!-- ======================================================
     INLINE STYLES (place in <head> or just above </body>)
     ====================================================== -->
     <style>
/* =========  FOOTER BASE  ========= */
.footer{
  font-family:"Poppins",Arial,Helvetica,sans-serif;
  color:#5e5e5e;
  background:#fafafa;
}

/* ---------- top section ---------- */
.footer-top{padding:60px 0;}
.footer .logo img{height:40px;width:auto;}
.footer-text{margin-top:15px;line-height:1.6;font-size:.9rem;}

.contact-title{font-size:1.125rem;font-weight:600;color:#111;}
.contact-text{font-size:.85rem;margin-bottom:.75rem;}
.footer-contact ul{padding:0;margin:0;list-style:none;}

.contact-item{display:flex;align-items:center;font-size:.875rem;margin-bottom:8px;}
.contact-item ion-icon,
.contact-item i{color:#ffb703;font-size:18px;margin-right:8px;}
.contact-link{color:#5e5e5e;text-decoration:none;}
.contact-link:hover{color:#ffb703;}

.form-text{font-size:.85rem;margin-bottom:.5rem;}
.form-wrapper{display:flex;gap:10px;}
.input-field{
  flex:1 1 auto;
  padding:10px 12px;
  font-size:.875rem;
  border:1px solid #ced4da;
  border-radius:4px;
}
.btn.btn-secondary{
  background:#ffb703;
  border:none;
  color:#fff;
  padding:10px 24px;
  font-size:.875rem;
  transition:background .3s;
}
.btn.btn-secondary:hover{background:#d18c00;}

/* ---------- bottom section ---------- */
.footer-bottom{
  background:#e9ecef;
  border-top:1px solid #dee2e6;
  padding:15px 0;
  font-size:.825rem;
}
.footer-bottom-link{
  color:#6c757d;
  text-decoration:none;
  position:relative;
  padding-bottom:2px;
}
.footer-bottom-link::after{
  content:'';
  display:block;
  height:1px;
  width:0;
  background:#ffb703;
  transition:width .25s;
}
.footer-bottom-link:hover{color:#111;}
.footer-bottom-link:hover::after{width:100%;}

/* ---------- utilities ---------- */
.footer-bottom-list{
  list-style:none;
  margin:0;
  padding:0;
  display:flex;
  gap:15px;
}

/* ---------- responsive tweaks ---------- */
@media (max-width:767.98px){
  .footer .row>[class*="col-"]{text-align:center;}
  .form-wrapper{flex-direction:column;}
  .btn.btn-secondary{width:100%;}
  .footer-bottom{display:block;text-align:center;}
  .footer-bottom-list{justify-content:center;margin-top:10px;}
}
</style>



<!-- ======================================================
     UPDATED FOOTER
     ====================================================== -->
<footer class="footer">

  <!-- ========== TOP (logo, contact, newsletter) ========== -->
  <div class="footer-top py-5">
    <div class="container">

      <div class="row gy-4">

        <!-- Brand & description -->
        <div class="col-lg-4 col-md-6">
          <a href="<?php echo base_url ?>" class="logo d-inline-flex align-items-center mb-3">
            <img src="<?php echo base_url ?>../assets/images/logo.png"
                 alt="logo?> logo"
                 class="me-2">
          </a>

          <p class="footer-text">
            Urna ratione ante harum provident, eleifend, vulputate molestiae proin
            fringilla, praesentium magna conubia at perferendis, pretium, aenean
            aut ultrices.
          </p>
        </div>

        <!-- Contact block -->
        <div class="col-lg-4 col-md-6 footer-contact">
          <h4 class="contact-title">Contact Us</h4>
          <p class="contact-text">Feel free to contact and reach us !!</p>

          <ul>
            <li class="contact-item">
              <i class="fas fa-phone-alt"></i>
              <a href="tel:+01123456790" class="contact-link">+01&nbsp;(123)&nbsp;4567&nbsp;90</a>
            </li>
            <li class="contact-item">
              <i class="fas fa-envelope"></i>
              <a href="mailto:info@tourly.com" class="contact-link">info@tourly.com</a>
            </li>
            <li class="contact-item">
              <i class="fas fa-map-marker-alt"></i>
              <address class="mb-0">3146 Koontz, California</address>
            </li>
          </ul>
        </div>

        <!-- Newsletter -->
        <div class="col-lg-4 col-md-12">
          <p class="form-text">
            Subscribe our newsletter for more update&nbsp;&amp;&nbsp;news !!
          </p>

          <form action="" class="form-wrapper">
            <input type="email"
                   name="email"
                   class="input-field"
                   placeholder="Enter Your Email"
                   required>
            <button type="submit" class="btn btn-secondary">Subscribe</button>
          </form>
        </div>

      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.footer-top -->

  <!-- ========== BOTTOM ========= -->
  <div class="footer-bottom border-top py-3">
    <div class="container d-md-flex justify-content-between align-items-center">

      <p class="mb-2 mb-md-0">
        <!-- &copy; <?php echo date('Y') ?>
        <a href="#" class="text-reset fw-bold"><?php echo $_settings->info('short_name') ?></a>. -->
        All rights reserved
      </p>

      <ul class="footer-bottom-list">
        <li>
          <a href="javascript:void(0)" id="p_use" class="footer-bottom-link">Privacy Policy</a>
        </li>
        <li>
          <a href="#" class="footer-bottom-link">Terms &amp; Condition</a>
        </li>
        <li>
          <a href="#" class="footer-bottom-link">FAQ</a>
        </li>
      </ul>

    </div>
  </div><!-- /.footer-bottom -->
</footer>



<!-- ======================================================
     JAVASCRIPT (helper functions + plug-ins)
     ====================================================== -->
<script>
$(document).ready(function(){

  /* —— Privacy Policy modal —— */
  $('#p_use').click(function(){
      uni_modal("Privacy Policy","policy.php","mid-large");
  });

  /* —— Image / Video viewer —— */
  window.viewer_modal = function($src=''){
      start_loader();
      var ext = $src.split('.').pop().toLowerCase();
      var view = (ext === 'mp4')
          ? $("<video src='"+$src+"' controls autoplay></video>")
          : $("<img src='"+$src+"' class='img-fluid'/>");

      $('#viewer_modal .modal-content').find('video,img').remove().end().append(view);
      $('#viewer_modal').modal({show:true,backdrop:'static',keyboard:false,focus:true});
      end_loader();
  };

  /* —— Generic content modal —— */
  window.uni_modal = function($title='',$url='',$size=""){
      start_loader();
      $.ajax({
          url:$url,
          error:err=>{
              console.log(err);
              alert("An error occurred");
          },
          success:resp=>{
              if(resp){
                  $('#uni_modal .modal-title').html($title);
                  $('#uni_modal .modal-body').html(resp);

                  if($size){
                      $('#uni_modal .modal-dialog')
                        .attr('class','modal-dialog '+$size+' modal-dialog-centered');
                  }else{
                      $('#uni_modal .modal-dialog')
                        .attr('class','modal-dialog modal-md modal-dialog-centered');
                  }
                  $('#uni_modal').modal({show:true,backdrop:'static',keyboard:false,focus:true});
                  end_loader();
              }
          }
      });
  };

  /* —— Confirmation helper —— */
  window._conf = function($msg='',$func='',$params=[]){
      $('#confirm_modal #confirm').attr('onclick',
          $func+"("+$params.join(',')+")");
      $('#confirm_modal .modal-body').html($msg);
      $('#confirm_modal').modal('show');
  };

});
</script>

<!-- Fix jQuery-UI / Bootstrap tooltip conflict -->
<script>$.widget.bridge('uibutton', $.ui.button);</script>

<!-- ===== AdminLTE / plug-in imports (unchanged) ===== -->
<script src="<?php echo base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url ?>plugins/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url ?>plugins/sparklines/sparkline.js"></script>
<script src="<?php echo base_url ?>plugins/select2/js/select2.full.min.js"></script>
<script src="<?php echo base_url ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="<?php echo base_url ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="<?php echo base_url ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo base_url ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url ?>dist/js/adminlte.js"></script>

<!-- (Optional) Ionicons if you want to use them instead of FontAwesome -->
<!--  
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule  src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
-->