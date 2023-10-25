
# Email Reminder Web Application




## Overview

The Email Reminder Web Application is a Laravel-based system that automates the process of sending recurring reminder emails to users on their specified date every month. It provides a user-friendly interface to manage reminders, allowing users to set up, edit, and delete email reminders. This application simplifies the process of sending routine reminders to individuals or groups, making it perfect for a wide range of use cases, such as personal task management, subscription renewals, etc.

## Features

- User Authentication: Secure user registration and login system.
- Dashboard: User-friendly dashboard for managing reminders.
- Create Reminders: Users can easily create new reminders with a title, message, and specific send date.
- Edit and Delete: Users can edit or delete existing reminders as needed.
- Monthly Scheduling: Reminders are automatically sent on the specified date every month.
- Email Notifications: Email notifications are sent to the user as a reminder.
- Customizable Templates: Ability to customize email templates.


## Installation

Follow these steps to get the Email Reminder Web Application up and running on your local machine:

1. **Prerequisites:** Make sure you have PHP, Composer, and Laravel installed. 

2. **Clone the repository:** 
```bash
  git clone https://github.com/vijinvj77/email-reminder.git
```
3. **Install Dependencies:**
```bash
  cd email-reminder
  composer install
```
4. **Database Setup:**
- Create a MySQL database.
- Configure your .env file with your database credentials.
- Run migrations and seeders:
```bash
    php artisan migrate --seed
```
5. **Start the Application:**
```bash
    php artisan serve
```
6. **Access the Application:**
Open your web browser and go to http://localhost:8000 to access the application.
    
## Usage

1. **Register and Log In:** Create an account and log in.

2. **Dashboard:** You will be redirected to your dashboard, where you can manage reminders.

3. **Create Reminders:** Click on the "Create Reminder" button to create a new reminder. Fill in the title, message, and the date when you want the reminder to be sent.

4. **Edit and Delete:** You can edit or delete existing reminders from the dashboard.

5. **Automatic Reminders:** The application will automatically send reminders on the specified date every month.


## License

This project is open-source and available under the [MIT](https://choosealicense.com/licenses/mit/)


## Contributing

Contributions are always welcome!



## Contact

For any inquiries or support, please contact vijinvj77@gmail.com.
## Acknowledgments

I'd like to thank the Laravel community for their amazing framework and the open-source community for their contributions.
