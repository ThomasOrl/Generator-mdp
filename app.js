const btnCopy = document.querySelector('.btn-copy');
const txtCopy = document.querySelector('.sec-pass mdp');

btnCopy.addEventListener('click',(e)=>{

    navigator.clipboard.writeText(e.target.previousElementSibling.innerText);

})