// ------------------- Go To Shop --------------------

const closeCard = () => {
    anime({
        targets: "#go_to_shop",
        translateX: [0, "150%"],
    });
    anime({
        targets: "#open_go_to_shop",
        translateX: ["100%", 0],
    });
}

const openCard = () => {
    anime({
        targets: "#go_to_shop",
        translateX: ["105%", 0],
    });
    anime({
        targets: "#open_go_to_shop",
        translateX: [0, "105%"],
    });
};
