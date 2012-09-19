<?php
global $users, $torrents, $seeds, $leechers, $percent;
// $language['rtl']='rtl'; // if your language is  right to left then uncomment this line
// $language['charset']='ISO-8859-1'; // uncomment this line with specific language charset if different than tracker's one
$language['ACCOUNT_CONFIRM']='Account confirmation at the '.$SITENAME.' site.';
$language['ACCOUNT_CONGRATULATIONS']='Congratulations your account is now valid!<br />Now you can <a href="index.php?page=login">login</a> on the site using your account.';
$language['ACCOUNT_CREATE']='Create account';
$language['ACCOUNT_DELETE']='Delete account';
$language['ACCOUNT_DETAILS']='account details';
$language['ACCOUNT_EDIT']='Edit account';
$language['ACCOUNT_MGMT']='Account Managment';
$language['ACCOUNT_MSG']='Hello,'."\n\n".'This email has been sent because someone has requested an account on our site with this email address.'."\n".'If you aren\'t the requester ignore this email, otherwise please confirm the account.'."\n\n".'Best regards from the staff.';
$language['ACTION']='Action';
$language['ACTIVATED']='Active';
$language['ACTIVE']='Status';
$language['ACTIVE_ONLY']='Active only';
$language['ADD']='Add';
$language['ADDED']='Added';
$language['ADMIN_CPANEL']='Admin Control Panel';
$language['ADMINCP_NOTES']='Here you can control all settings of your tracker...';
$language['ALL']='All';
$language['ALL_SHOUT']='All Shouts';
$language['ANNOUNCE_URL']='Tracker announce url:';
$language['ANONYMOUS']='Anonymous';
$language['ANSWER']='Answer';
$language['AUTHOR']='Author';
$language['AVATAR_URL']='Avatar (url): ';
$language['AVERAGE']='Average';
$language['BACK']='Back';
$language['BAD_ID']='Bad ID!';
$language['BCK_USERCP']='Back to User Panel';
$language['BLOCK']='Block';
$language['BODY']='Body';
$language['BOTTOM']='bottom';
$language['BY']='By';
$language['CANT_DELETE_ADMIN']='It&rsquo;s impossible to delete another admin!';
$language['CANT_DELETE_NEWS']='You&rsquo;re not authorized do delete news!';
$language['CANT_DELETE_TORRENT']='You&rsquo;re not authorized to delete this torrent!...';
$language['CANT_DELETE_USER']='You&rsquo;re not authorized to delete users!';
$language['CANT_DO_QUERY']='Can&rsquo;t do SQL query - ';
$language['CANT_EDIT_TORR']='You&rsquo;re not authorised to edit torrent!';
$language['CANT_FIND_TORRENT']='Can&rsquo;t find torrent file!';
$language['CANT_READ_LANGUAGE']='Can&rsquo;t read the language file!';
$language['CANT_SAVE_CONFIG']='Can&rsquo;t save the settings into config.php';
$language['CANT_SAVE_LANGUAGE']='Can&rsquo;t save the language file';
$language['CANT_WRITE_CONFIG']='Warning: couldn&rsquo;t write config.php!';
$language['CATCHUP']='Mark All as Read';
$language['CATEGORY']='Cat.';
$language['CATEGORY_FULL']='Category';
$language['CENTER']='center';
$language['CHANGE_PID']='Change PID';
$language['CHARACTERS']='characters';
$language['CHOOSE']='Choose';
$language['CHOOSE_ONE']='choose one';
$language['CLICK_HERE']='click here';
$language['CLOSE']='close';
$language['COMMENT']='Com.';
$language['COMMENT_1']='Comment';
$language['COMMENT_PREVIEW']='Comment&rsquo;s Preview';
$language['COMMENTS']='Comments';
$language['CONFIG_SAVED']='Congratulations, new configuration was saved';
$language['COUNTRY']='Country';
$language['CURRENT_DETAILS']='Current Details';
$language['DATABASE_ERROR']='Database error.';
$language['DATE']='Date';
$language['DB_ERROR_REQUEST']='Database error. Cannot complete request.';
$language['DB_SETTINGS']='Database&rsquo;s settings';
$language['DEAD_ONLY']='Dead only';
$language['DELETE']='Delete';
$language['DELETE_ALL_READED']='Delete all read';
$language['DELETE_CONFIRM']='Are you sure you want to delete/remove this?';
$language['DELETE_TORRENT']='Delete Torrent';
$language['DELFAILED']='Delete Failed';
$language['DESCRIPTION']='Description';
$language['DONT_NEED_CHANGE']='You don&rsquo;t need to change these settings!';
$language['DOWN']='Dl';
$language['DOWNLOAD']='Download';
$language['DOWNLOAD_TORRENT']='Download Torrent';
$language['DOWNLOADED']='Downloaded';
$language['EDIT']='Edit';
$language['EDIT_LANGUAGE']='Edit Language';
$language['EDIT_POST']='Edit Post';
$language['EDIT_TORRENT']='Edit Torrent';
$language['EMAIL']='Email';
$language['EMAIL_SENT']='An email as been sent to the indicated email address<br />click on the included link to confirm your account.';
$language['EMAIL_VERIFY']='email account update at '.$SITENAME;
$language['EMAIL_VERIFY_BLOCK']='Verification email sent';
$language['EMAIL_VERIFY_MSG']='Hello,'."\n\n".'This email has been sent because you have requested a change to the email address currently held on your record, please click the link below to complete the change.'."\n\n".'Best regards from the staff.';
$language['EMAIL_VERIFY_SENT1']='<br /><center>A verification email has been sent to:<br /><br /><strong><font color="red">';
$language['EMAIL_VERIFY_SENT2']='</font></strong><br /><br />You will need to click on the link contained within the email in order<br />to update your email address. The email should arrive within 10 minutes<br />(usually instantly) although some email providers may mark it as SPAM<br />so be sure to check your SPAM folder if you can&rsquo;t find it.<br /><br />';
$language['ERR_500']='HTTP/1.0 500 Unauthorized access!';
$language['ERR_AVATAR_EXT']='Sorry only gif,jpg,bmp or png allowed';
$language['ERR_BAD_LAST_POST']='';
$language['ERR_BAD_NEWS_ID']='Bad news ID!';
$language['ERR_BODY_EMPTY']='Body cannot be empty!';
$language['ERR_CANT_CONNECT']='Can&rsquo;t connect to local MySQL server';
$language['ERR_CANT_OPEN_DB']='Can&rsquo;t open database';
$language['ERR_COMMENT_EMPTY']='Comment cannot be empty!';
$language['ERR_DB_ERR']='Database error. Please contact an administrator about this.';
$language['ERR_DELETE_POST']='Delete post. Sanity check: You are about to delete a post. Click';
$language['ERR_DELETE_TOPIC']='Delete topic. Sanity check: You are about to delete a topic. Click';
$language['ERR_EMAIL_ALREADY_EXISTS']='This Email is already in our database!';
$language['ERR_EMAIL_NOT_FOUND_1']='The email address';
$language['ERR_EMAIL_NOT_FOUND_2']='was not found in the database.';
$language['ERR_ENTER_NEW_TITLE']='You must enter a new title!';
$language['ERR_FORUM_NOT_FOUND']='Forum not found';
$language['ERR_FORUM_UNKW_ACT']='Forum Error: Unknown action';
$language['ERR_GUEST_EXISTS']='"Guest" is a restricted username. You cant register as "Guest"';
$language['ERR_IMAGE_CODE']='The security code does not match';
$language['ERR_INS_TITLE_NEWS']='You must insert both title AND news';
$language['ERR_INV_NUM_FIELD']='Invalid numerical field(s) from client';
$language['ERR_INVALID_CLIENT_EVENT']='Invalid event= from client.';
$language['ERR_INVALID_INFO_BT_CLIENT']='Invalid information received from BitTorrent client';
$language['ERR_INVALID_IP_NUMB']='Invalid IP address. Must be standard dotted decimal (hostnames not allowed)';
$language['ERR_LEVEL']='Sorry, your level ';
$language['ERR_LEVEL_CANT_POST']='You are not permitted to post in this forum.';
$language['ERR_LEVEL_CANT_VIEW']='You are not permitted to view this topic.';
$language['ERR_MISSING_DATA']='Missing data!';
$language['ERR_MUST_BE_LOGGED_SHOUT']='You must be logged in to shout...';
$language['ERR_NO_BODY']='No body text';
$language['ERR_NO_NEWS_ID']='New&rsquo;s ID not found!';
$language['ERR_NO_POST_WITH_ID']='No post with ID ';
$language['ERR_NO_SPACE']='Your username cannot contain a space, please replace with an underscore eg:<br /><br />';
$language['ERR_NO_TOPIC_ID']='No Topic ID returned';
$language['ERR_NO_TOPIC_POST_ID']='No topic associated with post ID';
$language['ERR_NOT_AUTH']='You&rsquo;re not authorized!';
$language['ERR_NOT_FOUND']='Not Found...';
$language['ERR_NOT_PERMITED']='Not Permited';
$language['ERR_PASS_LENGTH_1']='Your password must be a minimum of';
$language['ERR_PASS_LENGTH_2']='characters in length.';
$language["ERR_PASS_TOO_WEAK_1"]="Your password is too weak.<br />For security reasons it must contain at least";
$language["ERR_PASS_TOO_WEAK_1A"]="The password is too weak.<br />For security reasons it must contain at least";
$language["ERR_PASS_TOO_WEAK_2"]="lower case letter";
$language["ERR_PASS_TOO_WEAK_2A"]="lower case letters";
$language["ERR_PASS_TOO_WEAK_3"]="upper case letter";
$language["ERR_PASS_TOO_WEAK_3A"]="upper case letters";
$language["ERR_PASS_TOO_WEAK_4"]="number";
$language["ERR_PASS_TOO_WEAK_4A"]="numbers";
$language["ERR_PASS_TOO_WEAK_5"]="symbol";
$language["ERR_PASS_TOO_WEAK_5A"]="symbols";
$language["ERR_PASS_TOO_WEAK_6"]="Here is a strong password you may want to use";
$language['ERR_PASSWORD_INCORRECT']='Password Incorrect';
$language['ERR_PERM_DENIED']='Permission denied';
$language['ERR_PID_NOT_FOUND']='Please redownload the torrent. PID system is active and pid was not found in the torrent';
$language['ERR_RETR_DATA']='Error retreaving data!';
$language['ERR_SEND_EMAIL']='Unable to send mail. Please contact an administrator about this error.';
$language['ERR_SERVER_LOAD']='The server load is very high at the moment. Retrying, please wait...';
$language['ERR_SPECIAL_CHAR']='<font color="black">Your username can not contain special characters like:<br /><br /><font color="red"><strong>* &#63; &#60; &#62; &#64; &#36; &#38; &#37; etc.</strong></font></font><br />';
$language['ERR_SQL_ERR']='SQL Error';
$language['ERR_SUBJECT']='You must enter a subject.';
$language['ERR_TOPIC_ID_NA']='Topic ID is N/A';
$language['ERR_TOPIC_LOCKED']='Topic is Locked';
$language['ERR_TORRENT_IN_BROWSER']='This file is for BitTorrent clients.';
$language['ERR_UPDATE_USER']='Unable to update user data. Please contact an administrator about this error.';
$language['ERR_USER_ALREADY_EXISTS']='There&rsquo;s already an user with this nick!';
$language['ERR_USER_NOT_FOUND']='Sorry, User not Found';
$language['ERR_USER_NOT_USER']='You&rsquo;re not autorized to access another user&rsquo;s panel!';
$language['ERR_USERNAME_INCORRECT']='Username Incorrect';
$language['ERROR']='Error';
$language['ERROR_ID']='Error ID';
$language['FACOLTATIVE']='optional';
$language['FILE']='File';
$language['FILE_CONTENTS']='File Contents';
$language['FILE_NAME']='File Name';
$language['FIND_USER']='Find user';
$language['FINISHED']='Finished';
$language['FORUM']='Forum';
$language['FORUM_ERROR']='Forum Error';
$language['FORUM_INFO']='Forum Info';
$language['FORUM_MIN_CREATE']='Min Class Create';
$language['FORUM_MIN_READ']='Min Class Read';
$language['FORUM_SEARCH']='Forums Search';
$language['FORUM_N_TOPICS']='N. Topics';
$language['FORUM_N_POSTS']='N. Posts';
$language['FRM_DELETE']='Delete';
$language['FRM_LOGIN']='Login';
$language['FRM_PREVIEW']='Preview';
$language['FRM_REFRESH']='Refresh';
$language['FRM_RESET']='Reset';
$language['FRM_SEND']='Send';
$language['FRM_CONFIRM']='Confirm';
$language['FRM_CANCEL']='Cancel';
$language['FRM_CLEAN']='Clean';
$language['GLOBAL_SERVER_LOAD']='Global Server Load (All websites on current server)';
$language['GO']='Go';
$language['GROUP']='Group';
$language['GUEST']='Guest';
$language['GUESTS']='Guests';
$language['HERE']='here';
$language['HISTORY']='History';
$language['HOME']='Home';
$language['IF_YOU_ARE_SURE']='if you are sure.';
$language['IM_SURE']='I&rsquo;m Sure';
$language['IN']='in';
$language['INF_CHANGED']='Informations changed!';
$language['INFINITE']='Inf.';
$language['INFO_HASH']='Info Hash';
$language['INS_NEW_PWD']='Insert NEW password!';
$language['INS_OLD_PWD']='Insert OLD password!';
$language['INSERT_DATA']='Insert all the necessary data for the upload.';
$language['INSERT_NEW_FORUM']='Insert new forum';
$language['INVALID_ID']='It&rsquo;s not a valid ID. Sorry!';
$language['INVALID_INFO_HASH']='Invalid info hash value.';
$language['INVALID_PID']='Invalid PID';
$language['INVALID_TORRENT']='Tracker error: invalid torrent';
$language['KEYWORDS']='Keywords';
$language['LAST_EXTERNAL']='Last External Torrents Update was done on ';
$language['LAST_NEWS']='Latest News';
$language['LAST_POST_BY']='Last post by';
$language['LAST_SANITY']='Last Sanity Check was done on ';
$language['LAST_TORRENTS']='Latest Torrents';
$language['LAST_UPDATE']='Last Update';
$language['LASTPOST']='Last post';
$language['LEECHERS']='leechers';
$language['LEFT']='left';
$language['LOGIN']='Login';
$language['LOGOUT']='Logout';
$language['MAILBOX']='Mailbox';
$language['MANAGE_NEWS']='Manage News';
$language['MEMBER']='User';
$language['MEMBERS']='Users';
$language['MEMBERS_LIST']='User List';
$language['MINIMUM_100_DOWN']='(with minimum 100 MB downloaded)';
$language['MINIMUM_5_LEECH']='with minimum 5 leechers, not included dead torrents';
$language['MINIMUM_5_SEED']='with minimum 5 seeders';
$language['MKTOR_INVALID_HASH']='makeTorrent: Received an invalid hash';
$language['MNU_ADMINCP']='Admin Panel';
$language['MNU_FORUM']='Forum';
$language['MNU_INDEX']='Index';
$language['MNU_MEMBERS']='Members';
$language['MNU_NEWS']='News';
$language['MNU_STATS']='Extra Stats';
$language['MNU_TORRENT']='Torrents';
$language['MNU_UCP_CHANGEPWD']='Change Password';
$language['MNU_UCP_HOME']='User&rsquo;s CP Home';
$language['MNU_UCP_IN']='Your PM inbox';
$language['MNU_UCP_INFO']='Change Profile';
$language['MNU_UCP_NEWPM']='New PM';
$language['MNU_UCP_OUT']='Your PM outbox';
$language['MNU_UCP_PM']='Your PM box';
$language['MNU_UPLOAD']='Upload';
$language['MORE_SMILES']='More Emoticons';
$language['MORE_THAN']='More than ';
$language['MORE_THAN_2']='items found, displaying first';
$language['NA']='N/A';
$language['NAME']='Name';
$language['NEED_COOKIES']='Note: You need cookies enabled to log in.';
$language['NEW_COMMENT']='Insert your comment...';
$language['NEW_COMMENT_T']='New Comment';
$language['NEWS']='the news';
$language['NEWS_DESCRIPTION']='News:';
$language['NEWS_INSERT']='Insert your news';
$language['NEWS_PANEL']='News Panel';
$language['NEWS_TITLE']='Title:';
$language['NEXT']='Next';
$language['NO']='No';
$language['NO_BANNED_IPS']='There are no banned IPs';
$language['NO_COMMENTS']='No comments...';
$language['NO_FORUMS']='No Forums found!';
$language['NO_MAIL']='you have no new mail.';
$language['NO_MESSAGES']='No PM found...';
$language['NO_NEWS']='no news';
$language['NO_PEERS']='No peers';
$language['NO_RECORDS']='Sorry, list is empty...';
$language['NO_TOPIC']='No topics found';
$language['NO_TORR_UP_USER']='No torrents uploaded by this user';
$language['NO_TORRENTS']='No torrents here...';
$language['NO_USERS_FOUND']='No users found!';
$language['NOBODY_ONLINE']='Nobody online';
$language['NONE']='None';
$language['NOT_ADMIN_CP_ACCESS']='You&rsquo;re not authorized to access the admin panel!';
$language['NOT_ALLOW_DOWN']='is not allowed to download from';
$language['NOT_AUTH_DOWNLOAD']='You&rsquo;re not authorized to download. Sorry...';
$language['NOT_AUTH_VIEW_NEWS']='You&rsquo;re not autorized to view the news!';
$language['NOT_AUTHORIZED']='You&rsquo;re not authorized to view the';
$language['NOT_AUTHORIZED_UPLOAD']='You&rsquo;re not authorized to upload!';
$language['NOT_AVAILABLE']='N/A';
$language['NOT_MAIL_IN_URL']='This is not the email address that was in this url';
$language['NOT_POSS_RESET_PID']='It&rsquo;s not possibile to reset your PID! <br />Contact an admin...';
$language['NOW_LOGIN']='Now you will be prompted for login';
$language['NUMBER_SHORT']='#';
$language['OLD_PWD']='Old Password';
$language['ONLY_REG_COMMENT']='Only registered users can insert comments!';
$language['OPT_DB_RES']='Optimizing database result';
$language['OPTION']='Option';
$language['PASS_RESET_CONF']='password reset confirmation';
$language['PEER_CLIENT']='Client';
$language['PEER_COUNTRY']='Country';
$language['PEER_ID']='Peer ID';
$language['PEER_LIST']='Peers List';
$language['PEER_PORT']='Port';
$language['PEER_PROGRESS']='Progress';
$language['PEER_STATUS']='Status';
$language['PEERS']='peers';
$language['PEERS_DETAILS']='Click here to view peers details';
$language['PICTURE']='Picture';
$language['PID']='PID';
$language['PLEASE_WAIT']='Please Wait...';
$language['PM']='PM';
$language['POSITION']='Position';
$language['POST_REPLY']='Post Reply';
$language['POSTED_BY']='Posted by';
$language['POSTED_DATE']='Posted on';
$language['POSTS']='Posts';
$language['POSTS_PER_DAY']='%s posts per day';
$language['POSTS_PER_PAGE']='Posts per page';
$language['PREVIOUS']='Prev.';
$language['PRIVATE_MSG']='Private Message';
$language['PWD_CHANGED']='Password changed!';
$language['QUESTION']='Question';
$language['QUICK_JUMP']='Quick Jump';
$language['QUOTE']='Quote';
$language['RANK']='Rank';
$language['RATIO']='Ratio';
$language['REACHED_MAX_USERS']='Maximum number of users reached';
$language['READED']='Read';
$language['RECEIVER']='Receiver';
$language['RECOVER_DESC']='Use the form below to have your password reset and your account details mailed back to you.<br />(You will have to reply to a confirmation email.)';
$language['RECOVER_PWD']='Recover password';
$language['RECOVER_TITLE']='Recover lost username or password';
$language['REDIRECT']='if your browser doesn&rsquo;t have javascript enabled, click';
$language['REDIRECT2']='If your browser doesn&rsquo;t have javascript enabled, click <a href="%s">here</a>.';
$language['REDOWNLOAD_TORR_FROM']='Redownload torrent from';
$language['REGISTERED']='Registered';
$language['REGISTERED_EMAIL']='Registered email';
$language['REMOVE']='Remove';
$language['REPLIES']='Replies';
$language['REPLY']='Reply';
$language['RESULT']='Result';
$language['RETRY']='Retry';
$language['RETURN_TORRENTS']='Back to the torrent listing';
$language['REVERIFY_CONGRATS1']='<center><br />Congratulations, your email has been verified and successfully changed<br /><br /><strong>From: <font color="red">';
$language['REVERIFY_CONGRATS2']='</strong></font><br /><strong>To: <font color="red">';
$language['REVERIFY_CONGRATS3']='</strong></font><br /><br />';
$language['REVERIFY_FAILURE']='<center><br /><strong><font color="red"><u>Sorry but this url is not valid</u></strong></font><br /><br />A new random number is generated each time you attempt to change your email so<br />if you&rsquo;re seeing this message then you&rsquo;ve most likely tried to change your email<br />more than once and you are using an old url.<br /><br /><strong>Please wait until you&rsquo;re absolutely sure you haven&rsquo;t received the new<br />verification email before attempting to change your email again.</strong><br /><br />';
$language['REVERIFY_MSG']='If you attempt to change your email address you will be sent a verification link to the email address you wish to change it to.<br /><br /><font color="red"><strong>The email address on your record will not update until you verify the new address by clicking the link.</strong></font>';
$language['RIGHT']='right';
$language['SEARCH']='Search';
$language['SEEDERS']='seeds';
$language['SEEN']='Seen';
$language['SELECT']='Select...';
$language['SENDER']='Sender';
$language['SENT_ERROR']='Sent Error';
$language['SHORT_C']='C'; //Shortname for Completed
$language['SHORT_L']='L'; //Shortname for Leechers
$language['SHORT_S']='S'; //Shortname for Seeders
$language['SHOUTBOX']='ShoutBox';
$language['SIZE']='Size';
$language['SORRY']='Sorry';
$language['SORTID']='Sortid';
$language['SPEED']='Speed';
$language['STICKY']='Sticky';
$language['SUB_CATEGORY']='Sub-Category';
$language['SUBJECT']='Subject';
$language['SUBJECT_MAX_CHAR']='Subject is limited to ';
$language['SUC_POST_SUC_EDIT']='Post was edited successfully.';
$language['SUC_SEND_EMAIL']='A confirmation email has been mailed to';
$language['SUC_SEND_EMAIL_2']='Please allow a few minutes for the mail to arrive.';
$language['SUCCESS']='Success';
$language['SUMADD_BUG']='Tracker bug calling summaryAdd';
$language['TABLE_NAME']='Table Name';
$language['TIMEZONE']='Timezone';
$language['TITLE']='Title';
$language['TOP']='top';
$language['TOP_10_ACTIVE']='10 Torrents Most active';
$language['TOP_10_BEST_SEED']='10 Torrents Best Seeders';
$language['TOP_10_BSPEED']='10 Torrents Best Speed';
$language['TOP_10_DOWNLOAD']='Top 10 Downloaders';
$language['TOP_10_SHARE']='Top 10 Best Sharers';
$language['TOP_10_UPLOAD']='Top 10 Uploaders';
$language['TOP_10_WORST']='Top 10 Worst Sharers';
$language['TOP_10_WORST_SEED']='10 Torrents Worst Seeders';
$language['TOP_10_WSPEED']='10 Torrents Worst Speed';
$language['TOP_TORRENTS']='Most Popular Torrents';
$language['TOPIC']='Topic';
$language['TOPICS']='Topics';
$language['TOPICS_PER_PAGE']='Topics per page';
$language['TORR_PEER_DETAILS']='Torrent peers details';
$language['TORRENT']='Torrent';
$language['TORRENT_ANONYMOUS']='Send as anonymous';
$language['TORRENT_CHECK']='Allow the tracker to retrieve and use information from the torrent file.';
$language['TORRENT_DETAIL']='Torrent&rsquo;s details';
$language['TORRENT_FILE']='Torrent File';
$language['TORRENT_SEARCH']='Search Torrents';
$language['TORRENT_STATUS']='Status';
$language['TORRENT_UPDATE']='Updating, please wait...';
$language['TORRENTS']='torrents';
$language['TORRENTS_PER_PAGE']='Torrents per page';
$language['TRACK_DB_ERR']='Tracker/database error. The details are in the error log.';
$language['TRACKER_INFO']=$users.' users, tracking '.$torrents.' torrents ('.$seeds.' seeds, '.$leechers.' leechers, '.$percent.'%)';
$language['TRACKER_LOAD']='Tracker Load';
$language['TRACKER_SETTINGS']='Tracker&rsquo;s Settings';
$language['TRACKER_STATS']='Tracker Stats';
$language['TRACKING']='tracking';
$language['TRAFFIC']='Traffic';
$language['UCP_NOTE_1']='Here you can control your inbox, write PM to other users,';
$language['UCP_NOTE_2']='Control and modify your settings, etc...';
$language['UNAUTH_IP']='Unauthorized IP address.';
$language['UNKNOWN']='unknown';
$language['UPDATE']='Update';
$language['UPFAILED']='Upload Failed';
$language['UPLOAD_IMAGE']='Upload Image';
$language['UPLOAD_LANGUAGE_FILE']='Upload Language File';
$language['UPLOADED']='Uploaded';
$language['UPLOADER']='Uploader';
$language['UPLOADS']='Uploads';
$language['URL']='URL';
$language['USER']='User';
$language['USER_CP']='My Panel';
$language['USER_CP_1']='User Control Panel';
$language['USER_DETAILS']='User Details';
$language['USER_EMAIL']='Valid email';
$language['USER_ID']='User ID';
$language['USER_JOINED']='Joined on';
$language['USER_LASTACCESS']='Last access';
$language['USER_LEVEL']='Rank';
$language['USER_LOCAL_TIME']='User&rsquo;s Local Time';
$language['USER_NAME']='User';
$language['USER_PASS_RECOVER']='Password/user recovery';
$language['USER_PWD']='Password';
$language['USERS_SEARCH']='Users Search';
$language['VIEW_DETAILS']='View details';
$language['VIEW_TOPIC']='View Topic';
$language['VIEW_UNREAD']='View Unread';
$language['VIEWS']='Views';
$language['VISITOR']='Visitor';
$language['VISITORS']='Visitors';
$language['WAIT_ADMIN_VALID']='You should wait for the administrator validation...';
$language['WARNING']='Warning!';
$language['WELCOME']='Welcome';
$language['WELCOME_ADMINCP']='Welcome to Admin Control Panel';
$language['WELCOME_BACK']='Welcome back';
$language['WELCOME_UCP']='Welcome to your User Control Panel';
$language['WORD_AND']='and';
$language['WORD_NEW']='New';
$language['WROTE']='wrote';
$language['WT']='WT';
$language['X_TIMES']='times';
$language['YES']='Yes';
$language['LAST_IP']='Last IP';
$language['FIRST_UNREAD']='Goto the first unread post';
$language['MODULE_UNACTIVE']='The module required is not active!';
$language['MODULE_NOT_PRESENT']='The module required do not exists!';
$language['MODULE_LOAD_ERROR']='The module required seems to be wrong!';
$language['RESET_PID'] = 'Reset PID';

