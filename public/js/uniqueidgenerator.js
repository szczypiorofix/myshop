/**
 * Generates unique 8-characters words.
 */
var Generator = {
    words: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 
    'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'],
    container: [],
    wordLength: 8,
    generate: function() {
        do {
            var x = '';
            for (i = 0; i < this.wordLength; i++) {
                let r = Math.floor((Math.random() * this.words.length));
                x += this.words[r];
            }
        }
        while (this.container.indexOf(x) >= 0);
        this.container.push(x);
        return x;
    }
};

console.log('Unique IDs generator loaded.');
console.log('Unique ID: '+Generator.generate());
console.log('Unique ID: '+Generator.generate());
console.log('Unique ID: '+Generator.generate());
console.log('Unique ID: '+Generator.generate());
console.log('Unique ID: '+Generator.generate());
console.log('Unique ID: '+Generator.generate());
console.log('Unique ID: '+Generator.generate());
console.log('Unique ID: '+Generator.generate());
console.log('Unique ID: '+Generator.generate());
console.log('Unique ID: '+Generator.generate());
console.log('Unique ID: '+Generator.generate());
console.log('Unique ID: '+Generator.generate());
console.log('Unique ID: '+Generator.generate());
console.log('Unique ID: '+Generator.generate());
console.log('Unique ID: '+Generator.generate());
console.log('Unique ID: '+Generator.generate());
console.log('Unique ID: '+Generator.generate());
console.log('Unique ID: '+Generator.generate());