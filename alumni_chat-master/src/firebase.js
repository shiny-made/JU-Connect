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
    apiKey: "AIzaSyAuI3P_jQ_RxViEl4niZl0VlUF-02xGKF4",
    authDomain: "alumni-econnect.firebaseapp.com",
    projectId: "alumni-econnect",
    databaseURL:"https://alumni-econnect-default-rtdb.firebaseio.com",
  
    storageBucket: "alumni-econnect.appspot.com",
    messagingSenderId: "13949125345",
    appId: "1:13949125345:web:6872f6131aeaa8d14eada0"
  };


firebase.initializeApp(firebaseConfig)

const auth = firebase.auth()
const database = firebase.database()
const storage=firebase.storage()
 
export default firebase;

// Initialize Firebase
  





