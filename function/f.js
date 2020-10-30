let readyToPlay = false;

function revealColor() {
	let elements = document.querySelectorAll('.correct')
	for (let i = 0; i < elements.length; i++) {
		elements[i].style.backgroundColor  = '#f4e04d';
	}
}

// hace que vuelva al color predeterminado despues de 4 sec
function vanishColor(){
	let elements = document.querySelectorAll('.correct');
	for (let i = 0; i < elements.length; i++) {
		elements[i].style.backgroundColor  = '';
	}
}

// se muestran durantos los segundos
function showCorrectCellsSomeSeconds(seconds) {
	revealColor();
	setTimeout(() => {
		vanishColor()
	}, seconds);
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


// funcion que da clases cuando clicas
function toogle(id) {
	let element = document.getElementById(id);
	if ((!(element.classList.contains('toogled'))) || (!(element.classList.contains('untoogled')))) {
		element.classList.add('toggled')
	}
	else {
		element.classList.remove('toggled')
	}

}

// Recorre la tabla y hace que las celdas sean clicables
function loadToogleOnCells() {
	let elements = document.getElementsByTagName('td');
	for (let i = 0; i < elements.length; i++) {
		elements[i].addEventListener("click", toogle(elements[i].id));
	}
}

// carga las celdas correctas y las ilumina (fallo)
function startFanfare(seconds) {
	showCorrectCellsSomeSeconds(seconds);
	loadToogleOnCells();
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
		window.location = 'victoria.php';
	}
	else {
		window.location = 'derrota.php'
	}
}

