import React, { Component } from 'react';
import { Provider } from 'react-redux';
import { Route, Switch} from 'react-router';
import { BrowserRouter } from 'react-router-dom';
import configureStore from './redux/configureStore';

import Header from './common/header';
import Home from './components/home';
import About from './components/about';
import Development from './components/development';
import Contact from './components/contact';
import './css/style.css';

let store = configureStore();
const DefaultLayout = ({component: Component, ...rest}) => {
	return (
		<Route {...rest} render={matchProps => (
			<div>
				<Header />
				<Component {...matchProps} />
				<div className="footer">Footer</div>
			</div>
		)} />
	);
};

class App extends Component {
	render() {
		return (
			<Provider store={store}>
				<BrowserRouter>
					<Switch>
						<DefaultLayout path="/about" component={About} />
						<DefaultLayout path="/development" component={Development} />
						<DefaultLayout path="/contact" component={Contact} />
						<DefaultLayout path="/" component={Home} />
					</Switch>
				</BrowserRouter>
			</Provider>
		);
	}
}

export default App;