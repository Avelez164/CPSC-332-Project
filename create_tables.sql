CREATE TABLE Professors (
    prof_ssn CHAR(9),
    p_name VARCHAR(40),
    st_address VARCHAR(20),
    city VARCHAR(20),
    us_state CHAR(2),
    zip_code CHAR(5),
    p_area_code CHAR(3),
    p_phone CHAR(7),
    sex CHAR(1),
    title VARCHAR(20),
    salary DECIMAL(10, 2),
    degrees VARCHAR(255),
    PRIMARY KEY (prof_ssn)
);

CREATE TABLE Departments (
    dept_num INT,
    d_name VARCHAR(50),
    d_phone CHAR(10),
    office_location VARCHAR(50),
    chair_ssn CHAR(9),
    PRIMARY KEY (dept_num),
    FOREIGN KEY (chair_ssn) REFERENCES Professors(prof_ssn)
);

CREATE TABLE Courses (
    c_num INT,
    c_title VARCHAR(30),
    textbook VARCHAR(50),
    units TINYINT,
    dept_num INT,
    PRIMARY KEY (c_num),
    FOREIGN KEY (dept_num) REFERENCES Departments(dept_num)
);

CREATE TABLE CoursePrereq (
    c_num INT,
    prereq_num INT,
    PRIMARY KEY (c_num, prereq_num),
    FOREIGN KEY (c_num) REFERENCES Courses(c_num),
    FOREIGN KEY (prereq_num) REFERENCES Courses(c_num)
);

CREATE TABLE Sections (
    c_num INT,
    sec_num INT,
    room VARCHAR(50),
    seats INT,
    meet_days VARCHAR(26),
    meet_begin TIME,
    meet_end TIME,
    teacher_ssn CHAR(9),
    PRIMARY KEY (c_num, sec_num),
    FOREIGN KEY (c_num) REFERENCES Courses(c_num),
    FOREIGN KEY (teacher_ssn) REFERENCES Professors(prof_ssn)
);

CREATE TABLE Students (
    stu_id CHAR(9),
    stu_fname VARCHAR(20),
    stu_lname VARCHAR(20),
    stu_address VARCHAR(50),
    stu_phone CHAR(10),
    major_dept_num INT,
    PRIMARY KEY (stu_id),
    FOREIGN KEY (major_dept_num) REFERENCES Departments(dept_num)
);

CREATE TABLE StudentsMinors (
    stu_id CHAR(9),
    dept_num INT,
    PRIMARY KEY (stu_id, dept_num),
    FOREIGN KEY (stu_id) REFERENCES Students(stu_id),
    FOREIGN KEY (dept_num) REFERENCES Departments(dept_num)
);

CREATE TABLE Enrollments (
    stu_id CHAR(9),
    c_num INT,
    sec_num INT,
    grade VARCHAR(2),
    PRIMARY KEY (stu_id, c_num, sec_num),
    FOREIGN KEY (stu_id) REFERENCES Students(stu_id),
    FOREIGN KEY (c_num, sec_num) REFERENCES Sections (c_num, sec_num)
);
