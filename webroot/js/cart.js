let carts = document.querySelectorAll('.add-cart');

let products = [
    {
        name: 'f2',
        tag: 'f2',
        price: '34',
        inCart: 0
    },
    {
        name: 'ggg',
        tag: 'hhgghhh',
        price: '734',
        inCart: 0
    }
]

for (let i=0;i<carts.length;i++){
    carts[i].addEventListener('click', ()=>{
        cartNumbers(products[i]);
        totalCost(products[i]);
    });
}

function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');

    if(productNumbers) {
        document.querySelector('.carts span').textContent = productNumbers;
    }
}

function cartNumbers(product) {
    
    let productNumbers = localStorage.getItem('cartNumbers');
    
    productNumbers = parseInt(productNumbers);
    if(productNumbers){
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.carts span').textContent = productNumbers + 1;
    }
    else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.carts span').textContent = 1;
    }

    setItems(product);
}

function setItems(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if(cartItems != null){
        if(cartItems[product.tag] == undefined){
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart += 1; 
    }
    else{
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
        }
    }
    
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product) {
    // console.log("mmmmmmmmmmmm", product.price);
    let cartCost = localStorage.getItem('totalCost');
    
    console.log("nnnnnnnnnnnnnn", cartCost);
    console.log(typeof cartCost);

    if(cartCost != null){
        product.price = parseInt(product.price);
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + product.price);
    }
    else {
        localStorage.setItem("totalCost", product.price);
    }
    
}

function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productsContainer = document.querySelector(".list");

    console.log(cartItems);
    if(cartItems && productsContainer){
        productsContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productsContainer.innerHTML += `
            <tbody class="list">
                <tr>
                    <td><a href="#"><i class="fas fa-times"></i></a></td>
                    <td><img src="./webroot/img/products/${item.tag}.jpg"></td>
                    <td>${item.name}</td>
                    <td>${item.price}</td>
                    <td>${item.inCart}</td>
                    <td>${item.inCart * item.price},00</td>
                </tr>
            </tbody>
            `
        });
    }
}

onLoadCartNumbers();
displayCart();
console.log("kkkkk");