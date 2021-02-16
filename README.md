<h1>Milestone 1: Team Project Proposal and Description</h1>

## 1. Executive Summary

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Given the current times, we wanted to create an app that will help people feel connected even during these socially distanced times. Calendar Connect is a personalized web app that can be tailored to the needs of each individual user.

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The main focus of Calendar Connect is to allow people to stay connected with their friends, family, coworkers, and loved ones. Our app integrates a person’s schedule and allows them to share and connect with others to provide a clear visual of people’s availability. Our user-friendly dashboard can be customized and organized to the user’s needs and includes features such as to-do lists, groups, favorites, upcoming events, messages, alerts, and more! Calendar Connect allows users to create groups to share calendars with so you can maintain connection between family members, friend groups, school peers, or work colleagues. Our integration of pictures throughout your calendar month and year allows the app to become more personalized and for users to have fun and express themselves creatively. When you have an upcoming class, meeting, study session, or need some time alone, Calendar Connect can relay that to others to make sure you are not interrupted. On the other hand, when you are looking for free time within a group to spend some time together, whether virtually or in-person, Calendar Connect does the work of finding free time for the users so they can focus on planning and enjoying the time together.

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unlike most apps that are tailored specifically for just work, school, or businesses, Calendar Connect offers a large reachability that can be used by everyone for all sorts of needs. Calendar Connect’s integration allows users to customize their features to fit their needs either for school, work, personal life, or all of the above.

# 2. Competitive analysis

| Google Workspace  | Calendar.com | CalendarConnect(Us) |
| ------------- | ------------- | ------------- |
| Smart Scheduling  | Integration of other calendars  | Integration of other calendars  |
| Instants messaging between team members  | Calendar analytics; a break down of all type of meetings| Instant messaging between contacts |
| Shareable/team calendars  | Artificial intelligence/Machine learning  | Group/shareable/team calendars  |
| Video conferencing  | Smart scheduling (overlay of who what time is available for selected contacts)  | Smart scheduling (overlay of who what time is available for selected contacts)  |
| Personal member site  | Team Calendars  | Automated system to find availability between selected contacts |
| Custom email for your business and includes collaboration tools like Gmail, Calendar, Meet, Chat, Drive, Docs, Sheets, Slides | “Anyone” can book a meeting directly with you  | Customizable calendars |

Unlike most of our competitors, who are focused on enhancing the scheduling of business operations, our product will be more gauged more towards the general public and working adults.

# 3. Data definition

**Database elements:** id, name, email, phone number, dob, password, registration date

**Maps/Dictionaries (Hashing):** authentication of user information, database security (obfuscation)

**Heap sort (sorting algorithm):** to sort users contacts, events by importance, and messages

**Binary search (searching algorithm):** to find an event, contact, or message/note

**User:** defines the user entity – unique id, name, email, password, phone number, DOB, profile picture

**Event:** defines a calendar event – unique id, event name, time, location, notes, attendees, color 

**Calendar:** defines type of calendar – unique id, calendar name, group calendar (Boolean), viewers, calendar admins, public/private, events, color, calendar view

**Widget:** defines the type of widget available widget the user can add to the dashboard – widget name, location (on the board), delete widget

**Widget Children:** Calendar (cannot de deleted)/Note/Weather/Messages/Contacts/Favorites/Photo slideshow/time/ widget: children of the widget class

# 4.Overview, scenarios and use cases

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;During these socially distanced times, many people still continue to balance their work life with school, extracurricular activities, meetings, hobbies, etc. and have found it difficult to still feel close and communicate with their friends, family, and loved ones. With differing schedules, meetings, and a global pandemic, keeping track of one’s free time as well as others can be difficult. With Calendar Connect, users can input their schedules from work, school, and everything in between into a single app and connect with their friends, family, and loved ones to share and view their schedules.

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our user-friendly dashboard is suitable for people of all ages and expertise levels given that our default template includes the key features most important to the functionality of the app. Our dashboard includes a monthly calendar showing all your events and tasks, a notes section, a to-do list, a list of your favorite connections, a reminder of upcoming events, any pending requests, and the ability to add events and contacts. Our spatially organized and labeled dashboard allows users with minimum technological experience to still enjoy and use the key features of the app. For those who wish to personalize their dashboard, Calendar Connect allows users to customize and add widgets to their dashboard based on their preferences or needs. These include but are not limited to a weather section, time zones, external links to specific zoom meetings, google hangouts, etc. and the ability to create groups and switch between shared group calendars. 

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A beneficial and key feature Calendar Connect offers is the ability to create groups with people you connect with to share calendars within friends, families, peers, or colleagues. This allows you to keep track of your personal and professional life separately all in one place. Within these groups, Calendar Connect will find free time within all corresponding members in case they want to meet virtually or in person, work on a project, or simply have time to catch up. Messages can also be created within groups to make communication for planning events easier. On the other hand, when a member of a group is extremely busy or simply wants some alone time during a mutual free day, they will be able to edit that in the app so that no one attempts to plan time with them.

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For users who enjoy expressing their creativity and personalizing their calendars, Calendar Connect allows users to input pictures as memories for certain events or days to allow users to free up space on their personal devices while being able to look back at their week, month, or even year in pictures. Because Calendar Connect offers the ability to create groups, users can have memories on their personal calendar while also including separate memories in their group calendars with friends, families, peers, or coworkers. 
/



