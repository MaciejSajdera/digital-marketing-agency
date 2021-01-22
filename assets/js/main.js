/**
 * Main JavaScript file.
 */
import Navigation from "./navigation.js";
import skipLinkFocus from "./skip-link-focus-fix.js";

document.addEventListener("DOMContentLoaded", () => {
	const navigation = new Navigation();

	skipLinkFocus();

	navigation.setupNavigation();
	navigation.enableTouchFocus();

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
});
