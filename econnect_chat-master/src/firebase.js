//import firebase from "firebase/app";
// import "firebase/auth";
// import "firebase/database";
// import "firebase/storage";
import firebase from 'firebase/compat/app';
import 'firebase/compat/auth';
import 'firebase/compat/database'
import 'firebase/compat/storage'


// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCVZfPvQjydqpAFF0xmdcM1nGaBWGr8er0",
  authDomain: "ju-chat-connect.firebaseapp.com",
  projectId: "ju-chat-connect",
  storageBucket: "ju-chat-connect.appspot.com",
  messagingSenderId: "492159282815",
  appId: "1:492159282815:web:4f0d7dbd698d4b800c994a",
  measurementId: "G-G3TP9JWTKB"
};
firebase.initializeApp(firebaseConfig)

const auth = firebase.auth()
const database = firebase.database()
const storage=firebase.storage()
 
export default firebase;

// Initialize Firebase
  


