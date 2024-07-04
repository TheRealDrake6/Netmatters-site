// const form = document.getElementById('contact-form');


// form.addEventListener('submit', function(event) {
//     event.preventDefault();
//     const name = document.getElementById('name').value;
//     const email = document.getElementById('email').value;
//     const telephone = document.getElementById('telephone').value;
//     const message = document.getElementById('message').value;

//     if (!emailIsValid(email)) {
//         alert('Please enter a valid email address.');
//         return;
//     }
//     if (name.length < 1) {
//         alert('please enter a name');
//         return;
//     }
//     if (telephone.length = 11) {
//         alert('please enter a valid telephone number.');
//         return;
//     }
//     if (message.length < 1) {
//         alert('please fill out this section.');
//         return;
//     }

//     form.submit();
// });

// function emailIsValid(email) {
//     return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
// }