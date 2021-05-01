const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});

/*$('#formulario').on('submit', function (e){
    e.preventDefault();

    let email = $('#email').val();
    let password = $('#password').val();

    console.log('Submit!!');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: '/login',
        data: {
            email: email,
            password: password
        },
        success: function(data) {
            console.log('OK');
        }
    });
});*/
