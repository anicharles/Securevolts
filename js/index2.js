function showSpinner() {
    var spinner = document.getElementById("spinnerall");
    var main = document.querySelector('.spinner-border');
    var lock = document.getElementById("lock");
    var small = document.getElementById("smalltxt");
    var blurry = document.querySelectorAll('.blur');
    setTimeout(() => {
        spinner.style.display = "block";
        blurry.forEach((element) => {
            element.classList.add('filter');
         });
        setTimeout(() => {
            main.style.display = "none";
            lock.style.display = "block";
            small.innerHTML = "Connection Secured";
            setTimeout(() => {
                spinner.style.display = "none";
                blurry.forEach((element) => {
                    element.classList.remove('filter');
                 });
            }, 2000);
        }, 5000);
    }, 2000);
}