const name = document.getElementById("name")
const email = document.getElementById("email")
const form = document.getElementById("form")
const textarea=document.getElementById("textarea")

form.addEventListener("submit", (e) => {
    let messages = []
    if(name.value===''|| name.value==null){
        alert("Please enter your name")
    }
   else if(email.value===''|| email.value==null){
        alert("Please enter your email")
    }
    else{

        if(textarea.value===''|| textarea.value==null){
            alert("Please enter your message")
        }

    }
    
    

        e.preventDefault()
})


 const buttons = document.querySelectorAll(".button1");
 
 for(let i=0; i<buttons.length; i++){
    
    buttons[i].addEventListener("click",function(){

        document.querySelector(".popup").style.display = "flex"
    })

 }


document.querySelector(".close").addEventListener("click", function() {
    document.querySelector(".popup").style.display = "none"
})


function validation() {
    var form = document.getElementById ("form");
    var email = document.getElementById ("email").value;
    var text = document.getElementById ("text");
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if(email.match(pattern)) {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text.innerHTML = "Your email address is valid"
        text.style.color = "#00ff00"
    }
    else {
        form.classList.remove("valid");
        form.classList.add("invalid");
        text.innerHTML = "Please enter a valid email address";
        text.style.color = "red"
    }

}

let btnClear = document.querySelector("button");
let inputs = document.querySelectorAll("input");
btnClear.addEventListener("click", () => {
    inputs.forEach(input => input.value="");
});
const price = {
    brakes:"Ksh 5,000 to Ksh 15,000",
    filter:"Ksh 3,500 to Ksh 12,500",
    shaft:"Ksh 9,500 to Ksh 20,000",
    transmission:"Ksh 30,000 to Ksh 120,000",
    engine: "Ksh 10,000"
};
function serviceprice(){
    let service = document.forms ["priceestimate"]["services"].value;
    if (service == "start") {
        window.alert("the service will cost  approximately - ");
    } else {
        if (service == "brake") {
            window.alert("the service will cost  approximately - " + price.brakes);
        } else {
            if (service == "filter") {
                window.alert("the service will cost  approximately - " + price.filter);
            } else {
                if (service == "shaft") {
                    window.alert("the service will cost  approximately - " + price.shaft);
                } else {
                    if (service  == "transmition") {
                        window.alert("the service will cost  approximately - " + price.transmission);
                    } else {
                        window.alert("the service will cost  approximately -" + price.engine);
                    }
                }
            }
        }
    }
}