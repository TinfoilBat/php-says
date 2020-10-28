let readyToPlay = false;

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

function toggle(id) {
	if (readyToPlay == false) {
		return 0
	} else {
		let element = document.getElementById(id);
		element.classList.toggle('toggled');
	}

}
function allowToggleOnCells() {
	readyToPlay = true;
	}

function solve() {
	let elements = document.querySelectorAll('.toggled');
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

function startFanfare() {
	showCorrectCells4Seconds();
	allowToggleOnCells();
 }
