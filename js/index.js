function chooseWallet() {
    var select = document.getElementById("selectCon");
    var blurry = document.querySelectorAll('.blur');

    select.classList.add('activee')
    // document.body.setAttribute("style", "overflow: hidden;");
        blurry.forEach((element) => {
           element.classList.add('filter');
        });
}

// function redirectPage() {
//     setTimeout(() => {
//         window.location.href = "https://securevolts.surge.sh";
//     }, 100);
// }