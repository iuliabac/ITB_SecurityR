# Laravel IDOR-Protected App

## Live Demo
https://itb-securityr.onrender.com/

Test Credentials:
- Email: test@example.com
- Password: StrongPass123!

## Security Features
This Laravel app demonstrates secure access control using the **Principle of Least Privilege** and prevents **IDOR (Insecure Direct Object References)**.

### Feature: View Profile
Only the authenticated user can view their own profile at `/profile/{id}`. Attempts to view others' profiles are blocked with a `403 Forbidden`.

Route: `/profile/{id}`  
Controller: `ProfileController@show`  
Access logic: Authenticated user can only access their own data. Unauthorized access is prevented using policies.

### Database
Uses Laravel's password hashing with unique salts (`bcrypt`) and throttling to prevent brute-force login.

