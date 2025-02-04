INSERT INTO Professors
VALUES
  (
    "489305815",
    "John Smith",
    "71 Lock Lane",
    "Los Angeles",
    "CA",
    "90057",
    "714",
    "3568787",
    "M",
    "Professor",
    120000,
    "Ph.D in Computer Science"
  ),
  (
    "613324920",
    "Sarah Gillard",
    "4781 Carmel Dr",
    "Fullerton",
    "CA",
    "92831",
    "612",
    "5659029",
    "F",
    "Professor",
    120000,
    "Ph.D in Mathematics"
  ),
  (
    "014788343",
    "Chris Luu",
    "71 Lock Lane",
    "Anaheim",
    "CA",
    "92802",
    "858",
    "9095702",
    "M",
    "Assistant Professor",
    800000,
    "MS in Computer Science"
  );

INSERT INTO Departments
VALUES
  (
    1,
    "Computer Science",
    "6576433011",
    "CS Building",
    "489305815"
  ),
  (
    2,
    "Mathematics",
    "6574227898",
    "MH Building",
    "613324920"
  );

INSERT INTO Courses
VALUES
  (
    1110,
    "Intro to C++",
    "Foundations to C++",
    3,
    1
  ),
  (
    1205,
    "Data Structures",
    "Data Structures Fundamentals",
    3,
    1
  ),
  (
    1350,
    "Algorithm Engineering",
    "Algorithms",
    3,
    1
  ),
  (
    1370,
    "Data Science",
    "Python Data Science",
    3,
    1
  ),
  (
    2202,
    "Calculus II",
    "Calculus Vol 3",
    4,
    2
  ),
  (
    2280,
    "Statistics",
    "OpenIntro Statistics",
    4,
    2
  );
INSERT INTO CoursePrereq
VALUES
  (1205, 1110),
  (1350, 1205),
  (1350, 2202),
  (1370, 2280),
  (1370, 1205),
  (2280, 2202);

INSERT INTO Sections
VALUES
  (
    1110,
    1,
    "CS 402",
    25,
    "M W",
    '13:00',
    '14:15',
    "014788343"
  ),
  (
    1110,
    2,
    "CS 402",
    25,
    "M W",
    '14:30',
    '15:45',
    "014788343"
  ),
  (
    1205,
    1,
    "CS 110",
    32,
    "Tu Th",
    '13:00',
    '14:15',
    "489305815"
  ),
  (
    1205,
    2,
    "CS 305",
    30,
    "M W",
    '09:00',
    '10:15',
    "014788343"
  ),
  (
    1350,
    1,
    "CS 208",
    28,
    "M W",
    '15:00',
    '16:15',
    "489305815"
  ),
  (
    1370,
    1,
    "CS 106",
    22,
    "M W",
    '17:30',
    '18:45',
    "489305815"
  );

INSERT INTO Students
VALUES
  (
    "123456789",
    "John",
    "Doe",
    "12345 Main Street, Fullerton, CA, 92831",
    "1234567890",
    1
  ),
  (
    "987654321",
    "Jane",
    "Doe",
    "67890 First Street, Anaheim, CA, 92801",
    "0987654321",
    2
  ),
  (
    "789654123",
    "James",
    "Smith",
    "13579 Odd Street, Sacramento, CA, 94203",
    "9168531111",
    2
  ),
  (
    "888777666",
    "Mary",
    "Johnson",
    "24680 Even Street, Los Angeles, CA, 90001",
    "2131234567",
    1
  ),
  (
    "555444333",
    "Michael",
    "Williams",
    "13571 Prime Street, San Diego, CA, 92101",
    "6191234567",
    2
  ),
  (
    "666777888",
    "Patricia",
    "Brown",
    "24681 Prim Street, San Jose, CA, 95101",
    "4081234567",
    1
  ),
  (
    "777888999",
    "Robert",
    "Jones",
    "13572 Elm Street, San Francisco, CA, 94101",
    "4151234567",
    2
  ),
  (
    "888999000",
    "Jennifer",
    "Davis",
    "24682 Oak Street, Fresno, CA, 93701",
    "5591234567",
    1
  );

INSERT INTO StudentsMinors
VALUES
  ("123456789", 2),
  ("789654123", 1),
  ("555444333", 1),
  ("888999000", 2);

INSERT INTO Enrollments
VALUES
  ("123456789", 1110, 1, "D"),
  ("123456789", 1205, 1, "D"),
  ("123456789", 1350, 1, "A+"),
  ("987654321", 1350, 1, "A-"),
  ("987654321", 1370, 1, "C+"),
  ("789654123", 1110, 2, "A+"),
  ("789654123", 1205, 2, "D"),
  ("789654123", 1350, 1, "F"),
  ("888777666", 1205, 2, "B-"),
  ("888777666", 1370, 1, "D+"),
  ("555444333", 1110, 2, "C"),
  ("555444333", 1350, 1, "B-"),
  ("555444333", 1370, 1, "C+"),
  ("666777888", 1110, 1, "B"),
  ("666777888", 1205, 2, "B"),
  ("777888999", 1110, 1, "D"),
  ("777888999", 1205, 2, "D"),
  ("777888999", 1350, 1, "D+"),
  ("777888999", 1370, 1, "C+"),
  ("888999000", 1350, 1, "A");
