import React, {useState, useEffect } from "react";
import {Container} from "react-bootstrap";

// function Sekolah()
//     const [sekolah, setSekolah]=useState([]);


//     useEffect( ()=>{
//      const getSekolah=async ()=>{
//         const res=await fetch ("https://akmalweb.my.id/api/daftar_smp.php") ;
//         const getcon=await res.json();
//         console.log(getcon)
//         setSekolah(await getcon);
//      }
//      getSekolah();
//     },[]);

let navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
}

let mainVid = document.querySelector('.main-video');

document.querySelectorAll('.course-3 .box .video video').forEach(vid =>{

    vid.onclick = () =>{
        let src = vid.getAttribute('src');
        mainVid.classList.add('active');
        mainVid.querySelector('video').src = src;
    }

});

document.querySelector('#close-vid').onclick = () =>{
    mainVid.classList.remove('active');
}


