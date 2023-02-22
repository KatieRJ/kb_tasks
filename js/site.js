function hello(){
    alert("Welcome to my website");

}

//a simple function to add two numbers
function add(){
    document.write(5+6);
}

//function to change the background colour of the page
function changeColor(){
    let color = document.getElementById('background').value;
    document.body.style.backgroundColor = color;
    }

function changeFcolor(){
    let fcolor = document.getElementById('fcolor').value;
    document.body.style.color = fcolor;
}

//crud
function crud(){
    let fname=(document.form1.fname.value).trim();
    if(fname.length < 5){
        alert("First name has to have at least five characters");
        return false;

    }
}

function fname(){
    let fname=(document.form1.fname.value).trim();
    if(fname.length<5){
        alert("Name can not be blank");
        return false;
    }
}