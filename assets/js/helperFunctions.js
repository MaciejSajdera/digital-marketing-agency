//li hover effect - Noel Delgado | @pixelia_me

class directionHover {
	constructor(element) {
		this.element = element;
		element.addEventListener("mouseover", ev => this.update(ev, "in"));
		element.addEventListener("mouseout", ev => this.update(ev, "out"));
	}

	update(ev, prefix) {
		const directions = { 0: "top", 1: "right", 2: "bottom", 3: "left" };
		const classNames = ["in", "out"]
			.map(p => Object.values(directions).map(d => `${p}-${d}`))
			.reduce((a, b) => a.concat(b));

		this.element.classList.remove(...classNames);
		this.element.classList.add(
			`${prefix}-${directions[getDirectionKey(ev, this.element)]}`
		);
	}
}

const getDirectionKey = (ev, node) => {
	const { width, height, top, left } = node.getBoundingClientRect();
	const l = ev.pageX - (left + window.pageXOffset);
	const t = ev.pageY - (top + window.pageYOffset);
	const x = l - (width / 2) * (width > height ? height / width : 1);
	const y = t - (height / 2) * (height > width ? width / height : 1);
	const directionKey =
		Math.round((Math.atan2(y, x) * (180 / Math.PI) + 180) / 90 + 3) % 4;
	return directionKey;
};

const isElementInViewport = el => {
	const scroll = window.scrollY || window.pageYOffset;
	const boundsTop = el.getBoundingClientRect().top + scroll;

	const viewport = {
		top: scroll,
		bottom: scroll + window.innerHeight
	};

	const bounds = {
		top: boundsTop,
		bottom: boundsTop + el.clientHeight
	};

	return (
		(bounds.bottom >= viewport.top && bounds.bottom <= viewport.bottom) ||
		(bounds.top <= viewport.bottom && bounds.top >= viewport.top)
	);
};

module.exports = {
	directionHover: directionHover,
	getDirectionKey: getDirectionKey,
	isElementInViewport: isElementInViewport
};
