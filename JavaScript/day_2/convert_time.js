function formatTimeShow(h_24) {
    var h = h_24 % 12;
    return (h < 10 ? '0' : '') + h + ':00';
}

