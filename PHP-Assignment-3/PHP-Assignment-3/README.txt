PHP ASSIGNMENT 3 — STUDENT REGISTRATION FORM

FILES
- index.php: registration form with Bootstrap styling.
- process.php: server-side validation and image upload handling.
- result.php: displays submitted information in a table.
- uploads/: created automatically when the first image is uploaded.

HOW TO RUN WITH XAMPP
1. Extract the PHP-Assignment-3 folder into C:\xampp\htdocs\
2. Open XAMPP Control Panel and start Apache.
3. In your browser, open: http://localhost/PHP-Assignment-3/index.php
4. Fill every field and upload an image (PNG, JPG/JPEG, GIF, or WEBP).
5. Click Register Student. If the information is valid, result.php displays the information in a table.

NOTES
- This assignment does not require a database in the supplied instructions; the submitted data is passed using a PHP session.
- Bootstrap is loaded from a CDN, so an internet connection is needed for the Bootstrap styling.
- If an upload fails, check that PHP file uploads are enabled and that the uploads folder is writable.
- Test using a local PHP server (such as XAMPP); opening the PHP files directly as file:// will not execute PHP.
