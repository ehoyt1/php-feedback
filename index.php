<html lang="en">
  <head>
    <title>Feedback Form</title>
    <style type="text/css">
      body{
        font-family: Arial, Helvetica, sans-serif;
      }
      .container{
        display: grid;
        grid-template-columns: .2fr .2fr;
        grid-column-gap: .5em;
        grid-row-gap: .5em;
        /* MS partial support */
        -ms-grid-template-columns: .2fr .2fr;
        -ms-grid-column-gap: .5em;
        -ms-grid-row-gap: .5em;
      }
      /* Responsive for smaller devices (mobile, tablet) */
      @media (max-width: 992px) {
        .container{
          grid-template-columns: none;
          /* MS partial support */
          -ms-grid-template-columns: none;
        }
      }
      /* 2.4.7 - Focus Visible - Level AA WCAG 2.0 */
      input:focus, textarea:focus {
        color:#00f;
        background-color:#ddd;
      }
    </style>
  </head>
  <body>
    <h1>Feedback Form</h1>
    <p>Please fill out your feedback</p>
    <form>
      <div class='container'>
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname" aria-label="First Name">
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname" aria-label="Last Name">
        <label for="email">Email Address</label>
        <input type="text" name="email" id="email" aria-label="Email Address">
        <label for="phone">Phone Number</label>
        <input type="text" name="phone" id="phone" aria-label="Phone Number">
        <label for="feedback">Please enter your feedback</label>
        <textarea name="feedback" id="feedback" aria-label="Enter your feedback" rows="5"></textarea>
      </div>
      <br>
      <input type="submit" name="submit" aria-label="Submit form">
      <input type="reset" name="clear" aria-label="Clear form">
    </form>
  </body>
</html>
