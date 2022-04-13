// On click odds set active label
let btnContainer = document.getElementById("matches_row");
if (typeof (btnContainer) != 'undefined' && btnContainer != null) {
    let btns = btnContainer.getElementsByTagName("label");
    for (let i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
            (document.querySelector('.active')) ? document.querySelector('.active').classList.remove('active') : '';
            this.classList.add('active');
        });
    }
}
