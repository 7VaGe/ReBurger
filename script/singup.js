
    var emailValue = document.getElementById("newsletter1").value;
    var email = document.getElementById("newsletter1");
    var signup = document.getElementById("signupNL");

    function signUpNwsL() {
        if (document.forms["signupform"]["enable"].checked)
            alert("c");
            emailValue.value("");
            email.style.display="none";
            signup.style.display="none";
    }
