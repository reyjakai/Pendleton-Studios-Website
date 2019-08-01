const totalWidth = 384;
const totalHeight = 768;
const numRows = 4;
const numColumns = 4

const initialPosition = (totalWidth / numRows) * 2;
const positionInterval = totalWidth / numRows;

const initialInterval = 150;

let interval = null;

function animateScript() {
    let position = initialPosition;

    if(!interval) {
        interval = setInterval( () => {
            $("#player").css('background-position', `-${position}px 0px`);
            if (position < totalWidth) {
                position += positionInterval;
            } else {
                position = positionInterval;
            }
        }, initialInterval);
    }
}

function stopAnimate() {
    position = initialPosition;
    clearInterval(interval);
}