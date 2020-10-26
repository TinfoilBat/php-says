function revealColor() {
	let elements = document.querySelectorAll('.correct')
	for (let i = 0; i < elements.length; i++) {
		elements[i].style.color = 'yellow';
	}
}

function vanishColor() {
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
	if ((!(element.classList.contains('toogled'))) || (!(element.classList.contains('untoogled')))) {
		element.classList.add('toogled')
	}
	else if (element.classList.contains('toogled')) {
		element.classList.toggle('toogled')
	}

}
function loadToogleOnCells() {
	let elements = document.getElementsByTagName('td');
	for (let i = 0; i < elements.length; i++) {
		elements[i].addEventListener("click", toogle(elements[i].id));
	}
}
function solve() {
	let elements = document.querySelectorAll('.toogled');
	let corrects = document.querySelectorAll('.correct');

	if (elements === corrects) {
		return true;
	} if (elements == null || corrects == null) {
		return false;
	} if (elements.length !== corrects.length) {
		return false;
	}

	for (let i = 0; i < elements.length; ++i) {
		if (elements[i] !== corrects[i]) {
			return false;
		}
	}
	return true;
}

function postGame() {
	let result = solve();
	if (result === true) {
		window.location = '/victoria.php';
	}
	else {
		window.location = '/derrota.php'
	}
}

// function startFanfare() {
// 	loadToogleOnCells();
// 	showCorrectCells4Seconds();
// }
