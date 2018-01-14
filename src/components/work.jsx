import React from 'react';
import {Link} from 'react-router-dom';
import mpthumb from '../img/mp_thumb.png';

const Work = () => {
	return (
		<div className="container">
			<h1>Work</h1>
			<div className="flex-container work">
				<Link to="/members-portal">
					<img 
						alt="Members Portal site"
						src={mpthumb} 
					/>
				</Link>
			</div>
		</div>
	);
};

export default Work;