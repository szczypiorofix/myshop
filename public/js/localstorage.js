/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

console.log('Hello LocalStorage !');
var cartlist = document.getElementById('cartlist');

var items = localStorage.getItem('myshop_cart');
i = JSON.parse(items);
console.log(i);

i.forEach(function(item, index) {
    cartlist.innerHTML += item.name+', '+item.price +' PLN <br>';
});
