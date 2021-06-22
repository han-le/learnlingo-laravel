require('./bootstrap');
console.log('hello');

//Hide the message after 3s
window.addEventListener('load', function () {
    console.log('Page is loaded');
    let register_alert = document.getElementById("register-alert");
    console.log(register_alert);
    if (typeof (register_alert) != 'undefined' && register_alert != null) {
        setTimeout(function () {
            register_alert.style.opacity = 0;
            register_alert.style.transition = "opacity 1s";
        }, 2000);
    }
})


