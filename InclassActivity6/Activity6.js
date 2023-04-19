const button = document.getElementById("gameButton");

let clicks = 0;
let level = 1;
let timer;

button.addEventListener("mouseover", () => {
    const marginTop = Math.random() * 300 + "px";
    const marginLeft = Math.random() * 300 + "px";
    button.style.marginTop = marginTop;
    button.style.marginLeft = marginLeft;

    clearTimeout(timer);
    timer = setTimeout(() => {
        button.style.marginTop = "50%";
        button.style.marginLeft = "50%";
    }, 2000);
});

button.addEventListener("mousemove", () => {
    clearTimeout(timer);
});

function handleClick() {
    clicks++;

    if (clicks === 3) {
        level++;
        clicks = 0;
        setButtonTimeout();
    }
}

function setButtonTimeout() {
    const timeout = (6 - level) * 100 + "ms";

    button.style.transitionDuration = timeout;

    setTimeout(() => {
        const marginTop = Math.random() * 300 + "px";
        const marginLeft = Math.random() * 300 + "px";
        button.style.marginTop = marginTop;
        button.style.marginLeft = marginLeft;
    }, 10);

    if (level < 6) {
        setTimeout(setButtonTimeout, 500 - (level - 1) * 100);
    }
}