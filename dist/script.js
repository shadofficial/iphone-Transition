// ===========================
// Twitter: www.twitter.com/enipx
// Dribble: www.https://dribbble.com/enipx
// Behance: https://www.behance.net/enipx
// Github: http://github.com/enipx;
// ===========================
const nav_time 	= document.querySelector(".top_nav .time"),
	  home_time	= document.querySelector(".date_time .time"),
	  home_date = document.querySelector(".date_time .date"),
	  months 	= ["January", "Feburary", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
	  days 		= ["Sunday", "Monday", "Tuesday", "WednesDay", "Thursday", "Friday", "Saturday"],
	  nav_close = document.querySelector(".nav_close"),
	  nav_open 	= document.querySelector(".nav_icon"),
	  nav 		= document.querySelector(".nav"),
	  iphone    = document.querySelector(".iphone_p"),
	  wallpaper = document.querySelector(".c_wallpaper"),
	  c_color   = document.querySelector(".c_color"),
	  u_phone   = document.querySelector(".u_phone"),
	  s_back    = document.querySelector(".s_back")
	  frontCase = document.querySelector(".iphone_front"),
	  backCase 	= document.querySelector(".iphone_back"),
	  lock_icon = document.querySelector(".date_time .lock"),
	  home_icon = document.querySelector(".home_icon"),
	  bottom_icon = document.querySelector(".bottom_icon"),
	  desktop 	= window.matchMedia("(min-width: 760px)");
// Date & Time
function date_time() {
	let date 	= new Date(),
		hr 		= date.getHours();
		min 	= date.getMinutes(),
		sec 	= date.getSeconds(),
		month 	= date.getMonth(),
		day 	= date.getDay(),
		dateNow = date.getDate(),
		am_pm 	= (hr < 12 && hr != 12) ? "AM" : "PM";
		hrMod 	= hr % 12 || 12;
		hrReMod = (hr < 10 && hr != 0) ? "0" : "";
		minMod 	= (min < 10) ? "0" : "";

	home_date.textContent 	= `${days[day]}, ${months[month]} ${dateNow}`;
	nav_time.textContent 	= `${hrReMod}${hrMod}:${minMod}${min} ${am_pm}`;
	home_time.textContent 	= `${(hr < 10) ? "0" : ""}${hr}:${minMod}${min}`;

}
// Remove Nav
function removeNav() {
	nav.classList.remove("nav_active");
	iphone.classList.remove("active", "zoom");
}
// Show Nav
function showNav() {
	nav.classList.add("nav_active");
	iphone.classList.add("active", "zoom");
}
// Show BackCase
function showBackCase (hide) {
	s_back.textContent 			= hide;
	backCase.style.display 		= "inline";
	backCase.style.transform 	= "scale(1.2)";
	frontCase.style.display 	= "none";
}
// Hide BackCase
function hideBackCase (show) {
	s_back.textContent 			= show;
	backCase.style.display 		= "none";
	frontCase.style.display 	= "inline";
	frontCase.style.transform 	= "scale(1.2)";
}
// Unlock Phone
function unlockPhone (lock) {
	u_phone.textContent = lock;
	home_icon.classList.add("unlock");
	lock_icon.classList.add("unlock");
	bottom_icon.classList.add("unlock");
}
// Lock Phone
function lockPhone (unlock) {
	u_phone.textContent = unlock;
	home_icon.classList.remove("unlock");
	lock_icon.classList.remove("unlock");
	bottom_icon.classList.remove("unlock");
}

window.addEventListener("load", () => {
	date_time();
	setInterval(date_time, 10000);

	if (desktop.matches) {
		showNav();
	}
	// Nav Open 
	nav_open.addEventListener("click", () => {
		showNav();
	});
	// Nav Close
	nav_close.addEventListener("click", () => {
		removeNav();
	});
	// Change Wallpaper
	wallpaper.addEventListener("click", () => {
		let face = document.querySelector(".iphone_front .face");
		if (face.classList.contains('c_wall')) {
			wallpaper.textContent = "Change Wallpaper";
		} else {
			wallpaper.textContent = "Default Wallpaper";
		}
		face.classList.toggle("c_wall");
		if (!desktop.matches) {
			removeNav();
		}

	});
	// Show BackCase
	s_back.addEventListener("click", () => {
		let show 	= "Show BackCase",
			hide 	= "Hide BackCase";

		if (s_back.textContent == show) {
			showBackCase(hide);

		} else if (s_back.textContent == hide) {
			hideBackCase(show);
		}

		if (!desktop.matches) {
			removeNav();
		}

	});
	// Unlock Phone
	u_phone.addEventListener("click", () => {
		let unlock 	= "Unlock Phone",
			lock 	= "Lock Phone";

		if (u_phone.textContent == unlock && !home_icon.classList.contains('unlock') &&
			!lock_icon.classList.contains('unlock') && !bottom_icon.classList.contains('unlock')) {
			
			if (frontCase.style.display == "none") {
				hideBackCase ("Show BackCase");
			}

			unlockPhone(lock);


		} else {
			lockPhone(unlock);
		}

		if (!desktop.matches) {
			removeNav();
		}


	})

})