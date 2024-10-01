# Notes
<p align="center">
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white" alt="Vite">
  <img src="https://img.shields.io/badge/SQLite-003B57?style=for-the-badge&logo=sqlite&logoColor=white" alt="SQLite">
</p>

A simple and secure note-taking application with user authentication, allowing users to create, read, update, and delete notes.

## Features
- **User Authentication**: Register, login, and logout functionality.
- **CRUD Operations**: Create, read, update, and delete notes.
- **Responsive Design**: Accessible on various devices.
- **Secure**: Protected routes to ensure only authenticated users can access their notes.

## Getting Started
### What You Need
- PHP 8.3 or higher
- Composer
- Node.js & npm
- SQLite or another supported database

### Installation
1. Clone the repository
- ```git clone https://github.com/ChristianNathanielP/Notes_Laravel.git```
- ```cd Notes_Laravel ```

2. Install dependencies:
- ```composer install```
- ```npm install```

3. Set up your environment:
- Copy .env.example to .env: ```cp .env.example .env```
- Create a SQLite database: ```touch database/database.sqlite```

4. Run the migrations:
```php artisan migrate```

5. Start the development server:
````php artisan serve````

6. Access the application:
Visit `http://localhost:8000` in your browser.

## Usage
1. **Register a new account**: <br>
    Go to the registration page and create a new account.
2. **Login**: <br>
    Use your credentials to log in.
3. **Manage Notes**:
    - Create a Note: Click on "Add Note" to create a new note.
    - View Notes: Access your notes from the notes-card.
    - Edit Notes: Click "Edit" on any note to modify it.
    - Delete Notes: Remove notes by clicking the "Delete" button.

## Documentation

### Create/Login Account
![image](https://github.com/user-attachments/assets/1cc30832-5b78-4a6f-a25b-b62900e67552)
![image](https://github.com/user-attachments/assets/2c19c156-56cf-468c-86cc-2ee6fc308dd3)

### Home Page
![image](https://github.com/user-attachments/assets/cf70ffc0-377e-42d9-ab4e-ca0fe8e20943)

### CRUD
![image](https://github.com/user-attachments/assets/26fb78ac-2b76-4d99-8ebd-590ac37df317)
![image](https://github.com/user-attachments/assets/7a8d9ac5-4486-48d2-a4da-b7a62faf8906)
![image](https://github.com/user-attachments/assets/2d64d867-84d8-4e7d-83c2-ac3b4c8b056d)

### Profile
![image](https://github.com/user-attachments/assets/44be96cc-7554-413b-beaf-ad495ed70efb)
![image](https://github.com/user-attachments/assets/084c220c-d4cd-4649-bd09-172c1b19339d)




