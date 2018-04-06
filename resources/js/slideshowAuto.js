var slideIndex = 0;
slides();

function slides() {
    var i;
    var s = document.getElementsByClassName("slides");
    for (i = 0; i < s.length; i++) {
        s[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > s.length) {slideIndex = 1} 
    s[slideIndex-1].style.display = "block"; 
    setTimeout(slides, 5000); // Change image every 5 seconds
}