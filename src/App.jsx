import { useEffect, useState } from 'react'

import Header from './Component/1-header/Header'
import Hero from './Component/2-hero/Hero'
import Main from './Component/3-main/Main'
import Footer from './Component/5-footer/Footer'
import Contact from './Component/4-contact/Contact'

function App() {
  const [showBtn, setshowBtn] = useState(true);
useEffect(() => {
window.addEventListener("scroll",() => {
  if (window.scrollY < 300) {
    setshowBtn(false)
  }else{
    setshowBtn(true)
  }
})
}, []);
const scrollToTop = () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
};
  return (
    <div className='container'>
    <Header />
  
    <Hero/>
    <div className='Divider'/>
    <Main/>
    <div className='Divider'/>
    <Contact/>
    <div className='Divider'/>
    <Footer/>


  <button onClick={scrollToTop} style={{opacity: showBtn ? 1 :0, transition: "1s",color:"white"}}   className='icon-keyboard_arrow_up  icon2top'></button>
  
  </div>
  )
}

export default App
