# Laravel IDOR-Protected App

## Live Demo
https://your-app-host.com

Test Credentials:
- Email: test@example.com
- Password: StrongPass123!

## 🛡Security Features
This Laravel app demonstrates secure access control using the **Principle of Least Privilege** and prevents **IDOR (Insecure Direct Object References)**.

### Feature: View Profile
Only the authenticated user can view their own profile at `/profile/{id}`. Attempts to view others' profiles are blocked with a `403 Forbidden`.

Route: `/profile/{id}`  
Controller: `ProfileController@show`  
Access logic: Authenticated user can only access their own data. Unauthorized access is prevented using policies.

### Session Security
The app is hosted on HTTPS and configured with the following:
- `SESSION_SECURE_COOKIE=true`
- `SESSION_HTTP_ONLY=true`
- `SESSION_SAME_SITE=strict`

### Database
Uses Laravel's password hashing with unique salts (`bcrypt`) and throttling to prevent brute-force login.

## Setup Instructions
1. Clone the repo: `git clone https://github.com/yourname/idor-secure-app.git`
2. Install dependencies: `composer install && npm install`
3. Set `.env` and DB credentials
4. Run migrations: `php artisan migrate`
5. Serve: `php artisan serve`

