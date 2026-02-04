<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DND Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>
/* 🌈 Background Animation */
body {
    margin: 0;
    padding: 0;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #1a1a40, #003366, #007bff);
    background-size: 400% 400%;
    animation: gradientShift 8s ease infinite;
    font-family: 'Poppins', sans-serif;
}

/* ✨ Glassmorphism Card */
.card {
    width: 90%;
    max-width: 400px;
    padding: 35px 30px;
    border-radius: 20px;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(12px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    color: #fff;
    text-align: center;
    transition: all 0.3s ease-in-out;
    border: 1px solid rgba(255,255,255,0.2);
}

.card:hover {
    transform: scale(1.02);
}

/* 🧠 Title */
h4 {
    font-weight: 700;
    margin-bottom: 25px;
    color: #fff;
    text-shadow: 0 2px 8px rgba(0,0,0,0.4);
}

/* 🔤 Inputs */
.input-group {
    margin-bottom: 18px;
}
.input-group-text {
    background-color: rgba(255,255,255,0.2);
    color: #fff;
    border: none;
    backdrop-filter: blur(5px);
}
.form-control {
    border: none;
    outline: none;
    background-color: rgba(255,255,255,0.15);
    color: #fff;
    font-size: 16px;
}
.form-control::placeholder {
    color: rgba(255,255,255,0.7);
}

/* 🎯 Buttons */
.btn-primary {
    border: none;
    padding: 12px;
    font-weight: 600;
    border-radius: 30px;
    transition: all 0.3s ease-in-out;
    position: relative;
    overflow: hidden;
    z-index: 1;
}

.btn-primary::before {
    content: "";
    position: absolute;
    left: 50%;
    top: 50%;
    width: 0;
    height: 0;
    background: rgba(255,255,255,0.3);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: width 0.4s ease, height 0.4s ease;
    z-index: -1;
}

.btn-primary:hover::before {
    width: 300%;
    height: 300%;
}

.btn-primary:hover {
    transform: translateY(-2px);
}

/* ⚠ Message */
#msg {
    min-height: 25px;
    font-weight: 500;
    margin-top: 10px;
    font-size: 15px;
}

/* 🌊 Floating Animation */
@keyframes gradientShift {
    0% {background-position: 0% 50%;}
    50% {background-position: 100% 50%;}
    100% {background-position: 0% 50%;}
}

</style>
</head>
<body>

<!-- 💫 Login Card -->
<div class="card shadow-lg">
    <h4><i class="fa-solid fa-shield-halved me-2"></i> DND Secure Login</h4>

    <!-- Login Fields -->
    <div id="step1">
        <div class="mb-3 input-group">
            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
            <input type="email" id="email" class="form-control" placeholder="Email Address">
        </div>
        <div class="mb-3 input-group">
            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
            <input type="password" id="password" class="form-control" placeholder="Password">
        </div>
        <button id="loginBtn" class="btn btn-primary w-100">
            <i class="fa-solid fa-right-to-bracket me-1"></i> Login
        </button>
    </div>

    <div id="msg" class="text-center text-warning mt-3"></div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function(){
    $('#loginBtn').click(function(){

        let btn = $(this);
        btn.prop('disabled', true);
        let original = btn.html();
        btn.html('<span class="spinner-border spinner-border-sm"></span> Checking...');

        $.post('<?=site_url('admin/login/check_credentials')?>', {
            email: $('#email').val(),
            password: $('#password').val()
        }, function(res){
            btn.prop('disabled', false);
            btn.html(original);

            let data = JSON.parse(res);

            $('#msg').text(data.message)
                .removeClass('text-success text-danger')
                .addClass(data.status ? 'text-success' : 'text-danger');

            if(data.status){
                window.location.href = data.redirect;
            }
        });
    });
});
</script>

</body>
</html>
