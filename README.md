<h1>Milestone 1: Team Project Proposal and Description</h1>

## 1.Executive Summary

Given the current times, we wanted to create an app that will help people feel connected even during these socially distanced times. Calendar Connect is a personalized web app that can be tailored to the needs of each individual user.

The main focus of Calendar Connect is to allow people to stay connected with their friends, family, coworkers, and loved ones. Our app integrates a person’s schedule and allows them to share and connect with others to provide a clear visual of people’s availability. Our user-friendly dashboard can be customized and organized to the user’s needs and includes features such as to-do lists, groups, favorites, upcoming events, messages, alerts, and more! Calendar Connect allows users to create groups to share calendars with so you can maintain connection between family members, friend groups, school peers, or work colleagues. Our integration of pictures throughout your calendar month and year allows the app to become more personalized and for users to have fun and express themselves creatively. When you have an upcoming class, meeting, study session, or need some time alone, Calendar Connect can relay that to others to make sure you are not interrupted. On the other hand, when you are looking for free time within a group to spend some time together, whether virtually or in-person, Calendar Connect does the work of finding free time for the users so they can focus on planning and enjoying the time together.

Unlike most apps that are tailored specifically for just work, school, or businesses, Calendar Connect offers a large reachability that can be used by everyone for all sorts of needs. Calendar Connect’s integration allows users to customize their features to fit their needs either for school, work, personal life, or all of the above.

# 2.Competitive analysis

| Google Workspace  | Calendar.com | CalendarConnect(Us) |
| ------------- | ------------- | ------------- |
| Smart Scheduling  | Integration of other calendars  | Content Cell  |
| Instants messaging between team members  | Calendar analytics; a break down of all type of meetings| Instant messaging between contacts |
| Shareable/team calendars  | Artificial intelligence/Machine learning  | Group/shareable/team calendars  |
| Video conferencing  | Smart scheduling (overlay of who what time is available for selected contacts)  | Smart scheduling (overlay of who what time is available for selected contacts)  |
| Personal member site  | Team Calendars  | Automated system to find availability between selected contacts |
| Custom email for your business and includes collaboration tools like Gmail, Calendar, Meet, Chat, Drive, Docs, Sheets, Slides | “Anyone” can book a meeting directly with you  | Customizable calendars |




 
Unlike most of our competitors, who are focused on enhancing the scheduling of business operations, our product will be more gauged more towards the general public and working adults.



/
# 3.Data definition
This section serves as the “dictionary” of your document. It defines main terms, data structures and “items” or “entities” at high or logical (not implementation) level (e.g. name, meaning, usage, and NOT how the data is stored in memory) so it is easier to refer to them in the document. Focus on key terms (main data elements, actors, types of users etc.) specific for your application and not on general well known terms. These terms and their names must be used consistently from then on in all documents, user interface, in naming software components and database elements etc. In later milestones, you will add more implementation details for each item. You will later expand this section with more details.
/
Database elements: id, name, email, phone number, dob, password, registration date
Maps/Dictionaries (Hashing): authentication of user information, database security (obfuscation)
Heap sort (sorting algorithm): to sort users contacts, events by importance, and messages
Binary search (searching algorithm): to find an event, contact, or message/note
User: defines the user entity – unique id, name, email, password, phone number, DOB, profile picture
Event: defines a calendar event – unique id, event name, time, location, notes, attendees, color 
Calendar: defines type of calendar – unique id, calendar name, group calendar (Boolean), viewers, calendar admins, public/private, events, color, calendar view
Widget: defines the type of widget available widget the user can add to the dashboard – widget name, location (on the board), delete widget
Calendar (cannot de deleted)/Note/Weather/Messages/Contacts/Favorites/Photo slideshow/time/ widget: children of the widget class

/
# 4.Overview, scenarios and use cases
This section describes the project overview (in much more details) and likelihood usage scenarios of your product from end users’ perspectives. Focus only on main use cases.  Simple text format is OK and preferable – tell us a story about who and how is the application used. Focus on WHAT users do, their skill level, not on HOW the system is implemented. You can expand use cases provided in high level documents in future milestones.
/
Can be used as a type of social media but the main target audience is working people.
maytes example, customizing dashboard, making calendars fun.
make it easy for all users, including grannies

