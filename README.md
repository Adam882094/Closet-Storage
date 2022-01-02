# Closet-Storage
This program is currently not running on a server. but I have outlined a step by step on what the program did and how it worked.

This web program is a closet storage. Telling the user what is in there closet, what colour it is, and what category(hat, shirt, pants etc) it falls under.
The only think broken is the dropmenu data does not seem to carry over the data and save it to the database. Unlike both Colour and name which seem to carry no problem.
2 Databases were used, Closet to store the data and Clothes to store the dropdown menu.

The user can add and view the contents of the database.

# How It Works
1. User starts in "Index.html" and has the option to select either "Add some clothes" or "View your clothes"
2. User selects "Add some clothes" and is now in "clothes.php"
3. User is prompted to add clothes to the closet which includes:
4. Type of clothing (shirt, pants...etc) in a drop down menu
5. Name of the Clothing in textbox
6. Colour of clothing in textbox
7. User clicks "Enter" button and goes to "saveTheCloset.php"
8. Validates user inputted value 
9. if validation failed user is told what failed and is prompted to try again
10. if passed user is told the clothing was added to the closet and to view the item
11. User selects "View your clothes"
12. In "closet.php" the database is outputted to the user so the user may see the clothes stored in the closet
