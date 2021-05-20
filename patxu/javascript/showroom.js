


const showroomIndex = parseInt(window.location.href.substr(-1));
let fileLoc = `images/image${showroomIndex}.jpg`
console.log(fileLoc);

$("#image-on").attr('src', fileLoc);
$("#operation-btn-back").bind("click", () => {
    window.location.href = "photos.php";
});

$("#operation-btn-prev").bind("click", () => {
    if (showroomIndex == 1) {
        window.location.href = `showroom.php#${9}`;
    } else {
        window.location.href = `showroom.php#${showroomIndex - 1}`;
    }
    location.reload();
});

$("#operation-btn-next").bind("click", () => {
    if (showroomIndex == 9) {
        window.location.href = `showroom.php#${1}`;
    } else {
        window.location.href = `showroom.php#${showroomIndex + 1}`;
    }
    location.reload();
});


