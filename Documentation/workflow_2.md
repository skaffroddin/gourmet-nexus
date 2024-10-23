
# **Project: Gourmet Nexus**
A comprehensive recipe management platform with AI-powered custom recipes, real-time appointment booking with chefs, and social login features. Users can explore recipes, interact with chefs, and customize their culinary experiences. The platform integrates a ChatGPT API for personalized recipe generation and offers real-time support via a third-party live chat bot.

## **1. Features Overview**

### **User Features:**
1. **Recipe Discovery**:
   - Browse and filter recipes by categories like Indian, Italian, Arabian, etc.
   - Filter by dietary preferences (vegan, gluten-free, etc.), ingredients, and time availability.
   - Popular and recommended dishes.
2. **Recipe Interaction**:
   - View detailed recipes with ingredients, steps, and images.
   - Download recipes as PDF.
   - Option to book a chef for an appointment based on the recipe.
3. **Custom AI Recipe Creation**:
   - Chat with AI (powered by ChatGPT) to create a custom recipe.
   - Download the AI-generated recipe as PDF or book a chef (Master Chef) for custom cooking services.
4. **User Account Management**:
   - Social login (Google, Facebook).
   - Profile management.
   - View order history and manage bookings.
   - OTP email verification during registration.
5. **Real-time Support**:
   - Third-party live chat bot integration for customer support.

### **Chef Features:**
1. **Chef Registration and Profile**:
   - Chef approval after registration.
   - Add recipes, including images, descriptions, and pricing for paid services.
   - Specify availability and hourly rate.
   - Manage their appointments.
   
### **Admin Features:**
1. **Dashboard**:
   - View and manage all user activities, bookings, and recipes.
   - Manage chefs (approve/block chefs).
   - Access all user-generated recipes (including AI-generated custom recipes).
   - Manage the Master Chef (AI).
   - Block or unlock users as needed.

## **2. Workflows**

### **User Registration/Login (Social & Email with OTP)**:
- Users can register through social logins or email.
- OTP-based email verification is required for security.
  
### **Recipe Creation & Search Workflow**:
1. **Recipe Creation by Chef**:
   - Chef creates recipes with images, descriptions, and ingredients.
   - Recipes are categorized into different cuisines.
   - Chefs can set their hourly rate for appointments.
  
2. **Recipe Search by User**:
   - Users search for recipes based on categories, ingredients, or time constraints.
   - Results show popular, recommended, and new recipes.
  
3. **Viewing Recipe**:
   - Users select a recipe and view detailed descriptions with steps and ingredients.
   - Download recipe as a PDF or book a chef for that recipe.

### **Custom Recipe Creation (AI-Powered by ChatGPT)**:
1. **AI Interaction**:
   - The user interacts with AI to specify cuisine preferences, dietary restrictions, ingredients, and cooking time.
   - AI generates a custom recipe based on inputs.
  
2. **Custom Recipe Download or Appointment Booking**:
   - Users download the AI-generated recipe as PDF.
   - Alternatively, users can book a chef (Master Chef) to cook the custom recipe. After booking, the user is redirected to a payment gateway.

### **Appointment Booking Workflow**:
1. **Book Appointment**:
   - Users fill out a form for appointment details (date, time, recipe, number of people, etc.).
   - Payment is processed via a third-party payment gateway.
  
2. **Chef Notification**:
   - The chef is notified of the new appointment and can accept or reject it.

3. **Feedback**:
   - After the appointment, users can provide feedback and rate the chef.

### **Admin Workflow**:
- Admin has complete access to manage chefs, users, bookings, and recipes.
- Admin can approve or block chefs and users, and oversee the system.

---

## **3. Database Schema**

### **Tables:**

#### **Users Table**:
- `id`: Primary Key
- `name`: User's full name
- `email`: User's email (unique)
- `password`: Hashed password
- `social_login_provider`: Tracks if the user logged in via Google/Facebook
- `is_chef`: Boolean indicating whether the user is a chef
- `is_admin`: Boolean indicating if the user is an admin
- `otp`: OTP for email verification
- `created_at`: Timestamp
- `updated_at`: Timestamp

#### **Chefs Table** (extends `Users`):
- `chef_id`: Foreign Key referencing `id` from `users`
- `hourly_rate`: Hourly rate for booking
- `expertise`: Chef's expertise in cuisines
- `availability`: Availability for appointments

#### **Recipes Table**:
- `id`: Primary Key
- `chef_id`: Foreign Key referencing `id` from `users` (chef who created the recipe)
- `title`: Title of the recipe
- `description`: Full description and instructions
- `ingredients`: Ingredients list (stored as JSON or text)
- `category`: Cuisine type (e.g., Indian, Italian)
- `image`: Image path
- `is_custom`: Boolean indicating whether the recipe is AI-generated
- `created_at`: Timestamp
- `updated_at`: Timestamp

#### **Appointments Table**:
- `id`: Primary Key
- `user_id`: Foreign Key referencing `id` from `users`
- `chef_id`: Foreign Key referencing `id` from `users` (chef)
- `recipe_id`: Foreign Key referencing `id` from `recipes`
- `appointment_date`: Scheduled date for the appointment
- `appointment_time`: Scheduled time for the appointment
- `number_of_people`: Number of people for the booking
- `status`: Status of the booking (pending, confirmed, completed)
- `payment_status`: Status of the payment (pending, paid)

#### **Feedback Table**:
- `id`: Primary Key
- `appointment_id`: Foreign Key referencing `id` from `appointments`
- `rating`: Numeric rating
- `review`: User's written feedback
- `created_at`: Timestamp

---

## **4. ASCII Workflow Diagram**

```
        +----------------------+
        |     User Register     |
        |   Social Login/Email  |
        +----------------------+
                   |
                   v
        +----------------------+
        |   Recipe Search/List  |
        |  (Filter/Popular/Top) |
        +----------------------+
                   |
                   v
        +----------------------+                 +----------------------+
        | View Recipe Details   | <-----------+   | AI Custom Recipe     |
        | (Download/Book Chef)  |              |   (Chat with AI)       |
        +----------------------+              |   |                     |
                   |                          |   +----------------------+
                   v                          |              |
        +----------------------+              |              v
        |  Book Appointment     | <-----------+   +----------------------+
        | (Fill form & Pay)     |                 | Download Custom PDF  |
        +----------------------+                 +----------------------+
                   |
                   v
        +----------------------+
        | Chef Notified        |
        +----------------------+
                   |
                   v
        +----------------------+
        |  Appointment Complete |
        +----------------------+
                   |
                   v
        +----------------------+
        |    Leave Feedback     |
        +----------------------+

                           +--------------------+
                           |     Admin Panel    |
                           | (Full Management)  |
                           +--------------------+
```

