import React from 'react';
// import classNames from 'classnames';
import {Link} from 'react-router-dom';
import logo from '../img/r_logo.svg';

const Header = () => {
	// const {active} = props;
	// const activeLink = classNames({active: 'active-link'});
	return (
		<div className="navbar navbar-default navbar-fixed-top">
			<div className="container">
				<div className="navbar-header">
					<button type="button" className="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span className="sr-only">Toggle navigation</span>
						<span className="icon-bar"></span>
						<span className="icon-bar"></span>
						<span className="icon-bar"></span>
					</button>
					<Link className="navbar-brand" to="/">
						<img alt="randi mays logo" id="logo" src={logo} />
					</Link>
					<Link to="/">
						<p className="headerName">randi<strong>mays</strong></p>
					</Link>
				</div>
			
				<div id="navbar" className="collapse navbar-collapse navbar-responsive-collapse navbar-right">
					<ul className="nav navbar-nav">
						<Link to="/about">about</Link>
						<Link to="/development">development</Link>
						<a>resume</a>
						<Link to="/contact">contact</Link>
					</ul>
				</div>
		</div>
	</div>
	);
};

export default Header;