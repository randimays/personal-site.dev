import React from 'react';
import mphome from '../../img/mp_home.jpg';
import anthony from '../../img/anthony.jpg';
import randi from '../../img/randi.jpg';
import mpnews from '../../img/mp_news.png';
import mpsearch from '../../img/mp_search.png';
import mpeventsrfps from '../../img/mp_events_rfps.png';
import mpprofile from '../../img/mp_profile.png';
import mpdash from '../../img/mp_dash.png';
import mpacct from '../../img/mp_acct.png';
import mpadmin from '../../img/mp_admin.png';

const MembersPortal = () => {
	return (
		<div className="container about">
			<a 
				className="sr-only"
				id="top"
			>
				Top of page (nav link)
			</a>
			<h1>Members Portal</h1>
			<img src={mphome} className="about" alt="Members Portal Home" />

			<section>
				<p className="lead">Members Portal is an application designed to facilitate trusted professional connections between members of a city organization such as a chamber of commerce. The portal is also designed to serve as an invaluable resource for staffing (per-project or permanent) needs.</p>
				<p>A common issue facing business networking organizations today is a lack of space and opportunity for members to build relationships amongst themselves. If an organization cannot provide these opportunities to its members (typically locally-owned small businesses or individual contractors), they run the risk of members outsourcing jobs to non-members. Members Portal enables members to create business relationships with one another and increase profits within the organization.</p>
				<h3 className="accordionHeaders">
					<a className="blue" data-toggle="collapse" data-parent="#accordion0" href="#collapse0" aria-expanded="false" aria-controls="collapse0">Access To The Portal ></a>
				</h3>
				<p>Access to the full Members Portal application is not granted for non-members. As of September 2016, there are further plans for development to include additional features and restructuring of code on the front and back end. Please see <span className="strong">The Developers and Backstory</span> tab for contact information for the developers.</p>
				<h3 className="accordionHeaders">
					<a className="blue" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1">Technologies Utilized ></a>
				</h3>
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
				<p className="strong noMargin">Back End: &nbsp;
					<span className="red">
						PHP <span className="small"> •&nbsp;</span>
						Laravel <span className="small"> •&nbsp;</span>
						MySQL <span className="small"> •&nbsp;</span>
						Sequel Pro
					</span>
				</p>
				<h3 className="accordionHeaders">
					<a className="blue" data-toggle="collapse" data-parent="#accordion2" href="#collapse2" aria-expanded="false" aria-controls="collapse2">The Developers and Backstory ></a>
				</h3>
				<div className="aboutDevelopers">
					<a 
						alt="Anthony's LinkedIn Page"
						href="https://www.linkedin.com/in/anthony-martinez" 
						rel="noopener noreferrer"
						target="_blank"
					>
						<div className="leaderHeadshotAbout">
							<img className="img-thumbnail" src={anthony} alt="Anthony Martinez" />
						</div>
					</a>
				</div>
				<div className="aboutDevs">
					<h5 className="dkgreen smallMargin">Anthony Martinez</h5>
					<p className="leaderTitleAbout">Developer</p>
					<p className="noMargin">
						<a className="red" href="/resumes/anthony_resume.pdf" download>download resume</a>
					</p>
					<p className="noMargin">
						<a className="red" href="mailto:martab7.am@gmail.com?Subject=Members%20Portal" target="_top">contact Anthony</a>
					</p>
				</div>
				<div>
					<a 
						alt="Randi's LinkedIn Page"
						href="https://www.linkedin.com/in/randimays" 
						rel="noopener noreferrer"
						target="_blank"
					>
						<div className="leaderHeadshotAbout">
							<img className="img-thumbnail" src={randi} alt="Randi Mays" />
						</div>
					</a>
				</div>
				<div className="aboutDevs">
					<h5 className="dkgreen smallMargin">Randi Mays</h5>
					<p className="leaderTitleAbout">Designer/Developer</p>
					<p className="noMargin">
						<a className="red" href="/resumes/randi_resume.pdf" download>download resume</a>
					</p>
					<p className="noMargin">
						<a className="red" href="mailto:randimays1024@gmail.com?Subject=Members%20Portal" target="_top">contact Randi</a>
					</p>
				</div>
				<p>Anthony Martinez and Randi Mays met at Codeup, a 16-week full stack web development career accelerator in May 2016. The two happened to be standing next to one another when it was time to choose a partner for an icebreaker activity on the first day of the course.</p>
				<p>Anthony previously worked with the San Antonio Hispanic Chamber of Commerce to improve member outreach and business development. His experience shed light on a large problem facing organizations like the Chamber and led him to develop the idea for the portal. He chose Randi as a partner for the project as her professional experience as a graphic designer brought valuable front end design skills to the table.</p>
				<p>Anthony built the logic for the database queries to pull data for each page of the portal. Randi put together the visual aspects of the portal using data from Anthony's queries and ensured organized and consistent files on the back end. The two worked together to build secure routes throughout the app and write the CRUD (create, read, update, delete) functions for features like Events, Requests for Proposals and articles on the site.</p>
			</section>
			<h1>Features</h1>
			<div className="aboutPage">
				<img alt="Members Portal News" src={mpnews} />
			</div>
			<div className="aboutDiv">
				<h3 className="aboutPage2">News &amp; Announcements</h3>
				<p>The homepage features ample space for news articles, announcements, events and requests for proposals (RFPs) pushed by the city organization.</p>
				<a className="red" href="#top">Back To Top</a>
			</div>
			<div className="aboutPage">
				<img alt="Members Portal Directory" src={mpsearch} />
			</div>
			<div className="aboutDiv">
				<h3 className="aboutPage">Interactive Directory</h3>
				<p>The Search Members page, integrated with Google Maps, enables members to search for other members by industry, company name, description or characteristics.</p>
				<a className="red" href="#top">Back To Top</a>
			</div>
			<div className="aboutPage">
				<img alt="Members Portal Events &amp; RFPs" src={mpeventsrfps} />
				<div className="aboutDiv">
					<h3 className="aboutPage2">Events &amp; Requests for Proposals (RFPs)</h3>
					<p>All members and the city organization can post events and RFPs to fill needs for contract services.</p>
					<a className="red" href="#top">Back To Top</a>
				</div>
			</div>
			<div className="aboutPage">
				<img alt="Members Portal Profiles" src={mpprofile} />
				<div className="aboutDiv">
					<h3 className="aboutPage2">Company Profiles</h3>
					<p>Each member of the organization is represented with a company profile featuring the business description and characteristics, a project showcase, leadership, events, RFPs and more.</p>
					<a className="red" href="#top">Back To Top</a>
				</div>
			</div>
			<div className="aboutPage">
				<img alt="Members Portal Dashboard" src={mpdash} />
				<div className="aboutDiv">
					<h3 className="aboutPage2">Member Dashboard</h3>
					<p>The dashboard features a user-friendly timeline of the member's network activity. Events, RFPs and connections made within the member's network can be seen here in the live feed.</p>
					<a className="red" href="#top">Back To Top</a>
				</div>
			</div>
			<div className="aboutPage">
				<img alt="Members Portal Personalization" src={mpacct} />
				<div className="aboutDiv">
					<h3 className="aboutPage2">Account Personalization</h3>
					<p>All members are able to change their company information, and any information shared is securely encrypted and allows the business to appear more frequently in the results on the Search Members page.</p>
					<a className="red" href="#top">Back To Top</a>
				</div>
			</div>
			<div className="aboutPage">
				<img alt="Members Portal Admin Dashboard" src={mpadmin} />
				<div className="aboutDiv">
					<h3 className="aboutPage2">Admin Dashboard</h3>
					<p>The portal allows a single administrative user to act as the gatekeeper of the homepage materials and manage members of the portal based on their current membership status in the organization.</p>
					<a className="red" href="#top">Back To Top</a>
				</div>
			</div>
		</div>
	);
};

export default MembersPortal;