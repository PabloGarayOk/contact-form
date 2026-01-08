# PHP Contact Form with Layered Validation

This project is a reusable contact form developed in PHP, designed with a clear and maintainable structure.  
It implements **multi-layer validation** to ensure data integrity and proper user feedback.

The validation process is performed in three stages:
1. **HTML5 validation** (required fields)
2. **JavaScript validation** (basic client-side checks)
3. **PHP validation** (server-side validation and email format verification)

The project was created as a reference implementation, focusing on code clarity, separation of concerns, and ease of reuse.

## Features
- Multi-layer validation (HTML, JavaScript, PHP)
- Centralized message handling
- Clean and readable PHP code
- File structure designed for reuse
- Simple and functional UI
- Email sending via PHP `mail()`

## Technologies & Concepts
- PHP
- JavaScript (basic validation)
- HTML5
- CSS
- Form handling
- Server-side validation
- Reusable code structure

## Project structure

- `index.php` — Contact form and UI
- `js/form_mail.js` — Client-side validation
- `php/enviar-mail.php` — Server-side validation and email sending
- `php/mensajes.php` — Centralized response messages
- `css/estilos.css` — Form styling

## Live demo
Contact Form  
[View online demo](https://www.pablogaray.com.ar/portfolio/contact-form)

## Author

Pablo Garay  
[Personal website](https://pablogaray.com.ar)
