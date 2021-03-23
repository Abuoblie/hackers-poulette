
document.getElementById('submit').addEventListener('submit', () => {
        if ($('input#website').val().length != 0) {
                return false;
        }
});
const context = document.getElementsByClassName('mod');
const regex = /^[a-zA-Z\s]+$/;
const regex2 = /^[a-zA-Z\s\d\.]+$/;
const error = 'invalid input please check the character'
const ins = "invalid invalid entre"

Array.from(context).forEach(e => {
        e.addEventListener('keydown', (el) => {

                if (!regex.test(el.key)) {
                        el.returnValue = false;
                }

        })
});

const msg = document.getElementById('msg')
msg.addEventListener('keydown', (el) => {

        if (!regex2.test(el.key)) {
                el.returnValue = false;
        }

})
