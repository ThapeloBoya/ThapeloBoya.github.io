import React from "react"
import Navbar from "./components/Nav"
import Hero from "./components/Hero"
import Card from "./components/Card"


import "./style.css"
import data from "./data"

export default function App(){
  const info = data.map(list => (
    <Card
    key={list.id}
   {...list}
    />
  ))
  return(
      <>
      <Navbar/>
      <Hero/>
      <div className="cards-list">
      {info}
      </div>
    
      </>
  )
}