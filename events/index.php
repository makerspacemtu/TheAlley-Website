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

    <div class="eventOverlay" id="0225_NewCoach">
      <div class="overlayContent">
        <div class="overlayRow">
          <h2 class="header">New Coach Orientation and Training</h2>
          <p><b>Description:&nbsp</b>Coach Orientation walks you through the
            process of becoming a maker coach! At the event, you'll go through
            the motions of filling out the necessary paperwork(don't worry, it's
             not that much), getting an account set up on our app, learning the
             layout of the space, and meeting some of the team. Training will
             require you to learn a few key tools that are commonly used in the
             space.</p>
          <p><b>Time and Date:&nbsp</b>February 25, From 6-8p.m.</p>
          <p><b>Cost:&nbsp</b>Free</p>
          <p><b>Location:&nbsp</b>The Alley Makerspace</p>
        </div>
      </div>
    </div>

    <div class="eventOverlay" id="0218_Bookmark">
      <div class="overlayContent">
        <div class="overlayRow">
          <h2 class="header">Bookmark Makenight</h2>
          <p><b>Description:&nbsp</b>At our bookmark makenight, we'll walk you
            through the steps of creating a wooden bookmark. Using a variety of
            woods, you'll sand, shape, decorate and finish your bookmark.</p>
          <p><b>Time and Date:&nbsp</b>February 18, From 6-8p.m.</p>
          <p><b>Cost:&nbsp</b>Free</p>
          <p><b>Location:&nbsp</b>The Alley Makerspace</p>
        </div>
      </div>
    </div>

    <div class="eventOverlay" id="0222_FeltSucculents">
      <div class="overlayContent">
        <div class="overlayRow">
          <h2 class="header">Felt Succulents</h2>
          <p><b>Description:&nbsp</b>The Alley Makerspace invites you to make
          some adorable felt plants! Make them together with us in the Alley
          or take a kit to-go to make one at home. Masks required</p>
          <p><b>Time and Date:&nbsp</b>February 22, From 6-8p.m.</p>
          <p><b>Cost:&nbsp</b>Free</p>
          <p><b>Location:&nbsp</b>The Alley Makerspace</p>
        </div>
      </div>
    </div>

    <div class="eventOverlay" id="0303_Catapults">
      <div class="overlayContent">
        <div class="overlayRow">
          <h2 class="header">Catapult Makenight Competition</h2>
          <p><b>Description:&nbsp</b>Join us in the Alley Makerspace to
          design and build your very own catapult. At the end of the night we
          will have a competition to see whos catapult can launch the furthest!</p>
          <p><b>Time and Date:&nbsp</b>March 3, From 6-8p.m.</p>
          <p><b>Cost:&nbsp</b>Free</p>
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
        <image src="/img/events/0218_Bookmark.jpg" width="500" height="600" onclick="openEvent('0218_Bookmark')">
        <image src="/img/events/0222_FeltSucculents.jpg" width="500" height="600" onclick="openEvent('0222_FeltSucculents')">
        <image src="/img/events/0225_NewCoach.png" width="500" height="600" onclick="openEvent('0225_NewCoach')">
          <image src="/img/events/0303_Catapults.jpg" width="500" height="600" onclick="openEvent('0303_Catapults')">
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
