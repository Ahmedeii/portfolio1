import { useState } from "react";
import "./Main.css";
import { cardData } from "./cardData";
import { AnimatePresence, motion } from "framer-motion";
const Main = () => {
  const [Active, setActive] = useState("All");

  const [Arr, setArr] = useState(cardData);
  const filteredCategory = (category) => {
    const filtered = cardData.filter((item) => {
      
      return item.category.includes(category)
      })
      setArr(filtered)
      setActive(category)
  }
  return (
  <main id="project" className='flex'>
    <section className=' flex left-side'>
    
  <button onClick={() => {
    setArr(cardData)
  setActive("All")
  }} className = {Active == "All" ?"active": null} >All project</button>
  <button  onClick={() => {
  filteredCategory("css")
  }}  className = {Active == "css" ?"active": null} >html & css</button>
  <button  onClick={() => {
  filteredCategory("java")
}}  className = {Active == "java" ?"active": null} >java script</button>
  <button  onClick={() => {
  filteredCategory("react")
}}  className = {Active == "react" ?"active": null} >React&mui</button>
    </section>



    <section className=' flex  right-side'>
    <AnimatePresence>


{Arr.map((item,index) => (
<motion.div 
  layout
  initial={{ transform: "scale(0.4)" }}
  animate={{ transform: "scale(1)"}}
  transition={{type:"spring", damping:8 , stiffness:55  }}


key={index} 
 className="card"
>
      <img width={266}  src={item.imgPath} alt="" />
  
   <div  style={{width:"266px"}} className="box"  >
<h1 className="Title">{item.Title}</h1>
    <div className="subTitle">{item.subTitle}</div>
    <div className="icons flex">
    <div className="links-card flex">
    <a href={item.url}><div className="icon-link"></div></a>
        <a href={item.git}><div className="icon-github"></div></a>
    </div>
        <a className="button-card flex" href={item.url}>View
        
        <span className="icon-arrow-right"></span>
        </a>

    </div>
    </div>
    </motion.div> 
))}

</AnimatePresence>

    </section>
  </main>
  );
}

export default Main;
