

const cardNo = 5;

function init()
{
    var container = document.getElementById('cardCont');
    var counter = 1;
    for (var i = 1; i <= cardNo; i++) 
    {
        setTimeout(function() {
            container.appendChild(createACard(counter));
            counter++
        }, (i * 500));
        
    }
}

function randomInteger(low, high) { return low + Math.floor(Math.random() * (high - low));}
function randomFloat(low, high){ return low + Math.random() * (high - low);}

function createACard(which)
{
    var cardDiv = document.createElement('div');
    var image = document.createElement('img');
    
    image.src = 'img/card_' + which + '.png';
    
    cardDiv.style.top = "-100px";

    if (Math.random() < 0.5) {
        cardDiv.style.left = randomInteger(0, 100) + 'px';
    } else {
        cardDiv.style.right = randomInteger(0, 100) + 'px';
    }
    
    var spinAnimationName = (Math.random() < 0.5) ? 'clockwiseSpin' : 'counterclockwiseSpin';
    
    cardDiv.style.webkitAnimationName = 'fade, drop';
    image.style.webkitAnimationName = spinAnimationName;
    
    var fadeAndDropDuration = randomFloat(5, 11) + 's';
    
    var spinDuration = randomFloat(4, 8) + 's';
    cardDiv.style.webkitAnimationDuration = fadeAndDropDuration + ', ' + fadeAndDropDuration;

    var cardDelay = randomFloat(2, 5) + 's';
    cardDiv.style.webkitAnimationDelay = cardDelay + ', ' + cardDelay;

    image.style.webkitAnimationDuration = spinDuration;

    cardDiv.appendChild(image);

    return cardDiv;
}


window.addEventListener('load', init, false);
