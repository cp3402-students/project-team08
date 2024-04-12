# For the Site Maintenance Personel of the U3A Online (potential) website.


## Adding New Content
Use the WordPress Dashboard to add/manipulate content as per a usual WordPress website.
Adding new content to the site is likely to fall into a few categories.

### Category 1: Public vs Private
This site is using a pluging called 'Content Control'. It lets pages and blocks (page components) to be made to not be visiable when the website visitor is not logged in. This is currently used to keep the pdf's containing the lesson's and the announcement's board  behind the organisations subscription fee/s.

Before finalising any content updates check the permissions by looking in the right hand side editing menu: Visiability for pages and Block Controls for blocks. 

### Category 2: Does it need to be Immediately Visable
As part of the client's requests for the new prospective website we (the design team) had to clean up the main menu as the client had been getting complaints from their user base (targeted towards the elderly) that there was too much 'wall's of text' and that the menu was cluttered and unclear. Rule of thumb is to avoid duplicate data, keep page names simply and clear in purpose. If you must add a new page then try to put it as a sub menu. For pages, break up the text more then usual and use Separator and 25 pixel tall Spacer blocks to seperate text sections.

### Category 3: Page, Part of Page or Post
It is expected that the most common cause for site maintenance persenel to have to add content to the website is to add or remove a Notice from the Announcement Board. All Notices are done with Post's. This is the only thing that is done with Post's. As the client wishes to keep this private, so not use Post's for anything else.

When you need to add or remove a course from the site you need to go to the location where you need to add it. Then edit that page to have a section in it for that course. Follow the example of the already made courses. When you get to the Custom Code block that is used to keep the PDF's hidded from non-users, the easiest method to replicate it is to copy it into ChatGPT. Then enter this prompt: Rewrite the code again with these (number of PDF's) files:. Followed by each PDF's media URL. Which is found in WordPress' Media tab (leftside of dashboard). Copy that code back in then check if the block is set to private with whatever user types you need.

All other content is simple to add as either a new page or to an already existing one at your discretion.

## Removing Content
If you need to remove content from the site remember to check if the content needs to be removed totally or simply privited from even the regular users. Obligatory reminder to perform backups of everything before a major change to the site regardless of if it is the staging site or the live site.


