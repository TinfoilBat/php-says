function revealColor() {
	let elements = document.querySelectorAll('.correct')
	for (let i = 0; i < elements.length; i++) {
		elements[i].style.color = 'yellow';
	}
}

function vanishColor(){
	let elements = document.querySelectorAll('.correct');
	for (let i = 0; i < elements.length; i++) {
		elements[i].style.color = 'white';
	}
}

function showCorrectCells4Seconds() {
	revealColor();
	setTimeout(() => {
		vanishColor()
	}, 4000);
}

function toogle(id) {
	let element = document.getElementById(id);
	if (element.className === 'toogled') {
		element.className = 'untoogled';
	}
	else {
		element.className = 'toogled';
	}
}
function loadToogleOnCells() {
	let elements = document.getElementsByTagName('td');
	for (let i = 0; i < elements.length; i++) {
		elements[i].addEventListener("click", toogle(elements[i].id));
	}
}

function startFanfare() {
	loadToogleOnCells();
	showCorrectCells4Seconds();
}

function solve() {
	let elements = document.querySelectorAll('.toogled');
	let corrects = document.querySelectorAll('.correct');

	if (elements === corrects) {
		return true;
	}
	else {
		return false;
	}
}