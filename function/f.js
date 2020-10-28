// muestra de color
function revealColor() {
	let elements = document.querySelectorAll('.correct')
	for (let i = 0; i < elements.length; i++) {
		elements[i].style.color = 'yellow';
	}
}

// hace que vuelva al color predeterminado despues de 4 sec
function vanishColor(){
	let elements = document.querySelectorAll('.correct');
	for (let i = 0; i < elements.length; i++) {
		elements[i].style.color = 'white';
	}
}

// se muestran durantos los segundos
function showCorrectCells4Seconds() {
	revealColor();
	setTimeout(() => {
		vanishColor()
	}, 4000);
}

// funcion que da clases cuando clicas
function toogle(id) {
	let element = document.getElementById(id);
	if (element.className === 'toogled') {
		element.className = 'untoogled';
	}
	else {
		element.className = 'toogled';
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