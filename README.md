CampusRecordManager

This is a lightweight PHP web application designed to manage student records using a text file as a database. The interface has been modernized with new form fields, styled buttons, and a clean grid layout to make data entry and navigation more intuitive.

## 🛠 Updated Features

### 1. Student Registration Form
- **Input fields**: First Name, Last Name, Student ID, Department, Enrollment Date  
- **Department selector**: standard HTML dropdown  
- **Feedback alerts**: styled success, warning, and error messages display at the top via PHP

> **Layout changes**: form arranged in two columns using CSS grid; labels aligned above fields.

### 2. View Records
- Presents all student entries in a responsive table with alternating row colors  
- Serial numbers generated automatically  
- Back button styled as a rounded blue icon

### 3. Edit Record
- Fields pre‑filled allowing modification of any detail  
- Save button is large, green, and uses a modern flat design  
- Confirmation alert displayed after successful update using PHP and CSS styling

### 4. Delete Record
- Trash‑can icon button triggers a PHP confirmation step  
- After deletion, a styled message indicates successful removal

### 5. Database Handling
- `students.txt` resets on each run to provide a clean slate  
- File operations abstracted in `DB.php` for reuse across pages

## 🎨 Design Notes
- Buttons are now **rounded rectangles** with hover shadows  
- Forms and tables use a **light card style** with subtle drop shadows  
- The overall layout employs a mobile‑first grid that scales to larger screens

## Technologies Used
- PHP (8.0+)  
- HTML5 & CSS3 (Flexbox/Grid)  
- Text file storage (students.txt)  
- Laragon local server

## Project Files (Updated)
| File | Purpose |
|------|---------|
| `INDEX.php` | Registration form with new fields and updated layout |
| `VIEW.php` | Responsive table view of student records |
| `EDIT.php` | Update form with modal feedback |
| `DELETE.php` | Handles record removal with confirmation |
| `DB.php` | Utility functions for file-based data storage |

## 📽 Demo Video
View the updated system in action:  
https://drive.google.com/file/d/19bfkWNUplLYMcATTM91oJvODuWFAivbZ/view?usp=sharing