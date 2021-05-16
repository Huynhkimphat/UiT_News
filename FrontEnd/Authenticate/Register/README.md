<h1 align="center">Register Page</h1>

### DESCRIPTION

- UI:
  - [x] Logo and text
  - [x] A form with 3 input fields: username (email) password and confirm password
  - [x] A register button
  - [x] 1 anchors tag to links: Login
- Validate:
  - [x] All fields are required (If username/password/confirm password empty and clicked register => Notice message require)
  - [x] On focus => Blur => Notice message require
  - [x] Username : must be a valid email <...@....>
  - [x] Password : must be higher than 6 characters
  - [x] Confirm Password: must be the same with password field
  - [ ] Re-type Password Field => Empty Confirm Password Field
- Logic:
  - [x] Click Login => To Page Login
  - [x] Click Register and all validations are right => Register and go to page login
