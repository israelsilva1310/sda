/**
 * Author: Israel C A Silva
 * git: https://github.com/israelsilva1310
 * HomePage: https://israelcasilva.com.br
 **/

window.addEventListener('load', () => {
    var cursos = document.querySelector('#selectCursos');
    var periodos = document.querySelector('#selectPeriodo');

    cursos.onchange = function () {
        var cursoSelecionado = this.value;
        console.log(cursoSelecionado)
    }
});
