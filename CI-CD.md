

## **Final Project Development Workflow**
### **Project Overview**
This document outlines the full project development workflow for a team working on a Laravel, MySQL, TailwindCSS, and jQuery-based application. It details branch structure, development processes, and CI/CD pipelines using **Heroku** for backend deployment and **Netlify** for frontend hosting.

- **Project Lead (Affroddin)**: Manages the project, merges branches, oversees deployments and also works on feature development (Feature A).
- **Developers (Saikat, Subhrajit)**: Each works on specific feature branches (`feature-B`, `feature-C`), pushes code for testing, and participates in the development process.
- **Hotfix Workflow**: For urgent bug fixes.

---

### **Branches Structure**
- **`main`**: The production branch where stable, tested, and production-ready code is deployed.
- **`test`**: The branch used for staging and testing the code. Once the code passes all tests, it is merged into `main`.
- **`develop`**: The primary development branch where all feature branches are merged before moving to the test environment.
- **Feature Branches**:
  - **`feature-A (Affroddin)`**: Handles specific feature A development.
  - **`feature-B (Saikat)`**: Handles specific feature B development.
  - **`feature-C (Subhrajit)`**: Handles specific feature C development.
- **Hotfix Branches**: Created when urgent bug fixes need to be applied directly to production.

---

### **Diagram - Git Workflow with Branching Strategy**

```
                   ┌──────────────┐
                   │   Main       │────────────► Production
                   │  (Deploy)    │            (Heroku Backend,
                   └───────▲──────┘            Netlify Frontend)
                           │
                           │ Merge (After Test Passes)
                           │
                   ┌───────┴────────┐
                   │   Test         │◄──────────┐
                   │(Staging Env.)  │           │
                   └───────▲────────┘           │
                           │                    │
                           │ Merge (From develop)
           ┌───────────────┴──────────────┐      │
           │                              │      │
   ┌───────▼───────────┐          ┌───────▼───────────┐
   │   Develop         │          │  Hotfix           │
   │(Development Stage)│◄─────────┤ (Urgent Fixes)    │
   └───────▲───────────┘          └───────▲───────────┘
           │                             Merge into Main
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
        Create New Branch for Each Feature
```

---

### **Git Workflow and Commands**

#### **1. Clone the Repository**

Each developer clones the repository to their local machine:

```bash
git clone https://github.com/yourusername/yourproject.git
cd yourproject
```

#### **2. Create and Work on a Feature Branch**

Before starting any work, developers must create a feature branch off `develop`:

```bash
# Switch to develop branch
git checkout develop

# Create a new feature branch (replace 'feature-A' with your branch)
git checkout -b feature-A
```

Make changes to the code, then add and commit those changes:

```bash
git add .
git commit -m "Implemented feature A"
```

#### **3. Push Feature Branch**

Push the branch to the remote repository for code review:

```bash
git push origin feature-A  # for Affroddin's feature-A branch
git push origin feature-B  # for Saikat's feature-B branch
git push origin feature-C  # for Subhrajit's feature-C branch
```

#### **4. Merge Feature Branch into `develop`**

Once the feature is complete, the developer or project lead will merge the feature branch into `develop`:

```bash
# Switch to develop branch
git checkout develop

# Pull the latest updates
git pull origin develop

# Merge the feature branch
git merge feature-A  # Replace with the appropriate branch

# Push the updated develop branch
git push origin develop
```

#### **5. Test and Merge to `test` Branch**

The project lead (Affroddin) will merge `develop` into `test` for staging/testing purposes:

```bash
# Switch to test branch
git checkout test

# Pull latest updates from test branch
git pull origin test

# Merge develop into test
git merge develop

# Push the changes
git push origin test
```

#### **6. Merge `test` to `main` for Production**

If the tests pass successfully, `test` is merged into `main` for final production deployment:

```bash
# Switch to main branch
git checkout main

# Pull latest updates from main branch
git pull origin main

# Merge test branch into main
git merge test

# Push the main branch for production
git push origin main
```

#### **7. Hotfixes Workflow**

In the event of urgent bugs, a hotfix branch is created and directly merged into `main`:

```bash
# Switch to main and pull latest updates
git checkout main
git pull origin main

# Create a new hotfix branch
git checkout -b hotfix/fix-critical-bug

# Make changes, commit and push
git add .
git commit -m "Fix critical bug"
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

Using **GitHub Actions** for automated tests, linting, and deployment. The code will be automatically tested on the `test` branch and deployed to production when merged into `main`.

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

### **Deployment Platforms**

- **Heroku**: The Laravel backend is deployed on Heroku, using the free **JawsDB MySQL** add-on.
- **Netlify**: The static frontend (TailwindCSS, jQuery) is hosted on Netlify for fast, automated deployment.

---

