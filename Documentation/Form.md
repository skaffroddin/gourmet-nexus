1. User Registration Form
Purpose: Allows new users to create an account.
Method: POST
Action: /register
Field Name	Type	Required	Description
name	Text	Yes	User's full name.
email	Email	Yes	User's email address.
password	Password	Yes	User's account password.
confirm_password	Password	Yes	Confirmation of the password.
date_of_birth	Date	Yes	User's date of birth.
profile_photo	File	No	User's profile photo (optional).
phone_number	Tel	Yes	User's phone number for contact.
state	Text	Yes	User's state of residence.
country	Text	Yes	User's country of residence.
gender	Select	Yes	User's gender (Male/Female/Other).
role	Select	Yes	User role (Chef/User).
chef_expertise	Text	No	Chef's area of expertise (only if Chef role is selected).
chef_hourly_rate	Number	No	Chef's hourly rate (only if Chef role is selected).
Note: If "Chef" is selected for the role, chef_expertise and chef_hourly_rate fields are shown.

2. User Login Form
Purpose: Allows users to log into their account.
Method: POST
Action: /login
Field Name	Type	Required	Description
email	Email	Yes	Registered email address.
password	Password	Yes	Account password.
remember_me	Checkbox	No	Option to stay logged in.
3. Password Reset Form
Purpose: Allows users to reset their password.
Method: POST
Action: /password/reset
Field Name	Type	Required	Description
email	Email	Yes	Registered email address.
new_password	Password	Yes	New password.
confirm_password	Password	Yes	Confirm the new password.
4. Profile Edit Form
Purpose: Allows users to update their profile information.
Method: POST
Action: /profile/edit
Field Name	Type	Required	Description
name	Text	Yes	User's full name.
email	Email	Yes	User's email address.
profile_photo	File	No	User's profile photo (optional).
phone_number	Tel	Yes	User's phone number.
state	Text	Yes	State of residence.
country	Text	Yes	Country of residence.
date_of_birth	Date	No	User's date of birth.
gender	Select	Yes	User's gender (Male/Female/Other).
5. Chef Recipe Submission Form
Purpose: Allows chefs to submit their recipes to the platform.
Method: POST
Action: /recipes/add
Field Name	Type	Required	Description
recipe_title	Text	Yes	Title of the recipe.
description	TextArea	Yes	Detailed recipe description.
ingredients	TextArea	Yes	List of ingredients.
preparation_steps	TextArea	Yes	Step-by-step preparation instructions.
recipe_image	File	No	Image of the final recipe.
cuisine	Select	Yes	Type of cuisine (e.g., Indian, Italian, etc.)
category	Select	Yes	Category (e.g., Main Course, Appetizer).
preparation_time	Number	Yes	Time required for preparation (in minutes).
dietary_preferences	Select	No	Dietary preferences (Vegan, Gluten-Free, etc.).
6. AI Custom Recipe Form
Purpose: Allows users to provide preferences for generating an AI recipe.
Method: POST
Action: /recipes/custom
Field Name	Type	Required	Description
cuisine_preference	Select	Yes	Type of cuisine (e.g., Indian, Italian).
dietary_restrictions	Select	No	Dietary restrictions (e.g., Vegan, Gluten-Free).
main_ingredients	TextArea	No	Specific ingredients the user wants to use.
time_available	Select	Yes	Time available for cooking.
Note: Based on the user’s preferences, AI will generate a custom recipe.

7. Appointment Booking Form
Purpose: Allows users to book a chef for an appointment.
Method: POST
Action: /appointment/book
Field Name	Type	Required	Description
chef_id	Hidden	Yes	ID of the chef being booked.
appointment_date	Date	Yes	Date of the appointment.
time_slot	Select	Yes	Available time slots for the appointment.
recipes_for_people	Number	Yes	Number of people for the recipe.
notes	TextArea	No	Additional information for the chef.
8. Feedback Form
Purpose: Allows users to provide feedback after the service.
Method: POST
Action: /feedback
Field Name	Type	Required	Description
rating	Number	Yes	Rating (1-5 stars).
comments	TextArea	No	User comments about the service.
