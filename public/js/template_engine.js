var TemplateEngine = {
    el: null,
    _content: null,
    init: function(el) {
        this.el = document.getElementById(el);
        this._content = '';
    },
    addButtons: function(data) {
        for (var i = 0; i < data.length; i++) {
            this._content += '<div>'+data[i].name+'<button class="remove-button" onclick="shoppingCart.removeFromCart(\''+data[i].code+'\')">X</button></div>';
        }
        
    },
    show: function() {
        this.el.innerHTML = this._content;
    }
};

console.log('TemplateEngine loaded.');