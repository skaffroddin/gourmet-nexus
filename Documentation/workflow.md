
### **Gourmet Nexus** – Final Workflow

### **Key Features:**
1. **Recipe Creation by Chefs**  
   - Chefs register and create a profile.
   - Once approved, chefs can add recipes by specifying ingredients, preparation steps, images, and an hourly booking rate.
   - Recipes are categorized (e.g., Indian, Arabian, Italian) for easy filtering by users.

2. **Recipe Search and Interaction by Users**  
   - Users can browse through various categories, search for specific recipes based on ingredients, and filter recipes based on categories like cuisine, popularity, and dietary preferences.
   - Users can view detailed recipes with step-by-step instructions.
   - Recipes can be **downloaded as PDFs** for offline viewing.
   - Users can **book a chef** by filling a booking form, choosing a time, date, and number of people.
   
3. **AI Custom Recipe Creation (via ChatGPT)**  
   - Users who can't decide can interact with an AI-driven bot.
   - AI asks questions to gather preferences (cuisine type, ingredients, dietary needs, cooking time, etc.).
   - Based on these inputs, the AI (Master Chef role) generates a customized recipe.
   - Users can download the AI-generated recipe as a PDF or book the **Master Chef (AI)** to assist.

4. **Booking System and Payment**  
   - Once a recipe or custom AI recipe is selected, users can choose to book a chef.
   - After selecting a chef and filling out the booking form, users are redirected to a **payment gateway**.
   - After payment, both the user and the chef are notified of the appointment via email.

5. **User Features**
   - **Social login** (Google, Facebook) and email registration with OTP verification.
   - Users have a personal dashboard where they can manage their profile, view order history, check upcoming bookings, and save favorite recipes.
   - **Live chat** support via third-party API for immediate assistance.

6. **Admin Features**
   - Admin has full control of the system via a dedicated **admin panel**.
   - Admin can manage user accounts, approve/block chefs, and view/edit all recipes.
   - Admin handles master chefs and the AI component integration, as well as managing feedback and handling disputes.
   - Admin can review user feedback and ratings of chefs.
   
### **Database Structure (simplified)**

1. **Users Table**
   - Stores user info (name, email, social login details, etc.).

2. **Recipes Table**
   - Stores recipe info (title, description, image, ingredients, steps, cuisine type, etc.).

3. **Chefs Table**
   - Chef details (name, bio, hourly rate, recipes associated, etc.).

4. **Bookings Table**
   - Contains all booking info, such as user details, chef details, recipe booked, time, and payment status.

5. **AI Requests Table**
   - Stores custom AI-generated recipes, with metadata about the user's preferences and the recipe generated.

6. **Admin Table**
   - Admin details and privileges.

---

### ** Full Workflow**

```
                            +------------------------+
                            |      User Registers     |
                            +------------------------+
                                      |
                                      v
                         +-----------------------------+
                         |  Social Login / Email Login  |
                         |  OTP Verification Optional   |
                         +-----------------------------+
                                      |
                                      v
                         +-----------------------------+
                         |        User Dashboard        |
                         | View Profile | Order History |
                         +-----------------------------+
                                      |
                                      +--------------------------------------------------------+
                                      |                                                        |
                        +------------------------+                                 +-----------------------------+
                        |  Browse Recipes by Chef |                                 |   AI Custom Recipe Creation |
                        +------------------------+                                 +-----------------------------+
                                      |                                                        |
                   +------------------+-------------------+                            +------------------+
                   | Browse Categories/Filters             |                            | AI Gathers Inputs |
                   | (Indian, Arabian, etc.)               |                            +------------------+
                   +------------------+-------------------+                                     |
                                      |                                                         v
                                      v                                            +---------------------------+
                         +-----------------------------+                         |  AI Generates Recipe        |
                         | View Recipe Details          |                         |  (Master Chef Role)        |
                         | Ingredients & Steps          |                         +---------------------------+
                         +-----------------------------+                                     |
                                      |                                                         |
                                      |                                            +----------------------------+
                                      |                                            | Download Recipe as PDF     |
                                      |                                            | Book Master Chef           |
                                      v                                            +----------------------------+
               +-----------------------------+                                             |
               | Download Recipe as PDF       |                                             v
               | Book Chef                    |                              +-------------------------------+
               +-----------------------------+                              |  Appointment Booking & Payment |
                                      |                                      +-------------------------------+
                                      v                                                    |
                        +------------------------+                                         |
                        | Appointment Form        |                                         v
                        | (Time, Date, No. of people)|                            +---------------------------+
                        +------------------------+                              | Payment Confirmation        |
                                      |                                          +---------------------------+
                                      v                                                    |
                    +-----------------------------+                                       v
                    | Redirect to Payment Gateway  |                           +------------------------------+
                    +-----------------------------+                           | Chef/AI Notified of Booking   |
                                      |                                        +------------------------------+
                                      v                                                    |
                   +-----------------------------+                                       v
                   |  Payment Success/Failure     |                           +-----------------------------+
                   +-----------------------------+                           |  Chef meets User (Live/Chat) |
                                                                              +-----------------------------+

                                      +------------------+                                 +---------------------+
                                      |  Admin Panel      |                                 |  User Feedback       |
                                      | (Manage Users)    |<-------------------------------|  & Rating System     |
                                      | (Approve Chefs)   |                                 +---------------------+
                                      | (Handle AI Custom |     
                                      |  Recipes)         |
                                      +------------------+

```

---

### **Explanation of the Workflow:**

#### **1. User Registration/Login**  
Users can register using either email (with OTP verification) or social logins (Google, Facebook). Upon login, they have access to their personal dashboard.

#### **2. Recipe Creation by Chefs**  
Chefs, once approved, can add their expertise recipes to the platform, setting an hourly rate. Each recipe has a detailed description, image, ingredients, and cooking steps.

#### **3. AI Custom Recipe Generation**  
If a user is indecisive, they can interact with an AI-powered recipe creation system. The AI (acting as a **Master Chef**) gathers user preferences and generates a custom recipe. This recipe can then be downloaded or booked for a real-time chef appointment.

#### **4. Recipe Search & Interaction**  
Users can search for recipes through categories, filters, or simply by browsing popular dishes. Once they select a recipe, they can download it as a PDF or book a chef to help them cook in person.

#### **5. Appointment Booking & Payment**  
For both AI-generated recipes and chef-created recipes, users can book a chef for a cooking appointment. This includes filling out a form with the necessary details and proceeding to payment.

#### **6. Admin Panel**  
The admin manages the entire system, including users, chefs, recipes, and custom AI recipes. They can approve or block users and chefs and handle any system disputes.

#### **7. Feedback System**  
After the appointment, users can leave feedback and rate their experience, improving the platform’s quality and credibility.

#### **8. Social Features & Live Chat**  
The platform includes **social login** options and live support via a third-party bot API to assist users with any issues in real-time.

---
