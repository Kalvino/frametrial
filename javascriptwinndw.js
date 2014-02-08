
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
</head>
<body>

<script type="text/javascript">
var windowObjectReference = null; // global variable
var PreviousUrl; /* global variable which will store the
                    url currently in the secondary window */
 
function openRequestedSinglePopup(strUrl)
{
  if(windowObjectReference == null || windowObjectReference.closed)
  {
   windowObjectReference = window.open(strUrl, "SingleSecondaryWindowName",
         "resizable=yes,scrollbars=yes,status=yes");
  }
  else if(PreviousUrl != strUrl)
  {
   windowObjectReference = window.open(strUrl, "SingleSecondaryWindowName",
      "resizable=yes,scrollbars=yes,status=yes");
    /* if the resource to load is different,
       then we load it in the already opened secondary window and then
       we bring such window back on top/in front of its parent window. */
   windowObjectReference.focus();
  }
  else
  {
    windowObjectReference.focus();
  };
  PreviousUrl = strUrl;
  /* explanation: we store the current url in order to compare url
     in the event of another call of this function. */
}
</script>
 
(...)
 
<p><a href="http://www.spreadfirefox.com/"
target="SingleSecondaryWindowName"
onclick="openRequestedSinglePopup(this.href); return false;"
title="This link will create a new window or will re-use
an already opened one">Promote Firefox
adoption</a></p>
<p><a href="http://www.mozilla.org/support/firefox/faq"
target="SingleSecondaryWindowName"
onclick="openRequestedSinglePopup(this.href); return false;"
title="This link will create a new window or will re-use
an already opened one">Firefox FAQ</a></p>

</body>
</html>

