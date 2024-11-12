document.addEventListener("DOMContentLoaded", function (){
    const form =document.querySelector('form');
    const statusTxt = document.querySelector('.button-area span');

    form.onsubmit = function (e) {
        e.preventDefault();
        statusTxt.style.display = "block";
        statusTxt.textContent = "Mengirim Pesanmu ..."
    }

})