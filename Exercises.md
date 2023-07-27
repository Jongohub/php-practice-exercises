# PHP back-end exercises focusing on superglobals

## Concept-inclined
Exercise 1: Form Handling
Create a simple HTML form that takes a user's name and email address. When the form is submitted, use PHP to process the data and display a personalized message with the user's name and email.

Exercise 2: User Registration
Build a user registration system using PHP. The form should collect a username, password, and email. Validate the input and display appropriate error messages for any invalid fields. Store the registered user's information in a text file or database.

Exercise 3: Login System
Implement a login system using PHP. Create a login form that takes a username and password. Validate the credentials against the registered users' data from the previous exercise. On successful login, display a welcome message with the user's name.

Exercise 4: File Upload and Processing
Design a file upload form using PHP. Allow users to upload an image file and save it to a designated folder on the server. Display the uploaded image on the webpage after successful upload.

Exercise 5: Contact Form with Email
Create a contact form that collects a user's name, email address, and message. Validate the form data, and when the form is submitted, send the user's message to a designated email address using PHP's mail() function.

Exercise 6: Data Filtering and Sanitization
Build a form that takes user input for an age and a comment. Use PHP to filter and sanitize the age input to ensure it's a valid integer within a specific range. Apply sanitization to the comment input to prevent potential security risks like cross-site scripting (XSS).

Exercise 7: Session Management
Implement a simple login system with sessions. Create a login form that takes a username and password, validate them against stored user data, and use sessions to maintain the user's login state across pages.

Exercise 8: Shopping Cart
Design a basic shopping cart system using PHP sessions. Allow users to add products to the cart, display the cart contents, and calculate the total cost of selected items.

Exercise 9: Data Pagination
Create a PHP script that fetches data from a database table and displays it with pagination. Limit the number of displayed records per page and provide navigation links to move between pages.

Exercise 10: API Integration
Integrate with a public API using PHP. For example, fetch weather data from a weather API and display it on your webpage.

## Problem specific
Similar to above questions but are more problem specific in the sense of actual software solutions

Exercise 1: Building a Simple Contact Form
Create a PHP script that generates a simple contact form with fields for name, email, and message. When the form is submitted, validate the input data and display the submitted information on the same page.

Exercise 2: Creating a Login System
Build a PHP script that implements a basic login system. Use superglobal $_SESSION to store user data. Create login and registration forms with appropriate validation and securely handle user passwords using PHP password hashing.

Exercise 3: Building a File Upload Feature
Develop a PHP script that allows users to upload files to the server. Use superglobal $_FILES to handle file uploads. Make sure to validate file types, size, and implement proper security measures to prevent any potential security issues. The system will be a more advanced upload system as compared to the one above and it will have features like drag and drop, previewing of files before upload, ability to edit editable documets before upload, etc. 

Exercise 4: Implementing a Shopping Cart
Create a PHP script that simulates a simple shopping cart. Use superglobal $_SESSION to store the cart items and allow users to add, remove, and update the quantities of products in their cart.

Exercise 5: Creating a Survey Form
Build a PHP script that generates a survey form with various question types (e.g., multiple-choice, checkboxes, text fields). Use superglobal $_POST to collect the form submissions, validate the input data, and display the results after the user submits the form.

Exercise 6: Developing a URL Shortener
Build a URL shortener using PHP. Users should be able to submit a long URL, and your script should generate a shorter, unique URL for them to share. Utilize superglobal $_GET to handle redirection from the short URL to the original long URL.

Exercise 7: Creating a Basic Calculator
Develop a PHP script that acts as a basic calculator. Use superglobal $_GET or $_POST to receive the numbers and operator from the user and display the result after they perform a calculation.

Exercise 8: Building a User Feedback System
Create a PHP script that allows users to provide feedback on your website. Use superglobal $_COOKIE to keep track of whether a user has already submitted feedback. Limit users to one feedback submission per session.

Exercise 9: Implementing a Multi-Language Support System
Build a PHP script that supports multiple languages. Use superglobal $_GET or $_POST to receive the user's language preference and display content accordingly.

Exercise 10: Developing a Basic Guestbook
Create a PHP script that allows visitors to leave comments on your website. Use superglobal $_SESSION or $_COOKIE to prevent spam by limiting the frequency of submissions from the same user.