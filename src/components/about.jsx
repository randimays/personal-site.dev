import React from 'react';
import {Link} from 'react-router-dom';
import photo from '../img/randi.jpg';
import peacock from '../img/peacock.jpg';

const About = () => {
	return (
		<div className="container">
			<h1>About Me</h1>
			<div className="flex-container">
				<img src={photo} className="randi-photo" alt="Randi Mays" />
				<div className="about-text">
					<p className="lead">I am a graphic designer and front end developer.</p>
					<p>Like anyone, my bacon-bringing profession doesn’t describe a singular skill set. I possess some handy dandy administrative skills and I’ve achieved guru status as a customer service rep. In a pinch, I’ve been known to dazzle a client with marketing copy.</p>
					<p>I am a persistent, problem-solving, challenge-loving, hyper organized designer/developer who enjoys work in fast-paced, dynamic companies.</p>
					<Link className="button" to="/contact">Let's Work Together</Link>
				</div>
			</div>

			<a id="peacock"></a>
			<h1>The Peacock</h1>

			<div className="flex-container">
				<img className="peacock" src={peacock} />
				<div>
					<p className="lead">The peacock is a visual representation of career progression and my brand mascot.</p>
					<p>A marching band member in high school, I had to tie my hair up so it would fit in my plume-adorned helmet for shows. A good friend called my bun the 'Randi Peacock' because my hair would stick up from the back of my head.</p>
					<p>I admired the beauty of the birds and eventually likened the beautiful display of tail feathers to my growth as a designer and later a developer. With time, patience and practice, a hopeful young techie develops and hone skills to form an impressive arsenal of tools for the visual and technical execution of an incredible idea.</p>
				</div>
			</div>
		</div>
	);
};

export default About;