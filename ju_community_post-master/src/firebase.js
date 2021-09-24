
import firebase from 'firebase/app';
import 'firebase/auth';
import 'firebase/firestore';
import 'firebase/storage'

import { GoogleAuthProvider } from "firebase/auth";


//import firebase from "firebase";

const firebaseConfig = {
    apiKey: "AIzaSyC7EH7_UZ5Ev4lHhm6J82ejpUwwUkEjJus",
    authDomain: "ju-community-post.firebaseapp.com",
    projectId: "ju-community-post",
    storageBucket: "ju-community-post.appspot.com",
    messagingSenderId: "692008559893",
    appId: "1:692008559893:web:93239c79b43df8aa55751c"
  };
  

  
  // Initialize Firebase
const app=firebase.initializeApp(firebaseConfig);

const auth = firebase.auth()
const db = firebase.firestore();
const provider = new firebase.auth.GoogleAuthProvider();
const storage=firebase.storage()
 

export  {auth,provider,storage};
export  {db};
// const firebaseApp=firebase.initializeApp(firebaseConfig);
// const db=firebaseApp.firestore();
// const auth=firebase.auth;
// const provider=new firebase.auth.GoogleAuthProvider();
// const storage=firebase.storage();

// export {auth,provider,storage};
// export default db;