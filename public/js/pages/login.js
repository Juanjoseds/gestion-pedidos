const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");

});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});

$('#toggle').on('change', function (e){
    if($(this).prop('checked') === true){
        $('#container').addClass('modoTienda');
        $('#inputTienda').removeClass('hidden');
    }else{
        $('#container').removeClass('modoTienda');
        $('#inputTienda').addClass('hidden');
    }
});

$('#register').on('submit', function (e){
    e.preventDefault();

    let form = $(this).serialize();
    // Enviamos los datos de registro
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: '/register',
        data: form,
        success: function(data) {
            window.location = data.url;
        },
        error: function(xhr, status, error) {
            let err = JSON.parse(xhr.responseText);
            console.log(err);
            Swal.fire({
                icon: 'error',
                title: err.title,
                text: err.text,
            })
        }
    });

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
