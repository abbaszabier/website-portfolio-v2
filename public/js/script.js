const typed = new Typed(".typing", {
    strings: ["Web Developer", "UI Designer"],
    typeSpeed: 80,
    BackSpeed: 60,
    loop: true,
});

function sendMail() {
    let params = {
        email_id: document.getElementById("email").value,
        subject: document.getElementById("subject").value,
        message: document.getElementById("message").value,
    };
    emailjs
        .send("service_p0wqy6v", "template_tqzz1cp", params)
        .then(function () {
            swal(
                "Good job!",
                "Your question has been successfully send!",
                "success"
            );
        });
}
