 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/addcart.css">
    
</head>

<body class="">
    
    <div class="container">
        <div>
        <header>
            <h1> E-ZONE</h1>
            
            <div class="shopping">
                <img src="./assets/images/cartimg.webp" style="margin: 1px 1px 0px 0px;width: 50px; height: 80px;">
                <span class="quantity" style="margin: 6px 0px 2px -18px;">0</span>
            </div>
        </header>
        </div>

        <div class="list">
            
          
        </div>
    </div>
    <hr>
    <div class="card">
        <h1> <b>Card</b></h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Close</div>
        </div>
    </div>
    

    <!-- <script src="app.js"></script> -->
     <script>
        let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'iphone13',
        image: '../assets/images/iphone13.webp',
        price: 42999
    },
    {
        id: 2,
        name: 'iphone15',
        image: '../assets/images/iphone15.webp',
        price: 67999
    },
    {
        id: 3,
        name: 'priti ultima smartwatch(gray)',
        image: '../assets/images/sw2.webp',
        price: 5299
    },
    {
        id: 4,
        name: 'softlogic prizm (HD)',
        image: '../assets/images/tv3.jpg',
        price: 44999
    },
    {
        id: 5,
        name: 'noisefit venter',
        image: '../assets/images/sw11.jpeg',
        price: 12999
    },
    {
        id: 6,
        name: 'Haylou GT5',
        image: '../assets/images/earbuds.jpg',
        price: 899
    }
];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="image/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}
     </script>
</body>
</html>
 