import React from "react"
import ReactDOM from "react-dom/client"
/*
Challenge: Starting from scratch, build and render the 
HTML for our section project. Check the Google slide for 
what you're trying to build.

We'll be adding styling to it later.

Hints:
* The React logo is a file in the project tree, so you can
  access it by using `src="./react-logo.png" in your image
  element
* You can also set the `width` attribute of the image element
  just like in HTML. In the slide, I have it set to 40px
 */

 function Nav() = {
    return <nav>
    <img src="images/logo.png">
    </nav>
 }


 ---------------------first app

 import React from "react"
import ReactDOM from "react-dom/client"

function Nav() {
  return (<nav>
  <img src="https://th.bing.com/th/id/R.f81a6f373c244b1f70f4b7402b5ab372?rik=rbXh4ieLuKt%2bmA&riu=http%3a%2f%2flogos-download.com%2fwp-content%2fuploads%2f2016%2f09%2fReact_logo_logotype_emblem.png&ehk=QhGOkKcUKCU7FBQgHOajOiJqJBACUTD2Ni6LsfqzCEA%3d&risl=&pid=ImgRaw&r=0" width="50px"/>
  </nav>)
}
function Body(){
  return (
    <div>
    <h1>Fun facts about react</h1>
    <ul>
      <li>was first released in 2013</li>
      <li>was originally created by john walker</li>
      <li>has well over 100k stars on github</li>
      <li>os maintained by facebook</li>
      <li>powers thousands of enterprise apps, including mobile apps</li>
    </ul>
  </div>
  )
}
ReactDOM.createRoot(document.getElementById("root")).render(
  <div>
    <Nav/>
    <Body/>
  </div>

)

