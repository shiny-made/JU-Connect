//import firebase from "firebase/app";
// import "firebase/auth";
// import "firebase/database";
// import "firebase/storage";
import firebase from 'firebase/app';
import 'firebase/auth';
import 'firebase/database'
import 'firebase/storage'


// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyBpLhue4VAbla2WjkIIr3I9KxgN8IhTUAc",
  authDomain: "health-chat-f5faa.firebaseapp.com",
  projectId: "health-chat-f5faa",
  databaseURL:"https://health-chat-f5faa-default-rtdb.firebaseio.com",
  storageBucket: "health-chat-f5faa.appspot.com",
  messagingSenderId: "850205179208",
  appId: "1:850205179208:web:e7de5d3df6def82409877d"
};

firebase.initializeApp(firebaseConfig)

const auth = firebase.auth()
const database = firebase.database()
const storage=firebase.storage()
 
export default firebase;

// Initialize Firebase
  


