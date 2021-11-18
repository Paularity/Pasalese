<?php
$page_title = "Message";
include "header.php";

?>
  <div class="container-chat clearfix">
    <div class="people-list" id="people-list">
      <div class="search">
        <input type="text" placeholder="search" />
        <i class="fa fa-search"></i>
      </div>
      <ul class="list">
        <li class="clearfix">
          <img src="../assets/services/raven_profile.jpg" alt="avatar" />
          <div class="about">
            <div class="list-name">Raven dale</div>
            <div class="status">
              <i class="fa fa-circle online"></i> online
            </div>
          </div>
        </li>
        
        
      </ul>
    </div>
    
    <div class="chat">
      <div class="chat-header clearfix">
        <img src="../assets/services/raven_profile.jpg" alt="avatar" />
        
        <div class="chat-about">
          <div class="chat-with">Chat with Raven dale (aircon cleaning services) </div>
          <div class="chat-num-messages">0 messages</div>
        </div>
        
      </div> <!-- end chat-header -->
      
      <!-- end chat-history -->
      
      <div class="chat-message clearfix">
         <textarea name="message-to-send" id="message-to-send" placeholder ="Type your message"></textarea>
          <div>
            <button>Send</button>
         </div>

      </div> <!-- end chat-message -->
      
    </div> <!-- end chat -->
    
  </div> <!-- end container -->


  <?php
include "footer.php";

?>