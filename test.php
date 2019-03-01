<!DOCTYPE html>
<body>   

    <form action="/registration" method="POST">
      <p>
        <input data-validation="length alphanumeric" data-validation-length="min4">
      </p>
      <p>
  
        <input data-validation="date" data-validation-format="yyyy-mm-dd">
      </p>
      <p>
        <input data-validation="url">
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
      $.validate({
        lang: 'en'
      });
    </script>
<body>  