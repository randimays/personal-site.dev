import React, {Component} from 'react';
import classNames from 'classnames';
import {Link, NavLink} from 'react-router-dom';
import logo from '../img/r_logo.svg';

class Header extends Component {
	constructor(props) {
		super(props);

		this.state = {
			menuOpen: false
		};

		this.closeMenu = this.closeMenu.bind(this);
		this.onMenuClick = this.onMenuClick.bind(this);
	}

	onMenuClick() {
		this.setState({menuOpen: !this.state.menuOpen});
	}

	closeMenu() {
		this.setState({menuOpen: false});
	}

	render() {
		const buttonStyle = classNames('navbar-toggle', {collapsed: !this.state.menuOpen});
		const menuStyle = classNames('navbar-links', {open: this.state.menuOpen});

		return (
			<header>
				<div className="navbar-container">
					<div>
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
					<div>
						<button 
							type="button" 
							className={buttonStyle}
							aria-expanded="false"
							aria-controls="navbar"
							onClick={this.onMenuClick}
						>
							<span className="sr-only">Toggle navigation</span>
							<span className="icon-bar"></span>
							<span className="icon-bar"></span>
							<span className="icon-bar"></span>
						</button>
						<ul className={menuStyle}>
							<NavLink 
								activeClassName="active"
								to="/about"
								onClick={this.closeMenu}
							>
								about
							</NavLink>
							<NavLink 
								activeClassName="active"
								to="/work"
								onClick={this.closeMenu}
							>
								work
							</NavLink>
							<NavLink 
								activeClassName="active"
								to="/contact"
								onClick={this.closeMenu}
							>
								contact
							</NavLink>
						</ul>
					</div>
				</div>
			</header>
		);
	}
}

export default Header;