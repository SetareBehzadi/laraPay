window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    // window.$ = window.jQuery = require('jquery');

    require('bootstrap-sass');
} catch (e) {
}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo'

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'e0a7737e27d9520e778a',
    cluster: 'eu',
    encrypted: true
});

window.Echo
    .channel('users')
    .listen('.user.registered', function (event) {
        console.log(event);
    });
// let withdrawalId = 5;
// window.Echo
//     .private(`withdrawal.5`)
//     .listen('.approved', function (event) {
//         console.log(event);
//     });
window.Echo.join('room')
    .here(users => {
        //console.log('current users', users);
        document.getElementById('onlineUsers').innerText = users.length;
    })
    .joining(user => {
       // console.log('join user: ', user);
        let message = 'کاربر'+ user.name +'وارد شد ';
        toastr.success(message);

    })
    .leaving(user => {
        let message = 'کاربر'+ user.name +'خارج شد ';
        toastr.error(message);
    })
    .listen('message',event => {

    });