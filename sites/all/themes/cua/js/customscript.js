document.onreadystatechange = function() {
    if (document.readyState === 'complete') {
        chk_browser();
    }
};

function old_browser(){
  var Browser = {
    chk : navigator.userAgent.toLowerCase()
  }
  Browser = {
    ie9 : Browser.chk.indexOf('trident/5.0') != -1,
    ie : Browser.chk.indexOf('msie') != -1,
    opera : !!window.opera,
  }
  if( Browser.ie9 ) {
    document.getElementById('browsernotify_overlay').style.display = '';
  }
  else if( Browser.ie ) {
    document.getElementById('browsernotify_overlay').style.display = '';
  }
  else {
    document.getElementById('browsernotify_overlay').style.display = '';
  }
}

function chk_browser( ){
  var Browser = {
    chk : navigator.userAgent.toLowerCase()
  }
  Browser = {
    ie9 : Browser.chk.indexOf('trident/5.0') != -1,
    ie10 : Browser.chk.indexOf('trident/6.0') != -1,
    ie11 : Browser.chk.indexOf('trident/7.0"') != -1,
    ie : Browser.chk.indexOf('msie') != -1,
    opera : !!window.opera,
    safari : Browser.chk.indexOf('safari') != -1,
    safari3 : Browser.chk.indexOf('applewebkir/5') != -1,
    mac : Browser.chk.indexOf('mac') != -1,
    chrome : Browser.chk.indexOf('chrome') != -1,
    firefox : Browser.chk.indexOf('firefox') != -1
  }
  if ( Browser.ie10 ) {
    alert('ie10');
  }
  else if(Browser.ie9) {
    alert( 'ie9' );
  }
  else if(Browser.ie11) {
    alert( 'ie11' );
  }
  else if(Browser.chrome) {
    alert( 'chrome' );
  }
  else if(Browser.firefox) {
    alert( 'fierfox' );
  }
  else if(Browser.ie) {
    alert( 'ie<9' );
  }
  else {
    alert( 'Unknown' );
  }
}
