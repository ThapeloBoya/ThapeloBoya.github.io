import React from "react";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faLocationDot, faCalendarDays, faUser, faStar } from '@fortawesome/free-solid-svg-icons';

export default function Card(props) {
 
  return (
    /*add the hot conditional expression*/
    <div className="card">
       {props.hot >= 30 && <div className="card--badge">Hot</div>}

        <img src={`/images/${props.coverImg}`} alt="cover" className="card--image"/>

        <p className="card--top">
          <span> <FontAwesomeIcon icon={faLocationDot} className="card--icon"/>  {props.location}</span> 
          <span><FontAwesomeIcon icon={faCalendarDays} className="card--icon"/>  {props.duration}</span>
          <span><FontAwesomeIcon icon={faUser} className="card--icon"/> {props.seats} People</span>
        </p>
        <p className="card--title">{props.title}</p>
        <p className="card--bottom">
        <span> <FontAwesomeIcon icon={faStar} className="card--icon"/> {props.stats.rating}  </span>
        <span className="card-count">({props.stats.reviewCount})</span>
        <span className="card--price">$ {props.price}</span>
        </p>
    </div>
  );
}
