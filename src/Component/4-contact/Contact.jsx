import "./Contact.css"
import { useForm, ValidationError } from '@formspree/react';
import Lottie from "lottie-react";
import done from "../../animations/done.json"
import contact from "../../animations/contact-us.json"
const Contact = () => {
  const [state, handleSubmit] = useForm("myzgegpb");
  
  return (
    <section id="call" className="contact-us flex" style={{justifyContent:"space-between"}}>
  <div>
  <div className="information">
        <h1 className="tittle">
        <span className="icon-envelope"/>
          contact-us
        </h1>
        <p>Get in touch with us for support and inquiries. We are here to help!</p>
      </div>
<div className=" parentForm  flex"> 
        <form onSubmit={handleSubmit} action="">
  <div className="flex">
          <label htmlFor="Email">Email Address</label>
    <input autoComplete="off" name="email" id="Email" />
    <ValidationError 
        prefix="Email" 
        field="email"
        errors={state.errors}
      />
  </div>
  <div className="flex">
          <label htmlFor="message"> Your message</label>
    <textarea name="message" id="message"/>
    <ValidationError 
        prefix="Message" 
        field="message"
        errors={state.errors}
      />
  </div>

  <button className="submit"  disabled={state.submitting}>
          {state.submitting ? "submitting" :"submit"}
        </button>
        </form>

</div >

    {state.succeeded && 
    <div className="flex" >

      <Lottie
      loop={false}
      style={{height:55,marginTop:13}}    animationData={done}
          aria-aria-labelledby="use lottie animation"
        />
    <p>Your message has been sent successfully 👌</p>
    </div>
}
  </div>


<div className="animation">
        
      <Lottie
        style={{height:335}}
      loop={true}
       animationData={contact}
          aria-aria-labelledby="use lottie animation"
        />  </div>




    </section>
  );
}

export default Contact;
