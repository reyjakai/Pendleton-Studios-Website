let started = false;

var gameArea = {
    canvas: document.createElement("canvas"),
    start: function() {
        this.canvas.width = window.outerWidth;
        this.canvas.height = window.outerHeight;
        this.context = this.canvas.getContext("2d");

        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        this.frameNumber = 0;
    },
    clear: function() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}

// Hides the site container and the overlay. Slides them out of the screen.
function startGame() {
    if(!started) {
        console.log("Hiding site container.");
        $("#site-container").slideUp(400);
        $("#overlay").slideUp(400);

        gameArea.start();
        started = true;
    }
}

function endGame() {
    console.log("Showing site container.");
    $("#site-container").slideToggle(400);
    $("#overlay").slideToggle(400);
}

