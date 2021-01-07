// import Swiper JS
import Swiper, {
	Navigation,
	Autoplay,
	Pagination,
	Parallax,
	EffectFade,
	Lazy
} from "swiper";
// import Swiper styles
import "swiper/swiper-bundle.css";

document.addEventListener("DOMContentLoaded", () => {
	console.log("test");
	Swiper.use([Navigation, Autoplay, Lazy]);

	var myBrandsSwiper = new Swiper(".swiper-container", {
		direction: "horizontal",
		loop: true,
		centeredSlides: true,
		slidesPerView: 3,
		speed: 3500,
		autoplay: {
			delay: 0
		},
		breakpoints: {
			992: {
				slidesPerView: 5
			}
		},
		autoplayDisableOnInteraction: false,
		grabCursor: true,

		scrollbar: false,

		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev"
		}
	});
});
