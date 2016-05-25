function checkEverything(){
  if(uname_good && pass_good && email_good){
    $('#sign_up').action('forum.php');
    $('#sign_up').submit();
  } else {
    $('#error').html('Read the other error_messages and fix it.')
  }
}
