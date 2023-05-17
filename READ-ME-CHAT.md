# PROJECT CHAT BOXES
For ImagineX AB
Developer: Damjan Tosic

## RELEVANT FILES
* config.php - API key storage
* header.php - PHP code for OpenAI API-PHP code
* page-aichat - HTML, CSS and JS code for general chat box
* page-faqchat - HTML, CSS and JS code for FAQ chat box

## INSTALLATION
The process of implementing solution is straight-forward, taking about 10-15 minutes:
1.	Using Filezilla, these files are transferred to root of Themify Ultra in wp-content/themes/themify-ultra:
a.	Vendor folder – contain all the packages
b.	Config.php – contain the code for API key
2.	Code for the OpenAI client is pasted at the bottom of the Head-er.php.
3.	Two files were created: page-aichat.php and page-faqchat.php by copying the original page.php. 
4.	Paste the full code of GCB and FCB into the end of respective file with the added suffixes.    
5.	In WP admin panel, in Pages/Add pages, create two new pages and modify their slug value to the suffix after the files: aichat and fa-qchat respectively. In the FAQ page, add test text in page editor.
6.	Modify value for selecting the HTML element to get data from the page, to class value module, it is the default class for the whole page content
