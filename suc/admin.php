<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/admin-style.css">
  <link rel="stylesheet" href="css/medium-editor.css">
  <link rel="stylesheet" href="css/dropzone.css">
  <link rel="stylesheet" href="css/flat.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <title>Admin - SUC MAG</title>
</head>
<body>
  <nav id="admin-nav">
      <ul id="admin-menu">
        <a href="#"><li id="new-article-link">Article + Card Generator</li></a>
        <a href="#"><li id="upload-content-link">Upload Content</li></a>
      </ul>
    </nav>

<section id="new-article">
  <h2>New Article</h2>
  <section id="hero-contents" class="sub-hero">
    <div class="container">

        <div class="article-subtitle-control">
          <h4 id="hero-subtitle" contenteditable="true">Category</h4>
        </div>
              <div class="article-title-control">
    <h1 id="hero-title" contenteditable="true">Article Title</h1>
  </div>
  </div>
  </section>
  <div class="content-container">
    <form>
    <input id="hero-url" type="text" placeholder="URL to desired hero image..."></input>
  </form>
<div id="article-contents" class="editable" style="width:50%"></div>
</div>

<div id="output-area">
  <div id="article-generation">
<button id="generate-article" class="admin-button">Generate Article</button>
<textarea id="article-code"></textarea>
</div>

<div id="card-generation">
<button id="generate-card" class="admin-button">Generate Card</button>
<textarea id="card-code"></textarea>
</div>
</div>

<div id="card-preview">
</div>
</section>

<section id="upload-content">
  <h2>Upload Content</h2>
  
<?php
$ds          = DIRECTORY_SEPARATOR;  //1
 
$storeFolder = 'assets/images';   //2
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
     
    $targetFile =  $targetPath. $_FILES['file']['name'];//5
 
    move_uploaded_file($tempFile,$targetFile);
     
}
?>     

  <form action="admin.php"
      method="post"
      class="dropzone"
      id="my-awesome-dropzone" enctype="multipart/form-data"></form>
</section>

<section id="archive-editor">
  <h2>Archive Editor</h2>
</section>

    <script type="text/javascript" src="js/admin-suc.js"></script>
    <script src="js/medium-editor.js"></script>
    <script src="js/dropzone.js"></script>
    <script>var editor = new MediumEditor('.editable', {
      toolbar: {
        buttons: ['bold', 'italic', 'underline', 'strikethrough', 'quote', 'anchor', 'h2', 'image'],
      },
      buttonLabels: 'fontawesome',
      anchor: {
        targetCheckbox: true
      }
    });</script>


</body>
</html>
