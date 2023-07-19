function togglePassword() {
    const input=document.getElementById('inputPassword');
    const icon=document.getElementById('icon');

    if (input.type === "password") {
        input.type = "text";
        icon.classList.replace('bi-eye-slash-fill','bi-eye-fill');
    }
    else {
        input.type="password";
        icon.classList.replace('bi-eye-fill','bi-eye-slash-fill');
    }
}