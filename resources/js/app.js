import './bootstrap';




window.addEventListener('DOMContentLoaded', (event) => {

    const btns = document.getElementsByClassName('qrbtn');
    console.log('Ready 2023 app.js')
    console.log(btns);

    // btns.forEach(element => {
    //     console.log('oki')
    // });

    [...btns].forEach((item, index) => {

        item.addEventListener('click', function(){
            console.log('clicked btn # '+ index);
            $('#modal'+index)
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

})
console.log('Ready 2022 app.js resources.')
