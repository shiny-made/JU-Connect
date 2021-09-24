var button = document.getElementById('createBtn');
var meet = document.getElementById('container');

var api = null;

button.addEventListener('click', () => {
    var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var stringLength = 30;
    function pickRandom () {
        return possible[Math.floor() * possible.length];
    }
    var randomString = Array.apply(null,Array(stringLength)).map (pickRandom).join('');

    var domain = "meet.jit.si";
    var options = {
        "roomName": randomString,
        "parentNode": meet,
        "width": 600,
        "height": 600,
    };
    api = new JitsiMeetExternalAPI(domain, options);
    // Alert for important instruction
    setTimeout(function(){ alert("If you have done all the previous steps correctly and now in the meeting page then click on the '...' given below and you can invite people, view full screen and get many more options."); }, 50000);
});

// To hide the Button
function hide() {
    var x = document.getElementById("createBtn");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
    alert("Steps to be followed:-  Type Unique Meeting Name in textbox -> click on 'Start meeting' -> Enter your Name -> click on 'Join meeting'");
}
