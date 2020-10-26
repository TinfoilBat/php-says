function revealColor() {
	let elements = document.querySelectorAll('.correct')
	for (let i = 0; i < elements.length; i++) {
		elements[i].style.color = 'yellow';
	}
}

function vanishColor(){
	let elements = document.querySelectorAll('.correct')
	for (let i = 0; i < elements.length; i++) {
		elements[i].style.color = 'black';
	}
}

function showCorrectCells4Seconds() {
	revealColor();
	setTimeout(() => {
		vanishColor()
	}, 4000);
}