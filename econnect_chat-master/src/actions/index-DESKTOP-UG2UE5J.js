import * as actionTypes from "./types";
import { useState } from "react";

/* User Actions */
export const setUser = user => {
  return {
    type: actionTypes.SET_USER,
    payload: {
      currentUser: user
    }
  };
};

export const clearUser = () => {
  return {
    type: actionTypes.CLEAR_USER
  };
};

/* Channel Actions */
export const setCurrentChannel = channel => {
  return {
    type: actionTypes.SET_CURRENT_CHANNEL,
    payload: {
      currentChannel: channel
    }
  };
};

export const setPrivateChannel = isPrivateChannel => {
  return {
    type: actionTypes.SET_PRIVATE_CHANNEL,
    payload: {
      isPrivateChannel
    }
  };
};

export const setUserPosts = userPosts => {
  return {
    type: actionTypes.SET_USER_POSTS,
    payload: {
      userPosts
    }
  };
};

/* Colors Actions */
export const setColors = (primaryColor, secondaryColor) => {
  return {
    type: actionTypes.SET_COLORS,
    payload: {
      primaryColor,
      secondaryColor
    }
  };
};

// const [bg, setbg] = useState('0');
// const [name, setname] = useState('Send As Anonymous');
// const bgChanges=()=>{
//   //let newbg='1';
//   setbg('1');
//   setname('You are now anonymous');
// }
// const bgBack=()=>{
//   //let newbg='1';
//   setbg('0');
//   setname('Send As Anonymous');
// }

// export const val=(name)=> {
//   name=document.getElementById("name").value;
//   arraynames=['Hey','Yaw','Damn'];
//   for(i=0;i<arraynames.length;i++){
//     if (arraynames[i]==name){
//       alert("You must not say that")
//       return false;
//     }
//   }
// };