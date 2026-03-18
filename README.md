# Haya Pharmacy (صيدلية حيا)

A custom PHP-based management system for Haya Pharmacy, featuring registration for Pioneers and Partners, health questionnaires, and an administrative dashboard.

## Features
- **Registration Systems**: Specialized forms for "Pioneers" and "Partners".
- **Health Questionnaire**: Interactive digital health assessment.
- **Feedback System**: Customer feedback and rating collection.
- **Admin Dashboard**: Secure area to manage registrations, view stats, and export data.

## Deployment Instructions

### 1. Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache/Nginx web server

### 2. Database Setup
1. Create a new MySQL database (e.g., `haya_pharmacy`).
2. Import the database schema from `config/schema.sql`.
   ```sql
   mysql -u your_username -p haya_pharmacy < config/schema.sql
   ```

### 3. Environment Configuration
1. Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```
2. Open `.env` and configure your database credentials and site URL:
   ```ini
   DB_HOST=localhost
   DB_USER=your_db_user
   DB_PASS=your_db_password
   DB_NAME=haya_pharmacy
   SITE_URL=https://your-domain.com
   ENVIRONMENT=production
   ```

### 4. Admin Access
- Navigate to `SITE_URL/admin` to access the login page.
- Note: You will need to manually add an admin user to the `admin_users` table with a hashed password using `password_hash()` in PHP if one doesn't exist.

## Security Notes
- Ensure the `.env` file is NOT accessible publicly.
- In production, set `ENVIRONMENT=production` in your `.env` to disable error display.
- Keep the `config/` and `includes/` directories protected.
