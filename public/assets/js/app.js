// import ajoutParImport from './homepagemsg.js';
// ajoutParImport();

/*
 * Application
 */

/*
 $(document).tooltip({
 selector: "[data-toggle=tooltip]"
 })
 */





jQuery(document).ready(function ($) {

    /*
     * Auto hide navbar
     */
    var $header = $('.navbar-autohide'),
        scrolling = false,
        previousTop = 0,
        currentTop = 0,
        scrollDelta = 10,
        scrollOffset = 150

    $(window).on('scroll', function () {
        if (!scrolling) {
            scrolling = true

            if (!window.requestAnimationFrame) {
                setTimeout(autoHideHeader, 250)
            }
            else {
                requestAnimationFrame(autoHideHeader)
            }
        }
    })

    function autoHideHeader() {
        var currentTop = $(window).scrollTop()

        // Scrolling up
        if (previousTop - currentTop > scrollDelta) {
            $header.removeClass('is-hidden')
        }
        else if (currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
            // Scrolling down
            $header.addClass('is-hidden')
        }

        previousTop = currentTop
        scrolling = false
    }

});

(function ($) {

    $('#MoviesFilter').on('change', 'input, select', function () {
        var $form = $(this).closest('form');
        $form.request();
    })

    setTimeout(() => {
        $('#maCase').html('<strong>Hey</strong> everybody !')
    }, 7000)

})(jQuery);

window.addEventListener('DOMContentLoaded', (event) => {

    const btns = document.getElementsByClassName('qrbtn');
    console.log('Ready 2023 app.js');
    // console.log(btns);

    // btns.forEach(element => {
    //     console.log('oki')
    // });

    [...btns].forEach((item, index) => {

        item.addEventListener('click', function () {
            console.log('clicked btn # ' + index);
            $('#modal' + index)
                .modal('show')
                ;
        });

        console.log(index + ' ' + item);

        // $('#modal0')
        // .modal('show')
    });

    // .forEach((btns, ind) => {
    //     btn.onclick = () => (modals[ind].style.display = 'block');
    // });

    const dropdownMenu = document.getElementById('dropdownMenu')
    dropdownMenu.click();
    console.log( dropdownMenu );

})
console.log('Ready 2022 app.js public.')
