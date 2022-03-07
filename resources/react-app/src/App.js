import React from 'react';
import './App.css';
import {
  BrowserRouter as Router,
  Route,
  Link
} from "react-router-dom";

import {Switch} from "react-router-dom";

import Login from './components/login';
import Register from './components/Register';



import '../public/assets/css/main.css';
import '../public/assets/css/util.css';

import '../public/assets/images/log.png';

import '../public/assets/vendor/bootstrap/css/bootstrap.min.css';
import '../public/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css';
import '../public/assets/vendor/animate/animate.css';
import '../public/assets/vendor/css-hamburgers/hamburgers.min.css';
import '../public/assets/vendor/select2/select2.min.css';



function App() {
  return (
         <Router>
           <div className="App">
            <ul className="App-header">
              
            </ul>
           <Routes>
                 <Route exact path="/" element={<Login/>}/>
                 <Route exact path='/Register' component={Register}/>
          </Routes>

          </div>
         </Router>
  );
}

export default App;

