let pass = document.querySelectorAll(".password1");
document.querySelector(".checkbox").addEventListener("click", () => {

    pass.forEach(pwd => {
        if (pwd.type === "text") {
            pwd.type = "password";
        } else {
            pwd.type = "text";
        }
    })
});

pass[1].addEventListener("keyup", () => {
    let password = pass[0].value;
    if (password === pass[1].value) {
        document.querySelector(".validate-pw").innerText = "Perfect Match";
        document.querySelector(".validate-pw").style.color = "green";
    } else {
        document.querySelector(".validate-pw").innerText = "Password Did Not Match";
        document.querySelector(".validate-pw").style.color = "red";
    }
})