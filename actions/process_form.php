<!-- Lesson 1: Exercise 11 - Cross-Site Scripting (XSS) Prevention -->

<!-- 
Here are some techniques to prevent XSS attacks - a simple example was not used that processes the for in the respective exercise-11.html

Input Validation:
Always validate user input before processing or displaying it. Use functions like filter_input() or regular expressions to ensure that the data matches the expected format. Avoid accepting or displaying data that contains potentially harmful content.

Output Encoding:
Before outputting user-provided data, encode it to prevent any active code execution. Use functions like htmlspecialchars() or htmlentities() to convert special characters into their corresponding HTML entities.

Example:

$userInput = '<script>alert("XSS attack!");</script>';
echo htmlspecialchars($userInput);
// Output: &lt;script&gt;alert("XSS attack!");&lt;/script&gt;
Context-Aware Output Escaping:
Choose the appropriate output escaping method based on the context where the data will be used. For example, use htmlspecialchars() for HTML output, json_encode() for JSON output, or urlencode() for URL parameters.

Content Security Policy (CSP):
Implement a Content Security Policy that restricts the sources from which content can be loaded on your website. This can help mitigate XSS attacks by controlling which scripts can be executed.

HTTP-Only Cookies:
When working with cookies, set the HTTP-only flag to prevent client-side scripts from accessing them. This helps protect sensitive information stored in cookies.

Use Prepared Statements (for Database Operations):
If your PHP code interacts with a database, use prepared statements and parameterized queries to prevent SQL injection, which can indirectly lead to XSS attacks.

Escape JavaScript Data:
If you need to output user data within JavaScript code, make sure to escape the data properly to prevent XSS vulnerabilities in JavaScript.

Example:

var userName = <?php echo json_encode($userInput); ?>;
// This will properly escape the data when used in JavaScript
Secure File Uploads:
If your application allows file uploads, ensure that files are uploaded to a secure directory with proper permissions. Do not rely solely on the file extension for validation.

Regular Security Updates:
Keep your PHP version and libraries up to date to benefit from the latest security patches and improvements.
 -->

<?php
// process_form.php

// Validate and sanitize the user input
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

    // Output the sanitized name
    echo "<h2>Hello, " . htmlspecialchars($name) . "!</h2>";
}
?>


<!-- In this exercise, the form's input field for the user's name is properly sanitized using the htmlspecialchars() function in the process_form.php script. 
This prevents any potential XSS attacks by converting any special characters to their corresponding HTML entities.

Suppose a user enters the following input containing a potential script tag:

Input: <script>alert("XSS attack!");</script> // if this JS function is exercuted, then any other malacious code can also be exercuted

The use of htmlspecialchars() ensures that the script tag is converted to its corresponding HTML entities before being displayed, effectively preventing the execution of the script.

Output: <h2>Hello, &lt;script&gt;alert("XSS attack!");&lt;/script&gt;!</h2>

As you can see, the script tag is now safely displayed as text and won't execute as JavaScript code.

Using htmlspecialchars() is a simple and effective way to protect against XSS attacks when displaying user input on your website.
By properly validating and sanitizing data and following best practices, you can build more secure PHP applications that safeguard against various security threats. -->
