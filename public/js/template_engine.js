var TemplateEngine = {
    el: null,
    _content: null,

    init: function(el) {
        this.el = $(el).get(0);
        this._content = '';
    },
    addButtons: function(data) {
        for (var i = 0; i < data.length; i++) {
            this._content += '<tr><td><button class="add-button" onclick="shoppingCart.setAmount(\''+data[i].code+'\', \'plus\')">+</button> '+ data[i].amount +' <button class="add-button" onclick="shoppingCart.setAmount(\''+data[i].code+'\', \'minus\')">-</button></td><td><a class="product-on-list-text" href="product/'+data[i].code+'">'+data[i].name+'</a></td><td class="product-on-list-text">'+data[i].price+' PLN </td> <td><button class="remove-button" onclick="shoppingCart.removeFromCart(\''+data[i].code+'\')">X</button></td></tr>';
        }
        
    },
    show: function() {
        this.el.innerHTML = this._content;
    }
};


//console.log('TemplateEngine loaded.');