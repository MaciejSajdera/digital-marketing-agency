/**
 * Main JavaScript file.
 */
import skipLinkFocus from "./skip-link-focus-fix.js";

import { directionHover, isElementInViewport } from "./helperFunctions";

document.addEventListener("DOMContentLoaded", () => {
	const myPreloader = document.querySelector(".my-preloader");
	const page = document.querySelector("#page");

	setTimeout(() => {
		myPreloader.classList.add("my-preloader-off");
	}, 500);

	setTimeout(() => {
		myPreloader.classList.add("my-preloader-none");
		page.classList.add("page-loaded");
		const cookieInfoText = document.querySelector("#cookie-text").innerHTML;

		let cookieLaw = {
			dId: "cookie-law-div",
			bId: "cookie-law-button",
			iId: "cookie-law-item",
			show: function(e) {
				if (localStorage.getItem(cookieLaw.iId)) {
					return !1;
				} else {
					var o = document.createElement("div"),
						i = document.createElement("p"),
						t = document.createElement("button");
					t.classList.add("orange-oval-button");
					(i.innerHTML = e.msg),
						(t.id = cookieLaw.bId),
						(t.innerHTML = e.ok),
						(o.id = cookieLaw.dId),
						o.appendChild(t),
						o.appendChild(i),
						document.body.insertBefore(o, document.body.lastChild),
						t.addEventListener("click", cookieLaw.hide, !1);
				}
			},

			hide: function() {
				document
					.getElementById(cookieLaw.dId)
					.classList.add("cookie-law-accepted"),
					localStorage.setItem(cookieLaw.iId, "1");
			}
		};
		cookieLaw.show({
			msg: cookieInfoText ? cookieInfoText : "text",
			ok: "ACCEPT"
		});
	}, 600);

	const circleMenu = document.querySelector(".menu-circle");

	circleMenu.addEventListener("click", function() {
		this.classList.toggle("clicked");
		this.querySelector(".line-wrapper").classList.toggle("clicked");

		const mobileMenuContainer = document.querySelector(
			".mobile-menu-container"
		);
		mobileMenuContainer.classList.toggle("mobile-menu-open");
	});

	const allPrimaryMenuItems = document.querySelectorAll("#primary-menu > li");

	if (allPrimaryMenuItems) {
		const linksToDirectionHover = [].slice.call(allPrimaryMenuItems, 0);
		linksToDirectionHover.forEach(node => new directionHover(node));
	}

	function getId(url) {
		const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
		const match = url.match(regExp);

		return match && match[2].length === 11 ? match[2] : null;
	}

	const allVideoParts = document.querySelectorAll(".video-part");

	if (allVideoParts) {
		allVideoParts.forEach(videoPart => {
			const myModal = videoPart.querySelector(".modal");
			const videoContainer = videoPart.querySelector("#videoContainer");
			const myUrl = videoPart.querySelector("#ytLink").innerText;
			const myIframe = videoPart.querySelector("#myIframe");

			console.log(myUrl);

			if (myUrl) {
				const myEmbedLink = getId(myUrl);
				console.log(myEmbedLink);
				let iframeMarkup;

				myEmbedLink
					? (iframeMarkup =
							'<iframe width="560" height="315" src="//www.youtube.com/embed/' +
							myEmbedLink +
							'" frameborder="0" allowfullscreen></iframe>')
					: (iframeMarkup =
							'<iframe width="560" height="315" src="' +
							myUrl +
							'" frameborder="0" allowfullscreen></iframe>');

				myIframe.innerHTML = iframeMarkup;
			}

			videoContainer.addEventListener("click", () => {
				myModal.classList.contains("modal-closed")
					? myModal.classList.remove("modal-closed")
					: myModal.classList.add("modal-opened");
			});

			const closeModal = () => {
				myModal.classList.remove("modal-opened");
				myModal.classList.add("modal-closed");
				console.log(myIframe.firstElementChild);

				let iframe = myModal.querySelector("iframe");
				let video = myModal.querySelector("video");

				if (iframe) {
					var iframeSrc = iframe.src;
					iframe.src = iframeSrc;
				}
				if (video) {
					video.pause();
				}
			};

			myModal.addEventListener("click", e => {
				console.log(e);
				e.target !== myIframe.firstElementChild ? closeModal() : "";
			});
		});
	}

	const applyButton = document.querySelectorAll(".apply-button");
	const formModal = document.querySelector("#formModal");

	applyButton.forEach(button => {
		button.addEventListener("click", e => {
			e.preventDefault();
			formModal.classList.add("modal-opened");
		});
	});

	formModal.addEventListener("click", e => {
		console.log(e.target);
		e.target === formModal.querySelector("#closeFormModal") ? closeModal() : "";
	});

	const closeModal = () => {
		formModal.classList.remove("modal-opened");
	};
});
