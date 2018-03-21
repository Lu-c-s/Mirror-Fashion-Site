var inputTamanho = document.getElementById('myRange');
var outputTamanho = document.getElementById('tamanho');

outputTamanho.innerHTML = inputTamanho.value;

inputTamanho.oninput = function(){
	outputTamanho.innerHTML = inputTamanho.value;
}