# 5. Initial list of high-level functional requirements

**Connects people during social distancing**

&nbsp;&nbsp;&nbsp;-&nbsp;The initial purpose of this web app is to bridge the disconnect between everyday people during these trying times of living in a pandemic.

**Connects the user to their contacts based on free time**

&nbsp;&nbsp;&nbsp;-Instead of your everyday calendar that provides a clear view into your scheduled events on a daily, weekly or monthly basis, our web app focuses on a user’s availability in order to provide an all inclusive view into the user’s and their contact’s free time. 

**Dashboard calendar focuses on availability instead of blocked off time**

&nbsp;&nbsp;&nbsp;-This unique approach gives people the ability to easily view and manage their availability so that they don’t have to manually search for their next open time slot to meet with family, friends or colleagues. Their free time is automatically populated in their calendar on the dashboard.
Capability to synchronize the calendars

&nbsp;&nbsp;&nbsp;-A user’s calendar can easily be synced with specific contacts’ calendars to recommend the perfect time that works for them! This useful functionality saves time in finding a time slot that works for everyone.
 
**Provides customizable dashboard functionality**

&nbsp;&nbsp;&nbsp;-The UI of the web app provides the logged in user with a default dashboard layout that can be rearranged and sized according to the user’s personal preferences.

**User dashboard contains a series of floating widgets**

&nbsp;&nbsp;&nbsp;-The widgets are free to be moved around and can also be hidden if the user prefers limited information on their dashboard.

**Integrates with existing calendars of the user to populate the calendar in the UI**

&nbsp;&nbsp;&nbsp;-Functionality to integrate with the user’s existing calendar apps is available in order to populate their dashboard calendar and suggested free times widget with the necessary time availability information.

**To-do lists, upcoming events are available widgets to provide additional info to the logged in user**

&nbsp;&nbsp;&nbsp;-In order to give the user useful insights into their day, to-do list  and upcoming events widgets are available.

**Meant for personal use and school as well. Not limited to professional use.**

&nbsp;&nbsp;&nbsp;-Unlike the Outlook calendar or other comparable software that is geared toward work or professional use, our web app is meant for users of all ages and for any purpose that can connect people together!

# 6. List of non-functional requirements
For example, performance, usability, accessibility, expected load, security requirements, storage, availability, fault tolerance etc.  Number each. When possible, try to quantify these quality attributes.

**Usability:**

&nbsp;&nbsp;&nbsp;-Must have color blind mode, and dark mode for customizability and user necessity.(colors customizable)

&nbsp;&nbsp;&nbsp;-Buttons must be large enough for users of all ages.(customizable)

&nbsp;&nbsp;&nbsp;-Calendars will also be customizable for user comfort.(size, color, location)

&nbsp;&nbsp;&nbsp;-Text will be customizable.

**Reliability / Availability:**

&nbsp;&nbsp;&nbsp;-Stable website, no bugs or crashes

&nbsp;&nbsp;&nbsp;-Website cannot crash from too many users online at once(sometimes its unavoidable)

&nbsp;&nbsp;&nbsp;-In case of outage there will be back-up generators to give time to inform the users of an outage and estimated server downtime.

&nbsp;&nbsp;&nbsp;-Servers will be owned and accessible by CalendarConnect to ensure upkeep and uptime.

**Performance:**

&nbsp;&nbsp;&nbsp;-Quick response time, low MS latency on clicks.

&nbsp;&nbsp;&nbsp;-Smooth transitions(low MS and reactive movements)

&nbsp;&nbsp;&nbsp;-When pinging a user, the ping should be near instant.(notification, calendar requests, etc)

&nbsp;&nbsp;&nbsp;-Functional buttons, users should not have to click more than once to access anything on CalendarConnect. (hitboxes)

**Supportability:**

&nbsp;&nbsp;&nbsp;-Will have support for android and IOS (down the line)

&nbsp;&nbsp;&nbsp;-CalendarConnect will have an email that will allow customers to send their perspectives to the company. This will allow for the Devs to make changes accordingly.

