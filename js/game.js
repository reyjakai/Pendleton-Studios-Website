// Main game loop. Handles all the logic stuff from the other scripts.
// Handles the currently pressed keys.
let keyState = {};

// Checks for keys pressed down and keys released.
window.addEventListener('keydown', function(event) {
    keyState[event.keyCode || event.which] = true;
}, true);

window.addEventListener('keyup', function(event) {
    keyState[event.keyCode || event.which] = false;
}, true);

let started = false;
const speed = 5;

let currentTop;
let currentLeft;

const directions = {
    UP: 192,
    DOWN: 0,
    LEFT: 576,
    RIGHT: 384
}

let previousDirection;
let currentDirection = directions.DOWN;

function startGame() {
    // Starts the game.
    if(!started) {
        if(keyState[87] || keyState[83] || keyState[68] || keyState[65]) {
            started = true;
            $("#site-container").slideUp(400);
            $("#overlay").slideUp(400);
            $("#escape").css('opacity', '1');
        }
    }
}

function stopGame() {
    if(started) {
        $("#site-container").slideToggle(400);
        $("#overlay").slideToggle(400);
        $("#escape").css('opacity', '0');
        started = false;
    }
}

// Main game loops.
function gameLoop() {
    if (started) {
        // Handles keys that are pressed.
        if(keyState[87]) { // if W is pressed.
            currentTop = parseInt($("#player").css('top'), 10);
            $("#player").css('top', ((currentTop - speed) + 'px').toString());
            currentDirection = directions.UP;
        } else if (keyState[83]) { // if S is pressed.
            currentTop = parseInt($("#player").css('top'), 10);
            $("#player").css('top', ((currentTop + speed) + 'px').toString());
            currentDirection = directions.DOWN;
        }

        if(keyState[65]) { // if A is pressed.
            currentLeft = parseInt($("#player").css('left'), 10);
            $("#player").css('left', ((currentLeft - speed) + 'px').toString());
            currentDirection = directions.LEFT;
        } else if (keyState[68]) { // if D is pressed.
            currentLeft = parseInt($("#player").css('left'), 10);
            $("#player").css('left', ((currentLeft + speed) + 'px').toString());
            currentDirection = directions.RIGHT;
        }

        // Handles if no keys are pressed.
        if(!keyState[87] && !keyState[83] && !keyState[65] && !keyState[68]) {
            stopAnimate();
        } else {
            if(previousDirection != currentDirection) {
                stopAnimate();
            }
            animatePlayer(currentDirection);
            previousDirection = currentDirection;
        }

        // Closes the game if the escape key is pressed.
        if (keyState[27]) {
            stopGame();
        }

    } else {
        startGame();
    }
    setTimeout(gameLoop, 10);
}
gameLoop();