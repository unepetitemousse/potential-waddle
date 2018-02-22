<?php
  require_once '../includes/include.php';
?>
<html>
<head>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<h1>Hello World !</h1>

<section>
  <p>Your IP is <?php echo $_SERVER['REMOTE_ADDR']; ?></p>

  <p>Current time is <?php echo date('c', time()); ?></p>
</section>

<section>
  <form action="post.php" method="POST">
    <input type="text" name="user_name" value="" data-validation="required zedisbad"/>
    <button type="submit">Soumettre</button>
  </form>
</section>

<section class="quotations">
  <?php foreach($db->query('select * from USER') as $row): ?>
  <blockquote>
    <span class="author"><?php echo $row['name']; ?></span>
    <?php echo $row['message']; ?>
  </blockquote>
  <?php endforeach; ?>
</section>

<script>
    $.formUtils.addValidator({
        name: 'zedisbad',
        validatorFunction: function (quackVal) {
            return !quackVal.toLowerCase().includes("z");
        },
        errorMessage: 'Z is bad',
        errorMessageKey: ''
    });

    $.validate({
        lang: 'en'
    });
</script>
</body>
</html>