&nbsp;&nbsp;&nbsp;-CalendarConnect will have a short informational video explaining how to use the website/app and its features.

**Security:**

&nbsp;&nbsp;&nbsp;-Highly maintained security measures, especially since CalendarConnect deals with personal information such as locations and schedules.

&nbsp;&nbsp;&nbsp;-Cloud and physical user information must also be protected at all times. Security measures involving these will move quickly and secretly.

&nbsp;&nbsp;&nbsp;-Reliable and predictable behavior

# 7.High-level system architecture:

**Languages:** CSS, Html, JavaScript, jQuery, json, ajax, MySQL

**API:** Open Weather API, Google Calendar API, Outlook API, iCloud API, Nylas API (potentially)

**Browsers:** Chrome, Edge, Opera, Safari, Mozilla Firefox, and Android “Internet”.

**Frameworks:** React.js, MongoDB (potentially), FullCalendar.js (potentially)

All external code you plan to use must be listed along with their license.

# 8.Team

Group Name: Alpha Tech

Scrum Master:  Gianluca Guagliardo Leon Rice III

Product Owner: Leon Rice III

Initial Roles:

&nbsp;&nbsp;&nbsp;-Charlton Benting (Dev Team/Backend)

&nbsp;&nbsp;&nbsp;-Gianluca Guagliardo (Dev Team/Backend)

&nbsp;&nbsp;&nbsp;-Hendrein Paul (Dev Team/Frontend)

&nbsp;&nbsp;&nbsp;-Mayte Ramirez-Calderon (Dev Team/Frontend)

&nbsp;&nbsp;&nbsp;-Leon Rice III (Dev Team/Backend)

# 9.Checklist
For each item below you must answer with only one of the following: DONE, ON TRACK (meaning it will be done on time, and no issues perceived) or ISSUE (you have some problems, and then define what is the problem with 1-3 lines). Reflect these items in your Jira project space:

&nbsp;&nbsp;&nbsp;a)Team decided on basic means of communications: DONE

&nbsp;&nbsp;&nbsp;b)Team found a time slot to meet outside of the class: DONE

&nbsp;&nbsp;&nbsp;c)Front and back end team leads chosen: DONE

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Frontend: Mayte Ramirez-Calderon

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Backend: Leon Rice III

&nbsp;&nbsp;&nbsp;d)Github master chosen: DONE

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Gianluca Guagliardo

&nbsp;&nbsp;&nbsp;e)Team ready and able to use the chosen back and front-end frameworks: DONE

&nbsp;&nbsp;&nbsp;f)Skills of each team member defined and known to all: DONE

&nbsp;&nbsp;&nbsp;g)Team lead ensured that all team members read the final M1 and agree/understand it before submission: DONE

# 10.Tasks before submission

Teams must collaborate in creating an M1 document by having a working M1 document on their team GitHub repository (similar to managing code) so all team members can access it. Added advantage of doing it this way is that it builds teamwork and communication. We recommend having a folder for project documentation on the team's GitHub where milestones and other similar files can be kept.

# 11.Submission 
Each team submits one single word document with all the above required sections to Canvas by the due date.  Must have a title page to your document, including:

&nbsp;&nbsp;&nbsp; a)&nbsp;Course Title and term: CEN 4010 Principles of Software Engineering, Semester and Year

&nbsp;&nbsp;&nbsp; b)&nbsp;Document name: Milestone 1 Project Proposal and High-level description

&nbsp;&nbsp;&nbsp; c)&nbsp;Your team name, and project name (you can use the name you chose for your team)

&nbsp;&nbsp;&nbsp; d)&nbsp;Team number (I will assign you one)

&nbsp;&nbsp;&nbsp; e)&nbsp;Names of students (team lead first) with names and emails

&nbsp;&nbsp;&nbsp; f)&nbsp;Documentation Date

&nbsp;&nbsp;&nbsp; g)&nbsp;History table (revisions dates) (Note: you will update this document based on instructors’ feedback so this is important)

# 12.Grading criteria
Your document needs to be well-written, well-organized (formatted) and reads well.  Grading is based on cohesiveness and completeness.

<p>
 
<pre>1) Executive Summary                                     10 points</pre>
 
<pre>2) Competitive analysis	                                 10 points</pre>

<pre>3) Data definition	                                 10 points</pre>

<pre>4) Overview, scenarios and use cases	                 10 points</pre>

<pre>5) Initial list of high-level functional requirements	 10 points</pre>

<pre>6) List of non-functional requirements                   10 points</pre>

<pre>7) High-level system architecture                        10 points</pre>

<pre>) Team and checklist                                     10 points</pre>

<pre>9) Working with GitHub                                   10 points</pre>

<pre>10) Deliverable                                          10 points</pre>

</p>


