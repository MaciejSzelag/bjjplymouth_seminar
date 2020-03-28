const b_adults = document.getElementById('adults');
const b_kids = document.getElementById('kids');
const b_button = document.getElementById('button1');
const price_contaoner = document.getElementById('pr-con');
let active = false;

function changeBoard() {
    if (!active) {
        b_button.classList.add('active');
        price_contaoner.classList.add('active-container');

        active = !active;
    } else if (active) {

        b_button.classList.remove('active');
        price_contaoner.classList.remove('active-container');
        active = !active;
    }
}
b_adults.addEventListener("click", changeBoard)
b_kids.addEventListener("click", changeBoard)