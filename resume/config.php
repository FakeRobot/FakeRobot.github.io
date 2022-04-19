<?
// Enter your personal details here to build your online resume.

// Let's start with some basic info.  You must include your full name, but if you don't want to include your phone number or email address you can just delete those lines entirely.
$personal['first_name']= 'Marli';
$personal['last_name'] = 'Bells';
$personal['phone_number'] = '306-381-8343';
$personal['email_address'] = 'm.rauert@gmail.com';
$personal['website'] = 'marlibells.com';

// Now let's add any social media pages you've created and want to share.  You can add whatever you want by following the format below.  The first item you add is the name of the social media site, and the second item you add is the URL to your page.
$social_media[] = array('Twitter', 'http://twitter.com/FakeRobot');
$social_media[] = array('LinkedIn', 'http://ca.linkedin.com/in/marlibells');

// Cool.  With that stuff out of the way, let's input your work history.  This part requires a bit more information but it's similar to adding a social media page like you did above but with more information.  The first item you enter is last year you worked at the job (or the range of time, if you prefer).  The second item is your job title, the third is the company you worked for, and the fourth is a description of the work you did there.  The description can get a little long, but that's okay.  Just be sure not to use any single quotes ('') or things will break!  You can add as many jobs as you like and the script will adapt.
$work_history[] = array('November 2014 - Present',
						'Developer',
						'Rock & Bloom',
						'Responsibile for development on existing projects and new project builds.<br>
						Collaboratively involved in developing the company\'s technical processes.
						');
$work_history[] = array('September 2013 - Present',
						'Saskatoon Chapter Lead',
						'Ladies Learning Code',
						'Co-lead of the Ladies Learning Code Saskatoon chapter.<br>
						Responsible for promoting and coordinating the Saskatoon Chapter of Ladies Learning Code involving:<br>
						<ul><li>outreach to women and girls in Saskatoon and area</li>
						<li>organizing events and workshops</li>
						<li>coordinating day-of operations for workshops</li></ul>
						');
$work_history[] = array('June 2014 – December 2015',
						'Sessional Lecturer - CMPT 100',
						'University of Saskatchewan',
						'Sessional lecturer for CMPT 100 (Introduction to Computing) online section.<br/>
						<ul><li>Summer T2 2014</li>
						<li>Summer T2 2015</li>
						<li>Fall/Winter T1 2015</li></ul>
						');
$work_history[] = array('May 2011 - November 2014',
						'Mobile and Web Developer, Scrummaster',
						'zu',
						'Team leader for a nine person development team.<br/>
						Worked on Mobile (iOS, Android) projects and web projects.<br/>
						Helped launch first non-client directed mobile app project.
						');
//						'Responsible for facilitating meetings necessary for the development team, ensuring the Agile process is followed, and removing obstacles for the development team.<br/>Experience in user story writing, story prioritization, and backlog grooming. Experience filling in for Product Owner duties on several teams in the organization. Development in PHP and Objective C.');
$work_history[] = array('May 2009 - August 2010',
						'Developer Intern',
						'zu',
						'Assisted in the development and maintenance of many corporate investor relation websites.');

// Phew!  That was the hard part.  Now we need to enter in some other important information about you.  Let's start with your education.  You only need to enter two things: your school and a description of your degree.  If you went to Brown University you'd enter that for your school, then put your year and graduation date as the description (e.g. "BA in Social Sciences, Class of 2002").
$education[] = array('University of Saskatchewan', 'Bachelor of Science, Computer Science, 2011');

// Presumably you learned something in school and developed a few skills over the course of your lifetime.  Let's add them here.  
$skills[] = array('Languages', 'HTML, CSS, PHP, JavaScript, Objective-C, mySQL');
$skills[] = array('Design Methodologies', 'Responsive Web Design, Mobile First Design');
//$skills[] = array('Intrapersonal Skills', 'Great Communicator, Experienced Planner, Team Leader');
//$skills[] = array('Software', 'Xcode, Photoshop, MS Office Suite');
$skills[] = array('Methodologies', 'Agile Development, Test Driven Development, Pair Programming, Self Organizing Teams');

// Finally, let's list any awards or honors you've received so you can show off your accomplishments.  To add an award, just use the format below.  (I'm sure you have the hang of this by now, but we're going to go over it anyway.)  The first item you enter is the name of the award/honor (e.g. "Advertising Gold Award" or "Published in the New Yorker") and the second item is the description of the award/honor (e.g. "2010 TV Ads Under $50,000" or "Short story about the trials of Orthodox Jews in Arkansas, May 2016").
$awards[] = array('Women of Distinction - Research and Technology Nominee, 2015', 'Issued by YWCA Saskatoon.');
$awards[] = array('Valedictorian', 'Department of Computer Science, 2011');
$awards[] = array('zu Award in Leadership and Innovation in Technology, 2011', 'To support and recognize the leadership, community service, volunteerism and innovation of students who are majoring in Computer Science in the Department of Computer Science at the University of Saskatchewan');

// Want to turn off any of the sections on your resume?  You can do that in the settings.  Just change any section from true to false and it'll disappear.  (Note: You can't turn off your work history--that's sort of important!)
$settings['social_media'] = true;
$settings['education'] = true;
$settings['skills'] = true;
$settings['awards'] = true;

// There are also a few other settings you can toggle on and off, such as offering a printable version of your resume and whether to use a dark or light style (set style to "dark" or "light" to choose).
$settings['printable'] = true;
$settings['style'] = "light";
?>