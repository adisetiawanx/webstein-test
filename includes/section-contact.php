<section id="contact" class="relative bg-white py-16 lg:py-28 z-[999] px-5 xl:px-0">
	<div class="container mx-auto flex flex-col lg:flex-row gap-16 lg:gap-28 justify-between">
		<div class="flex-1 space-y-8 z-[9999999]">
			<h4 class="uppercase text-[#1675ED]">Contact Us</h4>
			<h3 class="font-bold text-5xl  leading-snug tracking-wide">Get in touch</h3>
			<p class="tracking-wide leading-7 max-w-xl">Call us during business hours, send us an email or fill out the quote request form and we'll be in touch as soon as possible.</p>
			<div class="space-y-5">
				<div class="flex gap-2">
					<img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/email-icon.svg") ?>" alt="email" />
					<p>info@noprobs.com.au</p>
				</div>
				<div class="flex gap-2.5">
					<img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/phone-icon.svg") ?>" alt="email" />
					<p>(08) 9315 5545</p>
				</div>
				<div class="flex gap-2">
					<img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/pin-icon.svg") ?>" alt="email" />
					<p>3/52 Roberts St, Osborne Park WA 6017</p>
				</div>
			</div>
		</div>
		<div class="flex-1 space-y-8 z-[9999999]">
			<h3 class="font-bold text-5xl  leading-snug tracking-wide mb-10">Schedule a job</h3>
			<form class="grid grid-cols-2 gap-10 bg-white p-3 rounded-lg shadow lg:p-0 lg:shadow-none lg:rounded-none">
				<label for="first_name" class="col-span-1">
					<input id="first_name" name="first_name" type="text" placeholder="First Name" class="border-b border-[#ECECE0] focus:border-[#E0FB60] focus:outline-0 py-3 w-full bg-transparent"/>
				</label>
				<label for="last_name" class="col-span-1">
					<input id="last_name" name="last_name"  type="text" placeholder="Last Name" class="border-b border-[#ECECE0] focus:border-[#E0FB60] focus:outline-0 py-3 w-full bg-transparent"/>
				</label>
				<label for="email" class="col-span-1">
					<input id="email" name="email" type="email" placeholder="Email" class="border-b border-[#ECECE0] focus:border-[#E0FB60] focus:outline-0 py-3 w-full bg-transparent"/>
				</label>
				<label for="business_name" class="col-span-1">
					<input id="business_name" name="business_name" type="text" placeholder="Business Name" class="border-b border-[#ECECE0] focus:border-[#E0FB60] focus:outline-0 py-3 w-full bg-transparent"/>
				</label>
				<label for="phone" class="col-span-1">
					<input id="phone" name="phone" type="text"  placeholder="Phone" class="border-b border-[#ECECE0] focus:border-[#E0FB60] focus:outline-0 py-3 w-full bg-transparent"/>
				</label>
				<label for="address" class="col-span-1">
					<input id="address" name="address" type="text" placeholder="Your Address" class="border-b border-[#ECECE0] focus:border-[#E0FB60] focus:outline-0 py-3 w-full bg-transparent"/>
				</label>
				<label for="message" class="col-span-2">
					<textarea id="message" name="message" placeholder="Enter a description of the work you would like done..." class="border-b border-[#ECECE0] focus:border-[#E0FB60] focus:outline-0 py-3 w-full lg:min-h-[120px] bg-transparent"></textarea>
				</label>
				<button type="submit" class="flex gap-2  items-center justify-center bg-[#E0FB60] hover:bg-[#E0FB60]/80 w-full py-3 lg:py-5 font-medium"><span><img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/arrow-up-right-icon.svg") ?>" alt="arrow up right" /></span>Submit</button>
			</form>
		</div>
	</div>
	<img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/contact-bottomleft-1.webp") ?>" alt="vector" class="absolute bottom-0 left-0 z-[100]" />
	<img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/contact-bottomleft-2.webp") ?>" alt="vector"  class="absolute bottom-0 left-0 z-[80]" />
</section>