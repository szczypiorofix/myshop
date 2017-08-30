
var WeatherForecastWidget = {
    wf_content: null,
    wf_spinner: null,
    init: function() {
        var self = this;
        this.wf_content = document.getElementById("weather_forecast");
        this.wf_spinner = document.getElementById("spinner");

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(pos) {
                //console.log(pos.coords.latitude);
                //console.log(pos.coords.longitude);

                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                  if (this.readyState === 4 && this.status === 200) {
                      self.wf_spinner.style.display = 'none';
                      self.wf_content.style.display = 'block';
                      self.wf_content.innerHTML = this.responseText;
                      //console.log('Weather forecast loaded!');
                  }
                };
                xhttp.open("GET", "myshop/weather/"+pos.coords.latitude+"/"+pos.coords.longitude, true);
                xhttp.send();
            });
        }
        else {
            self.wf_spinner.style.display = 'none';
            self.wf_content.style.display = 'block';
            console.log("Geolocation is not supported by this browser.");
            self.wf_content.innerHTML = "Usługa geolokacji nie jest dostępna w tej przeglądarce.";
        }
    }
};

var shoppingCart = {
    shoppingCartPrice: null,
    itemsList: null,
    itemsStorage: null,
    cartItemsList: null,
    cartItemsListView: '',
    
    showPanel: function() {
        let self = this;
        var cartlist = document.getElementById('cartlist');
        var items = localStorage.getItem('myshop_cart');
        if (items !== null && items !== '') {
            this.cartItemsList = JSON.parse(items);
            console.log(this.cartItemsList);
//            this.cartItemsList.forEach(function(item, index) {
//                cartlist.innerHTML += '<p>'+item.name+', '+item.price +' PLN </p>';
//            });
        }
        
        Vue.component('items-list', {
            props: ['sol'],
            template: '<div>{{ sol.name }}<button class="remove-button" onclick="shoppingCart.removeFromCart()">X</button></div>'
        });
        
        var app = new Vue({
            el: '#cartlist',
            data: {
                cart_content: 'Zawartość koszyka:',
                message: 'To jest tooltip!',
                cartItemsList: this.cartItemsList
            }
        });
        
        
    },
    removeFromCart: function(v) {
        console.log(v);
    },
    update: function() {
        this.shoppingCartPrice = document.getElementById('shopping-cart-price-id');
        this.itemsList = localStorage.getItem('myshop_cart');
        if (this.itemsList !== '' && this.shoppingCartPrice !== null) {
            i = JSON.parse(this.itemsList);
            var price = 0;
            i.forEach(function(item, index) {
                price += parseInt(item.price);
            });
            this.shoppingCartPrice.innerHTML = price;
        }
    },
    add: function(item) {
        this.itemsStorage = localStorage.getItem('myshop_cart');
        
        if (this.itemsStorage !== '' && this.itemsStorage !== null) {
            this.itemsList = JSON.parse(this.itemsStorage);
        }
        else {
            this.itemsList = [];
        }
        let temp = new Object();
        temp.name = item.name;
        temp.price = item.price;
        temp.code = item.code;
        this.itemsList.push(temp);
        console.log('Added to cart:');
        console.log(this.itemsList);
        localStorage.setItem('myshop_cart', JSON.stringify(this.itemsList));
        this.update();
        
    },
    clear: function() {
        localStorage.setItem('myshop_cart', []);
        //this.update();
        location.reload();
    }
};



window.addEventListener('DOMContentLoaded', function() {
    //WeatherForecastWidget.init();
    //localStorage.setItem('myshop_cart', null);
    shoppingCart.update();
});