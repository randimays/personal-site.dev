import React, { Component } from 'react';
import { Provider } from 'react-redux';
import { Route, Switch} from 'react-router';
import { BrowserRouter } from 'react-router-dom';
import configureStore from './redux/configureStore';

import Home from './components/home';
import About from './components/about';
import Development from './components/development';
import Contact from './components/contact';
import './css/style.css';

let store = configureStore();

class App extends Component {
	render() {
		return (
			<Provider store={store}>
				<BrowserRouter>
					<Switch>
						<Route exact path="/" component={Home} />
						<Route path="/about" component={About} />
						<Route path="/development" component={Development} />
						<Route path="/contact" component={Contact} />
					</Switch>
				</BrowserRouter>
			</Provider>
		);
	}
}

export default App;