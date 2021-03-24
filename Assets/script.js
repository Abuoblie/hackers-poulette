
document.getElementById('submit').addEventListener('submit', () => {
        if ($('input#website').val().length != 0) {
                return false;
        }
});
const context = document.getElementsByClassName('mod');
const regex = /^[a-zA-Z\s]+$/;


const error = 'invalid input please check the character'
const ins = "invalid invalid entre"



Array.from(context).forEach(e => {
        e.addEventListener('keydown', (el) => {

                if (!regex.test(el.key)) {
                        el.returnValue = false;
                }

        })
});