# Language definitions added by TreetopClimber.
$language['EXTRA']='extra';
$language['DROPDOWN']='dropdown';
$language['TORRENT_MENU']='Torrent Menu';
$language['USER_MENU']='User Menu';
$language['ADMIN_ACCESS']='Admin Access';
$language['STAFF_ACCESS']='Staff';
$language['UPLOAD_LINK']='Torrent Upload';
# End

$language["USERNAME"]="Username";
$language["SUBMIT"]="Submit";

$language["QUAR_PM_SUBJ"]="Suspected Hacking Attempt";
$language["QUAR_PM_MSG_1"]="tried to upload a file containing php code. This file was quarantined";
$language["QUAR_PM_MSG_2"]="It is however possible this is a false negative so please check this file with a hex editor or something before banning this user."."\n\n"."This attempt was made via";
$language["QUAR_OUTPUT"]="Your attempt to upload a file containing php code has been thwarted and you have been reported to the site Owner!";
$language["QUAR_ERR"]="Quarantine Error";
$language["QUAR_DIR_PROBLEM_1"]="Quarantine Directory";
$language["QUAR_DIR_PROBLEM_2"]="does not exist, please set a valid Quarantine Directory in [b]Admin Panel-->Security Suite Settings[/b]";
$language["QUAR_DIR_PROBLEM_3"]="is not writable, please CHMOD to 0777";
$language["QUAR_UNABLE"]="Unable to quarantine file due to unforseen error, please check your other PM's for details of how to resolve this issue";
$language["QUAR_NOT_SET"]="Directory not set";
$language["QUAR_TMP_FILE_MISS"]="Can't find the temp file!";

$language["SECSUI_ACC_PWD_1"]="Your password needs:";
$language["SECSUI_ACC_PWD_1A"]="The password needs:";
$language["SECSUI_ACC_PWD_2"]="To be at least";
$language["SECSUI_ACC_PWD_3"]="character in length";
$language["SECSUI_ACC_PWD_3A"]="characters in length";
$language["SECSUI_ACC_PWD_4"]="To have at least";
$language["SECSUI_ACC_PWD_5"]="lower case letter";
$language["SECSUI_ACC_PWD_5A"]="lower case letters";
$language["SECSUI_ACC_PWD_6"]="upper case letter";
$language["SECSUI_ACC_PWD_6A"]="upper case letters";
$language["SECSUI_ACC_PWD_7"]="symbol";
$language["SECSUI_ACC_PWD_7A"]="symbols";
$language["SECSUI_ACC_PWD_8"]="number";
$language["SECSUI_ACC_PWD_8A"]="numbers";

?>