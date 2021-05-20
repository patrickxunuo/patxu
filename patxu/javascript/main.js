AOS.init({
    duration: 1200,
});

$(window).on('load', function () {
    AOS.init({
        duration: 1200,
    });
    $(".loader-wrap").hide();
    $(".porfolio-flexgrid-row").css("display", "flex");
    $("#loadBtn").show();
});

const photo = document.querySelectorAll(".item-wrap");

$(".navBtn").bind('mouseover', function () {
    $(".navBtn").removeClass("active");
    $(this).addClass("active");
});

$(".navBtn").bind('mouseout', function () {
    $(".navBtn").removeClass("active");
    if (window.location.href.includes("photos")) {
        $("#phoBtn").addClass("active");
    } else if (window.location.href.includes("aboutme")) {
        $("#aboBtn").addClass("active");
    } else if (window.location.href.includes("home")) {
        $("#homBtn").addClass("active");
    }
});

$("#resBtn").mouseenter(function () {
    $("#resBtn").css("background", "transparent");
    $("#resBtn").css("z-index", "-999");
    $("#resBtn").html(`<button id="engBtn" class="myBtn halfBtn">Eng</button><button id="chiBtn" class="myBtn halfBtn">中</button>`);
    $("#engBtn").show();
    $("#chiBtn").show();
    $("#engBtn").click(()=>window.location.href="resume/english_resume.pdf");
    $("#chiBtn").click(()=>window.location.href="resume/chinese_resume.pdf");
});

$("#resBtn").mouseleave(function () {
    $("#resBtn").css("background", "grey");
    $("#resBtn").html("Resume");
    $("#engBtn").hide();
    $("#chiBtn").hide();
});

$("#backtocon").click(()=>hide_canvas());


$("#submit").bind('click', () => {
    show_canvas();
    const name = $("input[name='name']").val();
    const email = $("input[name='email']").val();
    const subject = $("input[name='subject']").val();
    const message = $("textarea[name='message']").val();
    if (name == '' || email == '' || subject == '' || message == '') {
        $("#alertbox > a").text("Please provide extra info.");
    } else {
        sendEmail(name, email, subject, message);
        $("#alertbox > a").text("Message Sent!");
        $("input[name='name']").val('');
        $("input[name='email']").val('');
        $("input[name='subject']").val('');
        $("textarea[name='message']").val('');
    }
});

$("#photo-1").click(() => {
    var value = $(this).data("value");
    // do other stuff.
});


$("#login-btn").bind('click', () => {
    login();
});

$("#conBtn").click(() => window.location.href = "contact.php");

$("#diveBtn").mouseenter(()=>window.location.href = "home.php");

function show_canvas() {
    const canvas = document.getElementById("canvas-wrap");
    canvas.style.display = "block";
}

function hide_canvas() {
    const canvas = document.getElementById("canvas-wrap");
    canvas.style.display = "none";
}

function sendEmail(name, email, subject, message) {
    $.ajax({
        method: 'POST',
        url: 'https://formsubmit.co/ajax/patrickxunuo@hotmail.com',
        dataType: 'json',
        data: {
            subject: subject,
            name: name,
            email: email,
            message: message
        },
        success: (data) => console.log(data),
        error: (err) => console.log(err)
    });
}

function login() {
    let username = $("#input-username").val();
    let password = $("#input-password").val();
    window.location.href = "home.php";
}

