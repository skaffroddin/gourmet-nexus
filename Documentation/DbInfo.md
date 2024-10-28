Here's the final **database schema** for your project, **Gourmet Nexus**, with detailed tables and their attributes:

### **1. Users Table**
- **Purpose**: Stores user information, including general users and chefs.
- **Attributes**:
  - `id`: **Primary Key** (integer, auto-increment)
  - `name`: **User's full name** (string, required)
  - `email`: **User's email** (string, unique, required)
  - `password`: **Hashed password** (string, required)
  - `social_login_provider`: **Tracks social login provider** (string, nullable)
  - `is_chef`: **Boolean indicating if the user is a chef** (boolean, default: false)
  - `is_admin`: **Boolean indicating if the user is an admin** (boolean, default: false)
  - `otp`: **OTP for email verification** (string, nullable)
  - `created_at`: **Timestamp for registration** (datetime, default: current timestamp)
  - `updated_at`: **Timestamp for last update** (datetime, default: current timestamp on update)

### **2. Chefs Table**
- **Purpose**: Stores additional information specific to chefs.
- **Attributes**:
  - `chef_id`: **Foreign Key referencing `id` from `users`** (integer, primary key)
  - `hourly_rate`: **Hourly rate for booking** (decimal, required)
  - `expertise`: **Chef's expertise in cuisines** (string, required)
  - `availability`: **Availability for appointments** (string or JSON, required)

### **3. Recipes Table**
- **Purpose**: Stores recipe information created by chefs or AI.
- **Attributes**:
  - `id`: **Primary Key** (integer, auto-increment)
  - `chef_id`: **Foreign Key referencing `id` from `users`** (integer, nullable for AI-generated)
  - `title`: **Title of the recipe** (string, required)
  - `description`: **Detailed recipe instructions** (text, required)
  - `ingredients`: **List of ingredients** (stored as JSON or text, required)
  - `category`: **Cuisine type** (string, required)
  - `image`: **Image path** (string, required)
  - `is_custom`: **Boolean indicating if the recipe is AI-generated** (boolean, default: false)
  - `created_at`: **Timestamp for when the recipe was created** (datetime, default: current timestamp)
  - `updated_at`: **Timestamp for last update** (datetime, default: current timestamp on update)

### **4. Appointments Table**
- **Purpose**: Tracks appointment bookings made by users.
- **Attributes**:
  - `id`: **Primary Key** (integer, auto-increment)
  - `user_id`: **Foreign Key referencing `id` from `users`** (integer, required)
  - `chef_id`: **Foreign Key referencing `id` from `users`** (integer, required)
  - `recipe_id`: **Foreign Key referencing `id` from `recipes`** (integer, required)
  - `appointment_date`: **Date of the appointment** (date, required)
  - `appointment_time`: **Time of the appointment** (time, required)
  - `number_of_people`: **Number of people for the booking** (integer, required)
  - `status`: **Status of the booking** (e.g., pending, confirmed, completed) (string, default: 'pending')
  - `payment_status`: **Payment status** (e.g., pending, paid) (string, default: 'pending')
  - `created_at`: **Timestamp for when the appointment was created** (datetime, default: current timestamp)

### **5. Feedback Table**
- **Purpose**: Stores feedback and ratings given by users after appointments.
- **Attributes**:
  - `id`: **Primary Key** (integer, auto-increment)
  - `appointment_id`: **Foreign Key referencing `id` from `appointments`** (integer, required)
  - `rating`: **Numeric rating** (integer, required)
  - `review`: **User's written feedback** (text, nullable)
  - `created_at`: **Timestamp for when feedback was created** (datetime, default: current timestamp)

### **6. Chatbot Table** (optional for storing chatbot interactions)
- **Purpose**: Stores interactions with the live chat support bot.
- **Attributes**:
  - `id`: **Primary Key** (integer, auto-increment)
  - `user_id`: **Foreign Key referencing `id` from `users`** (integer, required)
  - `message`: **User's message to the bot** (text, required)
  - `response`: **Bot's response** (text, required)
  - `created_at`: **Timestamp for the interaction** (datetime, default: current timestamp)

### **Additional Considerations**
- **Indexes**: Add indexes to frequently queried columns, such as `email` in the `users` table and foreign keys in other tables for improved performance.
- **Data Validation**: Implement data validation rules in your application logic to ensure data integrity.
