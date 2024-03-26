<nav class="navbar navbar-expand-lg navbar-dark bg-navy">
  <div class="container px-4 px-lg-5">
    <a class="navbar-brand" href="<?php echo base_url ?>">
      <img src="<?php echo validate_image($_settings->info('logo')) ?>" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
      <?php echo $_settings->info('short_name') ?>
    </a>

    <button class="navbar-toggler btn btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
        <li class="nav-item"><a class="nav-link" aria-current="page" href="<?php echo base_url ?>">Home</a></li>
        <li class="nav-item"><a class="nav-link" aria-current="page" href="<?php echo base_url ?>causes.php">Causes</a></li>
        <li class="nav-item"><a class="nav-link" aria-current="page" href="<?php echo base_url ?>?p=events">Events</a></li>
        <!--<li class="nav-item"><a class="nav-link" aria-current="page" href="<?php echo base_url ?>./members/login.php">Log in</a></li>-->
        <li class="nav-item"><a class="nav-link" aria-current="page" href="<?php echo base_url ?>?p=contact">Contact us</a></li>
        <li class="nav-item"><a class="nav-link" aria-current="page" href="<?php echo base_url ?>?p=register">Join us</a></li>

        <?php 
        $cat_qry = $conn->query("SELECT * FROM topics where status = 1 limit 0");
        $count_cats = $conn->query("SELECT * FROM topics where status = 1")->num_rows;
        while ($crow = $cat_qry->fetch_assoc()):
        ?>
        <li class="nav-item"><a class="nav-link" aria-current="page" href="<?php echo base_url ?>?p=articles&t=<?php echo md5($crow['id']) ?>"><?php echo $crow['name'] ?></a></li>
        <?php endwhile; ?>

        <?php if ($count_cats > 0): ?>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url ?>?p=view_topics">Topics</a></li>
        <?php endif; ?>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Discover</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="<?php echo base_url ?>?p=about">About us</a>
        <a class="dropdown-item" href="<?php echo base_url ?>?p=leaders">Our Leaders</a>
        <a class="dropdown-item" href="<?php echo base_url ?>?p=leaders">Past Leaders</a>
        <a class="dropdown-item" href="<?php echo base_url ?>?p=current_pres">Our Club Officers</a>
        <a class="dropdown-item" href="<?php echo base_url ?>?p=donators">Our Donators For the Day</a>
      </div>
    </li>

        </li>
      </ul>

      <div class="d-flex align-items-center"></div>
    </div>

    <button class="btn btn-flat btn-warning custom-btn" type="button" id="donation">Donate</button>
    <form class="form-inline ml-4 mr-2 pl-2" id="search-form">
      <div class="input-group">
        <input class="form-control form-control-sm form" type="search" placeholder="Search" aria-label="Search" name="search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : "" ?>" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-success btn-sm m-0" type="submit" id="button-addon2">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

<!-- The Modal -->
<div class="modal fade" id="chatbot-modal" tabindex="-1" role="dialog" aria-labelledby="chatbot-modal-label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-warning bg-primary" id="chatbot-modal-label">Feel Free to Ask</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <style>
	#chat_convo{
		max-height: 65vh;
	}
	#chat_convo .direct-chat-messages{
		min-height: 250px;
		height: inherit;
	}
	#chat_convo .card-body {
		overflow: auto;
	}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-8 <?php echo isMobileDevice() == false ?  "offset-2" : '' ?>">
			<div class="card direct-chat direct-chat-primary" id="chat_convo">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">Ask Me</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg mr-4">
                    <img class="direct-chat-img border-1 border-primary" src="<?php echo validate_image($_settings->info('logo')) ?>" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
					    <?php echo $_settings->info('intro') ?>
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  
                  <!-- /.contacts-list -->
                </div>
                <div class="end-convo"></div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <form id="send_chat" method="post">
                  <div class="input-group">
                    <textarea type="text" name="message" placeholder="Type Message ..." class="form-control" required=""></textarea>
                    <span class="input-group-append">
                      <button type="submit" class="btn btn-primary">Send</button>
                    </span>
                  </div>
                </form>
              </div>
              <!-- /.card-footer-->
            </div>
		</div>
	</div>
