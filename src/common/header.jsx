import React from 'react';
// import classNames from 'classnames';
import {Link, NavLink} from 'react-router-dom';
import logo from '../img/r_logo.svg';

const Header = () => {
	// const {active} = props;
	// const activeLink = classNames({active: 'active-link'});
	return (
		<header>
			<div className="navbar-container">
				<div className="navbar-flex-blocks">
					<button 
						type="button" 
						className="navbar-toggle collapsed" 
						aria-expanded="false"
						aria-controls="navbar"
					>
						<span className="sr-only">Toggle navigation</span>
						<span className="icon-bar"></span>
						<span className="icon-bar"></span>
						<span className="icon-bar"></span>
					</button>
					<Link 
						to="/" 
						className="logo"
					>
						<img 
							alt="randi mays logo" 
							src={logo} 
						/>
					</Link>
					<Link 
						className="header-name" 
						to="/" 
					>
						randi<strong>mays</strong>
					</Link>
				</div>
				<div className="navbar-flex-blocks">
					<ul className="navbar-links">
						<NavLink 
							activeClassName="active"
							to="/about"
						>
							about
						</NavLink>
						<NavLink 
							activeClassName="active"
							to="/work"
						>
							work
						</NavLink>
						<NavLink 
							activeClassName="active"
							to="/contact"
						>
							contact
						</NavLink>
					</ul>
				</div>
			</div>
		</header>
	);
};

export default Header;