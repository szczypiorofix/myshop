
var shoppingCart = {
    shoppingCartPrice: null,
    itemsList: null,
    itemsStorage: null,
    cartItemsList: null,
    cartItemsListView: '',
    cartSum: 0,  

    setAmount: function(code, operation) {
        for (var i = 0; i < this.cartItemsList.length; i++) {
            if (code === this.cartItemsList[i].code) {
                if (operation === 'plus') {
                    this.cartItemsList[i].amount ++;
                }
                if (operation === 'minus' && this.cartItemsList[i].amount > 1) {
                    this.cartItemsList[i].amount --;
                }
            }
        }
        localStorage.setItem('myshop_cart', JSON.stringify(this.cartItemsList));
        this.showPanel();
    },
    showPanel: function() {
        var items = localStorage.getItem('myshop_cart');
        if (items !== null && items !== '') {
            this.cartSum = 0;
            this.cartItemsList = JSON.parse(items);
            for (var i = 0; i < this.cartItemsList.length; i++) {
                this.cartSum += this.cartItemsList[i].price * this.cartItemsList[i].amount;
            }
            //console.log(this.cartItemsList);
            TemplateEngine.init('cartlist-items');
            TemplateEngine.addButtons(this.cartItemsList);
            TemplateEngine.show();
            document.getElementById('cart-sum-value').innerHTML = this.cartSum +' PLN';
        }
    },
    removeFromCart: function(v) {
        let itemsInStorage = JSON.parse(localStorage.getItem('myshop_cart'));
        let tempStorage = [];
        for (var i = 0; i < itemsInStorage.length; i++) {
            if (v !== itemsInStorage[i].code) {
                tempStorage.push(itemsInStorage[i]);
            }
        }
        localStorage.setItem('myshop_cart', JSON.stringify(tempStorage));
        this.showPanel();
    },
    update: function() {
        this.shoppingCartPrice = document.getElementById('shopping-cart-price-id');
        this.itemsList = localStorage.getItem('myshop_cart');
        if (this.itemsList !== '' && this.shoppingCartPrice !== null) {
            let items = JSON.parse(this.itemsList);
            let priceSum = 0;
            if (items !== null) {
                items.forEach(function(item, index) {
                    priceSum += parseInt(item.price * item.amount);
                });
            }
            this.shoppingCartPrice.innerHTML = priceSum;
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
        temp.amount = 1
        let addAnother = false;
        for (var i = 0; i < this.itemsList.length; i++) {
            if (this.itemsList[i].code === item.code) {
                temp.amount = this.itemsList[i].amount + 1;
                this.itemsList[i] = temp;
                addAnother = true;
            }
        }
        if (!addAnother) this.itemsList.push(temp);
        //console.log(this.itemsList);
        localStorage.setItem('myshop_cart', JSON.stringify(this.itemsList));
        this.update();
        
    },
    clear: function() {
        localStorage.setItem('myshop_cart', []);
        location.reload();
    }
};


window.addEventListener('DOMContentLoaded', function() {
    //localStorage.setItem('myshop_cart', null);
    shoppingCart.update();
});