During these socially distanced times, many people still continue to balance their work life with school, extracurricular activities, meetings, hobbies, etc. and have found it difficult to still feel close and communicate with their friends, family, and loved ones. With differing schedules, meetings, and a global pandemic, keeping track of one’s free time as well as others can be difficult. With Calendar Connect, users can input their schedules from work, school, and everything in between into a single app and connect with their friends, family, and loved ones to share and view their schedules.
Our user-friendly dashboard is suitable for people of all ages and expertise levels given that our default template includes the key features most important to the functionality of the app. Our dashboard includes a monthly calendar showing all your events and tasks, a notes section, a to-do list, a list of your favorite connections, a reminder of upcoming events, any pending requests, and the ability to add events and contacts. Our spatially organized and labeled dashboard allows users with minimum technological experience to still enjoy and use the key features of the app. For those who wish to personalize their dashboard, Calendar Connect allows users to customize and add widgets to their dashboard based on their preferences or needs. These include but are not limited to a weather section, time zones, external links to specific zoom meetings, google hangouts, etc. and the ability to create groups and switch between shared group calendars. 
A beneficial and key feature Calendar Connect offers is the ability to create groups with people you connect with to share calendars within friends, families, peers, or colleagues. This allows you to keep track of your personal and professional life separately all in one place. Within these groups, Calendar Connect will find free time within all corresponding members in case they want to meet virtually or in person, work on a project, or simply have time to catch up. Messages can also be created within groups to make communication for planning events easier. On the other hand, when a member of a group is extremely busy or simply wants some alone time during a mutual free day, they will be able to edit that in the app so that no one attempts to plan time with them.
For users who enjoy expressing their creativity and personalizing their calendars, Calendar Connect allows users to input pictures as memories for certain events or days to allow users to free up space on their personal devices while being able to look back at their week, month, or even year in pictures. Because Calendar Connect offers the ability to create groups, users can have memories on their personal calendar while also including separate memories in their group calendars with friends, families, peers, or coworkers. 
/



# 5.Initial list of high-level functional requirements
This refers to the high-level functionality that you plan to develop to the best of your knowledge at this point.  Focus on WHAT and not HOW. Keep the users in mind. Develop these functions to be consistent with use cases and requirements above. Number each requirement and use these numbers consistently from now on. For each functionality use 1-5 line description.
Connects people during social distancing
The initial purpose of this web app is to bridge the disconnect between everyday people during these trying times of living in a pandemic.
Connects the user to their contacts based on free time
Instead of your everyday calendar that provides a clear view into your scheduled events on a daily, weekly or monthly basis, our web app focuses on a user’s availability in order to provide an all inclusive view into the user’s and their contact’s free time. 
Dashboard calendar focuses on availability instead of blocked off time
This unique approach gives people the ability to easily view and manage their availability so that they don’t have to manually search for their next open time slot to meet with family, friends or colleagues. Their free time is automatically populated in their calendar on the dashboard.
Capability to synchronize the calendars
 A user’s calendar can easily be synced with specific contacts’ calendars to recommend the perfect time that works for them! This useful functionality saves time in finding a time slot that works for everyone.
Provides customizable dashboard functionality
The UI of the web app provides the logged in user with a default dashboard layout that can be rearranged and sized according to the user’s personal preferences.
User dashboard contains a series of floating widgets
The widgets are free to be moved around and can also be hidden if the user prefers limited information on their dashboard.
Integrates with existing calendars of the user to populate the calendar in the UI
Functionality to integrate with the user’s existing calendar apps is available in order to populate their dashboard calendar and suggested free times widget with the necessary time availability information.
To-do lists, upcoming events are available widgets to provide additional info to the logged in user
In order to give the user useful insights into their day, to-do list  and upcoming events widgets are available.
Meant for personal use and school as well. Not limited to professional use.
Unlike the Outlook calendar or other comparable software that is geared toward work or professional use, our web app is meant for users of all ages and for any purpose that can connect people together!


5.It’s the “what” of the project
Overall function or activity of a neural system, contains executive summary

# 6.List of non-functional requirements
For example, performance, usability, accessibility, expected load, security requirements, storage, availability, fault tolerance etc.  Number each. When possible, try to quantify these quality attributes.
Gianluca Guagliardo(FEEL FREE TO MAKE CHANGES):
Usability:
1. 	Must have color blind mode, and dark mode for customizability and user    necessity.(colors customizable)
2. 	Buttons must be large enough for users of all ages.(customizable)
3. 	Calendars will also be customizable for user comfort.(size, color, location)
4. 	Text will be customizable.

