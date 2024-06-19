(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Sidebar Toggler
    $('.sidebar-toggler').click(function () {
        $('.sidebar, .content').toggleClass("open");
        return false;
    });


    // Progress Bar
    $('.pg-bar').waypoint(function () {
        $('.progress .progress-bar').each(function () {
            $(this).css("width", $(this).attr("aria-valuenow") + '%');
        });
    }, {offset: '80%'});


    // Calender
    $('#calender').datetimepicker({
        inline: true,
        format: 'L'
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: true,
        loop: true,
        nav : false
    });


    var ctx1 = $("#profile-sales").get(0).getContext("2d");
    var myChart1 = new Chart(ctx1, {
        type: "bar",
        data: {
            labels: ["January 2023", "Febuary 2023", "March 2023", "April 2023"],
            datasets: [{
                    label: "Revenue ($)",
                    data: [15, 30, 55, 65, 60, 80, 95],
                    backgroundColor: "#00cc72",
                    borderRadius: 5,
                    barPercentage: 0.6
                },
                {
                    label: "Expenses ($)",
                    data: [-8, -35, -40, -60, -70, -55,-75],
                    backgroundColor: "#e5405a",
                    borderRadius: 5,
                    barPercentage: 0.6
                }
            ]
            },
        options: {
            responsive: true,
        }
    });


    var ctx2 = $("#rent").get(0).getContext("2d");
    var myChart2 = new Chart(ctx2, {
        type: "bar",
        data: {
            labels: ["0-30", "31-60", "61-90", "91+"],
            datasets: [{
                    label: "Rent ($)",
                    data: [12410, 1500, 6570, 9123],
                    backgroundColor: "#1365d8",
                    fill: true,
                    borderRadius: 20,
                    barPercentage: 0.4
                }
            ]
            },
        options: {
            indexAxis: 'y',
            responsive: true
        }
    });
    
    var ctx6 = $("#doughnut-chart").get(0).getContext("2d");
    var myChart6 = new Chart(ctx6, {
        type: "doughnut",
        data: {
            labels: ["Vacant (%)", "Filled (%)"],
            datasets: [{
                backgroundColor: [
                    "#fe4698",
                    "#1365d8"
                ],
                data: [55, 49]
            }]
        },
        options: {
            responsive: true
        }
    });


    var ctx5 = $("#pie-chart").get(0).getContext("2d");
    var myChart5 = new Chart(ctx5, {
        type: "pie",
        data: {
            labels: ["Not Started (%)", "Undecided (%)"],
            datasets: [{
                backgroundColor: [
                    "#fe4698",
                    "#1365d8"
                ],
                data: [71, 29]
            }]
        },
        options: {
            responsive: true
        }
    });


    var ctx3 = $("#line-chart").get(0).getContext("2d");
    var myChart3 = new Chart(ctx3, {
        type: "line",
        data: {
            labels: [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150],
            datasets: [{
                label: "Salse",
                fill: false,
                backgroundColor: "rgba(0, 156, 255, .3)",
                data: [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15]
            }]
        },
        options: {
            responsive: true
        }
    });


    var ctx4 = $("#bar-chart").get(0).getContext("2d");
    var myChart4 = new Chart(ctx4, {
        type: "bar",
        data: {
            labels: ["Italy", "France", "Spain", "USA", "Argentina"],
            datasets: [{
                backgroundColor: [
                    "rgba(0, 156, 255, .7)",
                    "rgba(0, 156, 255, .6)",
                    "rgba(0, 156, 255, .5)",
                    "rgba(0, 156, 255, .4)",
                    "rgba(0, 156, 255, .3)"
                ],
                data: [55, 49, 44, 24, 15]
            }]
        },
        options: {
            responsive: true
        }
    });



    
    
})(jQuery);

