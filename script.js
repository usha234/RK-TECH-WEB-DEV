// // script.js - Generic JavaScript functions

// // Function to perform AJAX for general purposes
// function performAjaxRequest(url, method, data, callback) {
//     var xhr = new XMLHttpRequest();
//     xhr.open(method, url);
//     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//     xhr.onreadystatechange = function () {
//         if (xhr.readyState === XMLHttpRequest.DONE) {
//             if (xhr.status === 200) {
//                 var response = JSON.parse(xhr.responseText);
//                 callback(response);
//             }
//         }
//     };
//     xhr.send(data);
// }

// // Function to handle user authorization
// function authorizeUser(password, userType) {
//     var url = userType === 'admin' ? 'admin.php' : 'student.php'
// }
console.log('hello');