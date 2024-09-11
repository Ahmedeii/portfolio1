import { useEffect, useState } from "react";
import "./Header.css"
const Header  = () => {
  const [modal, setmodal] = useState(false);
  const [theme, settheme] = useState(localStorage.getItem("currentmode")  ?? "dark" );
  useEffect(() => {
    
    if (theme == "light") {
      document.body.classList.add("light")
      document.body.classList.remove("dark")

    }else{
      document.body.classList.add("dark")

      document.body.classList.remove("light")
    }

  }, [theme]);
  return (
    <header  className='flex'>
            <button onClick={(params) => {
              setmodal(true)
            }} className='menu icon-menu
'></button>

      <div/>
<nav>
  <ul className='flex'>
    <li><a href="#About">About</a></li>
    <li><a href="#project">Projects</a></li>
    <li><a href="#social">Social</a></li>
    <li><a href="#footer">Footer</a></li>
    <li><a href="#call">Contact</a></li>
  </ul>   
</nav>
<button onClick={() => {

  localStorage.setItem("currentmode",  theme == "light" ? "dark" : "light")
  settheme(localStorage.getItem("currentmode"))
}} className='mode'>{theme == "dark" ?<span className="icon-moon-o"></span> :<span className="icon-sun"></span>}</button>
{modal ? <div className="fixed ">
  <ul className="modal ">
  <li><button className="icon-close" onClick={() => {
    setmodal(false)
  }}></button></li>
  <li><a href="">About</a></li>
    <li><a href="">article</a></li>
    <li><a href="">subject</a></li>
    <li><a href="">speaking</a></li>
    <li><a href="">contact</a></li>
  </ul>

</div>: null}

 </header>
  );
}

export default Header;
