function increaseQuantity(id){
    let elem = document.getElementById(id);
    let quantity = parseInt(elem.value);
    console.log(quantity);
    quantity++;
    elem.value = quantity.toString() ;
}


function decreaseQuantity(id){
    let elem = document.getElementById(id);
    let quantity = parseInt(elem.value);
    if (quantity>1) {
        quantity--;
        elem.value = quantity.toString() ;
    }
}