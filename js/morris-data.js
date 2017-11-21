$(function() {

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Juan",
            value: 50
        }, {
            label: "Brayan",
            value: 30
        }, {
            label: "Fabian",
            value: 20
        }],
        resize: true
    });

});
