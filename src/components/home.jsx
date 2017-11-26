import React from 'react';
import Peacock from './peacock';

const Home = () => {
	return (
		<div>
			<a 
				className="the_peacock_link" 
				href=""
			>
				story of the peacock&nbsp;&nbsp;&nbsp;>
			</a>
			<div 
				id="peacock_illustration" 
				className="center-block"
			>
				<Peacock />
			</div>
		</div>
	);
};

export default Home;