# 🏫 Campus Management System

> *A lightweight, modular, and robust administrative web application built with PHP to streamline core campus operations, including student performance tracking, library management, and parking permit allocations.*

---

## 🌟 What Does This App Do?

The **Campus Management System** is designed to digitize and automate day-to-day administrative tasks within an educational institution. Instead of dealing with fragmented paperwork or disjointed spreadsheets, staff and administrators can use this unified platform to manage three critical pillars of campus life:

1. **🚗 Parking Permit & Revenue Management (`parking.php`)**
* Automatically processes parking permit applications while enforcing age restrictions (applicants must be 18 or older).
* Applies category-based pricing structures for Students, Staff, and Visitors.
* Generates real-time financial summaries, tracks sales volumes per applicant type, and monitors parking capacity against defined institutional limits.


2. **📚 Library Borrowing & Automated Fines (`library.php`)**
* Handles book checkouts and returns across multiple literature categories (Textbooks, Journals, and Reference Books).
* Enforces lending policies by automatically blocking users who have accumulated outstanding fines exceeding R200.
* Computes dynamic late fees based on the exact category of the overdue material and the number of days late.


3. **📊 Student Academic Performance & Analytics (`performance.php`)**
* Validates student assessment marks to catch data entry errors before they skew records.
* Computes individual student averages and automatically assigns academic standings (**Distinction** for $\ge 75\%$, **Pass** for $\ge 50\%$, or **Fail**).
* Automatically analyzes class-wide statistics to highlight the top-performing student, highest/lowest averages, and overall class performance.



---

## 🏗️ Project Architecture & File Structure

```text
campus-management-system/
│
├── 🏠 index.php         # Main landing page / Navigation dashboard
├── ⚙️ functions.php     # Core business logic, global constants, and helper algorithms
├── 🚗 parking.php       # Parking permit processing, validation, and revenue breakdown
├── 📖 library.php       # Library book checkout, return tracking, and fine management
└── 📈 performance.php   # Student grade calculations, validation checks, and class statistics

```

---

## 📋 System Requirements

* **PHP:** Version 7.4 or higher (Fully compatible with PHP 8.x)
* **Web Server:** Apache or Nginx (Local environments like **XAMPP**, **WampServer**, or Laravel Herd work out of the box)
* **Browser:** Any modern web browser (Chrome, Firefox, Edge, Safari)

---

## ⚙️ How to Set It Up

Follow these simple steps to get the Campus Management System up and running on your local machine:

### Step 1: Prepare Your Local Environment

Make sure you have a local server environment installed. If you are using **XAMPP**:

1. Open the **XAMPP Control Panel**.
2. Start the **Apache** module.

### Step 2: Clone or Move Project Files

1. Navigate to your local server's public root directory (e.g., `C:\xampp\htdocs\` on Windows or `/Applications/XAMPP/htdocs/` on macOS).
2. Create a new folder named `campus-management-system` inside it.
3. Place all the project PHP files (`index.php`, `functions.php`, `parking.php`, `library.php`, and `performance.php`) directly inside this folder.

### Step 3: Launch the Application

1. Open your web browser.
2. Navigate to the main entry point via local URL:
```text
http://localhost/campus-management-system/index.php

```


3. You will be greeted by the **Campus Management System** dashboard, where you can click through to test the Parking, Library, and Performance modules.
