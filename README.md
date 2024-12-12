Here’s the database schema and API requirements as per your request:

### Database Schema:

1. **Students Table:**
   - **id** (Primary Key, Auto Increment)
   - **name** (VARCHAR)
   - **email** (VARCHAR)
   - **phone** (VARCHAR)

2. **Courses Table:**
   - **id** (Primary Key, Auto Increment)
   - **course_name** (VARCHAR)
   - **description** (TEXT)

3. **Enrollments Table:**
   - **id** (Primary Key, Auto Increment)
   - **student_id** (Foreign Key referencing `Students.id`)
   - **course_id** (Foreign Key referencing `Courses.id`)
   - **enrollment_date** (DATE)

---

### API Requirements:

#### **1. Students Table:**
   1. **Create a student (Insert):**
      - **Endpoint:** `POST /students`
      - **Request Body:**
        ```json
        {
          "name": "John Doe",
          "email": "john.doe@example.com",
          "phone": "123-456-7890"
        }
        ```
      - **Response:**
        ```json
        {
          "id": 1,
          "name": "John Doe",
          "email": "john.doe@example.com",
          "phone": "123-456-7890"
        }
        ```
   
   2. **Get all students (Select):**
      - **Endpoint:** `GET /students`
      - **Response:**
        ```json
        [
          {
            "id": 1,
            "name": "John Doe",
            "email": "john.doe@example.com",
            "phone": "123-456-7890"
          },
          {
            "id": 2,
            "name": "Jane Smith",
            "email": "jane.smith@example.com",
            "phone": "987-654-3210"
          }
        ]
        ```

#### **2. Courses Table:**
   3. **Create a course (Insert):**
      - **Endpoint:** `POST /courses`
      - **Request Body:**
        ```json
        {
          "course_name": "Introduction to Flutter",
          "description": "Learn the basics of Flutter and build apps."
        }
        ```
      - **Response:**
        ```json
        {
          "id": 1,
          "course_name": "Introduction to Flutter",
          "description": "Learn the basics of Flutter and build apps."
        }
        ```
   
   4. **Get all courses (Select):**
      - **Endpoint:** `GET /courses`
      - **Response:**
        ```json
        [
          {
            "id": 1,
            "course_name": "Introduction to Flutter",
            "description": "Learn the basics of Flutter and build apps."
          },
          {
            "id": 2,
            "course_name": "Advanced Flutter",
            "description": "Master complex Flutter concepts and architecture."
          }
        ]
        ```

