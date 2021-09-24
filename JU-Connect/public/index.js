// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.0.2/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.0.2/firebase-analytics.js";
import { getAuth, onAuthStateChanged, createUserWithEmailAndPassword, signInWithEmailAndPassword, signOut } from "https://www.gstatic.com/firebasejs/9.0.2/firebase-auth.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyAgoFrCrCJa2Bcrp3FECBi3bsK2zDaB-Zw",
  authDomain: "ju-econnect-f3e75.firebaseapp.com",
  projectId: "ju-econnect-f3e75",
  storageBucket: "ju-econnect-f3e75.appspot.com",
  messagingSenderId: "558518591753",
  appId: "1:558518591753:web:21196b739898fa3d5573d8",
  measurementId: "G-G0CM7VFH50"
};

// Initialize Firebase

const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const auth = getAuth(app);
//export { auth };

// onAuthStateChanged(auth, user => {
//   if (user != null) {
//     console.log('logged in!');
//     //location.replace("index2.html");
//   } else {
//     console.log('No user');
//   }
// });


let email2;
let password2;
document.getElementById('signUp').addEventListener('click', (event) => {
  event.preventDefault();
  alert("sign-up successful")
  email2 = document.getElementById("inputEmail").value;
  password2 = document.getElementById("inputPassword").value;
  createUserWithEmailAndPassword(auth, email2, password2);
});

createUserWithEmailAndPassword(auth, email, password)
  .then((userCredential) => {
    // Signed in 
    const user = userCredential.user;
    // ...
  })
  .catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;
    // ..
  });


// let email;
// let password;
// document.getElementById('signIn').addEventListener('click', (event) => {
//   event.preventDefault();
//   alert("test-sign-in")
//   email = document.getElementById("inputEmail").value;
//   password = document.getElementById("inputPassword").value;
//   signInWithEmailAndPassword(auth, email, password);
// });
// signInWithEmailAndPassword(auth, email, password)
//   .then((userCredential) => {
//     // Signed in
//     const user = userCredential.user;
//     // ...
//   })
//   .catch((error) => {
//     const errorCode = error.code;
//     const errorMessage = error.message;
//   });



// document.getElementById('signOut').addEventListener('click', (event) => {
//   signOut(auth);
//   alert("sign-out");
// });

// signOut(auth).then(() => {
//   // Sign-out successful.
//   alert("Sign out successful");
// }).catch((error) => {
//   // An error happened.
//   alert("error");
// });


