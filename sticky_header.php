<?php
// sticky header for 360 Broadway Template
?>

<div class="sticky_header inner_header">
	<div class="top_header">
		<div class="container-fluid">
			<div class="top_header_inner">
				<div class="row">
					<div class="col-7 col-md-5 align-self-center">
						<div class="header_logo">
							<a href="/">
								<img src="<?php the_field('logo_3', 'option');?>" alt="<?php bloginfo('name');?>">
							</a>
						</div>
					</div>
					<div class="col-5 col-md-7 align-self-center">
						<div class="header_nav">
							<ul>
								<li><a href="#" data-toggle="modal" data-target="#scheduletourmodal">Schedule Tour</a></li>
								<li class="phone_icon"><a href="tel:<?php the_field('phone', 'option');?>">
									<img src="<?php echo get_template_directory_uri(); ?>/img/phone-icon.png" alt="Phone">
								</a></li>
								<li class="menu_icon menu_open">
									<a href="#">
										<span></span>
										<span></span>
										<span></span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $("body").addClass("showing_sticky_header");
    } else {
        $("body").removeClass("showing_sticky_header");
    }
});
</script>

<style>
  .sticky_header {
    position: fixed;
    top: -300px;
    left: 0;
    z-index: 999;
    width: 100%;
    transition: all 0.5s;
    background: #fff;
    box-shadow: 0 0 6px 0px rgb(0 0 0 / 17%);
}
  body.showing_sticky_header .sticky_header {
    top: 0;
}
</style>