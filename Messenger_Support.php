<?php
if(!isset($_SESSION)) { session_start(); }
ob_start();
include './resources/template/head/dashHead.php';
include 'PHPFiles/MessengerSupportPHP.php';

$userData = "SELECT * FROM userinfo WHERE `Uid` = '$user'";
$userQuery = mysqli_query($link, $userData);
$userInfo = mysqli_fetch_array($userQuery);


if(isset($_GET['supp_id'])){
    $supp_id = $_GET['supp_id'];
    
    $qu = "SELECT * FROM `support` WHERE supp_id = ". $supp_id;
    $supportQuery = mysqli_query($link, $qu);
    $supportInfo = mysqli_fetch_array($userQuery);

// var_dump($supportInfo);
}

?>

<div class="content-wrapper" style="min-height: 432px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Messenger</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="AppliedUsers.php">Inbox</a></li>
                        <li class="breadcrumb-item active"><?php echo $userInfo['FirstName'] . " " . $userInfo['LastName']; ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable ui-sortable">
                    <!-- DIRECT CHAT -->
                    <div class="card direct-chat direct-chat-primary">
                        <div class="card-header ui-sortable-handle" style="cursor: move;">
                            <h3 class="card-title"><?php echo $userInfo['FirstName'] . " " . $userInfo['LastName']; ?></h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button id="MyButton" class="btn btn-tool" title="Refresh" onClick="window.location.reload(true)">
                                    <i class="fas fa-comments"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="refreshDivID">
                                <div class="reloaded-divs">
                                    <!-- Conversations are loaded here -->
                                    <div id="chatBox" class="direct-chat-messages">

                                        <?php
                                        $supp_id = $_GET['supp_id'];
                                        $i = 0;
                                        $query = "SELECT * FROM chat WHERE sender_userid = '".$user."' AND reciever_userid = '".$uid."' AND support_id='$supp_id' OR sender_userid = '".$uid."' AND reciever_userid = '".$user."' AND support_id='$supp_id' ";
                                        $run = mysqli_query($link, $query);

                                        $senderInfo = "SELECT * FROM userinfo WHERE `Uid` = '$uid'";
                                        $getData = mysqli_query($link,$senderInfo);
                                        $senderData = mysqli_fetch_array($getData);


                                        if (mysqli_num_rows($run) > 0) {
                                            while ($data = mysqli_fetch_array($run)) {
                                        ?>
                                            <?php if ($data['reciever_userid'] == $uid) { ?>

                                                    <!-- Message. Default to the left -->
                                                    <div class="direct-chat-msg">
                                                        <div class="direct-chat-infos clearfix">
                                                            <span class="direct-chat-name float-left">
                                                                <?php echo $userInfo['LastName']; ?>
                                                            </span>
                                                            <span class="direct-chat-timestamp float-right">
                                                                <?php echo $data['timestamp']; ?>
                                                            </span>
                                                        </div>
                                                        <!-- /.direct-chat-infos -->
                                                        <img class="direct-chat-img" src="images/ProfilePicture/<?php echo $userInfo['ProfileImage']; ?>" alt="message user image">
                                                        <!-- /.direct-chat-img -->
                                                        <div class="direct-chat-text">
                                                            <?php echo $data['message']; ?>
                                                        </div>
                                                        <!-- /.direct-chat-text -->
                                                    </div>
                                                    <!-- /.direct-chat-msg -->
                                            <?php }
                                            if ($data['sender_userid'] == $uid) { ?>


                                                <!-- Message to the right -->
                                                <div class="direct-chat-msg right">
                                                    <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-right">You</span>
                                                        <span class="direct-chat-timestamp float-left">
                                                            <?php echo $data['timestamp']; ?>
                                                        </span>
                                                    </div>
                                                    <!-- /.direct-chat-infos -->
                                                    <img class="direct-chat-img" src="images/ProfilePicture/<?php echo $senderData['ProfileImage']; ?>" alt="message user image">
                                                    <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                        <?php echo $data['message']; ?>
                                                    </div>
                                                    <!-- /.direct-chat-text -->
                                                </div>
                                                <!-- /.direct-chat-msg -->

                                            <?php } 
                                            $i++;
                                        }
                                            } else {
                                                echo "No result found";
                                            }
                                            ?>

                                    </div>
                                    <!--/.direct-chat-messages-->

                                </div>
                            </div>




                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <form method="post">
                                <div class="input-group">
                                    <input type="text" name="message" id="message" placeholder="Type Message ..." class="form-control">
                                    <span class="input-group-append">
                                        <button type="submit" id="sendmsg" name="sendmsg" class="btn btn-primary">Send</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!--/.direct-chat -->
                    <!-- /.card -->
                </section>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>



<?php
include 'resources/template/Footer/dashFoot.php';
?>