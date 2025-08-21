document.getElementById("show-more").addEventListener("click", function () {
    const moreInfo = document.getElementById("more-info");

    if (moreInfo.classList.contains("hidden")) {
        moreInfo.classList.remove("hidden");
        gsap.fromTo(
            moreInfo.children,
            {
                opacity: 0,
                y: 30,
            }, // start
            {
                opacity: 1,
                y: 0,
                duration: 0.8,
                stagger: 0.3,
                ease: "power2.out",
            } // end
        );
        this.textContent = "Show Less"; // toggle button text
    } else {
        gsap.to(moreInfo.children, {
            opacity: 0,
            y: 30,
            duration: 0.6,
            stagger: 0.2,
            onComplete: () => moreInfo.classList.add("hidden"),
        });
        this.textContent = "More Info";
    }
});

