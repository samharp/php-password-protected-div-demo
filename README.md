# php-password-protection-div-demo

A (not super-secure) way to make password protected webpage content with PHP.

## In this folder:
- `secure.php` is the container page (will hold the password-entry form and secure content after entering correct password)
- `secure.html` is the secure content (will be injected into `secure.php` after entering correct password)

**NOTE:** For even higher privacy, store `secure.html` file in a not publicly-accessible location.

**NOTE:** This method should not be followed for storing credit cards or other private personal information, but content that should only be visible for users with a given password. This is much more effective than a JavaScript/CSS implementation, but it is not impossible to grab hidden content.