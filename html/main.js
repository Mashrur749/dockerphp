let btn = document.getElementById("btn");

btn.addEventListener("click", function(){
    console.log("something")
    fetch("./php/index.php")
    .then(res => res.json())
    .then(json => console.log(json))
})