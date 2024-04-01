function increaseQuantity(id){
    let elem = document.getElementById(id);
    let quantity = parseInt(elem.textContent);
    quantity++;
    elem.textContent = quantity.toString() ;
}
function decreaseQuantity(id){
    let elem = document.getElementById(id);
    let quantity = parseInt(elem.textContent);
    if (quantity>1) {
        quantity--;
        elem.textContent = quantity.toString() ;
    }
}