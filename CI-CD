

## **Final Project Development Workflow**

- **Project Lead (Affroddin)**: Manages the project, merges branches, oversees deployments, and also works on feature development (Feature A).
- **Developers (Saikat, Subhrajit)**: Each works on specific feature branches (`feature-B`, `feature-C`), pushes code for testing, and participates in the development process.
- **Hotfix Workflow**: For urgent bug fixes.

### **Deployment Overview**
- **Backend (Heroku)**: The backend will be deployed on Heroku with the JawsDB MySQL add-on.
- **Frontend (Netlify)**: Static assets from the frontend will be automatically deployed to Netlify.

### **Git Branches**
- **`main`**: The production-ready branch. Final features that pass tests are merged into this branch and deployed automatically.
- **`test`**: The testing branch where features are merged to be validated before deployment.
- **`feature-A`, `feature-B`, `feature-C`**: Feature branches for each developer.
- **`hotfix-*`**: Temporary branches for urgent bug fixes.

---

### **ASCII Diagram with Developer Names**

```plaintext
                   ┌──────────────┐
                   │   Main       │────────────► Production
                   │  (Deploy)    │            (Heroku, Netlify)
                   └───────▲──────┘
                           │
                           │ Merge
                           │
           ┌───────────────┴──────────────┐
           │                              │
   ┌───────▼───────────┐          ┌───────▼───────────┐
   │   Test            │          │  Hotfix           │
   │(Pre-production)   │◄─────────┤ (Urgent Fixes)    │
   └───────▲───────────┘          └───────▲───────────┘
           │                             Merge
           │
           │
┌──────────┴─────────────┐
│                        │
│   Feature Branches      │
│                        │
│  ┌───────────────────┐ │
│  │  Feature-A (Affy)  │ │
│  └───────────────────┘ │
│                        │
│  ┌───────────────────┐ │
│  │ Feature-B (Saikat) │ │
│  └───────────────────┘ │
│                        │
│  ┌───────────────────┐ │
│  │Feature-C (Subhrajit)│ │
│  └───────────────────┘ │
└───────────▲────────────┘
            │
        Create New Branch
```

---

### **Git Commands for Developers**

Here are the essential Git commands and steps for the developers to follow:

#### **1. Clone the Repository**

```bash
git clone https://github.com/yourusername/yourproject.git
cd yourproject
```

#### **2. Create a Feature Branch**

Each developer creates their assigned feature branch:

```bash
# For Affroddin (Feature A)
git checkout -b feature-A

# For Saikat (Feature B)
git checkout -b feature-B

# For Subhrajit (Feature C)
git checkout -b feature-C
```

#### **3. Make Changes, Add, and Commit**

After making necessary changes:

```bash
git add .
git commit -m "Add feature X implementation"
```

#### **4. Push the Feature Branch**

Developers push their branches for testing:

```bash
git push origin feature-A  # or feature-B, feature-C
```

#### **5. Merge Feature Branch into `test`**

To test the feature, developers or project lead will merge their feature branches into the `test` branch:

```bash
# Switch to test branch
git checkout test

# Pull the latest test branch
git pull origin test

# Merge the feature branch
git merge feature-A  # or feature-B, feature-C

# Push the changes
git push origin test
```

If tests pass, move to production. If tests fail, fix the issues and repeat.

---

#### **6. Merge into `main`**

Once tests pass, the project lead (Affroddin) merges into `main` for production deployment:

```bash
# Switch to main branch
git checkout main

# Pull the latest main branch
git pull origin main

# Merge the test branch into main
git merge test

# Push to main
git push origin main
```

---

#### **7. Hotfix Branch Workflow**

If there are urgent bugs to fix, the project lead creates a hotfix branch:

```bash
# Switch to main and pull latest changes
git checkout main
git pull origin main

# Create a new hotfix branch
git checkout -b hotfix/fix-critical-bug

# Make changes, add and commit
git add .
git commit -m "Fix critical bug"

# Push the hotfix branch
git push origin hotfix/fix-critical-bug

# Merge hotfix into main
git checkout main
git merge hotfix/fix-critical-bug
git push origin main

# Delete the hotfix branch
git branch -d hotfix/fix-critical-bug
git push origin --delete hotfix/fix-critical-bug
```

---

### **CI/CD Pipeline**

A GitHub Actions pipeline will automatically trigger tests whenever code is pushed to the `test` branch. If all tests pass, the changes will be merged into `main` and automatically deployed to **Heroku** (backend) and **Netlify** (frontend).

Sample `.github/workflows/ci.yml`:

```yaml
name: CI Pipeline

on:
  push:
    branches:
      - test

jobs:
  test:
    runs-on: ubuntu-latest

    steps:
      - uses: actions/checkout@v2

      - name: Set up PHP
        uses: shivammathur/setup-php@v2
        with:
          php-version: 8.0
          extensions: mbstring, mysql

      - name: Install Dependencies
        run: composer install --prefer-dist --no-progress

      - name: Run PHPUnit Tests
        run: ./vendor/bin/phpunit

      - name: Run Laravel Pint (Linting)
        run: ./vendor/bin/pint --test

      - name: Run PHPStan (Static Analysis)
        run: ./vendor/bin/phpstan analyse
```

---

### **Deployment Setup**

- **Heroku**: The backend is hosted on Heroku with the JawsDB MySQL add-on.
- **Netlify**: The frontend (TailwindCSS and jQuery) is hosted on Netlify for fast performance and automatic updates.

---
