
---

# **Form Documentation for Gourmet Nexus**

### **1. User Registration Form (with OTP Verification)**
- **Purpose**: Allows users to create a new account with email verification via OTP.
- **Method**: POST
- **Action**: `/register`

| Field Name         | Type      | Required | Description                                      |
|--------------------|-----------|----------|--------------------------------------------------|
| `name`             | Text      | Yes      | User's full name.                                |
| `email`            | Email     | Yes      | User's email address (to be verified via OTP).   |
| `password`         | Password  | Yes      | Account password.                                |
| `confirm_password` | Password  | Yes      | Confirm the password.                            |
| `date_of_birth`    | Date      | Yes      | User's date of birth.                            |
| `profile_photo`    | File      | No       | Optional profile picture.                        |
| `phone_number`     | Tel       | Yes      | User's phone number.                             |
| `state`            | Text      | Yes      | State of residence.                              |
| `country`          | Text      | Yes      | Country of residence.                            |
| `gender`           | Select    | Yes      | Gender (Male/Female/Other).                      |
| `role`             | Select    | Yes      | Role (Chef/User).                                |
| `chef_expertise`   | Text      | No       | Chef's area of expertise (if role is Chef).      |
| `chef_hourly_rate` | Number    | No       | Chef's hourly rate (if role is Chef).            |

---

### **OTP Verification for Registration:**
1. **Step 1**: After registration, send OTP to the user’s email.
   - **API Endpoint**: `/otp/send`
   - **Fields**: `email`

2. **Step 2**: User enters the OTP to verify.
   - **OTP Form**: 
     - **Method**: POST
     - **Action**: `/otp/verify`
     - **Fields**:
       | Field Name   | Type    | Required | Description           |
       |--------------|---------|----------|-----------------------|
       | `email`      | Email   | Yes      | Email used for OTP.   |
       | `otp`        | Number  | Yes      | 6-digit OTP received. |

---

### **2. User Login Form**
- **Purpose**: Allows users to log in to their account.
- **Method**: POST
- **Action**: `/login`

| Field Name  | Type      | Required | Description              |
|-------------|-----------|----------|--------------------------|
| `email`     | Email     | Yes      | Registered email address.|
| `password`  | Password  | Yes      | Account password.        |
| `remember`  | Checkbox  | No       | Remember me option.      |

---

### **3. Password Reset Form (with OTP Verification)**
- **Purpose**: Reset the user's password using OTP verification.
- **Method**: POST
- **Action**: `/password/reset/request`

| Field Name   | Type      | Required | Description              |
|--------------|-----------|----------|--------------------------|
| `email`      | Email     | Yes      | Registered email address.|

---

### **OTP Verification for Password Reset:**
1. **Step 1**: Send OTP to the user’s email.
   - **API Endpoint**: `/otp/send`
   - **Field**: `email`

2. **Step 2**: Enter OTP to verify.
   - **OTP Form**: 
     - **Method**: POST
     - **Action**: `/otp/verify`
     - **Fields**:
       | Field Name   | Type    | Required | Description           |
       |--------------|---------|----------|-----------------------|
       | `email`      | Email   | Yes      | Email used for OTP.   |
       | `otp`        | Number  | Yes      | 6-digit OTP received. |

3. **Step 3**: Once verified, enter a new password.
   - **Form Fields**:
     - **Method**: POST
     - **Action**: `/password/reset/confirm`
     - **Fields**:
       | Field Name         | Type     | Required | Description           |
       |--------------------|----------|----------|-----------------------|
       | `new_password`      | Password | Yes      | New password.         |
       | `confirm_password`  | Password | Yes      | Confirm new password. |

---

### **4. Profile Edit Form**
- **Purpose**: Allows users to update their profile information.
- **Method**: POST
- **Action**: `/profile/edit`

| Field Name         | Type      | Required | Description              |
|--------------------|-----------|----------|--------------------------|
| `name`             | Text      | Yes      | Full name.               |
| `email`            | Email     | Yes      | Email address.           |
| `date_of_birth`    | Date      | Yes      | Date of birth.           |
| `profile_photo`    | File      | No       | Profile picture (optional). |
| `phone_number`     | Tel       | Yes      | Phone number.            |
| `state`            | Text      | Yes      | State of residence.      |
| `country`          | Text      | Yes      | Country of residence.    |
| `gender`           | Select    | Yes      | Gender (Male/Female/Other). |

---

### **5. Chef Recipe Submission Form**
- **Purpose**: Allows chefs to submit their recipes.
- **Method**: POST
- **Action**: `/recipe/submit`

| Field Name          | Type      | Required | Description              |
|---------------------|-----------|----------|--------------------------|
| `recipe_name`       | Text      | Yes      | Name of the recipe.      |
| `description`       | Text      | Yes      | Recipe description.      |
| `ingredients`       | Textarea  | Yes      | List of ingredients.     |
| `instructions`      | Textarea  | Yes      | Cooking instructions.    |
| `prep_time`         | Number    | Yes      | Preparation time (minutes).|
| `cook_time`         | Number    | Yes      | Cooking time (minutes).  |
| `recipe_image`      | File      | Yes      | Recipe image.            |
| `category`          | Select    | Yes      | Recipe category (e.g., Vegetarian, Non-Vegetarian). |

---

### **6. AI Custom Recipe Form**
- **Purpose**: Allows users to request a custom recipe generated by AI (Master Chef role).
- **Method**: POST
- **Action**: `/ai/custom-recipe`

| Field Name          | Type      | Required | Description              |
|---------------------|-----------|----------|--------------------------|
| `cuisine`           | Select    | Yes      | Cuisine type (e.g., Indian, Italian, etc.). |
| `dietary_restrictions` | Select  | No       | Dietary restrictions (Vegan, Gluten-free). |
| `main_ingredients`  | Text      | Yes      | Main ingredients to include.|
| `time_availability` | Select    | Yes      | Time available for cooking (15, 30 minutes, etc.). |

---

### **7. Appointment Booking Form**
- **Purpose**: Allows users to book an appointment with a chef (AI or real chef).
- **Method**: POST
- **Action**: `/appointment/book`

| Field Name          | Type      | Required | Description              |
|---------------------|-----------|----------|--------------------------|
| `chef_id`           | Hidden    | Yes      | ID of the chef (real/AI).|
| `appointment_date`  | Date      | Yes      | Desired appointment date.|
| `appointment_time`  | Time      | Yes      | Desired appointment time.|
| `user_message`      | Textarea  | No       | Additional user message or details. |

---

### **8. Feedback Form**
- **Purpose**: Allows users to provide feedback after a recipe or appointment.
- **Method**: POST
- **Action**: `/feedback`

| Field Name          | Type      | Required | Description              |
|---------------------|-----------|----------|--------------------------|
| `appointment_id`    | Hidden    | Yes      | Appointment ID.          |
| `rating`            | Number    | Yes      | Rating out of 5.         |
| `feedback_message`  | Textarea  | No       | User's feedback message. |

---

## **Final Summary**

### Key Forms:
1. **User Registration (with OTP)**
2. **User Login**
3. **Password Reset (with OTP)**
4. **Profile Edit**
5. **Chef Recipe Submission**
6. **AI Custom Recipe**
7. **Appointment Booking**
8. **Feedback Form**

- **OTP system** is implemented in both **registration** and **password reset**.
- **AI custom recipe form** allows users to request recipes generated by the AI (Master Chef).
- **Appointment booking** is available for both regular and AI-generated recipes.
- **Admin access** to manage users, chefs, and appointments.
