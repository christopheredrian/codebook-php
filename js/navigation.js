$(document).ready(function() {
    init();
    // var $bottomPanel = $('#bottomPanel');

    // // TODO: Button/Linked is clicked call click link
    // $('a').on('click', function() {
    //     var $component = $(this);
    //     if ($component.data('href')) {
    //         clickLink($component);
    //     }
    // });

    // 
    // function clickLink($component) {
    //     console.log('clickLink' + $component);

    //     var url = $component.data('href');
    //     $.ajax(url, {
    //         success: function(response) {
    //             console.log(response);
    //             $bottomPanel.html(response);
    //         },
    //         error: function(response, errorType, errorMessage) {
    //             alert("There was an error!");
    //         },
    //         beforeSend: function() {
    //             //$body.addClass("loading");
    //         },
    //         complete: function() {
    //                 //$body.removeClass("loading");
    //             } ,
    //             cache: false
    //     });
    // }
    
    function init(){
        $('.dropdown-toggle').dropdown();
    }
});