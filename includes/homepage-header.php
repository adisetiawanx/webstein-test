<div id="mobile-header" class="sticky h-screen w-full top-0 bottom-0 right-0 left-0 bg-white z-[9999999] hidden  p-5">
    <button onclick="closeMobileNav()" class="w-full flex justify-end"><img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/close-icon.svg") ?>" alt="close" class="w-[30px]"/></button>
    <nav>
        <ul class="flex flex-col justify-between gap-5 ">
			<?php
			wp_nav_menu(
				array('theme_location' => 'header', 'container'      => false,
				      'items_wrap'     => '%3$s')
			)
			?>
        </ul>
    </nav>
</div>
<header id="hero-banner" class="h-screen  bg-cover px-5 xl:px-0">
	<div id="top-header" class="container relative mx-auto flex flex-col md:flex-row  items-center justify-between py-5 bg-contain border-b border-white/25 md:border-0">
        <a href="/" >
            <h1 class="text-3xl font-bold hidden">No Probs</h1>
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/logo.png") ?>" alt="No Probs"/>
        </a>
        <button onclick="openMobileNav()" class="md:hidden absolute top-6 right-5"><img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/burger-icon.svg") ?>" class="w-[30px] "/></button>
		<div class="flex justify-between items-center mt-5 md:mt-0 gap-20 md:gap-40">
			<div>
				<p class="uppercase text-white/65 text-sm">Call Us</p>
				<p class="text-white hover:text-white/80"><a href="tel:0893155545">(08) 9315 5545</a></p>
			</div>
			<div>
				<p class="uppercase text-white/65 text-sm">Email Us</p>
				<p class="text-white hover:text-white/80"><a href="mailto:info@noprobs.com.au">info@noprobs.com.au</a></p>
			</div>
		</div>
	</div>
	<div id="bottom-header" class="hidden md:block w-full border-white/25 border-b border-t py-5">
		<nav class="container mx-auto">
			<ul class="flex justify-between items-center">
				<?php
				wp_nav_menu(
					array('theme_location' => 'header', 'container'      => false,
					      'items_wrap'     => '%3$s')
				)
				?>
			</ul>
		</nav>

	</div>
	<div id="hero" class="flex flex-col lg:flex-row justify-between container mx-auto items-center gap-10 lg:gap-0 py-16 lg:py-40">
		<div class="flex flex-col justify-between items-center lg:items-start gap-20 lg:gap-40">
			<h2 class="text-4xl lg:text-8xl font-bold text-white lg:max-w-4xl leading-snug tracking-wide z-[999999] text-center lg:text-left">Emergency plumber Perth</h2>
			<div class="z-[999999]">
				<img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/google-icon.svg") ?>" alt="google rating" class="w-[60px] ml-6"/>
				<div class="mt-4">
					<img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/five-stars-icon.svg") ?>" alt="google rating"/>
					<p class="font-medium text-2xl text-white ml-6">4.9<span class="text-white/65 font-normal text-base">/5.0</span></p>
					<p class="text-white/65">Google Rating</p>
				</div>
			</div>
			<img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/hero-bottomleft.png") ?>" alt="hero-bottomleft" class="absolute bottom-0 left-0 "/>
		</div>
		<div class="space-y-32 z-[999999] hidden lg:block">
			<div class="grid grid-cols-2 gap-10 max-w-2xl">
				<div class="flex gap-3">
					<img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/seal-check-icon.svg") ?>" alt="seal check" />
					<p class="text-white uppercase text-lg">Local Plumber / Gas Fitter to Your Door</p>
				</div>
				<div class="flex gap-3">
					<img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/seal-check-icon.svg") ?>" alt="seal check"/>
					<p class="text-white uppercase text-lg">The Price We Quote is the Price You Pay-Guaranteed!</p>
				</div>
				<div class="flex gap-3">
					<img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/seal-check-icon.svg") ?>" alt="seal check"/>
					<p class="text-white uppercase text-lg">Emergency Plumber Service</p>
				</div>
				<div class="flex gap-3">
					<img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/seal-check-icon.svg") ?>" alt="seal check"/>
					<p class="text-white uppercase text-lg">Same Day Hot Water</p>
				</div>

			</div>
			<div class="flex gap-5">
				<a href="/" class="flex gap-2 items-center justify-center bg-[#E0FB60] hover:bg-[#E0FB60]/80 w-full py-5 font-medium"><span><img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/arrow-up-right-icon.svg") ?>" alt="arrow up right" /></span><p>Schedule A Job</p></a>
				<a href="/" class="flex gap-2 items-center justify-center bg-[#1675ED] hover:bg-[#1675ED]/80 w-full py-5 text-white font-medium"><span><img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/arrow-up-right-yellow-icon.svg") ?>" alt="arrow up right" /></span><p>Call Us Now</p></a>
			</div>
		</div>
	</div>
</header>