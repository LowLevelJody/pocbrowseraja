<?php
// Check if "redirect" parameter is present in the URL
if (isset($_GET['redirect'])) {


    // Perform the server-side redirect
    header("Location: internal://local/errorpage?url=https://www.google.com/login&code=0&domain=&description=Redirection%20to%20URL%20with%20a%20scheme%20that%20is%20not%20HTTP(S)&timestamp=1732440620327");
    exit;
}
?>
