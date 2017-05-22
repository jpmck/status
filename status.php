<?php
  include_once('./library/library.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <link href="/css/bb.min.css" rel="stylesheet">
    <link href="/css/status.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="favicon.ico" rel="icon">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Server Status</title>
  </head>

  <body>
    <header>
      <h1>Server Status</h1>
    </header>
    <main>
      <section>
        <article class="one-half">
          <h3><i class="fa fa-fw fa-server" aria-hidden="true"></i> Server</h3>
          <h4>Hostname</h4>
          <p>
            <?php echo($hostname); ?>
          </p>

          <h4>Uptime</h4>
          <p>
            <?php echo($uptime); ?>
          </p>
        </article>

        <article class="one-half">
          <h3><i class="fa fa-fw fa-tachometer" aria-hidden="true"></i> CPU Load</h3>
          <p>
            <?php echo($cpuPercent) . '% ( ' . $cpuLoad . ')'; ?>
          </p>
          <p>
            <progress value="<?php echo $cpuPercent; ?>" max="100"></progress>
          </p>
          <p>
            <?php echo($top); ?>
          </p>
        </article>

        <article class="one-half">
          <h3><i class="fa fa-fw fa-microchip" aria-hidden="true"></i> Memory Load</h3>
          <p>
            <?php echo($memory) . '%'; ?>
          </p>
          <p>
            <progress value="<?php echo $memory; ?>" max="100"></progress>
          </p>
        </article>

        <article class="one-half">
          <h3><i class="fa fa-fw fa-database" aria-hidden="true"></i> Disk Use</h3>
          <p>
            <?php echo($diskUse); ?>
          </p>
          <p>
            <progress value="<?php echo(substr($diskUse, 0, -2)); ?>" max="100">0%</progress>
          </p>

        </article>
      </section>

    </main>

    <footer>
      Status, Copyright © Jim McKenna.<br>
    </footer>
  </body>
</html>
