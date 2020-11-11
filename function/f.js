let readyToPlay = false;
let initialTime = 0;
let completionTime = 0;
let tries = 0;

function revealColor() {
	let elements = document.querySelectorAll('.correct')
	for (let i = 0; i < elements.length; i++) {
		elements[i].style.backgroundColor = '#f4e04d';
	}
}

// hace que vuelva al color predeterminado despues de 4 sec
function vanishColor() {
	let elements = document.querySelectorAll('.correct');
	for (let i = 0; i < elements.length; i++) {
		elements[i].style.backgroundColor = '';
	}
}

// se muestran durantos los segundos
function showCorrectCellsSomedelay(timeout) {
	if (readyToPlay == true) {
		return 0
	} else {
		revealColor();
		setTimeout(() => {
			vanishColor()
		}, timeout);
	}
}


function toggle(id) {
	if (readyToPlay == false) {
		return 0
	} else {
		let element = document.getElementById(id);
		element.classList.toggle('toggled');
	}
}

// Recorre la tabla y hace que las celdas sean clicables
function loadToggleOnCells() {
	readyToPlay = true;
	let elements = document.getElementsByTagName('td');
	for (let i = 0; i < elements.length; i++) {
		elements[i].addEventListener("click", toggle());
	}

}

// carga las celdas correctas y las ilumina. También comunica de manera global mediante booleano si ha sido llamada , para luego ejecutar un timestamp.
function startFanfare(timeout) {
	showCorrectCellsSomedelay(timeout);
	setTimeout(() => {
		loadToggleOnCells();
	}, timeout);
	setTimeout(() => {
		initialTime = createTimestampInSeconds();
	}, timeout);

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
		let stats = fillFormData('victory');
		stats.submit();
	}
	else {
		let stats = fillFormData('fail');
		stats.submit();
	}

}

function createTimestampInSeconds(){
	return Math.floor(Date.now() / 1000);
}

function fillFormData(form_id) {
	completionTime = createTimestampInSeconds();
	let finalTime = completionTime - initialTime;
	//This solution below is horrible
	document.getElementById(form_id +'_final_time').value = finalTime;
	document.getElementById(form_id +'_tries').value = tries;	
	let form = document.getElementById(form_id)

	return form;
}


