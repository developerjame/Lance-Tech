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

