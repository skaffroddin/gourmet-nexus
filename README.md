# 🍽️ Gourmet Nexus

![GitHub License](https://img.shields.io/badge/license-MIT-brightgreen)
![PHP Version](https://img.shields.io/badge/PHP-7.4%2B-blue)
![Laravel](https://img.shields.io/badge/Laravel-v8.0-red)
![MySQL](https://img.shields.io/badge/MySQL-v5.7%2B-orange)

## 📚 Table of Contents
- [Project Overview](#project-overview)
- [Objectives](#objectives)
- [Target Audience](#target-audience)
- [Key Features](#key-features)
- [Technology Stack](#technology-stack)
- [Future Enhancements](#future-enhancements)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Acknowledgments](#acknowledgments)
- [Credits](#credits)

---

## Project Overview
**Gourmet Nexus** is an innovative culinary platform designed to connect food enthusiasts with professional chefs, transforming the way individuals create, customize, and enjoy recipes. Utilizing the power of artificial intelligence, Gourmet Nexus offers a personalized and interactive experience, catering to diverse dietary preferences and culinary interests.

---

## Objectives
The primary objective of Gourmet Nexus is to create a vibrant community where users can easily discover new recipes, customize them according to their tastes, and connect with chefs for personalized cooking experiences. By leveraging AI technology, the platform aims to enhance the culinary journey, making cooking more enjoyable and tailored to individual needs.

---

## Target Audience
- **Home Cooks**: Individuals looking to explore new recipes, improve their cooking skills, and find tailored meal suggestions based on their dietary restrictions.
- **Professional Chefs**: Culinary professionals seeking to expand their client base, showcase their expertise, and offer personalized cooking sessions to users.
- **Food Enthusiasts**: Anyone interested in culinary arts who wants to engage with a community of like-minded individuals.

---

## Key Features
- 📜 **User-Centric Recipe Management**: Browse, customize, and save recipes tailored to dietary needs and preferences.
- 🤖 **AI-Powered Recipe Customization**: Utilize the ChatGPT API for personalized recipe suggestions and cooking tips.
- 👨‍🍳 **Chef Directory and Booking**: Explore professional chef profiles and book personalized cooking sessions.
- 🔐 **Social Login Options**: Streamlined registration with social sign-up options for quick account creation.
- ✅ **OTP Verification**: Enhanced security through an OTP verification process during registration.
- 🍽️ **Dietary and Cuisine Preferences**: Tailored recipe recommendations based on dietary restrictions and favorite cuisines.
- 🛠️ **Admin Panel**: Manage user accounts, approve chef registrations, and monitor activity.
- 🌟 **User Reviews and Ratings**: Rate and review recipes and chefs to foster community engagement.
- 💳 **Payment Integration**: Secure payment gateways for hassle-free transactions.
- 💬 **AI Chat Support**: Real-time assistance for recipe inquiries and bookings.
- 📧 **Email Notifications**: Automated updates on bookings and recipe suggestions.

---

## Technology Stack
| **Category**      | **Technology**                        |
|-------------------|--------------------------------------|
| **Backend**       | Laravel (PHP Framework)              |
| **Frontend**      | Tailwind CSS, jQuery, JavaScript      |
| **Database**      | MySQL                                |
| **AI Integration**| ChatGPT API                          |
| **Payment**       | Stripe or PayPal                     |

---

## Future Enhancements
- 📱 **Mobile Application**: Development of a mobile version to enhance accessibility.
- 💬 **Community Features**: Implementation of forums for user discussions and recipe sharing.
- 📊 **Advanced Analytics**: Analytics for chefs to track performance and user feedback.

---

## Installation
### Prerequisites
- PHP 7.4 or higher
- Composer (for managing PHP dependencies)
- MySQL (for the database)
- Laravel (you'll need to install Laravel if it's not already installed)

### Laravel Installation Steps
1. **Install Laravel** (if you haven't already):
   ```bash
   composer global require laravel/installer
   ```
   Ensure that the `~/.composer/vendor/bin` directory is in your PATH so the `laravel` executable can be found.

### Steps to Install Gourmet Nexus
1. Clone the repository:
   ```bash
   git clone https://github.com/skaffroddin/gourmet-nexus.git
   ```
2. Navigate to the project directory:
   ```bash
   cd gourmet-nexus
   ```
3. Install the project dependencies:
   ```bash
   composer install
   ```
4. Set up your .env file:
   ```bash
   cp .env.example .env
   ```
5. Generate the application key:
   ```bash
   php artisan key:generate
   ```
6. Set up your database configuration in the .env file:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```
7. Run migrations:
   ```bash
   php artisan migrate
   ```
8. (Optional) Seed the database with initial data:
   ```bash
   php artisan db:seed
   ```
9. Serve the application:
   ```bash
   php artisan serve
   ```

Now your project should be up and running at `http://localhost:8000`.

---

## Usage
Once the application is running, navigate to `http://localhost:8000` in your browser to access the Gourmet Nexus platform. Here you can explore recipes, register as a user or chef, and book cooking sessions.

---

## Contributing
🤝 Contributions are welcome! Please read the [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct and the process for submitting pull requests.

---

## License
📝 This project is licensed under the MIT License - see the LICENSE file for details.

---

## Acknowledgments
🙌 Special thanks to the developers and contributors who made this project possible.  
💡 Inspiration from culinary communities and platforms.

---

## Credits

```ascii
+---------------------+-------------------+-------------------+
|   Role              |   Developer Name  |   Links            |
+---------------------+-------------------+-------------------+
|   Frontend Developer|   Subhrajit Adak   | [GitHub](https://github.com/SubhrajitAdak)  |
|                     |                   | [LinkedIn](https://linkedin.com/in/SubhrajitAdak)  |
+---------------------+-------------------+-------------------+
|   Backend Developer |   Saikat Das       | [GitHub](https://github.com/SaikatDas)  |
|                     |                   | [LinkedIn](https://linkedin.com/in/SaikatDas)  |
+---------------------+-------------------+-------------------+
|   Full Stack Dev    |   Sekh Affroddin   | [GitHub](https://github.com/skaffroddin)  |
|                     |                   | [LinkedIn](https://linkedin.com/in/skaffroddin) |
|                     |                   | [Portfolio](https://your-portfolio-url.com)   |
+---------------------+-------------------+-------------------+
```

Project developed for **Ejob India**.

© 2024 Gourmet Nexus Team
```
