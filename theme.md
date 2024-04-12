# Theme
This theme originates from BlankSlate by Bryan Hadaway.
https://wordpress.org/themes/blankslate/ 
Version: 2024.1, 
Downloaded on 31st, March, 2024


## Theme coding practice
- This theme is to cover general structure and has not been used for areas that are prone to change. As an example, the banner is a part of the css/header php, while the home page image is done through wordpress. 
- A starting comment and ending comment has been set as a rule to maintain structure.

!-- Call to action button --

!-- End of Call to action button --

## Colour 
Palette:
- #fff;    : background for posts, documentation, anything with substantial writing
- #2df882  : highlight/ hover effects
- #6668df  : background colour for banner
- #333     : footer colour
- 8ed1fc   : Page background


## Effects/ customisation
- For the menu bar, we have chosen to have a linear gradient effect that varies from 
  left to right. This choice was deliberate to allow stronger style choices for different items within the same row. Code provided below:
  background: linear-gradient(to left, #b8e5ff, #6668df);

- Please note that the "shine button" has been superseded by a more apprpriately named "call to action button". The code was left it as it was used as an experimental button that was not put into production, but may one day if more time is to be allocated. "shine button" was further edited in the additional css section on the live site to make the hover appear smoother. The main "call to action button" font was edited in the additional css to match with the "login/signup" button.

- The @media line is to resize the website for smaller screens such as tablets, as the website had difficulties in the early and mid stages of production. 

- Container 1 and container 2 are for the top and bottom sections of the page. Plans were in place to make a box-grid but was delayed in the production phase. 

- The hover effects differ for the action button and login button. There is a 0.3 second transition for the login. In future development, please adjust the call-to-action button to match with the login. 

- For curved border edges, all areas have a border-radius of 10px. 


