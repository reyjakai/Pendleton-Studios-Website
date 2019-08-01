const totalWidth = 384;
const totalHeight = 768;
const numRows = 4;
const numColumns = 4

const initialPosition = (totalWidth / numRows) * 2;
const positionInterval = totalWidth / numRows;

const initialInterval = 150;
let interval = null;
let lastDirection;

function animatePlayer(direction) {
    let position = initialPosition;

    if(!interval) {
        interval = setInterval( () => {
            $("#player").css('background-position', `-${position}px ${direction}px`);
            lastDirection = direction;
            if (position < totalWidth) {
                position += positionInterval;
            } else {
                position = positionInterval;
            }
        }, initialInterval);
    }
}

function stopAnimate() {
    if(interval) {
        position = initialPosition;
        $("#player").css('background-position', `-${position}px ${lastDirection}px`);
        clearInterval(interval);
        interval = null;
    }
}