
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');

firebase.initializeApp({
    apiKey: "AIzaSyCXuMqt5s1Suhm5mhFiVEkMTzoGTn6ZD1M",
    authDomain: "larafcm-e45c0.firebaseapp.com",
    projectId: "larafcm-e45c0",
    storageBucket: "larafcm-e45c0.appspot.com",
    messagingSenderId: "136745250719",
    appId: "1:136745250719:web:b01653e0d0ae712b3357aa",
    measurementId: "G-R9HPT7KKB0"
});

const messaging = firebase.messaging();

messaging.setBackgroundMessageHandler(function (payload) {
    console.log("Message has received : ", payload);
    const title = "First, solve the problem.";
    const options = {
        body: "Push notificaiton!",
        icon: "/icon.png",
    };
    return self.registration.showNotification(
        title,
        options,
    );
});
