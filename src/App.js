import './App.css';
import General from './components/General';
import Home from './Home';
import React from "react";

import 'bulma/css/bulma.min.css';

import {
    BrowserRouter as Router, Link,
    Route,
    Routes,
} from "react-router-dom";
function App() {
  return (
    <div>
    <Router>
            <nav className="r5pCB" role="navigation" aria-label="main navigation" style={{background:"#06D485"}}>
                <div >
                    <div className="tabs is-medium">
                        <ul>
                            <li ><Link to="/">Inicio</Link></li>
                            <li><Link to="/General" > General </Link></li>
                        </ul>
                    </div>
                    <a role="button" className="navbar-burger" aria-label="menu" aria-expanded="false">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
            </nav>

        <Routes>
            <Route exact path="/" element={<Home/>} ></Route>

            <Route exact path="/general" element={<General/>} ></Route>

        </Routes>
    </Router>

    </div>
  );
}

export default App;
