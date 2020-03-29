const b_adults = document.getElementById('adults');
const b_kids = document.getElementById('kids');
const b_priv = document.getElementById('priv');
const b_button = document.getElementById('button1');
const price_contaoner = document.getElementById('pr-con');

function changeBoard() {
    if (this.classList.contains("priv")) {
        b_button.classList.add('active-priv');
        b_button.classList.remove('active-kids');
        price_contaoner.classList.add('active-private');
        price_contaoner.classList.remove('active-kids-c');
    } else if (this.classList.contains("kids")) {
        b_button.classList.add('active-kids');
        b_button.classList.remove('active-priv');
        price_contaoner.classList.remove('active-private');
        price_contaoner.classList.add('active-kids-c');
    } else if (this.classList.contains("adults") && b_kids.classList.contains("kids") || b_priv.classList.contains("priv")) {
        b_button.classList.remove('active-kids');
        b_button.classList.remove('active-priv');
        price_contaoner.classList.remove('active-private');
        price_contaoner.classList.remove('active-kids-c');
    }
}
b_adults.addEventListener("click", changeBoard)
b_kids.addEventListener("click", changeBoard)
b_priv.addEventListener("click", changeBoard)