</div>
<div class="d-none" id="user_chat">
	<div class="direct-chat-msg right  ml-4">
        <img class="direct-chat-img border-1 border-primary" src="<?php echo validate_image($_settings->info('user_avatar')) ?>" alt="message user image">
        <!-- /.direct-chat-img -->
        <div class="direct-chat-text"></div>
        <!-- /.direct-chat-text -->
    </div>
</div>
<div class="d-none" id="bot_chat">
	<div class="direct-chat-msg mr-4">
        <img class="direct-chat-img border-1 border-primary" src="<?php echo validate_image($_settings->info('logo')) ?>" alt="message user image">
        <!-- /.direct-chat-img -->
        <div class="direct-chat-text"></div>
        <!-- /.direct-chat-text -->
  </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('[name="message"]').keypress(function(e){
			console.log()
			if(e.which === 13 && e.originalEvent.shiftKey == false){
				$('#send_chat').submit()
				return false;
			}
		})
		$('#send_chat').submit(function(e){
			e.preventDefault();
			var message = $('[name="message"]').val();
			if(message == '' || message == null) return false;
			var uchat = $('#user_chat').clone();
			uchat.find('.direct-chat-text').html(message);
			$('#chat_convo .direct-chat-messages').append(uchat.html());
			$('[name="message"]').val('')
			$("#chat_convo .card-body").animate({ scrollTop: $("#chat_convo .card-body").prop('scrollHeight') }, "fast");

			$.ajax({
				url:_base_url_+"classes/Chatbot.php?f=get_response",
				method:'POST',
				data:{message:message},
				error: err=>{
					console.log(err)
					alert_toast("An error occured.",'error');
					end_loader();
				},
				success:function(resp){
					if(resp){
						resp = JSON.parse(resp)
						if(resp.status == 'success'){
							var bot_chat = $('#bot_chat').clone();
								bot_chat.find('.direct-chat-text').html(resp.message);
								$('#chat_convo .direct-chat-messages').append(bot_chat.html());
								$("#chat_convo .card-body").animate({ scrollTop: $("#chat_convo .card-body").prop('scrollHeight') }, "fast");
						}
					}
				}
			})
		})

	})
</script>
      </div>
    </div>
  </div>
</div>


    <!-- <button id="chatbot-button"  class="chatbot-button" data-toggle="modal" data-target="#chatbot-modal">Chat with Chatbot</button> -->
    <a id="chatbot-button"  class="chatbot-button" data-toggle="modal" data-target="#chatbot-modal">
      <img src="uploads/chatbot.png" alt="Chatbot">
    </a>
  </div>
</nav>

<script>
  $(function () {
    $('#login-btn').click(function () {
      uni_modal("", "login.php");
    });

    $('#navbarResponsive').on('show.bs.collapse', function () {
      $('#mainNav').addClass('navbar-shrink');
    });

    $('#navbarResponsive').on('hidden.bs.collapse', function () {
      if ($('body').offset.top == 0)
        $('#mainNav').removeClass('navbar-shrink');
    });

    $('#search-form').submit(function (e) {
      e.preventDefault();
      var sTxt = $('[name="search"]').val();
      if (sTxt != '')
        location.href = './?p=search&search=' + sTxt;
    });

    $('#donation').click(function () {
      uni_modal('Donation', 'donate.php');
    });
  });
</script>
<style>
  .custom-btn {
  font-weight: bold;
  padding: 12px 24px;
  border-radius: 4px;
}

.custom-btn:hover {
  opacity: 0.8;
}
.chatbot-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 1000;
    display: inline-block;
    background-color: #007BFF; /* Customize the background color */
    border-radius: 50%; /* Makes the button round */
    padding: 10px; /* Adjust padding for size */
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5); /* Add a subtle shadow */
}

.chatbot-button img {
    width: 40px;
    height: 40px;
}

.chatbot-button:hover {
    background-color: #0056b3; /* Change the color on hover */
}



</style>
