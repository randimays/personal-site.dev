import React, { Component } from 'react';
import { Provider } from 'react-redux';
import { Route, Switch} from 'react-router';
import { BrowserRouter } from 'react-router-dom';
import configureStore from './redux/configureStore';

import Header from './common/header';
import Footer from './common/footer';
import Home from './components/home';
import About from './components/about';
import Work from './components/work';
import Contact from './components/contact';
import './css/main.css';
import './css/header-footer.css';
import './css/archer.css';
import './css/calculator.css';
import './css/peacock.css';
import './css/weather.css';

let store = configureStore();
const DefaultLayout = ({component: Component, ...rest}) => {
	return (
		<Route {...rest} render={matchProps => (
			<div>
				<Header />
				<Component {...matchProps} />
				<Footer />
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
						<DefaultLayout path="/work" component={Work} />
						<DefaultLayout path="/contact" component={Contact} />
						<DefaultLayout path="/" component={Home} />
					</Switch>
				</BrowserRouter>
			</Provider>
		);
	}
}

export default App;