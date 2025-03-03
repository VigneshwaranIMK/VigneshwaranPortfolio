document.addEventListener("DOMContentLoaded", function () {
    const words = ["Web Developer", "Web Designer", "Frontend Developer"];
    let wordIndex = 0;
    let charIndex = 0;
    let currentWord = '';
    const typingSpeed = 100;
    const erasingSpeed = 50;
    const newWordDelay = 2000;

    function type() {
        if (charIndex < words[wordIndex].length) {
            currentWord += words[wordIndex].charAt(charIndex);
            document.querySelector('.typing-animation').textContent = currentWord;
            charIndex++;
            setTimeout(type, typingSpeed);
        } else {
            setTimeout(erase, newWordDelay);
        }
    }

    function erase() {
        if (charIndex > 0) {
            currentWord = currentWord.slice(0, -1);
            document.querySelector('.typing-animation').textContent = currentWord;
            charIndex--;
            setTimeout(erase, erasingSpeed);
        } else {
            wordIndex = (wordIndex + 1) % words.length;
            setTimeout(type, typingSpeed + 1100);
        }
    }

    type();
});



const progressBars = document.querySelectorAll('.progress-done');

progressBars.forEach(bar => {
    setTimeout(() => {
        bar.style.width = bar.getAttribute('data-done') + '%';
        bar.style.opacity = 1;
    }, 500);
});

// Animate circular skills
const circles = document.querySelectorAll('.circle');

circles.forEach(circle => {
    let percent = circle.getAttribute('data-percent');
    circle.style.setProperty('--percent', percent);
});




// Speedometer
const needle = document.getElementById("needle");
const speedValue = document.getElementById("speedValue");
const speedInput = document.getElementById("speedInput");
const radioButtons = document.querySelectorAll('input[name="tech"]');

speedInput.addEventListener("input", function () {
    updateSpeedometer(this.value);
});

circles.forEach(circle => {
    let percent = circle.getAttribute('data-percent');
    circle.style.setProperty('--percent', percent);
});


radioButtons.forEach((radio) => {
    radio.addEventListener("change", function () {
        updateSpeedometer(this.value);
    });
});

function updateSpeedometer(speed) {
    let rotation = (speed / 100) * 180 - 90;
    needle.style.transform = `rotate(${rotation}deg)`;
    speedValue.textContent = speed;
}

const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

fetch('/your-endpoint', {
    method: 'POST',
    headers: {
        'X-CSRF-TOKEN': csrfToken,
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({ data: 'yourData' })
});
