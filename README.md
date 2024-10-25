# `cookies.php`
This file sets a cookie on the user's browser. Cookies store data on the client-side and can be used to remember information across multiple page loads or sessions.

## Explanation:

    - The cookie named "UserName" is set with a value of `100`.
    - The expiration time is set to 30 days from when the cookie is created.
    - `setcookie()` needs to be called before any HTML output starts, as headers are sent immediately after HTML starts.

# `read_cookie.php`
This file reads the cookie set by `cookies.php`. If the cookie exists, it displays its value; otherwise, it shows `0`.

## Explanation:

    - `$_COOKIE['UserName']` checks if the cookie exists.
    - If the cookie is present, it outputs its value.
    - If not, it defaults to `0` to indicate no cookie is found.

# `session1.php`
This file demonstrates how to start a PHP session and set a session variable. Sessions store data on the server side, and they maintain user-specific data across multiple pages.

## Explanation:

    - `session_start()` initializes a session or resumes an existing one, allowing data to be stored and accessed.
    - The session variable `$_SESSION['greeting']` is set to `"This is awesome"` and can be accessed on other pages where `session_start()` is called.

# `session2.php`
This file reads the session variable set in session1.php.

## Explanation:

    - Calling `session_start()` here allows access to session data.
    - `$_SESSION['greeting']` retrieves and displays the stored message "This is awesome" if `session1.php` was accessed prior, setting this session variable.
