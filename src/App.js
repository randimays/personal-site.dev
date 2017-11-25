import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Provider } from 'react-redux';
import { createStore, applyMiddleware } from 'redux';
import { Router, Route } from 'react-router';
// import configureStore from './redux/configureStore';

import Home from './components/home';
import About from './components/about';
import Development from './components/development';
import Contact from './components/contact';
import './css/style.css';

// let store = configureStore();

class App extends Component {
	render() {
		return (
			<Router>
				<Route path="/" component={Home} />
				<Route path="/about" component={About} />
				<Route path="/development" component={Development} />
				<Route path="/contact" component={Contact} />
			</Router>
		);
	}
}

export default App;