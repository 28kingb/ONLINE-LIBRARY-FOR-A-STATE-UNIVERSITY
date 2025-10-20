# Lowa State University Library Management System 📚

> A full-stack **Web Application** built using **PHP**, **JavaScript**, and **MySQL**, developed as part of the *Web Application and Development* course.

---

## 🧩 Overview

This project represents a **Library Management System** for *Lowa State University*, enabling efficient management of books, students, and admins through a web-based interface.

It provides a multipage, branded website that supports **client-side** (HTML, CSS, JS) and **server-side** (PHP, MySQL) functionalities.

---

## 🛠️ Tech Stack

| Layer | Technologies Used |
|-------|-------------------|
| **Frontend** | HTML, CSS, JavaScript, Bootstrap |
| **Backend** | PHP, MySQL |
| **Web Server** | Apache (via XAMPP) |
| **Database Tool** | phpMyAdmin |
| **Testing Browsers** | Google Chrome, Microsoft Edge |

---

## 🧱 System Design

### Entity-Relationship (ER) Diagram
![ER Diagram](assets/er_diagram.png)

### Data Flow Diagram (DFD)
![DFD](assets/dfd_diagram.png)

### Use Case Diagram
![Use Case Diagram](assets/use_case.png)

### Activity Diagrams
![Activity Diagram 1](assets/activity_diagram_1.png)
![Activity Diagram 2](assets/activity_diagram_2.png)

### System Architecture
![Architecture Diagram](assets/architecture.png)

---

## 💻 Implementation

This web system includes both **Admin** and **Student** modules with distinct interfaces and privileges.

### Home Page
![Home Page](assets/home_page.png)

### Book Page
![Book Page](assets/book_page.png)

### About Page
![About Page](assets/about_page.png)

### Contact Page
![Contact Page](assets/contact_page.png)

### Register Page
![Register Page](assets/register_page.png)

### Update Password Page
![Update Password Page](assets/update_password.png)

### Student Dashboard
![Student Page](assets/student_page.png)

### Admin Dashboard
![Admin Page](assets/admin_page.png)

---

## 🗄️ Database Design

The system database was developed using **phpMyAdmin** and normalized up to **3NF**.

![Database Schema](assets/database.png)

**Key Tables:**  
- `admin` — stores librarian and staff credentials  
- `student` — holds registered users  
- `book` — maintains book details (title, author, stock, etc.)  
- `issue_book` — manages borrowing transactions  
- `fine` — calculates fines for overdue books  

---

## 🧪 Testing & Quality Assurance

The system was tested across major browsers (Chrome, Edge) for UI and UX consistency.

![Testing Screenshot](assets/testing.png)

**Test types included:**  
- Requirement testing  
- Design testing  
- Functionality testing (forms, search, CRUD operations)  

---

## 📆 Project Timeline (Gantt Chart)

![Gantt Chart](assets/gantt_chart.png)

---

## 🧠 Challenges & Learnings

During development, several challenges arose:  
- Creating role-based (Admin/Student) dashboards using PHP sessions.  
- Managing database CRUD operations securely.  
- Designing responsive layouts with HTML/CSS/Bootstrap.  
- Ensuring consistency across different browsers.  

These challenges helped reinforce full-stack web development skills, from database normalization to UI design.

---

## 📚 References

- Mozilla Developer Network (MDN) — HTML, CSS, JavaScript Documentation  
- W3Schools — PHP & MySQL Integration  
- XAMPP Documentation  
- Bootstrap Official Docs  

---

## 💬 Author

**Bilal Ahmad**  
International Higher Diploma in Software Development  
Berlin School of Business and Innovation (BSBI)  

---

> *“Technology is best when it brings people together.”* — Matt Mullenweg  
