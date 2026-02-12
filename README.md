# Banking Management System

## Project Overview

The Banking Management System is a web-based application developed to simulate core banking operations through a unified interface. The system provides multiple financial service modules including account creation, loan applications, insurance services, and profile management. Each module collects user data through web forms, processes it using PHP, and stores it in a MySQL database.

This project demonstrates full-stack web development concepts such as frontend form handling, backend processing, database connectivity, and modular application design. The primary objective of the system is to understand how real-world banking portals manage different services within a structured and integrated web environment.

---

## Objectives

- Design and implement a modular banking web application  
- Integrate frontend forms with backend PHP logic  
- Store and retrieve user data using MySQL  
- Simulate real banking service workflows  
- Organize code in a structured multi-module format  
- Demonstrate full-stack development fundamentals  

---

## Technology Stack

Frontend  
- HTML  
- CSS  
- JavaScript  

Backend  
- PHP  

Database  
- MySQL  

Development Environment  
- XAMPP 

---

## Modules Implemented

### Account Services
- Savings account registration  
- Individual account creation  
- Joint account creation  
- Business account creation  
- Fixed deposit registration  

Each module allows users to submit information which is processed and stored in the database. After submission, a profile page displays stored details.

---

### Loan Services
- Home loan application  
- Personal loan application  
- Gold loan application  

Loan forms collect applicant data and store it in the database through PHP backend scripts.

---

### Insurance Services
- Life insurance  
- Health insurance  
- Home insurance  

Each insurance module includes:
- Input form  
- Backend PHP processing  
- Profile display page  

---

## System Architecture

The system follows a modular PHP architecture.  
Each service module operates independently but connects to a central database through a shared connection file.

Workflow:

User fills form → PHP processes data → Data stored in MySQL → Profile page displays stored information

A common database connection file ensures consistent connectivity across all modules.

---
