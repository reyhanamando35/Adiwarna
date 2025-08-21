gsap.registerPlugin(ScrollTrigger);

const cards = gsap.utils.toArray("#works-container .card");
const cardsPerRow = 3;

// Define animations for different breakpoints
ScrollTrigger.matchMedia({
    // Small screens (max 639px → Tailwind "sm")
    "(max-width: 639px)": function () {
        animateCards({
            cardsPerRow: 2,
            shiftX: 10,
            shiftY: 10,
            start: "top 90%",
        });
    },

    // Medium to large (640px – 1023px)
    "(min-width: 640px) and (max-width: 1023px)": function () {
        animateCards({
            cardsPerRow: 2,
            shiftX: 20,
            shiftY: 20,
            start: "top 80%",
        });
    },

    // Desktop (lg+)
    "(min-width: 1024px)": function () {
        animateCards({
            cardsPerRow: 3,
            shiftX: 50,
            shiftY: 50,
            start: "top 75%",
        });
    },
});

function animateCards({ cardsPerRow, shiftX, shiftY, start }) {
    const cards = gsap.utils.toArray("#works-container .card");

    for (let rowStart = 0; rowStart < cards.length; rowStart += cardsPerRow) {
        const rowCards = cards.slice(rowStart, rowStart + cardsPerRow);
        const middleIndex =
            cardsPerRow % 2 !== 0 ? Math.floor(rowCards.length / 2) : -1;

        rowCards.forEach((card, i) => {
            let fromVars = {};
            let toVars = {
                rotate: 0,
                x: 0,
                duration: 1,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: card,
                    start: start,
                    toggleActions: "play none none reverse",
                },
            };

            // 📌 Case 1: odd cols (3 cards per row, desktop)
            if (cardsPerRow === 3) {
                if (i < middleIndex) {
                    fromVars = { rotate: -8, x: shiftX };
                    toVars.y = shiftY;
                } else if (i > middleIndex) {
                    fromVars = { rotate: 8, x: -shiftX };
                    toVars.y = shiftY;
                } else {
                    fromVars = { rotate: 0, x: 0 };
                    toVars.y = -shiftY;
                }
            }
            // 📌 Case 2: even cols (2 cards per row, tablet/landscape mobile)
            else if (cardsPerRow === 2) {
                if (i === 0) {
                    // Left card: fade in from left
                    fromVars = { x: -50, opacity: 0 };
                    toVars = {
                        x: 0,
                        opacity: 1,
                        duration: 1,
                        ease: "power2.out",
                        scrollTrigger: {
                            trigger: card,
                            start: start,
                            toggleActions: "play none none reverse",
                        },
                    };
                } else {
                    // Right card: fade in from right
                    fromVars = { x: 50, opacity: 0 };
                    toVars = {
                        x: 0,
                        opacity: 1,
                        duration: 1,
                        ease: "power2.out",
                        scrollTrigger: {
                            trigger: card,
                            start: start,
                            toggleActions: "play none none reverse",
                        },
                    };
                }
            }
            // 📌 Case 3: fallback (1 card per row, small mobile)
            else {
                fromVars = { rotate: 0, x: 0 };
                toVars.y = shiftY;
            }

            gsap.fromTo(card, fromVars, toVars);
        });
    }
}
