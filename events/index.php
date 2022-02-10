<!DOCTYPE html>
<html>
<?php include '/app/_includes/head.php'; ?>
<body>
<?php include '/app/_includes/headerMain.php'; ?>
  <script type="text/javascript" src="/js/events.js"></script>

<!--The code to overlay information when a poster is clicked-->
  <div id="overlayBackground">
    <button id="overlayClose" type="button" class="close" aria-label="Close" onclick="closeEvent()">
      <span aria-hidden="true">&times;</span>
    </button>

    <div class="eventOverlay" id="0025_NewCoach">
      <div class="overlayContent">
        <div class="overlayRow">
          <h2 class="header">New Coach Orientation and Training</h2>
          <p><b>Description:&nbsp</b>Coach Orientatin walks you through the
            proccess of becoming a maker coach! At the event, you'll go through
            the motions of filling out the nessessary paperwork(don't worry, its
             not that much), getting an account set up on our app, learning the
             layout of the space, and meeting some of the team. Training will
             require you to learn a few key tools that are commonly used in the
             space.</p>
          <p><b>Time and Date:&nbsp</b>February 25, From 6-8p.m.</p>
          <p><b>Location:&nbsp</b>The Alley Makerspace</p>
        </div>
      </div>
    </div>

  </div>

  <section>
    <div class="content">
      <div class="row">
        <h2 class="header"> Spring 2022 Events </h2>
        <p> click an event to see more details </p>
        <image src="/img/events/0225_NewCoach.png" width="500" height="600" onclick="openEvent('0025_NewCoach')">
      </div>
    </div>

    <!--Regular events-->
    <div class="content">
      <div class="row">
        <h2 class="header"> Old Events </h2>
        <image src="/img/events/BadRobotNight.jpg" width="500" height="600">
        <image src="/img/events/MN_Replay_v5.jpg" width="500" height="600">
        <image src="/img/events/NailString.jpg" width="500" height="600">
        <image src="/img/events/Book_Binding_Makenight_v2.jpg" width="500" height="600">
        <image src="/img/events/yooper_keychain_makenight.jpg" width="500" height="600">
        <image src="/img/events/MakeMugKnight.jpg" width="500" height="600">
      </div>
    </div>
  </section>
<!--section required for every layout-->
<?php require '/app/_includes/call_to_action.php';
      include '/app/_includes/footer.php';
?>
</body>
</html>
