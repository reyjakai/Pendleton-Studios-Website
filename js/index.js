const directions = {
    UP: 'up',
    DOWN: 'down',
    LEFT: 'left',
    RIGHT: 'right'
}

let wKeyDown = false;
let aKeyDown = false;
let sKeyDown = false;
let dKeyDown = false;

const speed = 20;

let currentDirection = directions.DOWN;

// Hides the site container and the overlay. Slides them out of the screen.
function hideSiteContainer() {
    console.log("Hiding site container.");
    $("#site-container").slideUp(400);
    $("#overlay").slideUp(400);
}

function keyPress(event) {
    let key = event.charCode || event.keyCode;
    let char = String.fromCharCode(key);

    if(char == 'W' || char == 'A' || char == 'S' || char == 'D') {
        if( $('#site-container:hidden').length == 0 ) {
            hideSiteContainer();
        }
        
        // Updates the current direction of the player.
        if(char == 'W') {
            currentDirection = directions.UP;
            wKeyDown = true;
        } else if(char == 'S') {
            currentDirection = directions.DOWN;
            sKeyDown = true;
        }

        if(char == 'A') {
            currentDirection = directions.LEFT;
            aKeyDown = true;
        } else if(char == 'D') {
            currentDirection = directions.RIGHT;
            dKeyDown = true;
        }
        movePlayer();
    }
    console.log("Key pressed is: " + char);
}

function keyRelease(event) {
    let key = event.charCode || event.keyCode;
    let char = String.fromCharCode(key);

    if(char == 'W' || char == 'A' || char == 'S' || char == 'D') {
        // Updates the current direction of the player.
        if(char == 'W') {
            wKeyDown = false;
        } else if(char == 'S') {
            sKeyDown = false;
        }

        if(char == 'A') {
            aKeyDown = false;
        } else if(char == 'D') {
            dKeyDown = false;
        }
    }
    console.log("Key released is: " + char);

    // stop animation.
    if(wKeyDown == false && 
        aKeyDown == false && 
        sKeyDown == false && 
        dKeyDown == false) {
        console.log("All keys released.");
        stopAnimate();
    }
}

function movePlayer() {
    // Check which directions the player is trying to move.
    // Also check for collisions if the player moves in that direction.
    let currentTop;
    let currentLeft;
    
    switch(currentDirection) {
        
        case 'up':
            currentTop = parseInt($("#player").css('top'), 10);
            $("#player").css('top', ((currentTop - speed) + 'px').toString());
            break;
        case 'down':
            currentTop = parseInt($("#player").css('top'), 10);
            $("#player").css('top', ((currentTop + speed) + 'px').toString());
            animateScript();
            break;
        case 'left':
            currentLeft = parseInt($("#player").css('left'), 10);
            $("#player").css('left', ((currentLeft - speed) + 'px').toString());
            break;
        case 'right':
            currentLeft = parseInt($("#player").css('left'), 10);
            $("#player").css('left', ((currentLeft + speed) + 'px').toString());
            break;
    }
}