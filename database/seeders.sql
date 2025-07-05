-- Insert an admin user
INSERT INTO users (first_name, last_name, email, phone, age, password, user_role)
VALUES ('Admin', 'User', 'admin@tedor.com', '0910203040', 25, '$2y$10$dummyhashedpasswordstring', 'admin');


-- Insert some initial courses
INSERT INTO courses (course_name, description, duration_weeks, start_date)
VALUES 
('Python Programming', 'Learn Python from beginner to advanced level.', 10, '2025-07-07'),
('AI and Prompt Engineering', 'Master AI and prompt design techniques.', 10, '2025-07-07'),
('Graphics and Photoshop', 'Professional graphic design using Photoshop.', 10, '2025-07-07'),
('Video Editing', 'Learn professional video editing skills.', 10, '2025-07-07'),
('Web Development', 'Frontend and Backend web development.', 10, '2025-07-07'),
('Languages', 'Language courses like English, French, Arabic, and more.', 10, '2025-07-07');
