<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Techmang3</title>
    <!-- Bulma Version 0.8.x-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    
</head>
    <body>
        <section class="hero is-warning is-medium">
            <!-- Hero head: will stick at the top -->
            <div class="hero-head">
              <nav class="navbar">
                <div class="container">
                  <div class="navbar-brand">
                    <a class="navbar-item">
                      <img src="https://www.iafindia.com/wp-content/uploads/2021/02/niveus_logo.png" alt="Logo">
                    </a>
                    <span class="navbar-burger burger" data-target="navbarMenuHeroA">
                      <span></span>
                      <span></span>
                      <span></span>
                    </span>
                  </div>
                  <div id="navbarMenuHeroA" class="navbar-menu">
                    <div class="navbar-end">
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          
            <!-- Hero content: will be in the middle -->
            <div class="hero-body">
              <div class="container has-text-centered">
                <h1 class="title">
                  <?php echo ucfirst($_ENV["INSTANCE_STATUS"]) ?>
                </h1>
                <h2 class="subtitle">
                  Demo
                </h2>
              </div>
            </div>
          
            <!-- Hero footer: will stick at the bottom -->
        </section>
        <div class="container">
          <?php 
            $json = file_get_contents('http://api:8989/people');
            $obj = json_decode($json);
         
         ?>
        <table class="table is-fullwidth is-striped ">
            <thead>
              <tr>
                <th><abbr title="Sn">Sr no.</abbr></th>
                <th><abbr title="Name">Name</abbr></th>
                <th><abbr title="Age">Age</abbr></th>
                <th><abbr title="state">State</abbr></th>
                <th><abbr title="email">Email</abbr></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($obj as $key => $value) { ?>
              <tr>
                <th><?php echo $key+1 ?></th>
                <td><a href="https://twitter.com/<?php echo $value->{'handler'} ?>" title="<?php echo $value->{'handler'} ?>"><?php echo $value->{'fname'} . ' ' . $value->{'lname'}; ?></a></td>
                <td><?php echo $value->{'age'} ?></td>
                <td><?php echo $value->{'state'} ?></td>
                <td><?php echo $value->{'email'} ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        
    </div>
    </body>
</html>