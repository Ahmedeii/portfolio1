import React from 'react';
import "./Hero.css"
import Lottie from "lottie-react";
import developer from "../../animations/developer.json"
import { motion, spring } from 'framer-motion';
const Hero = () => {
  return (
    <section id='About' className='hero flex  '>
  <div className="leftSide ">    
    <div className="Avatar-section flex">
        <motion.img 
          initial={{transform: "scale(0)"}}
          animate={{transform: "scale(1.1)"}}
          transition={{type:"spring", damping:6, stiffness:100}}
        className='Avatar' src="images/IMG.png" alt="" />
        <div className=' verified icon-verified'/>
      </div>
      
      <motion.h1 
    initial={{opacity:0}}
    animate={{opacity:1}}
    transition={{duration:2}}
    className='tittle'> 
        frontend developer, UI/UX designer, and tech enthusiast.</motion.h1>
      
      <p className='subTittle'>       I’m Ahmed Abdelnabi, a frontend developer and tech enthusiast based in Egypt. I’m the founder and lead designer at InnovateUI, where we craft intuitive and engaging user interfaces that enhance digital experiences and drive innovation.</p>
      <ul id='social' className='pIcon flex'>
        <li><a  className='icons icon-facebook-square'  href=""></a></li>
        <li><a className='icons icon-whatsapp '  href="https://wa.me/+201012168972"></a></li>
        <li><a  className='icons icon-github' href="https://github.com/Ahmedeii"></a></li>
        <li><a  className='icons icon-instagram' href=""></a></li>
      </ul>
      
      </div>
      <div className="rightSide ">
      <Lottie
       animationData={developer}
          aria-aria-labelledby="use lottie animation"
        />
      </div>
    </section>
  );
}

export default Hero;
