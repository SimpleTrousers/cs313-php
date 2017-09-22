function Clicked() {
    alert("Clicked!");
}

function ChangeColor() {
    var color = document.getElementById('color').value;

    document.getElementById("div1").style.backgroundColor = color;

    document.getElementById('color').value = "";
}