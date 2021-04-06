setInterval(sizeSet, 1);
function sizeSet() {
    var useHeight = window.innerHeight - 20;
    document.querySelector("body").style.height = ("height", useHeight + "px");
    console.log("fontion de redimensionement");
}