Reliability / Availability:
1. 	Stable website, no bugs or crashes
2. 	Website cannot crash from too many users online at once(sometimes its unavoidable)
3. 	In case of outage there will be back-up generators to give time to inform the users of an outage and estimated server downtime.
4. 	Servers will be owned and accessible by CalendarConnect to ensure upkeep and uptime.
Scalability:
1.       The system will be upgraded according to the number of users
2.       Server will be able to hold a greater number of users than the expected amount for lower latency, faster response times, and server overcrowding.
3.       Physical server space will be sufficient for future upgrades.

Performance:
1.       Quick response time, low MS latency on clicks.
2.       Smooth transitions(low MS and reactive movements)
3.       When pinging a user, the ping should be near instant.(notification, calendar requests, etc)
4.       Functional buttons, users should not have to click more than once to access anything on CalendarConnect. (hitboxes)

Supportability:
1.       Will have support for android and IOS (down the line)
2.       CalendarConnect will have an email that will allow customers to send their perspectives to the company. This will allow for the Devs to make changes accordingly.
3.       CalendarConnect will have a short informational video explaining how to use the website/app and its features.

Security:
1.       Highly maintained security measures, especially since CalendarConnect deals with personal information such as locations and schedules.
2.       Cloud and physical user information must also be protected at all times. Security measures involving these will move quickly and secretly.
3. Reliable and predictable behavior
(I’m not sure of another NON-functional security feature, if you come up with anything add it, 2 factor authen is not a Non-func it is functional[big sad])


# 7.High-level system architecture
Lists of main software products, tools, languages and systems to be used, list of core APIs available at this point, supported browsers etc. 
You also have to decide on which frameworks you will use if any. These provide both user interface, as well as cross-platform and cross browser layout/css. All external code you plan to use must be listed along with their license.
Gianluca Guagliardo(FEEL FREE TO MAKE CHANGES):
Languages : CSS, Html, JavaScript, jQuery, json, ajax, MySQL
API: Open Weather API, Google Calendar API, Outlook API, iCloud API, Nylas API (potentially)
Browsers: Chrome, Edge, Opera, Safari, Mozilla Firefox, and Android “Internet”.(any other relevant browsers?)
Frameworks: React.js, MongoDB (potentially), FullCalendar.js (potentially)
/
All external code you plan to use must be listed along with their license. (GOES HERE)/
# 8.Team
List student group names, name of Scrum master, product owner and initial roles for each member

Group Name: Alpha Tech
Scrum Master:  Gianluca Guagliardo Leon Rice III
Product Owner: Leon Rice III
Initial Roles:
Charlton Benting (Dev Team/Backend)
Gianluca Guagliardo (Dev Team/Backend)
Hendrein Paul (Dev Team/Frontend)
Mayte Ramirez-Calderon (Dev Team/Frontend)
Leon Rice III (Dev Team/Backend)
# 9.Checklist
For each item below you must answer with only one of the following: DONE, ON TRACK (meaning it will be done on time, and no issues perceived) or ISSUE (you have some problems, and then define what is the problem with 1-3 lines). Reflect these items in your Jira project space:
Team decided on basic means of communications: DONE
Team found a time slot to meet outside of the class: DONE
Front and back end team leads chosen: DONE
Frontend 
Github master chosen: DONE
Team ready and able to use the chosen back and front-end frameworks: DONE
Skills of each team member defined and known to all: DONE
Team lead ensured that all team members read the final M1 and agree/understand it before submission: DONE
# 10.Tasks before submission
Teams must collaborate in creating an M1 document by having a working M1 document on their team GitHub repository (similar to managing code) so all team members can access it. Added advantage of doing it this way is that it builds teamwork and communication. We recommend having a folder for project documentation on the team's GitHub where milestones and other similar files can be kept.
# 11.Submission 
Each team submits one single word document with all the above required sections to Canvas by the due date.  Must have a title page to your document, including:
Course Title and term: CEN 4010 Principles of Software Engineering, Semester and Year
Document name: Milestone 1 Project Proposal and High-level description
Your team name, and project name (you can use the name you chose for your team)
Team number (I will assign you one)
Names of students (team lead first) with names and emails
Documentation Date
History table (revisions dates) (Note: you will update this document based on instructors’ feedback so this is important)
# 12.Grading criteria
Your document needs to be well-written, well-organized (formatted) and reads well.  Grading is based on cohesiveness and completeness.
Executive Summary					10 points
Competitive analysis					10 points	
Data definition					10 points	
Overview, scenarios and use cases			10 points
Initial list of high-level functional requirements	10 points
List of non-functional requirements		10 points
High-level system architecture			10 points
Team and checklist					10 points
Working with GitHub				10 points	
Deliverable						10 points
