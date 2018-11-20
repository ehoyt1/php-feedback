<html>
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
    </style>
  </head>
  <body>
    <h1>Feedback Form</h1>
    <p>Please fill out your feedback</p>
    <form>
      <div class='container'>
        <label for="firstname">First Name</label>
        <input type="text" name="firstname">
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname">
        <label for="email">Email Address</label>
        <input type="text" name="email">
        <label for="phone">Phone Number</label>
        <input type="text" name="phone">
        <label for="feedback">Please enter your feedback</label>
        <textarea name="feedback" rows="5"></textarea>
      </div>
      <br>
      <input type="submit" name="submit">
      <input type="reset" name="clear">
    </form>
  </body>
</html>
