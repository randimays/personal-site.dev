import React from 'react';
import moment from 'moment';
import linkedin from '../img/linkedin.svg';
import github from '../img/github.svg';

const Footer = () => {
	return (
		<footer>
			<div className="footer-container">
				<p>
					<span className="copyright">©</span>&nbsp;
					{moment().format('YYYY')} randi mays&nbsp;&nbsp; |&nbsp;&nbsp; graphic designer&nbsp;&nbsp; |&nbsp;&nbsp; web developer&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;
					<a href="mailto:randi@randimariedesigns.com?Subject=Designer/Developer">randi@randimariedesigns.com</a>
				</p>
				<div>
					<a 
						className="linkedin" 
						href="https://www.linkedin.com/in/randimays" 
						target="_blank"
						rel="noopener noreferrer" 
						alt="Randi Mays LinkedIn"
					>
						<img
							alt="Randi Mays LinkedIn"
							src={linkedin}
						/>
						<span className="sr-only">Link to Randi's LinkedIn page</span>
					</a>
					<a 
						className="github" 
						href="https://github.com/randimays" 
						target="_blank"
						rel="noopener noreferrer" 
						alt="Randi Mays Github"
					>
						<img
							alt="Randi Mays Github"
							src={github}
						/>
						<span className="sr-only">Link to Randi's Github page</span>
					</a>
				</div>
			</div>
		</footer>
	);
};

export default Footer;