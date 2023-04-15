$(document).ready(function () {
    Split(['#one', '#two', '#three', '#four'], {
        sizes: [24, 23, 24, 24],
        maxSize: 1400,
        gutterSize: 5,
        expandToMin: true,
        cursor: 'col-resize',
    })
})