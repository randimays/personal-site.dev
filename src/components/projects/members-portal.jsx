import React, {Component, Fragment} from 'react';
import classNames from 'classnames';

class MembersPortal extends Component {
	state = {
		accessOpen: false,
		devsOpen: false,
		techOpen: false
	};

	handleAccessClick = () => {
		this.setState((prevState) => ({accessOpen: !prevState.accessOpen}));
	};

	handleTechClick = () => {
		this.setState((prevState) => ({techOpen: !prevState.techOpen}));
	};

	handleDevsClick = () => {
		this.setState((prevState) => ({devsOpen: !prevState.devsOpen}));
	};

	render() {
		const accessClass = classNames('access', {'open': this.state.accessOpen});
		const techClass = classNames('tech', {'open': this.state.techOpen});
		const devsClass = classNames('devs', {'open': this.state.devsOpen});

		return (
			<Fragment>
				<img 
					src={require('../../img/mp_home.jpg')} 
					className="img-responsive about" 
					alt="Members Portal Home" 
				/>
				<div className="container">
					<h1>Members Portal</h1>
					<section className="centerWhiteBoxAbout">
						<p className="lead">Members Portal is an application designed to facilitate trusted professional connections between members of a city organization such as a chamber of commerce. The portal is also designed to serve as an invaluable resource for staffing (per-project or permanent) needs.</p>
						<p>A common issue facing business networking organizations today is a lack of space and opportunity for members to build relationships amongst themselves. If an organization cannot provide these opportunities to its members (typically locally-owned small businesses or individual contractors), they run the risk of members outsourcing jobs to non-members. Members Portal enables members to create business relationships with one another and increase profits within the organization.</p>
						<h3 
							className="accordionHeaders"
							onClick={this.handleAccessClick}
						>
							<a className="blue">Access To The Portal ></a>
						</h3>
						<p className={accessClass}>Access to the full Members Portal application is not granted for non-members. As of September 2016, there are further plans for development to include additional features and restructuring of code on the front and back end. Please see <span className="strong">The Developers and Backstory</span> tab for contact information for the developers.</p>
						<h3 
							className="accordionHeaders"
							onClick={this.handleTechClick}
						>
							<a className="blue">Technologies Utilized ></a>
						</h3>
						<div className={techClass}>
							<p>The portal's front end was built with Twitter Bootstrap and custom CSS. The back end of the portal, built using the Laravel PHP framework, uses MySQL language to query information from the member database and populate events, requests for proposals, articles, carousels and leadership throughout the site. The application features a live Twitter feed (created from Twitter's API) for the city organization and each business that has provided their account username. Google Maps API and JavaScript, jQuery and Ajax pull data for the Search Members page to populate search results.</p>
							<p className="strong noMargin">Front End: &nbsp;
								<span className="red">
									HTML <span className="small"> •&nbsp;</span>
									Bootstrap <span className="small"> •&nbsp;</span>
									CSS <span className="small"> •&nbsp;</span>
									JavaScript <span className="small"> •&nbsp;</span>
									jQuery <span className="small"> •&nbsp;</span>
									Ajax <span className="small"> •&nbsp;</span>
									Google Maps API <span className="small"> •&nbsp;</span>
									Twitter Feed API
								</span>
							</p>
							<p className="strong">Back End: &nbsp;
								<span className="red">
									PHP <span className="small"> •&nbsp;</span>
									Laravel <span className="small"> •&nbsp;</span>
									MySQL <span className="small"> •&nbsp;</span>
									Sequel Pro
								</span>
							</p>
						</div>
						<h3 
							className="accordionHeaders"
							onClick={this.handleDevsClick}
						>
							<a className="blue">The Developers and Backstory ></a>
						</h3>
						<div className={devsClass}>
							<div className="aboutDevelopers">
								<a 
									href="https://www.linkedin.com/in/anthony-martinez" 
									rel="noopener noreferrer"
									target="_blank"
								>
									<img 
										src={require('../../img/anthony.jpg')} 
										className="img-circle img-thumbnail leaderHeadshotAbout" 
										alt="Anthony Martinez" 
									/>
								</a>
								<h4 className="dkgreen smallMargin">Anthony Martinez</h4>
								<h5 className="leaderTitleAbout">Developer</h5>
								<p>
									<a 
										className="red" 
										href="/resumes/anthony_resume.pdf" download
									>
										download resume
									</a>
								</p>
								<p>
									<a 
										className="red" 
										href="mailto:martab7.am@gmail.com?Subject=Members%20Portal" 
										target="_top"
									>
										contact Anthony
									</a>
								</p>
							</div>
							<div className="aboutDevelopers">
								<a 
									href="https://www.linkedin.com/in/randimays" 
									rel="noopener noreferrer"
									target="_blank"
								>
									<img 
										src={require('../../img/randi.jpg')} 
										className="img-circle img-thumbnail leaderHeadshotAbout" 
										alt="Randi Mays" 
									/>
								</a>
								<h4 className="dkgreen smallMargin">Randi Mays</h4>
								<h5 className="leaderTitleAbout">Designer/Developer</h5>
								<p>
									<a className="red" href="/resumes/randi_resume.pdf" download>download resume</a>
								</p>
								<p>
									<a className="red" href="mailto:randimays1024@gmail.com?Subject=Members%20Portal" target="_top">contact Randi</a>
								</p>
							</div>
							<p>Anthony Martinez and Randi Mays met at Codeup, a 16-week full stack web development career accelerator in May 2016. The two happened to be standing next to one another when it was time to choose a partner for an icebreaker activity on the first day of the course.</p>
							<p>Anthony previously worked with the San Antonio Hispanic Chamber of Commerce to improve member outreach and business development. His experience shed light on a large problem facing organizations like the Chamber and led him to develop the idea for the portal. He chose Randi as a partner for the project as her professional experience as a graphic designer brought valuable front end design skills to the table.</p>
							<p>Anthony built the logic for the database queries to pull data for each page of the portal. Randi put together the visual aspects of the portal using data from Anthony's queries and ensured organized and consistent files on the back end. The two worked together to build secure routes throughout the app and write the CRUD (create, read, update, delete) functions for features like Events, Requests for Proposals and articles on the site.</p>
						</div>
					</section>
					<h1>Features</h1>
					<img 
						src={require('../../img/mp_news.png')} 
						alt="Members Portal News"
						className="img-responsive aboutPage" 
					/>
					<div className="aboutDiv">
						<h3>News &amp; Announcements</h3>
						<p>The homepage features ample space for news articles, announcements, events and requests for proposals (RFPs) pushed by the city organization.</p>
					</div>
					<img 
						alt="Members Portal Directory" 
						className="img-responsive aboutPage" 
						src={require('../../img/mp_search.png')} 
					/>
					<div className="aboutDiv">
						<h3>Interactive Directory</h3>
						<p>The Search Members page, integrated with Google Maps, enables members to search for other members by industry, company name, description or characteristics.</p>
					</div>
					<img 
						alt="Members Portal Events &amp; RFPs" 
						className="img-responsive aboutPage" 
						src={require('../../img/mp_events_rfps.png')} 
					/>
					<div className="aboutDiv">
						<h3>Events &amp; Requests for Proposals (RFPs)</h3>
						<p>All members and the city organization can post events and RFPs to fill needs for contract services.</p>
					</div>
					<img 
						src={require('../../img/mpprofile.png')} 
						alt="Members Portal Profiles" 
						className="img-responsive aboutPage" 
					/>
					<div className="aboutDiv">
						<h3>Company Profiles</h3>
						<p>Each member of the organization is represented with a company profile featuring the business description and characteristics, a project showcase, leadership, events, RFPs and more.</p>
					</div>
					<img 
						src={require('../../img/mp_dash.png')} 
						alt="Members Portal Dashboard" 
						className="img-responsive aboutPage" 
					/>
					<div className="aboutDiv">
						<h3>Member Dashboard</h3>
						<p>The dashboard features a user-friendly timeline of the member's network activity. Events, RFPs and connections made within the member's network can be seen here in the live feed.</p>
					</div>
					<img 
						alt="Members Portal Personalization" 
						className="img-responsive aboutPage" 
						src={require('../../img/mp_acct.png')} 
					/>
					<div className="aboutDiv">
						<h3>Account Personalization</h3>
						<p>All members are able to change their company information, and any information shared is securely encrypted and allows the business to appear more frequently in the results on the Search Members page.</p>
					</div>
					<img 
						alt="Members Portal Admin Dashboard" 
						className="img-responsive aboutPage" 
						src={require('../../img/mp_admin.png')} 
					/>
					<div className="aboutDiv">
						<h3>Admin Dashboard</h3>
						<p>The portal allows a single administrative user to act as the gatekeeper of the homepage materials and manage members of the portal based on their current membership status in the organization.</p>
					</div>
				</div>
			</Fragment>
		);
	}
};

export default MembersPortal;