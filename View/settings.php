<?php include '../Controller/session.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="../assets/settings.css" />
  <script src="../Controller/settings.js"></script>
  <title>Settings</title>
</head>

<body>
  <main>
    <?php include 'header.php'; ?>
    <div class="container">
      <h1>Settings</h1>
      <form id="settingsForm" action="../Controller/update_settings.php" method="post" onsubmit="">
        <label>
          <input type="checkbox" name="emailNotifications" id="emailNotifications" />
          Email notifications
        </label>
        <button type="submit">Save Settings</button>
      </form>
    </div>
    <?php include 'footer.php'; ?>
  </main>
</body>

</html>