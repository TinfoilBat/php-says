// muestra de color
function revealColor() {
	let elements = document.querySelectorAll('.correct')
	for (let i = 0; i < elements.length; i++) {
		elements[i].style.color = 'yellow';
	}
}

<<<<<<< HEAD
function vanishColor() {
=======
// hace que vuelva al color predeterminado despues de 4 sec
function vanishColor(){
>>>>>>> dvd_dev
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
	if ((!(element.classList.contains('toogled'))) || (!(element.classList.contains('untoogled')))) {
		element.classList.add('toogled')
	}
	else {
		element.classList.remove('toogled')
	}

}

// Recorre la tabla y hace que las celdas sean clicables
function loadToogleOnCells() {
	let elements = document.getElementsByTagName('td');
	for (let i = 0; i < elements.length; i++) {
		elements[i].addEventListener("click", toogle(elements[i].id));
	}
}
<<<<<<< HEAD
=======

// carga las celdas correctas y las ilumina (fallo)
function startFanfare() {
	loadToogleOnCells();
	showCorrectCells4Seconds();
}

>>>>>>> dvd_dev
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
