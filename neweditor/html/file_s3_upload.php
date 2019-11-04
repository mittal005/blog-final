<?php
  // Set date timezone.
  date_default_timezone_set('Europe/Bucharest');

  // important variables that will be used throughout this example
  $bucket = 'froala-dev';
  $region = 's3';
  $keyStart = 'editor/';
  $acl = 'public-read';

  // these can be found on your Account page, under Security Credentials > Access Keys
  $accessKeyId = $_SERVER['AWS_ACCESS_KEY'];
  $secret = $_SERVER['AWS_SECRET_ACCESS_KEY'];

  $policy = base64_encode(json_encode(array(
      // ISO 8601 - date('c'); generates uncompatible date, so better do it manually
      'expiration' => date('Y-m-d\TH:i:s.000\Z', strtotime('+1 day')),
      'conditions' => array(
          array('bucket' => $bucket),
          array('acl' => $acl),
          array('success_action_status' => '201'),
          array('x-requested-with' => 'xhr'),
          array('starts-with', '$key', $keyStart),
          array('starts-with', '$Content-Type', '') // accept all files
      )
  )));

  $signature = base64_encode(hash_hmac('sha1', $policy, $secret, true));
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/froala_editor.css">
  <link rel="stylesheet" href="../css/froala_style.css">
  <link rel="stylesheet" href="../css/plugins/code_view.css">
  <link rel="stylesheet" href="../css/plugins/colors.css">
  <link rel="stylesheet" href="../css/plugins/emoticons.css">
  <link rel="stylesheet" href="../css/plugins/image_manager.css">
  <link rel="stylesheet" href="../css/plugins/image.css">
  <link rel="stylesheet" href="../css/plugins/line_breaker.css">
  <link rel="stylesheet" href="../css/plugins/table.css">
  <link rel="stylesheet" href="../css/plugins/char_counter.css">
  <link rel="stylesheet" href="../css/plugins/video.css">
  <link rel="stylesheet" href="../css/plugins/file.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

  <style>
      body {
          text-align: center;
      }

      div#editor {
          width: 81%;
          margin: auto;
          text-align: left;
      }
  </style>
</head>

<body>
  <div id="editor">
      <div id='edit' style="margin-top: 30px;">
        
  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="../js/froala_editor.min.js"></script>
  <script type="text/javascript" src="../js/plugins/align.min.js"></script>
  <script type="text/javascript" src="../js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="../js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="../js/plugins/colors.min.js"></script>
  <script type="text/javascript" src="../js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="../js/plugins/emoticons.min.js"></script>
  <script type="text/javascript" src="../js/plugins/font_size.min.js"></script>
  <script type="text/javascript" src="../js/plugins/font_family.min.js"></script>
  <script type="text/javascript" src="../js/plugins/image.min.js"></script>
  <script type="text/javascript" src="../js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="../js/plugins/line_breaker.min.js"></script>
  <script type="text/javascript" src="../js/plugins/link.min.js"></script>
  <script type="text/javascript" src="../js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="../js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="../js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="../js/plugins/video.min.js"></script>
  <script type="text/javascript" src="../js/plugins/table.min.js"></script>
  <script type="text/javascript" src="../js/plugins/url.min.js"></script>
  <script type="text/javascript" src="../js/plugins/entities.min.js"></script>
  <script type="text/javascript" src="../js/plugins/char_counter.min.js"></script>
  <script type="text/javascript" src="../js/plugins/inline_style.min.js"></script>
  <script type="text/javascript" src="../js/plugins/save.min.js"></script>
  <script type="text/javascript" src="../js/plugins/file.min.js"></script>
  <script type="text/javascript" src="../js/languages/ro.js"></script>

  <script>
    (function(){
      new FroalaEditor("#edit",{
        enter: FroalaEditor.ENTER_P,
        fileUploadToS3: {
          bucket: '<?php echo $bucket; ?>',
          region: '<?php echo $region; ?>',
          keyStart: '<?php echo $keyStart; ?>',
          params: {
            acl: '<?php echo $acl; ?>',
            AWSAccessKeyId: '<?php echo $accessKeyId; ?>',
            policy: '<?php echo $policy; ?>',
            signature: '<?php echo $signature; ?>',
          }
        },
        events: {
          'file.uploadedToS3': function(link, key, response) {
            console.log ('S3 Link:', link)
            console.log ('S3 Key:', key)
          }
        }
      })
    })()
  </script>
</body>
</html>