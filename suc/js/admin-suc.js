var newArticlePage = document.getElementById("new-article");
var uploadContentPage = document.getElementById("upload-content");
var newArticleLink = document.getElementById("new-article-link");
var uploadContentLink = document.getElementById("upload-content-link");
var generateArticle = document.getElementById("generate-article");
var generateCard = document.getElementById("generate-card");
var articleCodeContainer = document.getElementById("article-code");
var cardCodeContainer = document.getElementById("card-code")
var articleContents = document.getElementById("article-contents");
var heroContents = document.getElementById("hero-contents");
var heroImageURL = document.getElementById("hero-url");
var articleCategory = document.getElementById("hero-subtitle");
var articleTitle = document.getElementById("hero-title");
var cardPreview = document.getElementById("card-preview");

newArticleLink.onclick = function() {
  newArticlePage.style.display = "block";
  uploadContentPage.style.display = "none";
}

uploadContentLink.onclick = function() {
  newArticlePage.style.display = "none";
  uploadContentPage.style.display = "block";
}

heroImageURL.onkeyup = function() {
  var heroImageURL = document.getElementById("hero-url").value;
  heroContents.style.backgroundImage = "url(" + heroImageURL + "),  linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4))";
  heroContents.style.backgroundBlendMode = "overlay";
  heroContents.style.backgroundSize = "cover";
  heroContents.style.backgroundPosition = "center center";
  heroContents.style.width = "100%";
  heroContents.style.height = "400px";
  heroContents.style.paddingBottom = "50px";
}

generateArticle.onclick = function () {
  var articleCode = "<?php include 'php/header.php'; include 'php/menu.php';?>" + heroContents.outerHTML + "<div class='content-container col6l'>" + "<div class='article-content'>" + articleContents.innerHTML + "</div>" + "</div>" + " <?php include 'php/footer.php' ?> </body> </html>";
  articleCodeContainer.innerHTML = articleCode;
  articleCodeContainer.innerHTML = articleCodeContainer.innerHTML.replace(/ contenteditable="true"/g, "");

}

generateCard.onclick = function() {
  cardPreview.innerHTML = "";
  var heroImageURL = document.getElementById("hero-url").value;
  var cardContainer = document.createElement('div');
  cardContainer.className = "card-align col6x col6m col12s col12x"
  var cardText = document.createElement('div');
  cardText.className = "card-text"
  cardContainer.appendChild(cardText);
  var cardCategory = document.createElement('h5');
  cardCategory.innerHTML = articleCategory.innerHTML;
  var cardTitle = document.createElement('h2');
  cardTitle.innerHTML = articleTitle.innerHTML;
  var cardDescription = document.createElement('p');
  var articleFirstParagraph = document.getElementById("article-contents").getElementsByTagName("p")[0].innerHTML;
  cardDescription.innerHTML = articleFirstParagraph;
  cardText.appendChild(cardCategory);
  cardText.appendChild(cardTitle);
  cardText.appendChild(cardDescription);

  var cardImg = document.createElement('div');
  cardImg.className = "card";
  cardContainer.appendChild(cardImg);
  var cardImgContent = document.createElement('img');
  cardImgContent.src = heroImageURL;
  cardImg.appendChild(cardImgContent);
  console.log(cardContainer);
  cardCodeContainer.innerHTML = cardContainer.outerHTML;
  cardPreview.innerHTML += cardContainer.outerHTML;
}
