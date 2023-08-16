# Testimonials

Testimonials MVC Project
Welcome to the Testimonials MVC project! This application allows you to manage testimonials and settings. Testimonial data is stored in JSON format, and user account information is stored in a hashed form. This README provides instructions on how to set up and use the application.

Project Structure
The project is organized into three main directories: Model, View, and Controller.

Model
The Model directory contains the logic for handling data. The user.json file stores user account information, the settings.json file stores application settings, and the testimonials.json file stores the testimonials provided by users.

View
The View directory contains the user interface components. The entry point for the application is View/index.php, which provides a sign-in page. After signing in, users can navigate to various pages, including the settings page.

Controller
The Controller directory contains the logic that connects the Model and View. User authentication, testimonial management, and application functionality are managed here.

Assets
The assets directory holds CSS files and other static resources for styling the application.

Getting Started
Follow these steps to set up and run the project locally:

Clone the repository: git clone https://github.com/Fahim2280/Testimonials.git

Install and configure XAMPP: Download XAMPP and set up a virtual host to point to the project's root directory.

Start the local server: Start Apache from the XAMPP control panel.

Open the project in a web browser: Navigate to the virtual host you set up (e.g., http://localhost/Testimonials/View/index.php).

User Registration and Authentication
Visit View/index.php to access the sign-in page.
Click the "Sign Up" link to go to the sign-up page.
Provide your email and password to create an account. Passwords are stored in hashed form.
Once registered, return to the sign-in page and log in with your credentials.
Adding Testimonials
After logging in, you will be directed to the main page.
To add a testimonial, click on the "Add Testimonial" link.
Fill out the form with your testimonial details and submit it.
Your testimonial will be stored in the Model/testimonials.json file.
Email Notifications Setting
In the navigation bar, click on "Settings" to access the settings page.
On the settings page, find the "Email Notifications" checkbox.
Check the checkbox to enable email notifications.
Click the "Save" button to save your preferences.
Data Storage
User account data is stored in Model/user.json. Passwords are hashed for security.
Email notification settings are stored in Model/settings.json.
Testimonials are stored in Model/testimonials.json.
Contributing
If you'd like to contribute to this project, please follow the contribution steps outlined in the previous README.

Credits
This project was developed by MD Fahim Alam. You can find the original repository on GitHub: https://github.com/Fahim2280/Testimonials.
