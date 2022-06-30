if ("import" in document.createElement("link")) {
    // Этот браузер поддерживает HTML5 Imports.
    alert(1);
}

var card = document.querySelector('link[rel="import"]').import;
// Grab DOM from doc.html's document.
var text = card.querySelector('.card');
document.body.appendChild(text.cloneNode(true));

// innerHTML = card;

var clone = document.importNode(text.content, true);
document.querySelector('#container').appendChild(clone);